<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Applications extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'event_id',
        'fio',
		'сompany_name',
		'position',
        'phone',
        'email',
		'message',
        'date'
    ];

	
	public function events(): BelongsTo
    {
        return $this->belongsTo(Events::class);
    }
}
