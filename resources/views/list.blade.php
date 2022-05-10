<h1>Member list</h1>

<table border="2">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Oprations</th>
    </tr>
    @foreach($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['Name']}}</td>
        <td>{{$member['Email']}}</td>
        <td>{{$member['Address']}}</td>
        <td><button type="submit">Edit</button><button type="submit">Delete</button></td>
    </tr> 
    @endforeach
</table>
