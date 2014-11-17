<?php

class ObjectForm extends BaseForm
{
    public function isValidForAdd()
    {
        return $this->isValid(array(
            "title" => "required"
        ));
    }

    public function isValidForEdit()
    {
        return $this->isValid(array(
            "id"    => "exists:object,id",
            "title" => "required"
        ));
    }

    public function isValidForDelete()
    {
        return $this->isValid(array(
            "id" => "exists:object,id"
        ));
    }
}