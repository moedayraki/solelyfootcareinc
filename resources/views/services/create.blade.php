@extends('app')
@section('content')
@include('nav')
<div class="mt-5">
    <form method="POST" action="{{route('services.store')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <textarea name="description" class="form-control">

            </textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Length</label>
            <input type="text" name="length" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cost</label>
            <input type="text" name="cost" class="form-control" id="exampleInputEmail1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('services.index')}}" type="submit" class="btn btn-danger">Cancel</a>
    </form>
</div>
@endsection