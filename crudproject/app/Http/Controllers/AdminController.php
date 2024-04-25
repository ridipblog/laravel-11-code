<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    // ------------- admin login ---------------------
    public function login(){
        return view('admin_login');
    }
    // -------------- admin login post ------------------
    public function loginPost(Request $request){
        if($request->ajax()){
            $message=[];
            $error_message=[
                'required'=>':attribute is required field !',
            ];
            $validator=Validator::make(
                $request->all(),
                [
                    'email'=>'required|email',
                    'password'=>'required'
                ],
                $error_message
            );
            if($validator->fails()){
                array_push($message,$validator->errors()->all());
            }else{
                $credentials=[
                    'email'=>$request->email,
                    'password'=>$request->password
                ];
                if(Auth::guard('admin')->attempt($credentials)){
                    $admin_data=AdminModel::where('email',$request->email)
                    ->first();
                    Auth::guard('admin')->login($admin_data);
                    $message=Auth::guard('admin')->user();
                }else{
                    array_push($message,'Credentials not found !');
                }
            }
            return response()->json(['message'=>$message]);
        }
    }

    // -------------------- admin dash board --------------------
    public function dash(Request $request){
        return view('admin_dash');
    }
    // ----------------- admin logout ------------------
    public function logout(Request $request){
        if(Auth::guard('admin')->user()){
            Auth::guard('admin')->logout();
        }
        return redirect('/admin-login');
    }
    // ------------------ update bank name ---------------------
    public function bankName(Request $request){
        DB::table('admin_login')
        ->where('id',1)
        ->update([
            'bank_name'=>$request->bank_name
        ]);
    }
    // ------------------ update account no -----------------
    public function accountNo(Request $request){
        DB::table('admin_login')
        ->where('id',2)
        ->update([
            'account_no'=>$request->account_name
        ]);
    }
    // ---------------- admin feedback -----------------
    public function adminFeedBack(){
        return view('admin_feedback');
    }
}
