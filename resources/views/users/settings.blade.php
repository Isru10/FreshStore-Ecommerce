@extends('layouts.app')

@section('content')

<div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="margin-top:-25px; background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
                <div class="container">
                    <h1 class="pt-5">
                        Settings
                    </h1>
                    <p class="lead">
                        Update Your Account Info
                    </p>
                </div>
            </div>
        </div>




        <div class="container mt-5">
        @if (\Session::has('update'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('update') !!}</li>
                    </ul>
                </div>
        @endif
</div>





        <section id="checkout">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-sm-6">
                        <h5 class="mb-3">ACCOUNT DETAILS</h5>
                        <!-- Bill Detail of the Page -->
                        <form action="{{route('users.settings.update',$user->id)}}" class="bill-detail" method="POST">

                        @csrf
                            <fieldset>
                            
                                <div class="form-group row">
                                    <div class="col">
                                        <input name="name" value="{{$user->name}}" class="form-control" placeholder="Full Name" type="text">
                                   </div>
                                   
                                </div>
                               
                                <div class="form-group">
                                    <textarea name="address"  class="form-control" placeholder="Address">{{$user->address}}</textarea>
                                </div>
                                <div class="form-group">
                                    <input name="town" value="{{$user->town}}" class="form-control" placeholder="Town / City" type="text">
                                </div>
                                <div class="form-group">
                                    <input name="state" value="{{$user->state}}" class="form-control" placeholder="State / Country" type="text">
                                </div>
                                <div class="form-group">
                                    <input name="zip_code" value="{{$user->zip_code}}" class="form-control" placeholder="Postcode / Zip" type="text">
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <input name="email" value="{{$user->email}}" class="form-control" placeholder="Email Address" type="email">
                                    </div>
                                    <div class="col">
                                        <input name="phone_number" value="{{$user->phone_number}}" class="form-control" placeholder="Phone Number" type="tel">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="Password" class="form-control" placeholder="Password" type="password">
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
                                    <div class="clearfix">
                                </div>
                            </fieldset>
                        </form>
                        <!-- Bill Detail of the Page end -->
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endsection