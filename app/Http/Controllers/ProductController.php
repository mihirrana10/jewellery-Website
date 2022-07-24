<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Products;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Input;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.pages.productView');
    
    }

 
    public function create()
    {
        return view('admin.pages.addProduct');
    }

   
    public function store(Request $request)
    {
        $product = $request->validate([
            'product_name' => 'required|max:255',
            'product_style_number' => 'required|max:255',

            'metal_type' => 'required|max:255',
            'metal_weight' => 'required',
            'metal_unit' => 'required|max:255',
            'metal_purity' => 'required|max:255',
            'metal_color' => 'required|max:255',
            'metal_price' => 'required',

            'diamond_type' => 'max:255',
            'diamond_color' => 'max:255',
            'diamond_count' => 'max:255',
            'diamond_price' => 'max:255',
            'diamond_setting_type' => 'max:255',
            'diamond_grade' => 'max:255',
            'diamond_gross_weight' => 'max:255',
            'diomond_weight_unit' => 'max:255',

            'product_height' => 'required',
            'product_width' => 'required',
            'product_description' => 'required|max:255',
            'product_discount' => 'required',
            'product_size' => 'required',
            'product_length' => 'required',
       
            'category_id' => 'required',

            
          

        ]);

        // $product_images=$request->validate([
        //     'product_image_url ' => 'required',

        // ]);

        // return $product;
          
        // Product::create($product);
        Product::create($product);
        return 'ye bro';


    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
