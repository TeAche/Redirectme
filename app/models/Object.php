<?php

class Object extends Eloquent {

    protected $table = 'object';

    protected $guarded = array(
        "id", "created_at", "updated_at", "deleted_at"
    );

    public function doctors()
    {
        return $this->hasMany('Doctor');
    }
}