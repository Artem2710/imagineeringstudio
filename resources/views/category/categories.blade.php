@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="button" class="btn btn-default btn-lg" id="myBtn">Добавить категорию</button>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header" style="">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>Введите название новой категории</h4>
                        </div>
                        <div class="modal-body" style="padding:40px 50px;">
                            <form method="post" action="{{route('createCategory')}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <input class="form-control" id='title' name="name" value="{{old('name')}}"
                                           placeholder="name"/>
                                </div>
                                <button class="btn btn-block">Добавить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($categories as $category)
            <div class="category">
                <a href="/categories/{{$category->id}}"><h4>{{$category->name}}</h4></a>

                <form method="post"
                      action="{{route('deleteCategory', ['id' => $category->id])}}">
                    {{method_field('DELETE')}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button name="name" class="btn btn-primary" value="{{$category->id}}">delete</button>
                </form>
                <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModal{{$category->id}}">
                    edit
                </button>
                <div class="modal fade" id="exampleModal{{$category->id}}" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">Введите изменения</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{route('categoryUpdate', ['category' => $category])}}">
                                    <input type="hidden" name="_method" value="PUT"/>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="input">
                                        <input class="form-control" id='title' name="name" value="{{old('name') ?? $category->name}}"/>
                                    </div>
                                    <button class="btn btn-block">edit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $categories->links() }}
    </div>
@endsection
