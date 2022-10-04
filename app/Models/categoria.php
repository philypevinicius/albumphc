<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';
    protected $fillable = ['id','descricao'];
    public function presentes (){
        return $this-> hasMany(App\presente::class,'categoria_id','id');
    }
}
