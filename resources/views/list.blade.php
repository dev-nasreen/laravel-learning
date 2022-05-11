<div class="member-table">
<h1>Member list</h1>
<a href="/add">Add new member</a>
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
        <td><a href="">Edit</a><a href={{"delete/".$member['id'] }}>Delete</a> 
            </td>
    </tr> 
    @endforeach
</table>

</div>


<style>
    .member-table{
        width:100%;
        max-width:750px;
        margin:50px auto;
        background-color:#faedcd;
        text-align:center;
        display:flex;
        align-items:center;
        justify-content:center;
        flex-direction:column;
        color:#000814;
        padding-bottom:50px;
    }
    table{
        color:#000814;
    }
    a{
        display:inline-block;
        background-color:black;
        color:#fff;
        padding: 15px 30px;
        border-radius:8px;
        font-size:24px;
        text-decoration:none;
    }
</style>
