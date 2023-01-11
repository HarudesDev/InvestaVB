<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    //
    protected $fillable = [
        'document_type', 'document_number', 'social', 'role', 'city', 'city_2', 'address', 'address_2', 'logo_url',
        'agro_category', 'agro_subcategory', 'industrial_category', 'industrial_subcategory',
        'eco_category', 'eco_subcategory', 'others_category', 'others_subcategory'
    ];
}
