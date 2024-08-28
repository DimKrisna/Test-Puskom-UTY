@extends('layouts.app')

@section('content')
<div class="container">
    <h1>PRODUCTS</h1>
    <div class="signin-section text-right">
        <a href="{{ route('sign-in') }}" class="btn btn-primary">SIGN IN</a>
    </div>
    <br>

    <div class="filter-section">
        <span>FILTER:</span>
        <a href="{{ url('/brand?brand_name=all') }}" class="filter {{ request('brand_name') == 'all' ? 'active' : '' }}">ALL</a> •
        <a href="{{ url('/brand?brand_name=xiaomi') }}" class="filter {{ request('brand_name') == 'xiaomi' ? 'active' : '' }}">XIAOMI </a> •
        <a href="{{ url('/products?brand_name=samsung') }}" class="filter {{ request('brand_name') == 'samsung' ? 'active' : '' }}">SAMSUNG</a> •
        <a href="{{ url('/products?brand_name=oppo') }}" class="filter {{ request('brand_name') == 'oppo' ? 'active' : '' }}">OPPO</a> •
        <a href="{{ url('/products?brand_name=vivo') }}" class="filter {{ request('brand_name') == 'vivo' ? 'active' : '' }}">VIVO</a> •
        <a href="{{ url('/products?brand_name=realme') }}" class="filter {{ request('brand_name') == 'realme' ? 'active' : '' }}">REALME</a> •
        <a href="{{ url('/products?brand_name=infinix') }}" class="filter {{ request('brand_name') == 'infinix' ? 'active' : '' }}">INFINIX</a>•
        <a href="{{ url('/products?brand_name=apple') }}" class="filter {{ request('brand_name') == 'apple' ? 'active' : '' }}">APPLE</a> •
        <a href="{{ url('/products?brand_name=sony') }}" class="filter {{ request('brand_name') == 'sony' ? 'active' : '' }}">SONY</a>
    </div>
<br>
<br>



    <div class="row">
        @foreach($products as $product)
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->product_name }}</h5>
                    <p class="card-text">Rp. {{ number_format($product->product_price, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>
@endsection
