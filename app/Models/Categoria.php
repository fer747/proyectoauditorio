<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['name','project_id'];
    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }
}
