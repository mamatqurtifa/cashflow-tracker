<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'categories_id',
        'date',
        'amount',
        'note',
        'image'
    ];

    public function categories(): BelongsTo
    {
        return $this->belongsTo(categories::class);
    }

}
