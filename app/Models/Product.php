<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{

    protected $fillable = [
        'title',
        'categories_id',
        'description',
        'image',
        'price',
        'quantity',
        'discount_price',
        'availability',

        //'delted_at',
        
    ];

    use HasFactory;

    public function category() {
        return $this->belongsTo(Category::class, 'categories_id');
        // return $this->belongsTo(Category::class);
    }

}
