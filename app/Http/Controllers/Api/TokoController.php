<?php

namespace App\Http\Controllers\Api;
use App\Models\Items;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = Items::where('id', $id)->first();

        return response()->json([
            'success' => true,
            'message' => 'Detail Data items',
            'data' => $items
            
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:items|max:255',
            'gambar' => 'required|unique:items|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);
        
        $f = Items::find($id)->update([
            'nama' => $request->nama,
            'gambar' => $request->gambar,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);
        
        return response()->json([
            'sucess' => true,
            'message' => 'Post Update',
            'data' => $f
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cek = Items::find($id)->delete();
        
        return response()->json([
            'success'=> true,
            'message'=> 'Post Deleted',
            'data'=> $cek
        ], 200);
    }
}
