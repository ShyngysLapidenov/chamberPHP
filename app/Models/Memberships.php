<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memberships extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
		'type',
        'company_name',
        'company_bin',
        'country_incorporation',
        'address',
		'city',
        'postcode',
		'country',
		'company_phone',
		'description',
		'employes_count',
		'name',
		'job_title',
		'phone',
		'email',
		'date'
    ];
}
