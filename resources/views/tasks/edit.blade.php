@extends('html')
@section('content')
   <h1>Edit Task</h1>
   <form action="{{ route('tasks.update', $task->id) }}" method="POST">
      @csrf
      @method('PUT')
      <label>Title:</label>
      <input type="text" name="title" value="{{ $task->title }}" required>
      <label>Description:</label>
      <textarea name="description">{{ $task->description }}</textarea>
      <button type="submit">Update Task</button>
   </form>
@endsection
