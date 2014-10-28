<?php

class ServiceController extends Controller
{
    public function indexAction()
    {
        return View::make("service/index");
    }
}