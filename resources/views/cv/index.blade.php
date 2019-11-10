@extends('layouts.app')


@section('content')

  
  
      <div class="pull-right">
        @include('partial.modal')</div>
<table class="table table-hover">
        <thead>
          <tr>
              <th>crée par</th>
            <th>titre</th>
            <th>presentation</th>
            <th>date de creation</th>
            <th>operations</th>
          </tr>
        </thead>
        @foreach ($cvs as $item)
         <tbody>
             <tr>
             <th>{{$item->user->name}}</th>
             <th>{{$item->titre}}</th>
             <th>{{$item->presentation}}</th>
             <th>{{$item->created_at}}</th>

             <th>
             <form action="{{url('delete/'.$item->id)}}" method="POST">
                {{csrf_field()}};
                {{method_field('DELETE')}};
             <a href="{{url('details/'.$item->id)}}" class="btn btn-primary">Details</a>
             <a href="{{url('edit/'.$item->id)}}" class="btn btn-default">Edit</a>
             @can('delete',$item)
                 <button type="submit" href=""  class="btn btn-danger">Delete</button>
             @endcan
            </form>
                
                 
             </th>
             </tr>
         </tbody>
            
        @endforeach
        </table>
       

    
@endsection