<?php

class Doctor extends Eloquent
{
    protected $table = 'doctor';

    protected $guarded = array(
        "id", "created_at", "updated_at", "deleted_at"
    );

    public function object()
    {
        return $this->belongsTo('Object');
    }

    public function speciality()
    {
        return $this->belongsTo('Speciality');
    }
}