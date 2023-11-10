@extends('layouts.app')

@section('title', 'Add Task')

@section('styles')
<style>
  .error-message{
    color: red;
    font-size: 0, 8rem;
  }
</style>
@endsection

@section('content')
{{-- {{ $errors }} --}}
  <form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    <div>
      <label for="title">Title</label>
      <input type="text" name="title" id="title">
      @error('title')
        <p class="error-message">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label for="desc">Description</label>
      <textarea name="desc" id="desc" cols="15" rows="5"></textarea>
      @error('desc')
        <p class="error-message">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label for="ldesc">Long Description</label>
      <textarea name="ldesc" id="ldesc" cols="30" rows="10"></textarea>
      @error('ldesc')
        <p class="error-message">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <button type="submit">Add Task</button>
    </div>
  </form>
@endsection