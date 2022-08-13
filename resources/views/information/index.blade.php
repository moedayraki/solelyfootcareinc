@extends('app')
@section('content')
@include('nav')
<h1>Information</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col"><a class="btn btn-dark" href="{{route('information.create')}}">Add</a></th>
        </tr>
    </thead>
    <tbody>
        @foreach($information as $info)
        <tr>
            <th scope="row">{{$info->id}}</th>
            <td>{{$info->name}}</td>
            <td>
                <a class="btn btn-info" href="{{route('information.edit',['information' => $info])}}">Edit</a>
                <form style="display:contents" method="POST"
                    action="{{route('information.destroy',['information' => $info->id])}}">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">
                        Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script>

</script>
@endsection