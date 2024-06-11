<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Oderdetail;
class OderdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Oderdetail::where('qty','!=',0)
        ->leftJoin('order','orderdetail.order_id','=','order.id')
        ->join('product','product.id','=','orderdetail.product_id')
        ->select('delivery_name','delivery_email as email','note','product.name as name','qty','amount')
        ->get();
        return view('backend.oderdetail.index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
