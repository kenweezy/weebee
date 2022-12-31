<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    

public $table = 'events';
protected $primaryKey = 'id';
public $timestamps = false;

protected $fillable = [
    'name', 'created_at', 'updated_at',
];


protected $hidden = [

];

}
