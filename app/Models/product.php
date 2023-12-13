<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class product extends Model
{
    use HasFactory;

    protected $table="products";

    protected $fillable=[
        'Scientific_Name',
        'Commercial_Name',
        'Manufacturer',
        'Price',
        'Qty',
       'Expiration_date',
       'category_id',
    ];

    public function category():BelongsTo
    {
        return $this->belongsTo('categories');
    }
}
