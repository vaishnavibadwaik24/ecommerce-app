<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'about_us',
        'terms_condn',
        'privacy_policy',
        'return_policy',
        'jobs',
    ];
}
