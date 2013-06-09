<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fabian
 * Date: 09.06.13
 * Time: 11:06
 * To change this template use File | Settings | File Templates.
 */

class UserController extends BaseController
{

    public function showLoginForm()
    {
        return View::make('login');
    }

    public function doLogin()
    {
        $email = Input::get('email');
        $password = Input::get('password');

        if (Auth::attempt(array('email' => $email, 'password' => $password))) {
            return 'passt';
        } else {
            return 'NÖ';
        }
    }

    public function showRegisterForm()
    {
        return View::make('register');
    }

    public function doRegistration()
    {
        $validation = Validator::make(Input::all(), User::$rules);

        if ($validation->fails()) {
            return Redirect::to('register')
                ->withInput()
                ->withErrors($validation);
        }

        $user = new User();
        $user->email = Str::lower(Input::get('email'));
        $user->password = Hash::make(Input::get('password'));
        $user->firstname = mb_convert_case(Input::get('firstname'), MB_CASE_TITLE);
        $user->lastname = mb_convert_case(Input::get('lastname'), MB_CASE_TITLE);
        $user->phone = Input::get('phone');
        $user->studentid = Input::get('studentid');
        $user->save();


        Auth::loginUsingId($user->id);
        return Redirect::to('/');
    }

}