<?php

class Speciality extends Eloquent {

    protected $table = 'speciality';

    protected $guarded = array(
        "id", "created_at", "updated_at", "deleted_at"
    );


}