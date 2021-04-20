@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Create Dealer</h1>
@stop


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Dealer</div>
                <div class="card-body">
                    <form action="{{ route('dealers.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Dealer Name*</label>
                                    <input type="text" name="name" class="form-control" required placeholder="eg. John Doe">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email*</label>
                                    <input type="email" name="email" class="form-control" required placeholder="eg. John@doe.com">
                                </div>
                                <div class="form-group">
                                    <label for="tel">Tel.*</label>
                                    <input type="text" name="tel" class="form-control" required pattern="[0][0-9]{9}" placeholder="eg. 0948972xxx">
                                </div>
                                <div class="address">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control">
                                </div>
                                <div class="comment">
                                    <label for="comment">Comment</label>
                                <textarea name="comment" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 text-right">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary"> ADD </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
