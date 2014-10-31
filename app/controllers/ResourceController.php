<?php

class ResourceController extends Controller
{
    public function indexAction()
    {
        $resources = Resource::all();
        return View::make("resource/index", array("resources" => $resources));

    }

    public function editAction()
    {
        $form = new GroupForm();

        $resource = Resource::findOrFail(Input::get("id"));
        $url = URL::full();

        if($form->isPosted())
        {
            if($form->isValidForEdit())
            {
                $resource->name = Input::get("name");
                $resource->save();

                return Redirect::route("resource/index");
            }

            return Redirect::to($url)->withInput(array(
                "name"      => Input::get("name"),
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