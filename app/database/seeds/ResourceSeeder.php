<?php

class ResourceSeeder extends DatabaseSeeder
{
    public function run()
    {
        $resources = array(
            array(
                "pattern"   => "/",
                "name"      => "front/index",
                "target"    => "FrontController@indexAction",
                "secure"    => false
            ),
            array(
                "pattern"   => "/login",
                "name"      => "user/login",
                "target"    => "UserController@loginAction",
                "secure"    => false
            ),
            array(
                "pattern"   => "/request",
                "name"      => "user/request",
                "target"    => "UserController@requestAction",
                "secure"    => false
            ),
            array(
                "pattern"   => "/reset",
                "name"      => "user/reset",
                "target"    => "UserController@resetAction",
                "secure"    => false
            ),
            array(
                "pattern"   => "/logout",
                "name"      => "user/logout",
                "target"    => "UserController@logoutAction",
                "secure"    => true
            ),
            array(
                "pattern"   => "/profile",
                "name"      => "user/profile",
                "target"    => "UserController@profileAction",
                "secure"    => true
            ),
            array(
                "pattern"   => "/group",
                "name"      => "group/index",
                "target"    => "GroupController@indexAction",
                "secure"    => true
            ),
            array(
                "pattern"   => "/group/add",
                "name"      => "group/add",
                "target"    => "GroupController@addAction",
                "secure"    => true
            ),
            array(
                "pattern"   => "/group/edit",
                "name"      => "group/edit",
                "target"    => "GroupController@editAction",
                "secure"    => true
            ),
            array(
                "pattern"   => "/group/delete",
                "name"      => "group/delete",
                "target"    => "GroupController@deleteAction",
                "secure"    => true
            ),
            array(
                "pattern"   => "/service",
                "name"      => "service/index",
                "target"    => "ServiceController@indexAction",
                "secure"    => true
            ),
            array(
                "pattern"   => "/resource",
                "name"      => "resource/index",
                "target"    => "ResourceController@indexAction",
                "secure"    => true
            ),
            array(
                "pattern"   => "/resource/add",
                "name"      => "resource/add",
                "target"    => "ResourceController@addAction",
                "secure"    => true
            ),
            array(
                "pattern"   => "/resource/edit",
                "name"      => "resource/edit",
                "target"    => "ResourceController@editAction",
                "secure"    => true
            ),
            array(
                "pattern"   => "/resource/delete",
                "name"      => "resource/delete",
                "target"    => "ResourceController@deleteAction",
                "secure"    => true
            ),
        );

        foreach ($resources as $resource)
        {
            Resource::create($resource);
        }
    }
}
