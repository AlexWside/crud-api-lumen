<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //

    public function index(){
           return Post::all();
    }

    public function store(Request $request){
          try{


            $post = new Post();
            $post->title = $request->title;
            $post->description = $request->description;


            if($post->save()){

                return response()->json(['status' => 'success', 'message'=> 'post created success'], $status = 201);

            }


          }catch(\Exception $e){
            return response()->json(['status' => 'error', 'message'=> 'post error:' + $e->getMessage()]);
          }
    }

    public function update(Request $request,$id){
          try{


            $post = Post::findOrFail($id);
            $post->title = $request->title;
            $post->description = $request->description;


            if($post->save()){

                return response()->json(['status' => 'success', 'message'=> 'post edited success'], $status = 201);

            }


          }catch(\Exception $e){
            return response()->json(['status' => 'error', 'message'=> $e->getMessage()]);
          }
    }

    public function destroy($id){
        try{


          $post = Post::findOrFail($id);
          
          if($post->delete()){

              return response()->json(['status' => 'success', 'message'=> 'post deleted success'], $status = 201);

          }


        }catch(\Exception $e){
          return response()->json(['status' => 'error', 'message'=> $e->getMessage()]);
        }
  }

}
