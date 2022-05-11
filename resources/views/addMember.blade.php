<h1>Add Members</h1>
<form action="add" method="POST">
    @csrf
    <input type="text" name="Name" palceholder="Enter name"> <br> <br>
    <input type="text" name="Email" palceholder="Enter email"><br> <br>
    <input type="text" name="Address" palceholder="Enter address"><br> <br>
    <button type="submit">Add member</button>
</form>
