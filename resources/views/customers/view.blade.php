@extends('adminlte::page')

@section('title', 'TLP')

@section('content_header')
    <h1 class="m-0 text-dark">Customer details</h1>
@stop


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Customer details</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td style="width:150px">customer Name</td>
                            <td>{{ $customer->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $customer->name }}</td>
                        </tr>
                        <tr>
                            <td>Tel</td>
                            <td>{{ $customer->tel }}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{{ $customer->address }}</td>
                        </tr>
                        <tr>
                            <td>Comment</td>
                            <td>{{ $customer->comment }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('customers.index') }}" class="btn btn-primary">Back</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
