@extends('layouts.master')
@section('title', 'Sub Category')

@section('js')
<script src="js/pages/tables.js"></script>
@endsection

@section('css')
<link rel="stylesheet" href="assets/css/pages/table.css">

<style>
    
    /* 4th version manual */
    
    .items {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: space-around;
        text-align: center;

    }

    .items .item {
        padding: 10px;
        margin: 10px;
        /* border: 1px solid black; */
        flex-grow: 1;

    }

    @media (max-width: 620px) {
        .items .item {
            flex-basis: calc(100vw/5);
        }
    }

    @media only screen and (max-width: 453px) {
        .items .item {
            flex-basis: calc(100vw/8);
        }
    }


    @media only screen and (max-width: 443px) {
        .items .item {
            padding: 10px;
            flex-basis: calc(100vw/5);
        }
    } 

    /* end of manual */

/* 3rd version */
/* 
    #table-container .item {
        flex-basis: 10%;
        flex-grow: 1;
    }

    @media only screen and (max-width: 768px) {
        #table-container .item {
            flex-basis: 20%;

        }
    }

    @media only screen and (max-width: 330px) {
        #table-container .item {
            flex-basis: 25%;
        }
    } */


</style>

@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Table Selection</li>
    </ol>
</nav>
<br>
<div class="container-fluid">

    <div class="items" id="table-container">
        <!-- <div class="item card bg-success">
            <h3>2</h3>
        </div>
        <div class="item card">
            <h3>2</h3>
        </div>
        <div class="item card">
            <h3>3</h3>
        </div>
        <div class="item card">
            <h3>4</h3>
        </div>
        <div class="item card">
            <h3>5</h3>
        </div>
        <div class="item card">
            <h3>6</h3>
        </div>
        <div class="item card">
            <h3>7</h3>
        </div>
        <div class="item card">
            <h3>8</h3>
        </div> -->

    </div>

    <!-- <div class="row d-flex justify-content-between " id="table-container">

       {{--<div class="card text-center mr-2 bg-success item" >
            <div class="card-body">
                <h3>1</h3>
            </div>
        </div>
        <div class="card text-center mr-2 bg-success item" >
            <div class="card-body">
                <h3>2</h3>
            </div>
        </div>
        <div class="card text-center mr-2 bg-success item" >
            <div class="card-body">
                <h3>3</h3>
            </div>
        </div>
        <div class="card text-center mr-2 bg-success item" >
            <div class="card-body">
                <h3>4</h3>
            </div>
        </div>
        <div class="card text-center mr-2 bg-success item" >
            <div class="card-body">
                <h3>5</h3>
            </div>
        </div>
        <div class="card text-center mr-2 bg-success item" >
            <div class="card-body">
                <h3>6</h3>
            </div>
        </div>
        <div class="card text-center mr-2 bg-success item" >
            <div class="card-body">
                <h3>7</h3>
            </div>
        </div>
        <div class="card text-center mr-2 bg-success item" >
            <div class="card-body">
                <h3>8</h3>
            </div>
        </div> --}}
    </div> -->

</div>
@endsection