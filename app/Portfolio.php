<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    protected $fillable = [
        'document_type', 'document_number', 'social', 'city', 'address', 'nationality',
        'agro_category', 'agro_subcategory', 'industrial_category', 'industrial_subcategory',
        'eco_category', 'eco_subcategory', 'others_category', 'others_subcategory'
    ];
}
