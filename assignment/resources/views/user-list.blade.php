<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Email</th>
			<th>Password</th>
		</tr>
	</thead>
	<tbody>
	@foreach ($listUser as $user)
		<tr>
			<td>{{$user->id}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->password}}</td>
		</tr>
	@endforeach
	</tbody>
</table>