@extends('layouts.app')

@section('title', 'Add Task')

@section('content')
  <form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    <div>
      <label for="title">Title</label>
      <input type="text" name="title" id="title">
    </div>
    <div>
      <label for="desc">Description</label>
      <textarea name="desc" id="desc" cols="15" rows="5"></textarea>
    </div>
    <div>
      <label for="ldesc">Long Description</label>
      <textarea name="ldesc" id="ldesc" cols="30" rows="10"></textarea>
    </div>
    <div>
      <button type="submit">Add Task</button>
    </div>
  </form>
@endsection