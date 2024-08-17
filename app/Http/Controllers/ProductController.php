<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Products;



class ProductController extends Controller
{
    //
    public function index(){
        $products= Products::all();
        return view('product.list',[
            'products'=>$products
        ]);
    }
    public function create(){
        return view('product.create');
    }
    public function store(Request $request){
$validate=$request->validate([
    'name'=>'required',
    'price'=>'required',
    'quantity'=>'required'
]);
$product=new Products();
$product->name=$request->name;
$product->price=$request->price;
$product->quantity=$request->quantity;
$product->manufaturer=$request->manufacturer;
$product->expired_date=$request->expired_date;

$result=$product->save();
if($result){
    return redirect('products')->with('success','successfully addedd');
}
else{
    return back();
}

    }
}
