<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Events extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'body',
        'img',
        'location',
        'date'
    ];
	
	public function applications(): HasMany
    {
        return $this->HasMany(Applications::class);
    }
}
