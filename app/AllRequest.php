<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllRequest extends Model
{
    protected $fillable = [
        'BookID', 'PhoneNumber', 'status'
   ];
}
