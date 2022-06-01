<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\image;
use App\Models\place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class AdminController extends Controller
{
    
    public function search($name)
    {
        $result = place::where('name', 'LIKE', '%'. $name. '%')->get();
        
        foreach($result as $place){
            $id = $place->id;

            $url = DB::select("select url from images where place_id = ? limit 1" , [$id]);
            foreach($url as $u)
                $place->url = $u->url;
        }
        if($result){
            return Response::json(
                $result
            , 200);
        } else {
            return Response::json([], 404);
        }
    }
    
    //.....admin add a place to the database
    public function add_place(Request $data)
    {

        if(  $place = place::create([
            'name' => $data['name'],
            'location' => $data['location'],
            'GoogleMap' => $data['GoogleMap'],
            'category' => $data['category'],
            'details' => $data['details'],


        ]))
        {
            echo ('added successfully');
            return redirect()->back();
        }
        else{
            echo (' failed');
            return redirect()->back();
        }
    }
    //...............................................
    public function storeImage(Request $request){
        $data1= new image();
        $data1['place_id']= $request['place_id'];
        $data1['place_name']= $request['place_name'];
        if($request->file('url')){
            $file= $request->file('url');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data1['url']= 'public/Image/'.$filename;

        }
        $data1->save();


    }
    //.......................................................
    public function delete_place($place_id)
    {

        $whereArray = array('id' => $place_id);

        $query = DB::table('places');
        foreach ($whereArray as $field => $value) {
            $query->where($field, $value);
        }
        if ($query->delete()) {
            return response()->json([
                "message" => "deleted",

            ], 200);
        } else {
            return response()->json([
                "message" => "failed"
            ], 404);
        }
    }
    //..........................
    public function delete_image($image_id)
    {

        $news = image::findOrFail($image_id);
        $image_path = public_path($news['url']);

        if (File::exists($image_path)) {
            File::delete($image_path);
            //unlink($image_path);
        }

        if ($news->delete()) {
            return response()->json([
                "message" => "deleted",

            ], 200);
        } else {
            return response()->json([
                "message" => "failed"
            ], 404);
        }
    }
//.................
    public function get_places(): \Illuminate\Http\JsonResponse
    {
        $query = DB::table('places');
        $places = $query->get();

        $query1 = DB::table('images');
        $images= $query1->get();
        return response()->json([
            "All places_info" => $places,
            "images"=>$images

        ], 200);
    }
//.......................................
    public function get_place_based_id($place_id): \Illuminate\Http\JsonResponse
    {
        $query = DB::table('places');
        $place = $query->where('id', '=', $place_id)
            ->get();
        $query1 = DB::table('images');
        $images= $query1->where('place_id', '=', $place_id)
            ->get();
       // return response()->json($place);
        return response()->json([
            "place_info" => $place,
            "images"=>$images

        ], 200);
    }
//..................................................................get_image
    public function get_image($place_id): \Illuminate\Http\JsonResponse
    {
        $query1 = DB::table('images');
        $images= $query1->
        join('places','places.id','=','images.place_id')->
        where('images.place_id', '=', $place_id)
            ->select(['images.*','places.name','places.location','places.GoogleMap','places.category','places.details'])
            ->get();
            return response()->json($images, 200);
    }
    //.................................................
    public function get_places_based_category($category): \Illuminate\Http\JsonResponse
    {
        $query = DB::table('places');
        $places = $query->where('category', '=', $category)->get();

        foreach($places as $place){
            $id = $place->id;

            $url = DB::select("select url from images where place_id = ? limit 1" , [$id]);
            foreach($url as $u)
                $place->url = $u->url;
                        

        }
        if($places){
            return Response::json(
                $places
            , 200);
        } else {
            return Response::json([], 404);
        }

        //return response()->json($places);
    }
    //..........................................................
    public function get_categories()
    {
        $query = DB::table('places');
        $categories = $query
            ->select('category')
            ->distinct()
            ->get();

        return response()->json($categories);
    }
}
