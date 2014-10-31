<?php

class ResourceForm extends BaseForm
{
    public function isValidForAdd()
    {
        return $this->isValid(array(
            "name"      => "required",
            "pattern"   => "required",
            "target"    => "required"
        ));
    }

    public function isValidForEdit()
    {
        return $this->isValid(array(
            "id" => "exists:resource,id",
            "name"      => "required",
            "pattern"   => "required",
            "target"    => "required"
        ));
    }

    public function isValidForDelete()
    {
        return $this->isValid(array(
            "id" => "exists:resource,id"
        ));
    }
}