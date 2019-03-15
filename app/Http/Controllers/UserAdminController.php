<?php

namespace App\Http\Controllers;

use App\Libs\Helpers;
use App\Models\Admin;
use App\Models\Campaign;
use App\Models\Transaction;
use App\Rules\Utf8StringRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Admin::getAllData();
        $title = 'Danh sách tài khoản';
        return view('admin.page.user-manager.index', compact('data', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get()->pluck('name', 'name')->toArray();
        $title = 'Tạo tài khoản';
        return view('admin.page.user-manager.create', compact('roles', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => ['required', new Utf8StringRule(), 'min:2', 'max:191', Rule::unique('admins')],
            'phone' => ['required', new Utf8StringRule(), 'min:10', 'max:12'],
            'name' => ['required', new Utf8StringRule(), 'min:2', 'max:191'],
            'email' => ['required', 'min:2', 'max:191', Rule::unique('admins')],
            'password' => 'required|nullable|confirmed',
        ]);
        if ($validator->fails()) {
            $error = Helpers::getValidationError($validator);
            return back()->with(['error' => $error])->withInput(Input::all());
        }

        $model = new Admin();
        $model->username = $request->username;
        $model->phone = $request->phone;
        $model->name = $request->name;
        $model->email = $request->email;
        $model->password = bcrypt($request->password);
        $model->status = isset($request->status) ? Admin::$ACTIVE_STATUS : Admin::$UNACTIVE_STATUS;
        $flag = $model->save();

        $role = $request->role;
        if (!empty($request->role)) {
            $model->assignRole($role);
        }
        if ($flag) {
            return redirect()->route('user-admin.create')->with('success', 'Tạo tài khoản thành công');
        }
        return redirect()->route('user-admin.create')->with('error', 'Tạo tài khoản không thành công')->withInput(Input::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(\Auth::user()->getRoleNames()[0] == 'admin' || \Auth::user()->id == $id){
            $model = Admin::findOrFail($id);
            $roles = Role::get()->pluck('name', 'name')->toArray();
            $title = 'Sửa tài khoản';
            return view('admin.page.user-manager.edit', compact('model', 'roles', 'title'));
        }else{
            return redirect()->back()->with('warning','Đừng đùa với ninja rùa');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Admin::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => ['required', new Utf8StringRule(), 'min:2', 'max:191'],
            'phone' => ['required', 'min:10', 'max:12'],
            'password' => 'nullable|confirmed',
        ]);
        if ($validator->fails()) {
            $error = Helpers::getValidationError($validator);
            return back()->with(['error' => $error])->withInput(Input::all());
        }

        $model->name = $request->name;
        $model->phone = $request->phone;
        $model->password = isset($request->password) ? bcrypt($request->password) : $model->password;
        $model->status = isset($request->status) ? 1 : 0;
        $flag = $model->save();

        if (!empty($request->role)) {
            $model->syncRoles($request->role);
        } else {
            $model->syncRoles([]);
        }

        if ($flag) {
            return redirect()->route('user-admin.edit', $id)->with('success', 'Cập nhật tài khoản thành công');
        }
        return redirect()->route('user-admin.edit', $id)->with('error', 'Cập nhật tài khoản không thành công')->withInput(Input::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return back()->with('error', 'Chức năng này tạm thời bị khóa');

        $model = Admin::findOrFail($id);
        if($model->getRoleNames() == 'admin'){
            return back()->with('error', 'Không thể xóa tài khoản admin');
        }else{
            $flag = $model->delete();
            if ($flag) {
                return back()->with('success', 'Xoá tài khoản thành công');
            }else{
                return back()->with('error', 'Xoá tài khoản không thành công');
            }
        }
    }
}
