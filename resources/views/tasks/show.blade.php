@extends('html')

@section('content')
   <div class="form-container text-center max-w-lg mx-auto">
      <h1 class="text-red-500 text-3xl font-bold mb-2">{{ $task->title }}</h1>
      <p class="text-gray-800 mb-10 mt-4">{{ $task->description }}</p>
      
      <div class="space-x-2 space-y-2">
         <a href="{{ route('tasks.index') }}" class="btn">Back to Tasks</a>
         <a href="{{ route('tasks.edit', $task->id) }}" class="btn">Edit</a>

         <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn" 
               onclick="return confirm('Confirm deletion of Task')">Delete</button>
         </form>
      </div>
   </div>
@endsection
