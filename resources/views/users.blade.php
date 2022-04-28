<x-header data="this is user header."/>

<h2>User page.</h2>

@include('inner')

@foreach ($users as $item)
    <h3>{{$item}}</h3>
@endforeach;

<script>
    var data =@json($users);
    console.warn(data[0]);
</script>
