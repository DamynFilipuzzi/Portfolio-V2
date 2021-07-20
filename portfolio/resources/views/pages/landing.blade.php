@extends('layouts.app')

@section('content')

<div class="container mb-5">
    
        <div class="card" style="width:100%; border-bottom: 1px solid #DCDCDC">
            <div class="card-body">
                <div class="mb-12">

                    <div class="row justify-content-md-center">
                        <div class="col col-lg-5">
                            <img class="rounded-circle float-left shadow p-1 mb-5 bg-white rounded ratio ratio-1x1" alt="Portfolio Picture" src="{{ asset('img/profilepicCropped.jpg') }}" data-holder-rendered="true">
                        </div>
                        <div class="col">
                            <h1 class="row" style="background: linear-gradient(to right, grey, white); background-size:100% 2px; background-position:bottom 0 left 0,bottom 5px left 0; background-repeat:no-repeat;">Welcome</h1>
                            <br>
                            <p class="row m-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <br>
                            <p class="row m-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

</div>

<style>
.rounded-circle{
    width:100%;
}
</style>

@endsection

