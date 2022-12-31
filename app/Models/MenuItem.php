<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{

    public $table = 'menu_items';
protected $primaryKey = 'id';
public $timestamps = false;

protected $fillable = [
    'name','url','parent_id', 'created_at', 'updated_at',
];


protected $hidden = [

];


public function parent()
{
    return $this->belongsTo('App\Models\MenuItem','parent_id','id');
}


}
