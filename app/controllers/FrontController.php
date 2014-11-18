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

    public function testAction()
    {
        $resources = Resource::take(10)->get();
        $rows = array();
        foreach ($resources as $resource)
        {
            $rows[] = $resource->id;
            $rows[] = $resource->name;
            $rows[] = $resource->pattern;
            $rows[] = $resource->target;
        }
        $head = array('id', 'name', 'pattern', 'target');
        return View::make('front/test', array('rows' => $rows, 'head' => $head));
    }
}