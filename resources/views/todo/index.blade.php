@extends('todo.layout')


@section('content')
 <div class ="flex justify-center">
<h1 class="text-2xl">All Your Todos</h1>
 <a href = "/todo/create" class ="mx-5 py-1 px-1 bg-blue-300 cursor-pointer rounded text-white">Create New</a>
 </div>
  
 <ul class ="my-5">
 @foreach($todos as $todo)
   <li class="flex justify-center py-2">
 <p>{{$todo->title}}</p>
 <a href ="{{'/todo/'.$todo->id.'/edit'}}" class ="mx-5 py-1 px-1 bg-orange-300 cursor-pointer rounded text-white">Edit</a>
   </li>
  @endforeach
 
 </ul>

 @endsection