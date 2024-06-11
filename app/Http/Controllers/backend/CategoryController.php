<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list= Category::where('status','!=',0)
        ->orderBy('created_at','desc')
        ->get();
        $htmlparentid='';
        $htmlsortorder='';
        foreach($list as $items)
        {
            $htmlparentid.="<option value='0'>".$items->name."</option>";
            $htmlsortorder.="<option value='0'>Sau:".$items->name."</option>";
        }
        return view('backend.category.index',compact('list','htmlparentid','htmlsortorder'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $category= new Category();
        $category->name=$request->name;
        $category->description=$request->description;
        $category->slug=Str::of($request->name)->slug('-');
        //Upload image
        if ($request->image){
            $exten=$request->image->extension();
            if(in_array($exten,['jpg','png','gif','webp'])){
                $filename=$category->slug.".".$exten;
                $request->image->move(public_path("images/categorys"),$filename);
                $category->image=$filename;
            }
        }

        $category->parent_id=$request->parent_id;
        $category->sort_order=$request->sort_order;
        $category->created_at=date("Y-m-d H:i:s");
        $category->created_by=Auth::id()??1;
        $category->name=$request->name;
        $category->save();
        return redirect()->route('admin.category.index');
       
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
