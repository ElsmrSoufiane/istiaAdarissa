<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Emploi;
use App\Models\User;


class Admin extends Controller
{
    public function index($id)
    {
        $user=User::find($id);
        $posts=Post::where('user_id',$id)->get();
        $emplois=Emploi::where('user_id',$id)->get();
        return view('admin',compact('posts','emplois','user'));
    } 
    public function editpost($id){
   $post=Post::find($id); 
   $groups=Groupe::all();

   return view('editpost',compact('post','id','groups'));
    }

    public function updatepost(Request $request,$id){
        $data = $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            "note"=>"",  "groupe_id"=>"required"
        ]);
        $path=$request->file('image')->store('images','public');
        $data['image']=$path;
        $data['user_id']=auth()->user()->id;
        $data['groupe_id']=$request->groupe_id;
        Post::where('id',$id)->update($data);
        return redirect('/admin/'.auth()->user()->id);
    } 
    public function deletepost($id){
        Post::destroy($id);
        return back();
    }
    public function editemploi($id){
        $emploi=Emploi::find($id);
        $groups=Groupe::all();

        return view('editemploi',compact('emploi','id','groups'));
    }
    public function updateemploi(Request $request,$id){
        $data = $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            "note"=>"",  "groupe_id"=>"required"
        ]);
        $data['groupe_id']=$request->groupe_id;

        $path=$request->file('image')->store('images','public');
        $data['image']=$path;
        $data['user_id']=auth()->user()->id;
        Emploi::where('id',$id)->update($data);
        return redirect('/admin/'.auth()->user()->id);
    }
    public function deleteemploi($id){
        Emploi::destroy($id);
        return back();
    }
}
