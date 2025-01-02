<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\relation\BelongsTo;
=======
use Illuminate\Database\Eloquent\Relations\BelongsTo;
>>>>>>> sesi-3

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
}
