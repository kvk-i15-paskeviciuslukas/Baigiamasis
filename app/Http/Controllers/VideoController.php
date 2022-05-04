<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\File; 

class VideoController extends Controller
{
    public function create(){
        return redirect('/dashboard/video');
    }
    public function videoStore(Request $request){

        $request->validate(['file' => 'required|mimes:video,mp4,webm,ogg,ogx,oga,ogv']);

        $file = $request->file('file') ;
        $pavadinimas = $file->getClientOriginalName();
        $dydis = $file->getSize();
        $filepath = 'public/videos/'.$pavadinimas;
        $destinationPath = public_path().'/videos' ;
        $file->move($destinationPath,$pavadinimas);
        $video = new Video();
        $video->pavadinimas=$pavadinimas;
        $video->dydis=$dydis;
        $video->filepath=$filepath;
        $video->save();
        return redirect()->back()->with('messageVideo','Pasirinktas įrašas įkeltas sėkmingai!');
    }
    public function videoShow(){
        $videoData = array();
        $videoData= Video::all();
        return view('dashcomponents.dashvideoshow',compact('videoData'));
    }
    public function videoDelete($id){
        $video = Video::find($id);
        $pavadinimas=$video->pavadinimas;
        if(File::exists("videos/".$pavadinimas)){
            File::delete("videos/".$pavadinimas);
        }
        $video->delete();
        return redirect()->back();
    }
    public function videoVaizduot($id){
        $video = Video::find($id);
        return view('dashcomponents.dashvideoshowid',compact('video'));
    }
}
