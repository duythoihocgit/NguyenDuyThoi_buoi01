<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Topic;
use App\Http\Requests\StoreTopicRequest;
class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Topic::where('status','!=',0)
        ->select('name','slug','id')
        ->orderBy('created_at','asc')
        ->get();
        $htmltopicsort='';
        foreach($list as $items)
        {
            $htmltopicsort.="<option value='0'>Sau:".$items->name."</option>";
        }
        return view('backend.topic.index',compact('list','htmltopicsort'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTopicRequest $request)
    {
        $topic=new Topic();
        $topic->name=$request->name;
        $topic->description=$request->description;
        $topic->sort_order=$request->sort_order;
        $topic->slug=Str::of($request->name)->slug('-');
        $topic->created_at=date("Y-m-d H:i:s");
        $topic->created_by=Auth::id()??1;
        $topic->name=$request->name;
        $topic->save();
        return redirect()->route('admin.topic.index');
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
