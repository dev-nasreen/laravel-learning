<h2>User login page.</h2>

<!-- @if($errors ->any())
@foreach ($errors ->all() as $err)
    <li>{{$err}}</li>
@endforeach
@endif -->
<form action="users" method="POST">
@csrf
    <input type="text" name="username" placeholder="enter user id" /> 
    <span style="color:red;">@error('username'){{$message}}@enderror</span>
    <br><br>
    <input type="password" name="userpass" placeholder="enter user password" />
     <span style="color:red;">@error('userpass'){{$message}}@enderror</span><br><br>
    <button type="submit">Login</button>
</form>
