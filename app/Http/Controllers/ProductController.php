<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{

public function listProduct(){
    $listProduct = DB::table('product')
    ->join('category', 'category.id', '=', 'product.category_id')
    ->select('product.id', 'product.name', 'category.name as category_name', 'product.price', 'product.view')
    ->orderBy('product.view', 'asc')
    ->get();
    return view('product/listProduct')->with([
        'listProduct' => $listProduct
    ]);
}
public function addProduct(){
    $category = DB::table('category')->select('id','name')->get();
    return view('product/addProduct')->with([
        'category' => $category
    ]);
}
public function addPostProduct(request $req){
    $data= [
        'name' =>$req->nameProduct,
        'category_id' =>$req->categoryname,
        'price' =>$req->priceProduct,
        'view' =>$req->viewProduct,
        'create_at' => Carbon::now(),
        'update_at' => Carbon::now(),
    ];
          DB::table('product')->insert($data);
          return redirect()->route('product.listProduct');  
    }
    public function deleteProduct($idProduct){
        DB::table('product')->where('id', $idProduct)->delete();
        return redirect()->route('product.listProduct');
    }
    public function updateProduct($idProduct){
        $product = DB::table('product')->where('id', $idProduct)->first();
        $category = DB::table('category')->select('id','name')->get();
        return view('product/updateProduct')->with([
            'product' => $product,
            'category' => $category
        ]);
    }
    public function updatePostProduct(request $req){
        $data= [
            'name' =>$req->nameProduct,
            'category_id' =>$req->categoryname,
            'price' =>$req->priceProduct,
            'view' =>$req->viewProduct,
            'create_at' => Carbon::now(),
            'update_at' => Carbon::now(),
        ];
              DB::table('product')->where('id', $req->idProduct)->update($data);
              return redirect()->route('product.listProduct');  
        }
        public function searchProduct(Request $request)
{
    $searchTerm = $request->input('search_term');

    $listProduct = DB::table('product')
        ->join('category', 'category.id', '=', 'product.category_id')
        ->select('product.id', 'product.name', 'category.name as category_name', 'product.price', 'product.view')
        ->where('product.name', 'like', '%' . $searchTerm . '%')
        ->orderBy('product.view', 'asc')
        ->get();

    return view('product.listProduct', [
        'listProduct' => $listProduct
    ]);
}
}