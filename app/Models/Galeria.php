<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'galeria';
    protected $fillable= ['image','user_id'];



    public function user(){

        return $this->belongsTo('App\Models\User'); 

    }
}
