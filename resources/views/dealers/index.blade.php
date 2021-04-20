@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @elseif (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">Dealer list</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                        </div>
                        <div class="col-4">
                            <form action="{{ route('dealers.index') }}">
                                <div class="form-inline">
                                    <input type="text" name="search" class="form-control">
                                    <button class="btn btn-primary mx-2" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-2">

                        <div class="col-12">
                            <table class="table">
                                <thead class="table-primary">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Tel</th>
                                    <th>Comment</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($dealers as $dealer)
                                        <tr>
                                            <td>{{ $dealer->id }}</td>
                                            <td>{{ $dealer->name }}</td>
                                            <td>{{ $dealer->email }}</td>
                                            <td>{{ $dealer->tel }}</td>
                                            <td>{{ $dealer->comment }}</td>
                                            <td>
                                                {{-- <a href="" class="btn btn-sm btn-danger">Delete</a> --}}
                                                <a href="{{ route('dealers.edit',$dealer->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="{{ route('dealers.view',$dealer->id) }}" class="btn btn-sm btn-info">View</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
