@extends('html')

@section('content')
   <h1>{{ $task->title }}</h1>
   <p>{{ $task->description }}</p>
   <a href="{{ route('tasks.index') }}">Back to Tasks</a>
   <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
   
   <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
      @csrf
      @method('DELETE')
      <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
   </form>
@endsection
