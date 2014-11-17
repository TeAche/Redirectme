<?php

class DoctorController extends Controller {

    public function indexAction ()
    {
        return View::make('doctor/index');
    }

    public function doctorAction ()
    {
        $doctors = Doctor::all();
        return View::make('doctor/doctor', array('doctors' => $doctors));
    }

    public function specialityAction ()
    {
        $specialities = Speciality::all();
        return View::make('doctor/speciality', array('specialities' => $specialities));
    }

    public function objectAction ()
    {
        $objects = Object::all();
        return View::make('doctor/object', array('objects' => $objects));
    }

    public function addDoctorAction ()
    {
        $form = new DoctorForm();
        $specialities = Speciality::lists('title', 'id');
        $objects = Object::lists('title', 'id');
        if($form->isPosted())
        {
            if($form->isValidForAdd())
            {
                Doctor::create(array(
                    "firstname"     => Input::get("firstname"),
                    "lastname"      => Input::get("lastname"),
                    "middlename"    => Input::get("middlename"),
                    "object_id"     => Input::get("object_id"),
                    "speciality"    => Input::get("speciality_id")
                ));

                return Redirect::route("doctor/doctor");
            }

            return Redirect::route("doctor/doctor/add")->withInput(array(
                "firstname"     => Input::get("firstname"),
                "lastname"      => Input::get("lastname"),
                "middlename"    => Input::get("middlename"),
                "object_id"     => Input::get("object_id"),
                "speciality_id" => Input::get("speciality_id"),
                "errors"        => $form->getErrors()
            ));
        }

        return View::make("doctor/add_doctor", array(
            "form"          => $form,
            "specialities"  => $specialities,
            "objects"       => $objects
        ));
    }

    public function addSpecialityAction ()
    {
        $form = new SpecialityForm();

        if($form->isPosted())
        {
            if($form->isValidForAdd())
            {
                Speciality::create(array(
                    "title"     => Input::get("title")
                ));

                return Redirect::route("doctor/speciality");
            }

            return Redirect::route("doctor/speciality/add")->withInput(array(
                "title"     => Input::get("title"),
                "errors"        => $form->getErrors()
            ));
        }

        return View::make("doctor/add_speciality", array(
            "form" => $form
        ));
    }

    public function addObjectAction ()
    {
        $form = new ObjectForm();

        if($form->isPosted())
        {
            if($form->isValidForAdd())
            {
                Object::create(array(
                    "title"     => Input::get("title")
                ));

                return Redirect::route("doctor/object");
            }

            return Redirect::route("doctor/object/add")->withInput(array(
                "title"     => Input::get("title"),
                "errors"    => $form->getErrors()
            ));
        }

        return View::make("doctor/add_object", array(
            "form" => $form
        ));
    }

    public function editDoctorAction ()
    {
        $form = new DoctorForm();

        $doctor = Doctor::findOrFail(Input::get("id"));
        $specialities = Speciality::lists("title", "id");
        $objects = Object::lists("title", "id");
        $url = URL::full();

        if($form->isPosted())
        {
            if($form->isValidForEdit())
            {
                $doctor->firstname      = Input::get("firstname");
                $doctor->lastname       = Input::get("lastname");
                $doctor->middlename     = Input::get("middlename");
                $doctor->object_id      = Input::get("object_id");
                $doctor->speciality_id  = Input::get("speciality_id");
                $doctor->save();

                return Redirect::route("doctor/doctor");
            }

            return Redirect::to($url)->withInput(array(
                "firstname"     => Input::get("firstname"),
                "lastname"      => Input::get("lastname"),
                "middlename"    => Input::get("middlename"),
                "object_id"     => Input::get("object_id"),
                "speciality_id" => Input::get("speciality_id"),
                "errors"        => $form->getErrors(),
                "url"           => $url
            ));
        }

        return View::make("doctor/edit_doctor", array(
            "form"      => $form,
            "doctor"  => $doctor,
            "specialities" => $specialities,
            "objects" => $objects
        ));
    }

    public function editSpecialityAction ()
    {
        $form = new SpecialityForm();

        $speciality = Speciality::findOrFail(Input::get("id"));
        $url = URL::full();

        if($form->isPosted())
        {
            if($form->isValidForEdit())
            {
                $speciality->title = Input::get("title");
                $speciality->save();

                return Redirect::route("doctor/speciality");
            }

            return Redirect::to($url)->withInput(array(
                "title"     => Input::get("title"),
                "errors"        => $form->getErrors(),
                "url"           => $url
            ));
        }

        return View::make("doctor/edit_speciality", array(
            "form"      => $form,
            "speciality"  => $speciality
        ));
    }

    public function editObjectAction ()
    {
        $form = new ObjectForm();

        $object = Object::findOrFail(Input::get("id"));
        $url = URL::full();

        if($form->isPosted())
        {
            if($form->isValidForEdit())
            {
                $object->title = Input::get("title");
                $object->save();

                return Redirect::route("doctor/object");
            }

            return Redirect::to($url)->withInput(array(
                "title"     => Input::get("title"),
                "errors"        => $form->getErrors(),
                "url"           => $url
            ));
        }

        return View::make("doctor/edit_object", array(
            "form"      => $form,
            "object"  => $object
        ));
    }

    public function deleteDoctorAction ()
    {
        $form = new DoctorForm();

        if($form->isValidForDelete())
        {
            $doctor = Doctor::findOrFail(Input::get("id"));
            $doctor->delete();
        }

        return Redirect::route("doctor/doctor");
    }

    public function deleteSpecialityAction ()
    {
        $form = new SpecialityForm();

        if($form->isValidForDelete())
        {
            $speciality = Speciality::findOrFail(Input::get("id"));
            $speciality->delete();
        }

        return Redirect::route("doctor/speciality");
    }

    public function deleteObjectAction ()
    {
        $form = new ObjectForm();

        if($form->isValidForDelete())
        {
            $object = Object::findOrFail(Input::get("id"));
            $object->delete();
        }

        return Redirect::route("doctor/object");
    }
}