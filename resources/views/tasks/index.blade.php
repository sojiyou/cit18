@extends('html')

@section('content')
   <h3>Currently Available Tasks</h3>
   <ul>
      @foreach($tasks as $task)
         <li>
            {{ $task->title }} 
            - <a href="{{ route('tasks.show', $task->id) }}">View</a>
            - <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
               @csrf
               @method('DELETE')
               <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
         </li>
      @endforeach
   </ul>
   <a href="{{ route('tasks.create') }}">Create Task</a>
@endsection
