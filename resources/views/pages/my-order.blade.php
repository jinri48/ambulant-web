@extends('layouts.master')
@section('title', 'My Order')  

@section('css')
<link rel="stylesheet" href="/css/plugins/jquery-confirm.min.css" /> 
<style>

</style>
@endsection 
 
@section('js') 
    <script src="/js/plugins/jquery-confirm.min.js"></script>
    <script src="js/pages/my-order.js"></script>
@endsection 
 
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb"> 
        <li class="breadcrumb-item active" aria-current="page">My Order</li>
    </ol>
</nav>
<br>
<div class="container">
    <div class="row" id="container">
        <div class="col-md-12 text-center if-has-no-pending-order" style="display:none;">
            <span class="font-size-30">:(</span>
            <div>Empty</div>
        </div>
        <div class="col-md-12 if-has-pending-order" style="display:none;">
            <div class="card">
                <div class="card-heading">
                    <h4 class="card-title inline-block pdd-top-5">OS #: <i id="order-slip-id">null</i></h4>
                    <button class="btn-print-order-slip btn btn-success btn-sm pull-right no-mrg">
                            <i class="ti-printer"></i> Print
                    </button> 
                    <button  class="btn-finish-transaction btn btn-primary btn-sm pull-right ">
                            Finish Transaction
                    </button>
                    {{-- <a href="#" class="btn btn-primary pull-right no-mrg">Finish Transaction</a> --}}
                </div>
                <div class="pdd-horizon-20 pdd-vertical-5">
                    <div class="overflow-y-auto relative scrollable ps-container ps-theme-default" style="" data-ps-id="c9cd0c8f-1e9a-d3fd-29e3-2992cdf98afb">
                        <table class="table table-lg table-hover">
                            <tbody id="os-container">
                                <!--
                                <tr>
                                    <td width="">
                                        <div class="list-info">
                                            {{-- <img class="thumb-img" src="assets/images/avatars/thumb-1.jpg" alt=""> --}}
                                            <div class="thumb-img font-size-20">
                                                5x
                                            </div>
                                            <div class="info">
                                                <span class="title">CHEESEDOG COMBO W/ 12OZ C</span>
                                                <span class="sub-title">+ 1 x COCA COLA SOFTDRINK (PHP 0.00)</span>
                                                <span class="sub-title">+ 1 x COCA COLA SOFTDRINK (PHP 0.00)</span>
                                                <span class="sub-title">+ 1 x COCA COLA SOFTDRINK (PHP 0.00)</span>
                                                <span class="sub-title">+ 1 x COCA COLA SOFTDRINK (PHP 0.00)</span>
                                            </div>
                                        </div>
                                    </td> 
                                    <td width="30%" class="text-right">
                                        <div class="relative mrg-top-10">  
                                            <span class="pdd-right-20">PHP 0.00</span> 
                                            <button class="btn btn-info btn-sm">
                                                <i class="ti-pencil"></i>
                                            </button>
                                            <button class="btn btn-danger btn-sm">
                                                <i class="ti-trash"></i>
                                            </button>
                                        </div> 
                                    </td>
                                </tr>  
                                -->
                            </tbody>
                        </table>
                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                </div>
                <div class="card-footer d-none d-md-inline-block">
                    <div class="text-right">
                        <div class="row">
                            <div class="col-md-10 ml-auto mr-auto">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="pdd-vertical-5">
                                            <p  class="no-mrg-btm"><b class="text-dark font-size-16">Sub Total </b > <i class="font-size-16" id="sub-total">0.00</i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 if-has-pending-order" style="display:none;">
                <div class="card">
                    <div class="card-heading">
                        <h4 class="card-title">Customer Detail(s)</h4>
                    </div>
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mrg-top-1">
                                    <div class="form-group">
                                        <label for="head-count">No. of Guest(s)</label>
                                        <div class="input-group input-group-sm"> 
                                            <input id="head-count" type="text" class="form-control input-sm" placeholder="Qty" value="1" disabled="" >
                                            <div class="input-group-append" id="button-addon4">
                                                <button class="btn btn-default btn-xs" type="button" id="btn-head-count-minus"><i class="ti-minus"></i></button>
                                                <button class="btn btn-default" type="button" id="btn-head-count-plus"><i class="ti-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                        
                                </div>
                                {{-- <div class="mrg-top-1">
                                    <div class="form-group">
                                        <label for="head-count">TABLE NO.</label>
                                        <div class="input-group input-group-sm"> 
                                            <input id="table-not" type="text" class="form-control input-lg" placeholder="Enter Table No."  >
                                             
                                        </div>
                                    </div> 
                                </div> --}}
                            </div>
                            <div class="col-md-6">

                                <div class="mrg-top-1">
                                    <div class="form-group">
                                        <label for="head-count">TABLE NO.</label>
                                        <h1 id="table-no" class="text-dark">0</h1>
                                        {{-- <div class="input-group input-group-sm"> 
                                            <input id="table-no" type="text" class="form-control input-lg" placeholder="Enter Table No."  >
                                                
                                        </div> --}}
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">Change Table</button>
                                    </div> 
                                </div>

                                <!--
                                <div class="mrg-top-1">
                                    <div class="form-group">
                                        <label for="mobile-number">Search Customer</label>
                                        <div class="input-group input-group-sm"> 
                                            <input id="mobile-number" type="text" class="form-control input-sm" placeholder="Enter mobile number" value="" >
                                            <div class="input-group-append" id="button-addon4">
                                                <button class="btn btn-default btn-xs" type="button" id="btn-search"><i class="ti-search"></i> Search</button>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card"> 
                                            <div class="card-body">
                                                    <div id="hide-customer" style="display:none;">
                                                        <div class="row">
                                                            <div class="col-md-12 text-center">
                                                                <span class="font-size-30">:(</span>
                                                                <div>No record was found</div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div id="show-customer" style="display:none;">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <ul class="list-unstyled list-info">
                                                                    <li>
                                                                        <span class="thumb-img pdd-top-10">
                                                                                <i class="ti-user font-size-30"></i>
                                                                            </span>
                                                                        <div class="info">
                                                                            <b class="text-dark font-size-16">Name</b>
                                                                            <p id="customer-name">...</p>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <ul class="list-unstyled list-info">
                                                                    <li>
                                                                        <span class="thumb-img pdd-top-10">
                                                                                <i class="ti-gift font-size-30"></i>
                                                                            </span>
                                                                        <div class="info">
                                                                            <b class="text-dark font-size-16">Earned Point's</b>
                                                                            <p id="customer-points">0.00</p>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div> 
                                                        </div>
                                                        {{-- <div class="row">
                                                            <div class="col-md-12">
                                                                <ul class="list-unstyled list-info">
                                                                    <li>
                                                                        <span class="thumb-img pdd-top-10">
                                                                                <i class="ti-wallet font-size-30"></i>
                                                                            </span>
                                                                        <div class="info">
                                                                            <b class="text-dark font-size-16">Wallet Balance</b>
                                                                            <p id="customer-wallet">0.00</p>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div> 
                                                        </div> --}}
                                                    </div>
                                                    
                                            </div>
                                    </div>
                                </div>
                                -->

                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer border top">
                        <button id="btn-save-changes"  class="btn btn-primary btn-sm pull-right ">
                            Save changes
                        </button>
                        {{-- <ul class="list-unstyled list-inline text-right pdd-vertical-5">
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-flat">Action 1</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-flat">Action 2</a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
        </div>
    </div>
</div> 


<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <a class="modal-close" href="#" data-dismiss="modal">
                    <i class="ti-close"></i>
                </a>

                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <h4>Under Construction</h4>
                </div>

                <div class="padding-15">
                    <div class="row" id="table-container">

                        

                        <div class="col-md-3 card col-sm-4 text-center mr-3">
                            <div class="card-body">
                                <span class="badge badge-pill badge-warning namber" >0</span>
                                <img data-id="'+v.id+'" src="/assets/images/table.png" class="img-fluid tbl-order-guest" alt="Responsive image">
                            </div>
                        </div> 
                        <div class="col-md-3 card col-sm-4 text-center mr-3">
                            <div class="card-body">
                                <span class="badge badge-pill badge-success namber" >1</span>
                                <img data-id="'+v.id+'" src="/assets/images/table.png" class="img-fluid tbl-order-guest" alt="Responsive image">
                            </div>
                        </div> 
                        {{-- <div class="ml-auto col-md-5">
                            <h3 class="mrg-btm-20 mrg-top-130">Download App</h3>
                            <p>Let me see your identification. You don't need to see his identification. We don't need to see his identification. These are not the droids.</p>
                            <div class="mrg-top-20">
                                <a href="#" data-dismiss="modal" class="btn btn-info">Noted!</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <img class="img-fluid mrg-horizon-auto" src="assets/images/others/img-2.png" alt="">
                        </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> 
@endsection