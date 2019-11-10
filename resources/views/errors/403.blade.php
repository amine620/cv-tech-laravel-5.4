@extends('layouts.app')
@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center    ">
            <h2>
                this page not authorize for you
            </h2>
        <a href="{{url('cvs')}}" class="btn btn-primary">back</a>
        </div>
    </div>
</div>

@endsection