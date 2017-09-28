<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<form action="{{ route('post.save') }}" method="post" class="col-sm-8 col-sm-ofset-2">
			{{csrf_field()}}
			
			<div class="form-group">
				<label for="">Tiêu đề</label>
				<input type="text" name="title" value="{{old('title')}}"
				class="form-control" placeholder="Tiêu đề">
				@if ($errors)
					<span class="text-danger">{{$errors->first('title')}}</span>
				@endif
			</div>
			
			<div class="form-group">
				<label for="">Danh mục</label>
				<select name="cate_id" class="form-control">
					@foreach ($listCate as $c)
						<option value="{{$c->id}}">{{$c->name}}</option>}
					@endforeach
				</select>
				@if ($errors)
					<span class="text-danger">{{$errors->first('cate_id')}}</span>
				@endif
			</div>	

			<div class="form-group">
				<label for="">Mô tả ngắn</label>
				<textarea name="short_desc" class="form-control"></textarea>
				@if ($errors)
					<span class="text-danger">{{$errors->first('short_desc')}}</span>
				@endif
			</div>

			<div class="form-group">
				<label for="">Nội dung</label>
				<textarea name="content" class="form-control"></textarea>
				@if ($errors)
					<span class="text-danger">{{$errors->first('content')}}</span>
				@endif
			</div>
			
			<div class="form-group">
				<label for="">Tác giả</label>
				<input type="text" name="author" value=""
				class="form-control" placeholder="Tác giả">
				@if ($errors)
					<span class="text-danger">{{$errors->first('author')}}</span>
				@endif
			</div>
			
			<div class="form-group">
				<label for="">Lượt xem</label>
				<input type="number" name="views" value=""
				class="form-control" placeholder="Lượt xem">
			</div>
			<div class="text-center">
				<a href="{{ route('post.list') }}" class="btn btn-danger">Cancel</a>
				<button type="submit" class="btn btn-success">Save</button>
			</div>
		</form>


	</div>
</body>
</html>