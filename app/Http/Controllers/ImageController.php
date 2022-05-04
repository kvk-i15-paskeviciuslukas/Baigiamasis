<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\File; 

class ImageController extends Controller
{
    public function create(){
        return redirect('/dashboard/image');
    }
    public function imageStore(Request $request){

        $request->validate(['file' => 'required|image|mimes:jpeg,png,jpg,svg|max:4096',]);

        $file = $request->file('file') ;
        $pavadinimas = $file->getClientOriginalName();
        $dydis = $file->getSize();
        $filepath = 'public/images/'.$pavadinimas;
        $destinationPath = public_path().'/images' ;
        $file->move($destinationPath,$pavadinimas);
        $image = new Image();
        $image->pavadinimas=$pavadinimas;
        $image->dydis=$dydis;
        $image->filepath=$filepath;
        $image->save();
        return redirect()->back()->with('messageImage','Pasirinkta nuotrauka įkelta sėkmingai!');
    }
    public function imageShow(){
        $imgData = array();
        $imgData=Image::all();
        return view('dashcomponents.dashimageshow',compact('imgData'));
    }
    public function imageDelete($id){
        $image = Image::find($id);
        $pavadinimas=$image->pavadinimas;
        if(File::exists("images/".$pavadinimas)){
            File::delete("images/".$pavadinimas);
        }
        $image->delete();
        return redirect()->back();
    }
    public function imageVaizduot($id){
        $image = Image::find($id);
        return view('dashcomponents.dashimageshowid',compact('image'));
    }
}
