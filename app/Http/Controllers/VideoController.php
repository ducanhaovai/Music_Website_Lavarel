<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;


class VideoController extends Controller
{
    public function listVideo(){
        $videos = Video::all();
        return view('list-video' , compact('videos'));
    }
    

    public function add()
    {
        return view('add');
        
    }

    public function store(Request $request)
    {
        if($request->isMethod('POST')){
            $newVideo = new Video();
            $newVideo->name = $request->name;
            $newVideo->video_url = $request->video_url;
            $newVideo->description = $request->description;
            $newVideo->price = $request->price;
            $newVideo->category = $request->category;
            $newVideo->save();
            return redirect()->route('management')->with('success','Video created successfully.');
            

        }
    }

    public function edit($id)
    {
        
        $video = Video::find($id);
        return view('update', ['video' => $video]);
    }
    
    public function update(Request $request)
    {
        if($request->isMethod('POST')){
            $video = Video::find($request->id);
            if($video != null){
                $video->name = $request->name;
                $video->video_url = $request->video_url;
                $video->description = $request->description;
                $video->category = $request->category;
                
                
                $video->save();
                return redirect()->route('management')->with('success','Video updated successflly');
            }
            else
            {
                return redirect()->route('management')->with('Error','VIdeo not update');
            }

        }
    }

    public function delete($id)
    {
        $video = Video::find($id);
        $video->delete();
        return redirect()->route('management');
    }

    public function search(Request $request){
        $search = $request->keyWord;

        $videos = Video::query()    
        ->where('name','LIKE',"%{$search}%")->get();    
        
        

        return view ('index', compact('videos'),['successMsg'=>'Search results for '.$search]);
        

    }

    public function searchAdmin(Request $request){
        $search = $request->keyWord;

        $videos = Video::query()    
        ->where('name','LIKE',"%{$search}%")->get();    
        
        

        return view ('list-video', compact('videos'),['successMsg'=>'Search results for '.$search]);
        

    }

    public function searchLogin(Request $request){
        $search = $request->keyWord;

        $videos = Video::query()    
        ->where('name','LIKE',"%{$search}%")->get();    
        
        

        return view ('home-login', compact('videos'),['successMsg'=>'Search results for '.$search]);
        

    }
    
}

