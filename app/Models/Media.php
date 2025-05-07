<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Media extends Model
{
    protected $fillable = [
        'url',
        'type',
        'is_principalk',
        'product_id'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
