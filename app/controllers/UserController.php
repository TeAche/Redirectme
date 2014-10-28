<?php

use Illuminate\Support\MessageBag;

class UserController extends Controller
{
    public function loginAction()
    {
        $errors = new MessageBag();

        if ($old = Input::old("errors"))
        {
            $errors = $old;
        }

        $data = array(
            "errors" => $errors
        );

        if(Input::server("REQUEST_METHOD") == "POST")
        {
            $rules = array(
                "username"  => "required",
                "password"  => "required|alphaNum|min:6",
            );
            $validator = Validator::make(Input::all(), $rules);
            if($validator->passes())
            {
                $credentials = array(
                    "username"  => Input::get("username"),
                    "password"  => Input::get("password")
                );

                if (Auth::attempt($credentials))
                {
                    return Redirect::route("user/profile");
                }
            }
                $data["errors"] = new MessageBag([
                    "password" => [
                        "Username and/or password invalid."
                ] ]);
                $data["username"] = Input::get("username");

                return Redirect::route('user/login')->withInput($data);
        }
        return View::make("user/login", $data);
    }

    public function requestAction()
    {
        $data = array(
            "requested" => Input::old("requested")
        );

        if(Input::server("REQUEST_METHOD") == "POST")
        {
            $rules = array(
                "email" => "required|email"
            );

            $validator = Validator::make(Input::all(), array($rules));

            if($validator->passes())
            {
                $credentials = array(
                    "email" => Input::get("email")
                );

                Password::remind($credentials,
                    function ($message)
                    {
                        $message->subject("Password reminder");
                        $message->from("timur.husainov@gmail.com");
                    }
                );

                $data["requested"] = true;

                return Redirect::route("user/request")->withInput($data);
            }
        }

        return View::make("user/request", $data);
    }

    public function resetAction()
    {
        $token = "?token=" . Input::get("token");

        $errors = new MessageBag();

        if($old = Input::old("errors"))
        {
            $errors = $old;
        }

        $data = array(
            "token"     => $token,
            "errors"    => $errors
        );

        if(Input::server("REQUEST_METHOD") == "POST")
        {
            $rules = array(
                "email"                 => "required|email",
                "password"              => "required|alphaNum|min:6",
                "password_confirmation" => "same:password",
                "token"                 => "exists:token,token"
            );

            $validator = Validator::make(Input::all(), $rules);

            if($validator->passes())
            {
                $credentials = array(
                    "email"                 => Input::get("email"),
                    "password"              => Input::get("password"),
                    "password_confirmation" => Input::get("password_confirmation"),
                    "token"                 => Input::get("token")
                );

                Password::reset($credentials,
                    function($user, $password)
                    {
                        $user->password = Hash::make($password);
                        $user->save();

                        Auth::login($user);
                        return Redirect::route("user/profile");
                    }
                );
            }

            $data["email"] = Input::get("email");

            $data["errors"] = $validator->errors();

            return Redirect::to(URL::route("user/reset") . $token)->withInput($data);
        }

        return View::make("user/reset", $data);
    }

    public function profileAction()
    {
        return View::make("user/profile");

    }

    public function logoutAction()
    {
        Auth::logout();
        return Redirect::route("user/login");
    }
}