<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Http\Requests\StoreProductRequest;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Product::where('product.status','!=',0)
        ->join('category','product.category_id','=','category.id')
        ->join('brand','product.brand_id','=','brand.id')
        ->select('product.image as productimage','product.id','product.name','category.name as categoryname', 'brand.name as brandname','category.id as categoryid','brand.id as brandid' )
        ->orderBy('product.created_at','asc')
        ->get();
        return view('backend.product.index',compact('list','htmlcategoryname','htmlbrandname'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list=Product::where('product.status','!=',0)
        ->join('category','product.category_id','=','category.id')
        ->join('brand','product.brand_id','=','brand.id')
        ->select('product.image as productimage','product.id','product.name','category.name as categoryname', 'brand.name as brandname','category.id as categoryid','brand.id as brandid' )
        ->orderBy('product.created_at','asc')
        ->get();
        $htmlcategoryname='';
        $htmlbrandname='';
        foreach($list as $items)
        {
            $htmlcategoryname.="<option value='{$items->categoryid}'>".$items->categoryname."</option>";
            $htmlbrandname.="<option value='{$items->brandid}'>".$items->brandname."</option>";
        }
        return view('backend.product.create',compact('list','htmlcategoryname','htmlbrandname'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $product=new Product();
        $product->name=$request->name;
        $product->description=$request->description;
        $product->detail=$request->detail;
        $product->slug=Str::of($request->name)->slug('-');
        if ($request->image){
            $exten=$request->image->extension();
            if(in_array($exten,['jpg','png','gif','webp'])){
                $filename=$product->slug.".".$exten;
                $request->image->move(public_path("images/products"),$filename);
                $product->image=$filename;
            }
        }
        $product->brand_id=$request->brand_id;
        $product->category_id=$request->category_id;
        $product->price=$request->price;
        $product->pricesale=$request->pricesale;
        $product->created_at=date("Y-m-d H:i:s");
        $product->created_by=Auth::id()??1;
        $product->save();
        return redirect()->route('admin.product.index');
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
