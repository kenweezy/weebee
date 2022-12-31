<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Workshop extends Model
{

public $table = 'workshops';
protected $primaryKey = 'id';
public $timestamps = false;

protected $fillable = [
    'start','end','event_id','name', 'created_at', 'updated_at',
];


protected $hidden = [

];

public function workshop_event()
{
    return $this->belongsTo('App\Models\Event','event_id','id');
}

}
