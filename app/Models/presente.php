<?php

namespace App\Models;
use App\categoria;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presente extends Model
{
    use HasFactory;

    protected $table = 'presentes';
    protected $fillable = ['mes', 'descricao', 'image', 'dia', 'categoria_id'];

    public function categorias () {
        return $this->hasMany(categoria::class,'categoria_id');
    }
}
