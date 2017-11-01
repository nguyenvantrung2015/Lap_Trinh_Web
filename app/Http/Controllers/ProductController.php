<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Response;
use App\Models\Gallery;

class ProductController extends Controller
{
    protected $prd_detail;
    protected $prd_img;

    public function __construct(Product $prd_detail, Gallery $prd_img)
    {
        $this->prd_detail = $prd_detail;
        $this->prd_img = $prd_img;
    }

    public function detail($id)
    {
        $prd_detail = $this->prd_detail->where('id', '=', "$id")->first();
        $prd_img = $this->prd_img->where('product_id', '=',"$id")->get();
        $prd_similar = $this->prd_detail
            ->whereBetween('price', [ $prd_detail->price - 10000, $prd_detail->price + 10000 ])
            ->take(4)->get();
        return view('sites.product', compact('prd_detail', 'prd_img', 'prd_similar'));
    }

    public function getdata_food(){
        $food = Product::where('category','=','Food')->paginate(8);
        return Response::json($food) ;
    }
    public function getdata_drink(){
        $drink = Product::where('category','=','Drink')->paginate(8);
        return Response::json($drink) ;
    }
}
