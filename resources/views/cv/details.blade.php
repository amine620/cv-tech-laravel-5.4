@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{url('details/'.$cvs->id)}}" method="GET">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>titre</th>
                        <th>presentation</th>
                        
                      </tr>
                    </thead>
                   <tbody>
                       <tr>
                       <th>{{$cvs->titre}}</th>
                       <th>{{$cvs->presentation}}</th>
                       </tr>
                   </tbody>
                </table>        
                             
                      <div class="form-group">
                                <a  class="form-control btn btn-primary" href="{{url('cvs')}}">back</a>

                            </div>
                                        
            </form>

        </div>
    </div>
</div>  
@endsection

