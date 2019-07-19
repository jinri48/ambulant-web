@extends('layouts.master')
@section('title', 'Sub Category')  

@section('js')
    <script src="js/pages/table-selection.js"></script>
@endsection

@section('css')
<style>
    .boxx {
        border: 1px solid gray;
    }
 
    .number {
    /* 
    position: absolute; 
    top: 0;
    left: 0; 
     */
    border-radius: 0;
    height: 35px;
    width: fit-content;
    padding-top: 5px;
    font-size: 1.5em;
}

    .centerr{
        margin-left: auto;
        margin-right: auto;
    }

</style>
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Table Capacity</li> 
    </ol>
</nav> 
<br>
<div class="container">
    <div class="row " id="table-container">
        <div class="table-for col-md-3 card col-sm-4 text-center mr-3 " data-tablefor="2">  
            <div class="card-body">
                <span style="color:#696969;font-weight:bold">For Two </span> 
            </div>
        </div>

        <div class="table-for col-md-3 card col-sm-4 text-center mr-3"  data-tablefor="4">  
            <div class="card-body">
                <span style="color:#696969;font-weight:bold" >For Four </span> 
            </div>
        </div>

        <div class="table-for col-md-3 card col-sm-4 text-center mr-3"  data-tablefor="6">  
            <div class="card-body">
                <a href="/tables">
                <span style="color:#696969;font-weight:bold">For Six </span> 
                </a>
            </div>
        </div>

        <div class="table-for col-md-3 card col-sm-4 text-center mr-3"  data-tablefor="8">  
            <div class="card-body">
                <span style="color:#696969;font-weight:bold">For Eight </span> 
            </div>
        </div>

    </div>
</div>
@endsection
