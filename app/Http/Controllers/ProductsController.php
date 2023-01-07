<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_product = products::all();
        return view('admin.list_products', compact('data_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->product_name,
            'stock' => Intval($request->stock),
            'brand' => $request->brand,
            'buy_price' => $request->buy_price,
            'sale_price' => $request->sale_price,
            'comment' => $request->comment,
        ];
        $proses = products::create($data);
        if($proses){
            // send message alert
            return redirect('products/create')->with('success', 'Data berhasil disimpan');
        }else{ 
            // send message alert
            return redirect('products/create')->with('error', 'Data gagal disimpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $data_product = products::where('products_id', $id)->get();
        return view('admin.edit_products', compact('data_product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data_product = products::where('products_id',$id);
        

        $data = [
            'name' => $request->product_name,
            'stock' => Intval($request->stock),
            'brand' => $request->brand,
            'buy_price' => $request->buy_price,
            'sale_price' => $request->sale_price,
            'comment' => $request->comment,
        ];
       $proses = $data_product->update($data);
        if($proses) flash ('Data berhasil diupdate')->success();
       if(!$proses) flash ('Data gagal dihapus')->error();
        return redirect()->route('list_products', compact('data_product'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proses = products::where('products_id',$id)->delete();
        if($proses) flash ('Data berhasil dihapus')->success();
       if(!$proses) flash ('Data gagal dihapus')->error();
        return redirect('products');
    }
}
