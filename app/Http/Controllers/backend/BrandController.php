<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Brand::where('status','!=',0)
        ->orderBy('created_at','desc')
        ->get();
        return view('backend.brand.index',compact('list'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        $brand= new Brand();
        $brand->name=$request->name;
        $brand->description=$request->description;
        $brand->slug=Str::of($request->name)->slug('-');
        //Upload image
        if ($request->image){
            $exten=$request->image->extension();
            if(in_array($exten,['jpg','png','gif','webp'])){
                $filename=$brand->slug.".".$exten;
                $request->image->move(public_path("images/brands"),$filename);
                $brand->image=$filename;
            }
        }
        $brand->sort_order=Auth::id()??1;
        $brand->created_at=date("Y-m-d H:i:s");
        $brand->created_by=Auth::id()??1;
        $brand->name=$request->name;
        $brand->save();
        return redirect()->route('admin.brand.index');
       
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
