<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        @foreach ($cvs as $item)
       <div class="">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
          <img src="{{asset('storage/'.$item->photo)}}" alt="..." style="margin-left:0px;width:263px;height:227px;">
            <div class="caption">
            <h3>{{$item->user->name}}</h3>
            <p>{{$item->titre}}</p>
            <p>{{$item->presentation}}</p>
            <form action="{{url('delete/'.$item->id)}}" method="POST">
               {{ csrf_field()}}
              {{  method_field('DELETE')}}
              <div class="form-group">
                  <a href="{{url('details/'.$item->id)}}" class="btn btn-success" role="button">details</a>   
                  <a href="{{url('edit/'.$item->id)}}" class="btn btn-warning" role="button">edit</a>   
                    @can('delete',$item)
                      <button type="submit" class="btn btn-danger">delete</button>
                    @endcan
                     
              </div>
           </form>
          
            </div>
          </div>
        </div>
      </div> 
      





    @endforeach
    
</body>
</html>