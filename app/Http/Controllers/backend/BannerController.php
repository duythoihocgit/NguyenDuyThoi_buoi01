<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Http\Requests\StoreBannerRequest;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Banner::where("status",'!=',0)
        ->select('image','name','link','position','id')
        ->orderBy('created_at','desc')
        ->get();
        return view('backend.banner.index',compact('list'));
    }

  
    public function store(StoreBannerRequest $request)
    {
        $banner=new Banner();
        $banner->name=$request->name;
        $banner->link=$request->link;
        $banner->position=$request->position;
        $banner->description=$request->description;
        if ($request->image){
            $exten=$request->image->extension();
            if(in_array($exten,['jpg','png','gif','webp'])){
                $filename=$banner->name.".".$exten;
                $request->image->move(public_path("images/banners"),$filename);
                $banner->image=$filename;
            }
        }
        $banner->created_at=date("Y-m-d H:i:s");
        $banner->created_by=Auth::id()??1;
        $banner->save();
        return redirect()->route('admin.banner.index');
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
