<?php

class FrontController extends Controller
{
    public function IndexAction()
    {
        if (Auth::check())
        {
            return View::make('front.index');
        } else {
            return Redirect::route('user/login');
        }
    }
}