<div class="container my-2">
    <h2>TODO LIST</h2>
    <form class="form" wire:submit="createNewTodo" action="">
        @if(session('success'))
        <div class="alert alert-success my-2">{{session('success')}}
        </div>
        @endif
        <div class="form class">
            <level class="form-level " for="todo_item ">Type Your Todo</level>
            <input class="form-control" wire:model="todo_item" type="text">
        </div>
        @error('todo_item')
        <div class="alert alert-danger my-2" role="alert"> {{$message}} </div>
        @enderror
        <button class="mt-2 btn btn-primary"> Click Me To Add Todo</button>
    </form>

    <div class="shadow p 4 my 3">
        <h3>All Todos</h3>
        <ul class="mt-2">
            @foreach( $alltodos as $todo)
            <li>{{$todo->todo_item}}</li>
            @endforeach
        </ul>
        {{$alltodos->links()}}
    </div>
</div>