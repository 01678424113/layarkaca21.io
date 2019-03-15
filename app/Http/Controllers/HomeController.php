<?php

namespace App\Http\Controllers;

use App\Libs\Helpers;
use App\Models\Admin;
use App\Models\Campaign;
use App\Models\Customer;
use App\Models\Transaction;
use App\Models\UserCampaign;
use App\Rules\Utf8StringRule;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.page.index');
    }

    public function logout()
    {
        \Auth::logout();
        return redirect()->back();
    }

    public function register()
    {
        return view('auth.register');
    }

    public function doRegister(Request $request)
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
        try {
            $model = new Admin();
            $model->username = $request->username;
            $model->phone = $request->phone;
            $model->name = $request->name;
            $model->email = $request->email;
            $model->password = bcrypt($request->password);
            $model->status = Admin::$ACTIVE_STATUS;
            $flag = $model->save();
            $model->assignRole('user');

            if ($flag) {
                return redirect()->route('home')->with('success', 'Đăng ký tài khoản thành công');
            }
            return redirect()->route('register')->with('error', 'Đăng ký tài khoản không thành công')->withInput(Input::all());
        } catch (\Exception $e) {

        }
    }

}
