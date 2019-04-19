<?php

namespace laravelPractice\Http\Controllers\Management;

use laravelPractice\Models\Product;
use Illuminate\Http\Request;
use laravelPractice\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id')->get();
        if (count($products) <= 0)
            return view('management.product.index');
        else
            return view('management.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!file_exists('uploads/product')) {
            mkdir('uploads/product', 0755, true);
        }

        $product = new Product;

        $fileName = 'default.jpg';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = public_path().'\uploads\product\\';
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move($path, $fileName);
        }

        $product->title = $request->input('title');
        $product->subtitle = $request->input('subtitle');
        $product->image = $fileName;
        $product->description = $request->input('description');

        $product->save();

        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \laravelPractice\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('management.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!file_exists('uploads/product')) {
            mkdir('uploads/product', 0755, true);
        }

        $product = Product::find($id);

        if ($request->hasFile('image')) {
            if ($product->image != 'default.jpg') @unlink('uploads/product/'.$product->image);
            $file = $request->file('image');
            $path = public_path().'\uploads\product\\';
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move($path, $fileName);
        }

        $product->title = $request->input('title');
        $product->subtitle = $request->input('subtitle');
        if (isset($fileName)) {
            $product->image = $fileName;
        }
        $product->description = $request->input('description');

        $product->save();

        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product->image != 'default.jpg') @unlink('uploads/product/'.$product->image);
        $product->delete();
        
        return redirect()->route('admin.product.index');
    }
}
