
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <form action="{{url('cvs')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group @if($errors->get('titre')) has-error @endif">
                    <label for=""></label>
                <input type="text" name="titre" placeholder="titre" class="form-control" value="{{old('titre')}}" >
               @if ($errors->get('titre'))
               @foreach ($errors->get('titre') as $message)
                <li>{{$message}}</li>
               @endforeach    
               @endif
                </div>
                <div class="form-group  @if($errors->get('presentation')) has-error @endif">
                        <label for=""></label>
                <textarea  name="presentation" placeholder="presentation" class="form-control">{{old('presentation')}}</textarea>
                @if ($errors->get('presentation'))
                @foreach ($errors->get('presentation') as $message)
                 <li>{{$message}}</li>
                @endforeach
                    
                @endif
                    </div>
                    <div class="form-group @if($errors->get('photo')) has-error @endif">
                        <label >image</label>
                        <input  class="form-control  " type="file" name="photo">
                        @if ($errors->get('photo'))
                            @foreach ($errors->get('photo') as $message)
                                <li> {{$message}}</li>
                            @endforeach
                        @endif
                    </div>

                   
                    
                        <div class="form-group">
                                <input type="submit" value="save" class="form-control btn btn-primary">
                            </div>
                                        
            </form>

        </div>
    </div>
</div>  

