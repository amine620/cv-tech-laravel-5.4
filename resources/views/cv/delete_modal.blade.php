<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <strong>are you sure to delete the CV of : {{$itemdel->name}}</strong>
<form action="{{url('destroy/'.$itemdel->id)}}" method="POST">
    {{csrf_field()}};
    {{method_field('DELETE')}};
    <a href="{{url('cvs')}}" class="btn btn-default">No</a>
    <button type="submit" href=""  class="btn btn-danger">yes</button>
</form>
</body>
</html>