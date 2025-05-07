<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable =[
        'name',
        'description',
        'description_longue',
        'price',
        'promotion_price',
        'in_stock',
        'origin',
        'quantity',
        'category_id',
        'user_id'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function medias(): HasMany
    {
        return $this->HasMany(Media::class);
    }

}
