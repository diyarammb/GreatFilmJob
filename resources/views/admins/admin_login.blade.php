<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/theme.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">
  </head>

<body>
@if(count($error)>0)
<div class="alert alert-danger">

@foreach($error->all() as errrors)
<li>{{$errors}} </li>

@endforeach
</div>

@endif

<form action="{{url(administration_login)}}">

<label for=""> UserName</label>
<input type="text" name="username" class="form-control">
<label for="">Password</label>
<input type="password" name="password" class="form-control">
<input type="submit" class="btn btn-success">
</form>

</body>
<html>
