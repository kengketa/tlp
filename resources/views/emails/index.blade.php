@extends('adminlte::page')

@section('title', 'TLP')

@section('content_header')
    <h1 class="m-0 text-dark">Sending Email</h1>
@stop
@section('css')
<link href="/vendor/select2/css/select2.min.css" rel="stylesheet" />
<link href="/vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css" rel="stylesheet" />

@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Email detail</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @elseif (Session::has('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <form action="{{ route('emails.send') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="emails">Add customer emails</label>
                                                <select name="emails[]" class="form-control" multiple="multiple" id="select_emails" required>
                                                    @foreach ($customers as $customer)
                                                        <option value="{{ $customer->email }}">{{ $customer->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="Content"></label>
                                                <textarea name="content" id="" cols="30" rows="10" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script language="javascript" type="text/javascript" src="/vendor/select2/js/select2.min.js"></script>


<script>
    $(document).ready(function() {
        $('.select2').select2();
            $('#select_emails').select2({
                placeholder: 'Add customers'
            });
    });
</script>
@endsection

