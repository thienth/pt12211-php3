<table>
	<thead>
		<tr>
			<th>id</th>
			<th>title</th>
			<th>cate name</th>
			<th>short desc</th>
		</tr>
	</thead>
	<tbody>
		@foreach($listPost as $post)
		<tr>
			<td>{{$post->id}}</td>
			<td>{{$post->title}}</td>
			<td>{{$post->getCate()->name}}</td>
			<td>{{$post->short_desc}}</td>
		</tr>
		@endforeach
		{{$listPost->links()}}
	</tbody>
</table>