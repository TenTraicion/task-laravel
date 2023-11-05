<h1>
  The list of tasks
</h1>

<div>
  Hello Im a blade template!
  {{-- @if (count($tasks)) --}}
  @forelse ($tasks as $task)
    <div>
      <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
    </div>
  @empty
    <div>There are no tasks!</div>
  @endforelse
  {{-- @endif --}}
</div>