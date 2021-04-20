@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Dealer</div>
                <div class="card-body">
                    <form action="{{ route('dealers.update',$dealer->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Dealer Name*</label>
                                    <input type="text" name="name" class="form-control" required placeholder="eg. John Doe" value="{{ $dealer->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email*</label>
                                    <input type="email" name="email" class="form-control" required placeholder="eg. John@doe.com" value="{{ $dealer->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="tel">Tel.*</label>
                                    <input type="text" name="tel" class="form-control" required pattern="[0][0-9]{9}" placeholder="eg. 0948972xxx" value="{{ $dealer->tel }}">
                                </div>
                                <div class="address">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control" value="{{ $dealer->address }}">
                                </div>
                                <div class="comment">
                                    <label for="comment">Comment</label>
                                <textarea name="comment" id="" cols="30" rows="5" class="form-control">{{$dealer->comment }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 text-right">
                            <div class="col-12">
                                <a class="btn btn-primary" href="{{ route('dealers.index') }}">Back</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
