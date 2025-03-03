@extends('html')

@section('content')
<div class="flex flex-col items-center min-h-screen bg-gray-100 py-10">
   <h1 class="text-5xl text-red-500 pb-4">Currently Available Tasks</h1>

   @if($tasks->isEmpty())
   <p class="text-green-500 text-lg mb-6">No tasks available.</p>
   @endif

   <ul class="w-full max-w-lg bg-white p-4 rounded-lg shadow-md">
      @foreach($tasks as $task)
      <li class="py-2 flex justify-between items-center ">
         <p class="border-l-3 p-1 border-red-500">{{ $task->title }}</p>
         <div class="flex gap-2">
            <a class="btn " href="{{ route('tasks.show', $task->id) }}">View</a>
            <a class="btn " href="{{ route('tasks.edit', $task->id) }}">Edit</a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline">
               @csrf
               @method('DELETE')
               <button class="btn" type="submit" onclick="return confirm('Confirm deletion of Task')">Delete</button>
            </form>
         </div>
      </li>
      @endforeach
   </ul>

   <a class="btn mt-4" href="{{ route('tasks.create') }}">Create Task</a>
   
</div>
@endsection
