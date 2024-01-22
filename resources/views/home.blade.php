@extends('layouts.master')

@section('content')
    <main role="main" class="container">
        <h1 class="mt-5 text-danger">Home</h1>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        {{-- <div class="row mt-5">
            @foreach ($blogs as $blog)
                @if ($blog['status'] == 1)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h2>{{ $blog['title'] }}</h2>
                            <p>{{ $blog['content'] }}</p>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h2>{{ $blog['title'] }}</h2>
                            <p>{{ $blog['content'] }}</p>
                            <div class="btn-sm btn-warning">Pending</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> --}}
        <div class="row mt-5">
            @for ($i = 0; $i < count($blogs); $i++)
                @if ($blogs[$i]['status'] == 1)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h2>{{ $blogs[$i]['title'] }}</h2>
                                <p>{{ $blogs[$i]['content'] }}</p>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h2>{{ $blogs[$i]['title'] }}</h2>
                                <p>{{ $blogs[$i]['content'] }}</p>
                                <div class="btn-sm btn-warning">Pending</div>
                            </div>
                        </div>
                    </div>
                @endif
            @endfor
        </div>
    </main>
@endsection
