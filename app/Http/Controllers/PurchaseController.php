<?php

namespace App\Http\Controllers;
use App\Models\Purchase;
use App\Models\products;
use App\Models\supplier;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function create()
    {
        $products = products::all();
        $suppliers = supplier::all();
        return view('admin.create_purchase', compact('products', 'suppliers'));
    }

    public function store(Request $request)
    {
        $purchase = new Purchase();
        $purchase->product_id = $request->input('product_id');
        $purchase->supplier_id = $request->input('supplier_id');
        $purchase->stock = $request->stock;
        $purchase->comment = $request->comment;
        $purchase->save();
        return redirect()->back();
    }
}
