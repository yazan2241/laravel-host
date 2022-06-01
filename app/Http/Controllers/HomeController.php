<?php

namespace App\Http\Controllers;

use App\Models\image;
use App\Models\place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function myredirect(){
        if(Auth::id()){

            $PlacesCount = place::count();
            $religiousCount = place::where('category','دينية')->count();
            $naturalCount = place::where('category','طبيعية')->count();
            $antique = place::where('category','أثرية')->count();

          return view('admin.home',compact('PlacesCount', 'religiousCount', 'naturalCount','antique'));
        }else{
            return redirect()->back();
        }
    }
    public function bodyfun(){
        $PlacesCount = place::count();
        $religiousCount = place::where('category','دينية')->count();
        $naturalCount = place::where('category','طبيعية')->count();
        $antique = place::where('category','أثرية')->count();

      return view('admin.body',compact('PlacesCount', 'religiousCount', 'naturalCount','antique'));
    }
    //................................
    public function addPlacesView(){

            return view('admin.AddPlace');
    }
    //.........................
    public function ShowPlacesView(){
        $data=place::all();
        return view('admin.ShowPlaces',compact('data'));
    }
    //..............................................
    public function ShowAllImages(){
        $images=image::all();
        return view('admin.ShowAllImages',compact('images'));
    }
    //........................................
    public function ShowImagesView($id){
        $images = image::all()->where('place_id', '=', $id);

        return view('admin.ShowImages',compact('images'));
    }
    //...................................
    public function DeletePlace($id){
        $data=place::find($id);
        $data->delete();
        return redirect()->back();
    }
    //......................................
    public function DeleteImage($id){
        $data=image::find($id);
        $data->delete();
        return redirect()->back();
    }
    //........................................
    public function UpdatePlace($id){
        $data=place::find($id);
        return view('admin.UpdatePlace',compact('data'));
    }
    //.............................................
    public function AddNewImageView($id){
        $data=place::find($id);
        $name=$data->name;
        return view('admin.AddNewImage',compact('id','name'));
    }
    //.......................................
    public function UploadImage(Request $request){
        $newdata= new image();
        $newdata['place_id']= $request['place_id'];
        $newdata['place_name']= $request['place_name'];
        if($request->file('url')){
            $file= $request->file('url');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $newdata['url']= 'public/Image/'.$filename;

        }
        $newdata->save();
        return redirect()->back();
    }
    //.........................................
    public function EditPlace(Request $request,$id){
        $place=place::find($id);
        $place->name=$request->name;
        $place->location=$request->location;
        $place->GoogleMap=$request->GoogleMap;
        $place->category=$request->category;
        $place->details=$request->details;
        $place->save();
        return redirect()->back();
    }
}
