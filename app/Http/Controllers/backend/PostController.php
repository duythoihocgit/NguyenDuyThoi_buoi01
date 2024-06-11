<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Post::where('post.status','!=',0)
        ->leftJoin('topic','topic.id','=','post.topic_id')
        ->select('post.id as postid','post.image as postimage','topic.name','post.slug','title')
        ->orderBy('post.created_at','asc')
        ->get();
        return view('backend.post.index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list=Post::where('post.status','!=',0)
        ->leftJoin('topic','topic.id','=','post.topic_id')
        ->select('post.id as postid','post.image as postimage','topic.name as topicname','post.slug','title','topic.id as topicid','type')
        ->orderBy('post.created_at','asc')
        ->get();
        $htmltopicid='';
        foreach($list as $items)
        {
            $htmltopicid.="<option value='{$items->topicid}'>".$items->topicname."</option>";
        }
        return view('backend.post.create',compact('list','htmltopicid'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post=new Post();
        $post->title=$request->title;
        $post->detail=$request->detail;
        $post->description=$request->description;
        $post->slug=Str::of($request->title)->slug('-');
        if ($request->image){
            $exten=$request->image->extension();
            if(in_array($exten,['jpg','png','gif','webp'])){
                $filename=$post->slug.".".$exten;
                $request->image->move(public_path("images/posts"),$filename);
                $post->image=$filename;
            }
        }
        $post->created_at=date("Y-m-d H:i:s");
        $post->created_by=Auth::id()??1;
        $post->save();
        return redirect()->route('admin.post.index');
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
