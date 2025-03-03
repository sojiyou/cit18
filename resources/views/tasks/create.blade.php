@extends('html')
@section('content')
<div class="form-container text center">
      <h1>Create a New Task</h1>
      <form class="justify-center" action="{{ route('tasks.store') }}" method="POST">
         @csrf
         <label>Title:</label>
         <input type="text" name="title" required>
         <label>Description:</label>
         <textarea name="description"></textarea>
         <button class="btn" type="submit">Save Task</button>
      </form>
   </div>

@endsection