@extends('html')
@section('content')
   <h1>Create a New Task</h1>
   <form action="{{ route('tasks.store') }}" method="POST">
      @csrf
      <label>Title:</label>
      <input type="text" name="title" required>
      <label>Description:</label>
      <textarea name="description"></textarea>
      <button type="submit">Save Task</button>
   </form>

@endsection