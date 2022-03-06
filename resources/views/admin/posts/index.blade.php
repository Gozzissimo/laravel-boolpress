@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                Posts
            </h1>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                    <th colspan="3" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)    
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->updated_at }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.posts.show'), $post->slug }}">View</a>
                        </td>
                        <td>
                            <a class="btn btn-secondary" href="{{ route('admin.posts.edit'), $post->slug }}">Edit</a>
                        </td>
                        <td>
                            Delete
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection