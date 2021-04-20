@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">View dealer</h1>
@stop


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dealer view</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td style="width:150px">Dealer Name</td>
                            <td>{{ $dealer->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $dealer->name }}</td>
                        </tr>
                        <tr>
                            <td>Tel</td>
                            <td>{{ $dealer->tel }}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{{ $dealer->address }}</td>
                        </tr>
                        <tr>
                            <td>Comment</td>
                            <td>{{ $dealer->comment }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('dealers.index') }}" class="btn btn-primary">Back</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
