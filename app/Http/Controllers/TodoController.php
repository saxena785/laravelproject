<?php

namespace App\Http\Controllers;
use App\Todo;
use App\User;
use Illuminate\Http\Request;

class TodoController extends Controller
{

       public function __construct(){

        $this->middleware('auth')->except('index');

       }
    public function index(){

        $todos = Todo::all();
        //return $todos;

        return view('todo.index',compact('todos'));
 
       }

    public function create(){

        return view('todo.create');
 
       }
 
       public function store(Request $request)
       {
            auth()->user()->todos()->create($request->all());
        $validatedData = $request->validate([
            'title' => 'required|unique:posts|max:255',
              ]);
         Todo::create($request->all());
         return redirect()->back()->with('message','todo created succesfully');
        }
 
        public function edit(Todo $todo)
        {
            //dd($todo ->title);
           //$todo = Todo::find($id);
            //return $todo;
            return view('todo.edit',compact('todo'));
           // return view('todo.edit');
  
        }

        public function update(Request $request ,Todo $todo)
        {

               $todo->update(['title' =>$request->title]);
               return redirect(route('todo.index'))->with('message','Update created succesfully');
              
               //dd($request->all());
        }
}
