<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrepreneur extends Model
{
    //
    protected $fillable = [
        'document_type', 'document_number', 'social', 'role', 'country', 'city', 'address', 'email', 'phone_number', 'description', 'logo_url',
        'agro_category', 'agro_subcategory', 'industrial_category', 'industrial_subcategory',
        'eco_category', 'eco_subcategory', 'others_category', 'others_subcategory'
    ];
}
