<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\relation\BelongsTo;
=======
use Illuminate\Database\Eloquent\Relations\BelongsTo;
<<<<<<< HEAD
>>>>>>> sesi-3
=======
use Illuminate\Database\Eloquent\Relations\HasMany;
>>>>>>> ALP

class Product extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======

>>>>>>> sesi-3
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category_id'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function cartItems(): HasMany
    {
        return $this->hasMany(CartItem::class);
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}