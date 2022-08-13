@extends('app')
@section('content')
@include('nav')
<h1>Services</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col"><a class="btn btn-dark" href="{{route('services.create')}}">Add</a></th>
        </tr>
    </thead>
    <tbody>
        @foreach($services as $service)
        <tr>
            <th scope="row">{{$service->id}}</th>
            <td>{{$service->name}}</td>
            <td>
                <a class="btn btn-info" href="{{route('services.edit',['service' => $service->id])}}">Edit</a>
                <form style="display:contents" method="POST"
                    action="{{route('services.destroy',['service' => $service->id])}}">
                    @method('DELETE')
                    @csrf
                    <input hidden name="service" value="{{$service->id}}">
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