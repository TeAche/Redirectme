<?php

class ResourceController extends Controller
{
    public function indexAction()
    {
        $resources = Resource::all();
        return View::make("resource/index", array("resources" => $resources));

    }

    public function addAction()
    {
        $form = new ResourceForm();

        if($form->isPosted())
        {
            if($form->isValidForAdd())
            {
                Resource::create(array(
                    "name" => Input::get("name"),
                    "pattern" => Input::get("pattern"),
                    "target" => Input::get("target")
                ));

                return Redirect::route("resource/index");
            }

            return Redirect::route("resource/add")->withInput(array(
                "name"      => Input::get("name"),
                "pattern"      => Input::get("pattern"),
                "target"      => Input::get("target"),
                "errors"    => $form->getErrors()
            ));
        }

        return View::make("resource/add", array(
            "form" => $form
        ));
    }

    public function editAction()
    {
        $form = new ResourceForm();

        $resource = Resource::findOrFail(Input::get("id"));
        $url = URL::full();

        if($form->isPosted())
        {
            if($form->isValidForEdit())
            {
                $resource->name = Input::get("name");
                $resource->pattern = Input::get("pattern");
                $resource->target = Input::get("target");
                $resource->save();

                return Redirect::route("resource/index");
            }

            return Redirect::to($url)->withInput(array(
                "name"      => Input::get("name"),
                "pattern"   => Input::get("pattern"),
                "target"    => Input::get("target"),
                "errors"    => $form->getErrors(),
                "url"       => $url
            ));
        }

        return View::make("resource/edit", array(
            "form"      => $form,
            "resource"     => $resource
        ));
    }
}