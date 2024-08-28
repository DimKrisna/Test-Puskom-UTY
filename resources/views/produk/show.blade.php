@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $product['name'] }}</h1>
    <p>Price: Rp. {{ number_format($product['price'], 0, ',', '.') }}</p>
    <p>Description: {{ $product['description'] }}</p>
</div>
@endsection
