<?php

class GroupController extends Controller
{
    public function indexAction()
    {
        $head = array("id", "name");
        $groups = Group::all();
        foreach ($groups as $group)
        {
            $rows[] = $group['id'];
            $rows[] = $group['name'];
        }

        return View::make("group/index", array(
            "groups"    => $groups,
            "head"      => $head,
            "rows"      => $rows
        ));
    }

    public function addAction()
    {
        $form = new GroupForm();

        if($form->isPosted())
        {
            if($form->isValidForAdd())
            {
                Group::create(array(
                    "name" => Input::get("name")
                ));

                return Redirect::route("group/index");
            }

            return Redirect::route("group/add")->withInput(array(
                "name"      => Input::get("name"),
                "errors"    => $form->getErrors()
            ));
        }

        return View::make("group/add", array(
            "form" => $form
        ));
    }

    public function editAction()
    {
        $form = new GroupForm();

        $group = Group::findOrFail(Input::get("id"));
        $url = URL::full();

        if($form->isPosted())
        {
            if($form->isValidForEdit())
            {
                $group->name = Input::get("name");
                $group->save();

                $group->users()->sync(Input::get("user_id", []));
                $group->resources()->sync(Input::get("resource_id", []));

                return Redirect::route("group/index");
            }

            return Redirect::to($url)->withInput(array(
                "name"      => Input::get("name"),
                "errors"    => $form->getErrors(),
                "url"       => $url
            ));
        }

        return View::make("group/edit", array(
            "form"      => $form,
            "group"     => $group,
            "users"     => User::all(),
            "resources" => Resource::where("secure", true)->get()
        ));
    }

    public function deleteAction()
    {
        $form = new GroupForm();

        if($form->isValidForDelete())
        {
            $group = Group::findOrFail(Input::get("id"));
            $group->delete();
        }

        return Redirect::route("group/index");
    }
}