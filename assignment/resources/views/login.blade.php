<form action="{{route('login')}}" method="post" >
	{{csrf_field()}}
	<input type="text" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<button type="submit">Login</button>
</form>