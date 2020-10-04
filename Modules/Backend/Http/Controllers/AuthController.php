<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Kris\LaravelFormBuilder\FormBuilder;
use Modules\Backend\Entities\User;
use Modules\Backend\Http\Forms\LoginForm;
use Modules\Backend\Http\Requests\LoginRequest;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
   public function login(FormBuilder $formBuilder)
   {
       $model = new User();
       $model->email = 'yundt.una@hotmail.com';
       $model->password = 'nam631996';
        $form = $formBuilder->create(LoginForm::class, [
            'id' => 'pjax-form-login',
            'data-pjax' => '',
            'method'    => 'POST',
            'url'       => route('backend.auth.checkLogin'),
            'model'     => $model
        ]);


        return view('backend::auth.login', compact('form'));
   }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('backend.auth.login');
    }

    public function checkLogin(LoginRequest $request)
    {
        $remember = $request->get('remember', 0);
        $input = $request->only('email', 'password');

        if(Auth::attempt($input, $remember)){
            //return redirect()->intended('defaultpage');
            return redirect()->route('backend.dashboard.index');
        }

        $validator = Validator::make([], []);

        $validator->errors()->add('email', trans('backend::auth.login_field'));

        return redirect()->route('backend.auth.login')->withErrors($validator);
    }

    public function forgotPassword()
    {
        dd('forgot password');
    }

}
