@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="{{route('events.update', ['category' => $category])}}">
            <input type="hidden" name="_method" value="PUT"/>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div>
                <label for="title">Title:</label>
                <input id='title' name="name" value="{{old('name') ?? $category->name}}"/>
            </div>
            <button>edit</button>
        </form>
    </div>
@endsection
