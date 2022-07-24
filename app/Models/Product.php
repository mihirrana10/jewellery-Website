<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_style_number',
        'metal_type',
        'metal_weight',
        'metal_unit',
        'metal_purity',
        'metal_color',
        'metal_price',

        'diamond_type',
        'diamond_color',
        'diamond_count',
        'diamond_price',
        'diamond_setting_type',
        'diamond_grade',
        'diamond_gross_weight',
        'diomond_weight_unit',

        'product_height',
        'product_width',
        'product_description',
        'product_discount',
        'product_size',
        'product_length',

        'category_id ',
    ];
}
