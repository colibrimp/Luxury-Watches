<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $table = 'product_images';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'img_file',
        'product_id',
        'created_at',
        'updated_at'

    ];

    //один ко многим обратное отношение
    public function products()
    {
        $this->belongsTo(Product::class);
    }
}
