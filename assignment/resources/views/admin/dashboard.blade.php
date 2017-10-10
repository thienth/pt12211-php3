@php
use Illuminate\Support\Facades\Auth;
@endphp

<h2>Hello, Mr.{{Auth::user()->name}} <a href="{{route('logout')}}" title="">Logout</a></h2>

<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Cate name</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($cates as $c)
		<tr>
			<td>{{$c->id}}</td>
			<td>{{$c->name}}</td>
			<td>
				<a href="{{route('category.remove', 
						['id' => $c->id])}}" title="">
					remove
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>