<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;
use Response;
use App\Models\User;
use App\Models\Comment;
use Auth;
use Session;

class ProductController extends Controller
{
    protected $prd_detail;
    protected $prd_img;
    protected $cmt;

    public function __construct(Product $prd_detail, Gallery $prd_img, Comment $cmt)
    {
        $this->prd_detail = $prd_detail;
        $this->prd_img = $prd_img;
        $this->cmt = $cmt;
    }

    public function detail($id)
    {
        $listPrd = Product::all();
        foreach ($listPrd as $prd1) {
            $prd1->rated = Comment::where('product_id', '=', $prd1->id)->where('rated', '>', '0')
                ->avg('rated');
            $prd1->save();
        }
        $prd_detail = $this->prd_detail->where('id', '=', "$id")->first();
        $prd_img = $this->prd_img->where('product_id', '=', "$id")->get();
        $prd_similar = $this->prd_detail
            ->whereBetween('price', [$prd_detail->price - 10, $prd_detail->price + 10])
            ->take(5)->get();
        $prd_id = $id;
        $listCmt = $this->cmt->where('product_id', $prd_detail->id)->get();
        $listUser = User::all();

        return view('sites.product', compact('prd_id', 'prd_detail', 'prd_img', 'prd_similar', 'listCmt', 'listUser'));
    }

    public function getdata_product()
    {
        $product = Product::all();
        return Response::json($product);
    }

    public function getdata_food()
    {
        $food = Product::where('category', '=', 'Food')->paginate(30);
        return Response::json($food);
    }

    public function getdata_drink()
    {
        $drink = Product::where('category', '=', 'Drink')->paginate(30);
        return Response::json($drink);
    }

    public function all_food()
    {
        $food = Product::all()->where('category', '=', 'Food');

        return Response::json($food);
    }

    public function all_drink()
    {
        $drink = Product::all()->where('category', '=', 'Drink');

        return Response::json($drink);
    }

    // Food
    public function delete_food(Request $req)
    {
        return Product::destroy($req->id);
    }

    public function update_food(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();

        return Response::json($product);
    }

    public function create_food(Request $request)
    {
        return Product::create(
            ['name' => $request->input(['name']),
                'price' => $request->input(['price']),
                'description' => $request->input(['description']),
                'category' => $request->input(['category']),
            ]);
    }

    public function postcomment(Request $request)
    {
        $product = $request->product_1;
        $comment = $request->content_1;
        $rate = $request->cmt_star;
        $comment_1 = new Comment();
        $comment_1->product_id = $product;
        $comment_1->content = $comment;
        $comment_1->user_id = Auth::User()->id;
        $comment_1->rated = $rate;
        $this->checkcmt($comment_1);
        $comment_1->save();
        $prd_detail = $this->prd_detail->where('id', '=', "$product")->first();
        $listCmt = $this->cmt->where('product_id', $product)->get();
        $listUser = User::all();

        return view('sites.comment', compact('listCmt', 'listUser', 'prd_detail'));

    }

    public function checkcmt(Comment $cmnt)
    {
        $listCmt1 = Comment::all();
//        $zero = 0.834;
        foreach ($listCmt1 as $listcmt) {
            if (levenshtein($listcmt->content, $cmnt->content) == 0) {
                Comment::destroy($listcmt->id);
            }
        }

    }

    public function updaterate(Request $request)
    {
        $product = $request->prd1;
        $rate = $request->rate1;

        $prd_detail = $this->prd_detail->where('id', '=', "$product")->first();
        $prd_detail->rated = Comment::where('product_id', '=', $product)->where('rated', '>', '0')
            ->avg('rated');
        $ratetb = $prd_detail->rated + $rate;
        $prd_detail->rated = $ratetb;
        $prd_detail->save();
        return view('sites.rate', compact('prd_detail'));

    }

//    public function getcomment(Request $request)
//
//        $prd1 = $request->prd;
//        $prd_detail = $this->prd_detail->where('id', '=', "$prd1")->first();
//        $listCmt = $this->cmt->where('product_id',$prd1)->get();
//        $listUser = User::all();
//
//        return view('sites.comment', compact( 'listCmt', 'listUser','prd_detail'));
//    }

}
