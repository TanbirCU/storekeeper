<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('dashboard');
    }
    public function addProduct(){
        return view('add_product');
    }
    public function storeProduct(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantiy = $request->quantity;
        $product->save();
        return redirect('/add-product')->with('message','success');
    }

    public function sellProduct(){
        $products=Product::all();

        return view('sell_product',compact('products'));
    }
    public function sell(Request $request){
        $productId = $request->input('product_id');
        $sellQuantity = $request->input('sell_quantity');
        $product = Product::find($productId);

        $newQuantity = $product->quantiy - $sellQuantity;


       // $product->quantiy = max(0, $newQuantity);

        $product->save();


        return redirect()->route('sell')->with('message', 'Product sold successfully!');

    }
    public function updateProduct(){
        $products=Product::all();

        return view('update_product',compact('products'));
    }
    public function editProduct($id){
        $product = Product::find($id);

        return view('edit_product', compact('product'));

    }
    public function update(Request $request,$id){
        $product = Product::find($id);
        $product->name=$request->name;
        $product->price=$request->price;
        $product->quantiy=$request->quantiy;
        $product->save();
        // $product->update([
        //     'name' => $request->input('name'),
        //     'price' => $request->input('price'),
        //     'quantiy' => $request->input('quantiy'),
        // ]);
        return redirect()->route('updateProduct')->with('success', 'Product updated successfully!');


    }

    public function transation(){
        $todaySales = Product::whereDate('created_at', Carbon::today())->sum('price');
        $yesterdaySales = Product::whereDate('created_at', Carbon::yesterday())->sum('price');
        $thisMonthSales = Product::whereMonth('created_at', Carbon::now()->month)->sum('price');
        $lastMonthSales = Product::whereMonth('created_at', Carbon::now()->subMonth())->sum('price');

        return view('transation', compact('todaySales', 'yesterdaySales', 'thisMonthSales', 'lastMonthSales'));

    }

}
