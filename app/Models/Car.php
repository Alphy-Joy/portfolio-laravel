<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $primaryKey = 'id';
    protected $fillable = ['name','founded','description'];
    //protected $hidden = ['created_at','updated_at'];
    public function carmodels(){
        return $this->hasMany(CarModel::class);
    }

    //define a has many through relationship
    public function engines()
    {
        return $this->hasManyThrough(
            Engine::class, //model we need to access
            CarModel::class, //intermediate model
            'car_id', //fk on car model table
            'model_id' // fk on engines table
        );
    }
}
