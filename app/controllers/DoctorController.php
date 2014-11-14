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

    public function addDoctorAction ()
    {
        $form = new DoctorForm();

        if($form->isPosted())
        {
            if($form->isValidForAdd())
            {
                Doctor::create(array(
                    "firstname"     => Input::get("firstname"),
                    "lastname"      => Input::get("lastname"),
                    "middlename"    => Input::get("middlename")
                ));

                return Redirect::route("doctor/doctor");
            }

            return Redirect::route("doctor/doctor/add")->withInput(array(
                "firstname"     => Input::get("firstname"),
                "lastname"      => Input::get("lastname"),
                "middlename"    => Input::get("middlename"),
                "errors"        => $form->getErrors()
            ));
        }

        return View::make("doctor/add_doctor", array(
            "form" => $form
        ));
    }
}