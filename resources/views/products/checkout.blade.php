@extends('layouts.app')

@section('content')
<div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="margin-top:-25px; background-image: url('{{ asset('assets/img/bg-header.jpg')}}');">
                <div class="container">
                    <h1 class="pt-5">
                        Checkout
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>
                </div>
            </div>
        </div>

        <section id="checkout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-7">
                        <h5 class="mb-3">BILLING DETAILS</h5>
                        <!-- Bill Detail of the Page -->
                        <form method="POST" action="{{route('products.proccess.checkout')}}" class="bill-detail">
                            
                            <fieldset>
                            @csrf
                                <div class="form-group row">
                                    <div  class="col">
                                        <input name="name" class="form-control" placeholder="Name" type="text">
                                    </div>
                                    <div class="col">
                                        <input name="last_name"  class="form-control" placeholder="Last Name" type="text">
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <input class="form-control" placeholder="Company Name" type="text">
                                </div> -->
                                <div class="form-group">
                                    <textarea name="address"  class="form-control" placeholder="Address"></textarea>
                                </div>
                                <div class="form-group">
                                    <input name="town"  class="form-control" placeholder="Town / City" type="text">
                                </div>
                                <div class="form-group">
                                    <input name="state"  class="form-control" placeholder="State / Country" type="text">
                                </div>
                                <div class="form-group">
                                    <input name="zip_code"  class="form-control" placeholder="Postcode / Zip" type="text">
                                </div>


                                <div class="form-group row">
                                    <div class="col">
                                        <input name="email"  class="form-control" placeholder="Email Address" type="email">
                                    </div>
                                    <div class="col">
                                        <input name="phone_number"  class="form-control" placeholder="Phone Number" type="tel">
                                    </div>
                                </div>




                                <div class="form-group row">
                                    <div class="col">
                                        <input name="user_id"  class="form-control" value="{{Auth::user()->id}}" placeholder="user_id" type="text">
                                    </div>
                                    <div class="col">
                                        <input name="price"  class="form-control" value="{{$checkoutSubtotal+20}}" type="tel">
                                    </div>
                                </div>




                              
                                <div class="form-group">
                                    <textarea name="order_notes"  class="form-control" placeholder="Order Notes"></textarea>
                                </div>


                                <div class="form-group">
                                    <button name="submit"  class="form-control btn btn-primary" type="submit">Submit</button>
                                </div>
                            </fieldset>
                        </form>
                        <!-- Bill Detail of the Page end -->
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <div class="holder">
                            <h5 class="mb-3">YOUR ORDER</h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Products</th>
                                            <th class="text-right">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cartItems as $product )
                                        <tr>
                                            <td>
                                                {{$product->name}}*{{$product->qty}}
                                            </td>
                                            <td class="text-right">
                                                USD {{$product->subtotal}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                    <tfooter>
                                        <tr>
                                            <td>
                                                <strong>Cart Subtotal</strong>
                                            </td>
                                            <td class="text-right">
                                                Rp {{$checkoutSubtotal}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Shipping</strong>
                                            </td>
                                            <td class="text-right">
                                                USD 20.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>ORDER TOTAL</strong>
                                            </td>
                                            <td class="text-right">
                                                <strong>USD {{$checkoutSubtotal+20}}</strong>
                                            </td>
                                        </tr>
                                    </tfooter>
                                </table>
                            </div>

                         
                        </div>
                        <!-- <p class="text-right mt-3">
                            <input checked="" type="checkbox"> I’ve read &amp; accept the <a href="#">terms &amp; conditions</a>
                        </p> -->
                        <!-- <a href="#" class="btn btn-primary float-right">PROCEED TO CHECKOUT <i class="fa fa-check"></i></a> -->
                        <div class="clearfix">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection