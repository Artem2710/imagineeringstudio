@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form method="get" action="{{route('products', ['category' => $category->id])}}">
                <div>
                    <label for="material">Выберите тип мероприятия</label><br>
                    <select id="material" name="material">
                        <option value="%">все</option>
                        <option value="1">Пластик</option>
                        <option value="2">Метал</option>
                    </select>
                    <button class="banner-btn" style="padding: 0 5px; margin-top: 0;">sort</button>
                </div>
            </form>
            @foreach($products as $product)
                <div class="product">
                    <div class="name">
                        <p>{{$product->name}}</p>
                    </div>
                    <div class="category-product">
                        <p>{{$category->name}}</p>
                    </div>
                    <div class="material">
                       {{App\Product::find($product->id)->material->name}}
                    </div>
                </div>

            @endforeach
        </div>
    </div>
@endsection
