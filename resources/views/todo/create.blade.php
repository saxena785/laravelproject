<!DOCTYPE html>
<html>
<head>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="text-center pt-10"> 
<h1 class="text-2xl">What create To Do</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif                      
 <form method="POST" action ='/todo/create' class="py-5">
 @csrf
 @method('POST') 
  <input type ="text" name ="title" class="py-3 px-3 border" />
   <input type ="submit" name ="submit" class="p-2 border rounded-lg">
   </form>
   </div>
   <a href = "/todo" class ="m-5 py-1 px-1 bg-white-300 cursor-pointer rounded">BACK</a>
</body>
</html>