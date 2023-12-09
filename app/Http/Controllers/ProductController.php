<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use MongoDB\BSON\ObjectId;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::where('quantity','>',0)->paginate(15);
        return view('product.index', compact('products'))->with('i', (request()->input('page', 1) - 1) * 15);
    }

    public function list()
    {
        $products = Product::paginate(15);
        return view('admin.index', compact('products'))->with('i', (request()->input('page', 1) - 1) * 15);
    }

    public function create()
    {
        return view('admin.createProduct');
    }

    public function store(Request $request)
    {
        $code = Product::orderby('code', 'desc')->first();
        $products = new Product([
            'code' => $code->code + 1,
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'image' => $request->input('image'),
            'description' => $request->input('description'),
            'quantity' => $request->input('quantity')
        ]);

        $categoryName = $request->input('category_name');
        $category = Category::firstOrCreate(['name' => $categoryName]);

        $products->category_id =  $category->_id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image/product'), $imageName);
            $products->image = '/image/product/' . $imageName;
        }
        $products->save();
        session()->flash('success', 'Product created successfully');
        return redirect('/admin');
    }

    public function show($code)
    {
        $products = Product::where('code', (int)$code)->first();
        return view ('product.show', ['product'=>$products]);
    }


    public function edit($code)
    {
        $route = "/admin/update/$code";
        $product = Product::where('code',(int)$code)->first();
        $flag = "modify";
        return view('admin.edit', ['route'=>$route, 'flag'=>$flag, 'product'=>$product]);
    }

    public function update(Request $request, $code)
    {
        $product = Product::where('code',(int)$code)->first();
        $product->name = $request->get('name');
        $product->image = $request->get('image');
        $product->price = $request->get('price');
        $product->quantity = $request->get('quantity');
        $product->description = $request->get('description');
        $product->save();
        session()->flash('success', 'Product update successfully');
        return redirect('/admin');
    }

    public function delete($code)
    {
        Product::where('code',(int)$code)->delete();
        return redirect('/admin');
    }

    public function category($cate) {
        $category = Category::where("name","like", "%$cate%")->first();
        $id=new ObjectId($category->_id);
        $products = Product::where("category_id", $id)->paginate(15);
        return view('category.index', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
