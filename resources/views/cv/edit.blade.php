@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{url('cvs/'.$cvs->id)}}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
                <div class="form-group @if($errors->get('titre')) has-error @endif">
                    <label for=""></label>
                <input type="text" name="titre" placeholder="titre" class="form-control" value="{{$cvs->titre}}">
                @if ($errors->get('titre'))
                    @foreach ($errors->get('titre') as $message)
                   <li>{{$message}}</li>
                    @endforeach
                @endif
                </div>
                <div class="form-group @if($errors->get('presentation')) has-error @endif">
                        <label for=""></label>
                <textarea  name="presentation" placeholder="presentation" class="form-control">{{$cvs->presentation}}</textarea>
                @if ($errors->get('presentation'))
                @foreach ($errors->get('presentation') as $message)
               <li>{{$message}}</li>
                @endforeach
            @endif
            </div>
            <div class="form-group @if($errors->get('photo')) has-error @endif">
              <label for="">photo</label>
            <input type="file" value="{{$cvs->photo}}" name="photo">
            @if ($errors->get('photo'))
            @foreach ($errors->get('photo') as $message)
                       {{$message}}    
            @endforeach
                
            @endif
            </div>
                    </div>
                    
                        <div class="form-group">
                                <input type="submit" value="save" class="form-control btn btn-primary">

                            </div>
                                        
            </form>

        </div>
    </div>
</div>  
@endsection

