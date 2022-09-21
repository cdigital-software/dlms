<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;
    protected $guarded = ['_token'];

    protected $fillable = [
        'name',
        'father_name',
        'cnic',
        'license_no',
        'license_type',
        'issue_date',
        'exp_date'
    ];
}
