@extends('layouts.common.app')

@section('content')
    <!-- Cart -->
    @include('layouts.components.cart')

    <!-- Slider -->
    @include('layouts.components.slider')

    <!-- Banner -->
    @include('layouts.components.banner')

    <!-- Product -->
    @include('layouts.components.product')
@endsection
