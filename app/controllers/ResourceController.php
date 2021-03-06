<?php

class ResourceController extends Controller
{
    public function indexAction()
    {
        $head = array("id", "name", "pattern", "target", "secure");
        $resources = Resource::all();
        foreach ($resources as $resource)
        {
            $rows[] = $resource['id'];
            $rows[] = $resource['name'];
            $rows[] = $resource['pattern'];
            $rows[] = $resource['target'];
            $rows[] = $resource['secure'];
        }
        return View::make("resource/index", array(
            "resources" => $resources,
            "head" => $head,
            "rows" => $rows
        ));
    }

    public function addAction()
    {
        $form = new ResourceForm();

        if($form->isPosted())
        {
            if($form->isValidForAdd())
            {
                Resource::create(array(
                    "name"      => Input::get("name"),
                    "pattern"   => Input::get("pattern"),
                    "target"    => Input::get("target"),
                    "secure"    => (Input::get("secure"))?true:false,
                ));

                return Redirect::route("resource/index");
            }

            return Redirect::route("resource/add")->withInput(array(
                "name"      => Input::get("name"),
                "pattern"   => Input::get("pattern"),
                "target"    => Input::get("target"),
                "secure"    => (Input::get("secure"))?true:false,
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
                $resource->name     = Input::get("name");
                $resource->pattern  = Input::get("pattern");
                $resource->target   = Input::get("target");
                $resource->secure   = (Input::get("secure"))?true:false;
                $resource->save();

                return Redirect::route("resource/index");
            }

            return Redirect::to($url)->withInput(array(
                "name"      => Input::get("name"),
                "pattern"   => Input::get("pattern"),
                "target"    => Input::get("target"),
                "secure"    => (Input::get("secure"))?true:false,
                "errors"    => $form->getErrors(),
                "url"       => $url
            ));
        }

        return View::make("resource/edit", array(
            "form"      => $form,
            "resource"     => $resource
        ));
    }

    public function deleteAction()
    {
        $form = new ResourceForm();

        if($form->isValidForDelete())
        {
            $group = Resource::findOrFail(Input::get("id"));
            $group->delete();
        }

        return Redirect::route("resource/index");
    }
}