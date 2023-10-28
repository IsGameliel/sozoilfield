<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verify extends Model
{
    use HasFactory;

    protected $fillable = [
        'cert_title',
        'user_name',
        'cert_date',
        'cert_provider',
        'tracking_code',
    ];
}
