<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Emploi;
use App\Models\User;
use App\Models\Group;
class blogcontroller extends Controller
{ 
    
    public function index()
    {  $posts=Post::all();
        $users=User::all();
        $emplois=Emploi::all();
        return view('principale',compact('posts','users','emplois'));
        
    }
   
    public function posts()
    {
        $posts=Post::all();
        $users=User::all();
        return view('posts',compact('posts','users'));
    }
    public function emplois()
    {
        $emplois=Emploi::all();
        $users=User::all();
        return view('emplois',compact('emplois','users'));
    }
    public function login()
    {
      
        
        return view('login');
    }
    public function storelogin(Request $request){
    
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);
        
       if(Auth::attempt($request->only('login', 'password'))){
              return redirect('/');
       }else{
        return back()->withErrors(["login"=>'login ou mot de passe incorrect']);
    } }
    public function storepost(Request $request){
        $data = $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            "note"=>""
        ]);
        $path=$request->file('image')->store('images','public');
        $data['image']=$path;
        $data['user_id']=auth()->user()->id;

        Post::create($data);
        return redirect('/posts')->with('success', 'post ajouté avec succès');
    }
    public function storeemploi(Request $request){
        $data = $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'image' => 'required|image',"note"=>""
        ]);
        $path=$request->file('image')->store('images','public');
        $data['image']=$path;
        $data['user_id']=auth()->user()->id;
        Emploi::create($data);
        return redirect('/emplois')->with('success', 'emploi ajouté avec succès');
    }
    public function createpost()
    {
        return view('createpost');
    }
    public function createemploi()
    {
        return view('createemploi');
    }
    public function auteur($id){
        $user=User::find($id);
        $posts=Post::where('user_id',$id)->get();
        $emplois=Emploi::where('user_id',$id)->get();
        $users=User::all();
        return view('auteur',compact('user','posts','emplois','users'));
    }
    public function emploi($id)
    {
        $emploi=Emploi::find($id);
        $users=User::all();

        return view('emploi',compact("emploi","users"));
    }
    public function post($id)
    {
        $post=Post::find($id);
        $users=User::all();

        return view('post',compact("post","users"));
    }
}
