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
    All customers
@endsection</title>
</head>
<body>
<div class="card shadow mb-4 col-12">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Customers </h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>phone</th>
                                        <th>edit</th>
                                        <th>block</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>phone</th>
                                        <th>edit</th>
                                        <th>block</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($customers as $Customer)
                                    <tr>
                                        <td>{{$Customer['id']}}</td>
                                        <td>{{$Customer['name']}}</td>
                                        <td>{{$Customer['email']}}</td>
                                        <td>{{$Customer['phone']}}</td>
                                        <td><a href="{{route('editCustomer')}}" class="btn btn-secondary  btn-sm">
                                        <i class="bi bi-pencil"></i></a></td>
                                        <td><a href="#" class="btn btn-secondary btn-sm  ">
                                        <i class="bi bi-slash-circle"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                           
                            <a href="{{route('addCustomer')}}" class="btn btn-secondary btn-icon-split"><span class="text">add</span></a>
                        </div>
                    </div>
             

            </div>
</body>
</html>
@endsection