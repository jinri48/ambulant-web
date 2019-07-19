@extends('layouts.master')
@section('title', 'Category')  

@section('js')
    <script src="js/pages/index.js"></script>
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb"> 
        <li class="breadcrumb-item active" aria-current="page">Category</li>
    </ol>
</nav>

<div class="alert alert-primary w-50 mx-auto mt-3 mb-2 text-center" role="alert" id="selected-guest">
</div>

<br>
<div class="container">
    <div class="row" id="container">

        {{-- <div class="col-md-4">
            <a href="#ask-1" class="card mrg-btm-15 scroll-to">
                <div class="card-block padding-25">
                    <ul class="list-unstyled list-info">
                        <li> 
                            <div class="info"  style="padding-left: 0px;">
                                <b class="text-dark font-size-18">Category 1</b>
                            </div>
                        </li>
                    </ul>
                </div>
            </a>
        </div> --}}

    </div>
</div>

@endsection