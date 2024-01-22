@extends('layouts.master')
@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h1>Login</h1>
                    <form action="{{ route('login.submit') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="" class="form-label">User Name</label>
                            <input name="name" type="text" class="form-control" />
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">User Email</label>
                            <input name="email" type="email" class="form-control" />
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">User Password</label>
                            <input name="password" type="text" class="form-control" />
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
