<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands';

    protected $fillable = [
        'id',
        'title',
        'alias',

    ];


    public function products() //связь один ко многим
    {
        return $this->hasMany(Product::class);
    }


}
