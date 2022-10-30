@extends('layout.nav')


@section('name')
Yafa Khateebs
@endsection
@section('cont')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title')
    Add customer
@endsection</title>
</head>
<body>
<div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit customer!</h1>
                            </div>
                            <form class="user" action="{{route('insertCustomer')}}" method="POST" name="addCustomerForm">
                                @csrf
                                <div class="form-grou mb-3">
                                    <input type="text" name="name" class="form-control form-control-user" value = "{{old('name')}}" id="exampleFirstName" placeholder="Name">
                                    <span class="text-danger">
                                        @error('name') {{$message}} @enderror
                                    </span>
                                </div>
                               
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" value = "{{old('email')}}" id="exampleInputEmail" placeholder="Email Address">
                                    <span class="text-danger">
                                        @error('email') {{$message}} @enderror
                                    </span>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        <span class="text-danger">
                                        @error('password') {{$message}} @enderror
                                    </span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="rePassword" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                                        <span class="text-danger">
                                        @error('rePassword') {{$message}} @enderror
                                    </span>
                                    </div>
                                    <div class="form-group mt-3">
                                    <input type="tel" name="phone" class="form-control form-control-user" value = "{{old('phone')}}" id="exampleInputPhone" placeholder="Phonr number">
                                    <span class="text-danger">
                                        @error('phone') {{$message}} @enderror
                                    </span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Add customer</button>
    
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>
@endsection