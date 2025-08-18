@extends('client.layouts.common.app')

@section('content')
    <!-- Cart -->
    @include('client.layouts.components.cart')

    <!-- Slider -->
    @include('client.layouts.components.slider')

    <!-- Banner -->
    @include('client.layouts.components.banner')

    <!-- Product -->
    @include('client.layouts.components.product')
@endsection
