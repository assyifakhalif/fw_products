<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class Barang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view ('employee',[
            'isi_data' => $id

        ]);
    }

     public function simpan_get(){
        $data  = [
            'name' => 'Bumi Manusia',
            'stock' => 10,
            'brand' => 'Gramedia',
            'buy_price' => '10000',
            'sale_price' => '15000',
            'comment' => 'Buku yang bagus'
        ];
        $proses = products::create($data);
        
     }
     public function hapus_get($id){
        $proses = products::where('products_id',$id)->delete();
        if($proses){
            echo "Data berhasil dihapus";
     }
    }

    public function edit_get($id){
        $data = [
            'name' => 'Bumi Manusia',
            'stock' => 5,
            'brand' => 'Gramedia',
            'buy_price' => '20000',
            'sale_price' => '25000',
            'comment' => 'Buku yang bagus'
        ];
        $proses = products::find($id)->update($data);
        if($proses){
            echo "Data berhasil diupdate";
        }
    }

    public function view_get(){
        $data = products::all();
        //dd($data);
        echo $data[0]->name;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "ini fungsi create barang";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
