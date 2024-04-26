<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;

    use SoftDeletes;


        public static $rules = [
            'name' => 'required',
            'start' => 'date'

        ];
        public static $messages =[
            'name.required' => 'Es necesario ingresar un nomber para el proyecto',
            'start.date' => 'La fecha no tiene un formato adecuado'
        ];

         protected $fillable = [
        'name',
        'descripcion',
        'start',
    ];

    public function categories()
    {
        return $this->hasMany('App\Models\Categoria');
    }

    public function levels()
    {
        return $this->hasMany('App\Models\Level');
    }
}
