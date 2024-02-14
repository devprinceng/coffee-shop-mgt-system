<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function viewproduct($id)
    {
        $product = Product::findorfail($id);

        $related_products = Product::where('type', '=', $product->type)
            ->where('id', '!=', $product->id)->take('3')->get();


        return view('products.product')->with(['product' => $product, 'related_products' => $related_products]);
    }

}
