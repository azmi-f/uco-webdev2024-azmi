<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\HasMany;
>>>>>>> sesi-3

class Category extends Model
{
    protected $fillable = [
        'name',
        'order_no'
    ];
<<<<<<< HEAD
=======

    // Mendapatkan data category yang telah diurutkan berdasarkan order_no dan name
    public static function getOrdered()
    {
        return self::orderBy('order_no')->orderBy('name')->get();
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
>>>>>>> sesi-3
}
