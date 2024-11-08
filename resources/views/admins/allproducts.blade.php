@extends('layouts.admin')
@section('content')

<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">

            <div class="container mt-5">
        @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
        @endif
            </div>



            <div class="container mt-5">
        @if (\Session::has('delete'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('delete') !!}</li>
                    </ul>
                </div>
        @endif
            </div>



              <h5 class="card-title mb-4 d-inline">Products</h5>
              <a  href="{{route('products.create')}}" class="btn btn-primary mb-4 text-center float-right">Create Products</a>
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">product</th>
                    <th scope="col">price in USD</th>
                    <!-- <th scope="col">status</th> -->
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>

                @foreach ( $allProducts as $product )
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                     <!-- <td><a href="#" class="btn btn-success  text-center ">verfied</a></td> -->
                     <td><a href="{{route('products.delete',$product->id) }}" class="btn btn-danger  text-center ">delete</a></td>
                  </tr>

                @endforeach
                  
                    
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>

      @endsection