@extends('todo.layout');

@section('content')

<h1 class="text-2xl">Update Todo List</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 <form method="post" action ="{{route('todo.update',$todo->id)}}" class="py-5">
 @csrf
 @method('put')
  <input type ="text" name ="title" value ="{{$todo->title}}" class="py-3 px-3 border" />
   <input type ="submit" name ="submit" value ="Update" class="p-2 border rounded-lg">
   </form>
   </div>
   <a href = "/todo" class ="m-5 py-1 px-1 bg-white-300 cursor-pointer rounded">BACK</a>
  

@endsection