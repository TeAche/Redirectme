<?php

class DoctorForm extends BaseForm
{
    public function isValidForAdd()
    {
        return $this->isValid(array(
            "firstname" => "required",
            "lastname"  => "required"
        ));
    }

    public function isValidForEdit()
    {
        return $this->isValid(array(
            "id"        => "exists:resource,id",
            "firstname" => "required",
            "lastname"   => "required"
        ));
    }

    public function isValidForDelete()
    {
        return $this->isValid(array(
            "id" => "exists:doctor,id"
        ));
    }
}