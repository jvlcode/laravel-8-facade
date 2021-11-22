<h3>User Registration</h3>
<form method="POST" action="/user">
    <label for="">Name:<input type="text" name="name" /></label><br>
    <label for="">Phone:<input type="text" name="phone" /></label><br>
    <label for="">Password:<input type="text" name="password" /></label><br>
    <label for="">Address:<input type="text" name="address" /></label><br>
    <label for="">State:<input type="text" name="state" /></label><br>
    <label for="">City:<input type="text" name="city" /></label><br>
    @csrf
    <button type="submit">Signup</button>
</form>
