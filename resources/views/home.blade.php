@extends('master.layout')
@section('title')
     HomeController
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif
            ini adalah halaman home
        </div>
    </div>
</div>



@endsection
