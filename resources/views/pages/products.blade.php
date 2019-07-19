@extends('layouts.master')
@section('title', "Product's") 

@section('js')
    <script src="/js/pages/products.js"></script>
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Category</a></li>
        <li class="breadcrumb-item"><a href="/sub-category">Sub-Category</a></li>
        <li class="breadcrumb-item active" aria-current="page">Products</li>
    </ol> 
</nav>

<div class="alert alert-primary w-50 mx-auto mt-3 mb-2 text-center" role="alert" id="selected-guest">
</div>

<br>
<div class="container">
    <div class="row" id="container">

    </div>
</div>
@endsection