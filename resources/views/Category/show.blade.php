@extends ('layouts/main')

@section ('title')
{{ $category->name }}
@endsection

@section ('content')
<br>
<br>
<br>
<br>
<header class="container_header">
        <a href="/">
            <img class="img_logo" src="{{asset('/img/logo_techhub_5.png')}}" alt="logo">
        </a>
</header>
<div class="__ofertas row container-fluid">
    <div class="col-12 text-center __productos_destacados">
        <p>
            {{ $category->name }}
        </p>
    </div>
    @if (isset($category->products))
    @foreach ($category->products as $product)        
        <div class="card col-6 col-md-3 col-lg-2 __itemoferta" style="width: 18rem;">
            <img src="/storage/products/{{ $product->photos }}" class="card-img-top __imgofertas" alt="...">
            <div class="card-body">
                <p class="card-text o_tituloitems">{{ $product->title }}</p>
                <a href="#" class="d-flex btn btn-primary __comprar">${{ $product->price}}</a>
            </div>
        </div>
    @endforeach
    @endif
</div>
@endsection
