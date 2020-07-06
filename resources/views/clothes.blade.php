@extends('layouts.app')

@section('page-title', 'Clothes')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Clothing Item</th>
                        <th scope="col">Color</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clothes_list as $cloth)
                        <tr>
                            <td>{{ $cloth->id }}</td>
                            <td>{{ $movie->clothing_item }}</td>
                            <td>{{ $movie->color }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
