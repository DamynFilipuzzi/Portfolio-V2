@extends('layouts.app')

@section('content')

<div class="container mb-5">
    
    <div class="card" style="width:50%; border-bottom: 1px solid #DCDCDC; border-radius: 25px; margin:auto;">
        <div class="card-body">
            <div class="mb-12">

                <div class="row justify-content-md-center">
                    <div class="col p-3 m-3">
                        <h1 class="row" style="background: linear-gradient(to right, grey, white); background-size:100% 2px; background-position:bottom 0 left 0,bottom 5px left 0; background-repeat:no-repeat;">Contact</h1>
                        <br>

                        <form class="text-center" method="POST" action=" {{ route('contact.submitForm') }}">
                            @csrf

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="firstName">First Name</label>
                                <div class="col-md-8">
                                    <input type="text" id="firstName" name="firstName" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="lastName">Last Name</label>
                                <div class="col-md-8">
                                    <input type="text" id="lastName" name="lastName" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="email">Email</label>
                                <div class="col-md-8">
                                    <input type="text" id="email" name="email" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="float-left" for="message">Message</label>
                            </div>

                            <div class="form-group row">
                                    <textarea class="w-100" rows="6" type="text" id="message" name="message" required></textarea>
                            </div>

                            <div class="form-group-row">
                                <div class="col">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection