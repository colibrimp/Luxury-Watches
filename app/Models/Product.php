<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'id',
        'title',
        'price',
        'in_stock',
        'description',
        'catalog_id',
        'brand_id'
    ];

    public function images()  //связь один ко многим
    {
        return $this->hasMany(ProductImage::class);
    }

    public function catalog()  //обратная связь один ко многим
    {

        return $this->belongsTo(Catalog::class);
    }

    public function brand()  //обратная связь один ко многим
    {
//        return $this->hasMany(Brand::class);
        return $this->belongsTo(Brand::class);
    }

    //    Здесь мы получаем подсчет количества товара
    public function getPrice()
    {
        if (!is_null($this->pivot)) {
            return $this->pivot->count * $this->price;
        }
        return $this->price;
    }
}
