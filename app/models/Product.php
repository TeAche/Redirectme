<?php

class Product extends Eloquent
{
    protected $table="product";

    protected $guarded = array(
        "id", "created_at", "updated_at", "deleted_at"
    );
}