@extends('html')
@section('content')
<div class="form-container">
   <h1>Edit Task</h1>
   <form class="text-center" action="{{ route('tasks.update', $task->id) }}" method="POST">
      @csrf
      @method('PUT')
      <label>Title:</label>
      <input type="text" name="title" value="{{ $task->title }}" required>
      <label>Description:</label>
      <textarea name="description">{{ $task->description }}</textarea>
      <button class="btn" type="submit">Update Task</button>
   </form>
   </div>
@endsection
