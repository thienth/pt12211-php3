<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="{{route('cate.save')}}" method="post">
		<!-- {{csrf_field()}} -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="hidden" name="id" value="{{$model->id}}">
		<input type="text" name="name" placeholder="category name" value="{{$model->name}}">
		<br>
		<select name="parent_id">
			@foreach($cates as $c)
			<option value="{{$c->id}}" @if($c->id == $model->parent_id) selected @endif>{{$c->name}}</option>
			@endforeach
		</select>
		<button type="submit">Submit</button>
	</form>
</body>
</html>