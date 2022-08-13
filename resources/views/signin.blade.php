@extends('app')
@section('content')
<div class="d-flex justify-content-center align-items-center mt-5">
    <form action="/validate" method="POST">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Please confirm you are an admin</h1>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>
</div>
@endsection