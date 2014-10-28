<?php

class FrontController extends Controller
{
    public function IndexAction()
    {
        if (Auth::check())
        {
            return View::make('user/profile');
        } else {
            return Redirect::route('user/login');
        }
    }
}