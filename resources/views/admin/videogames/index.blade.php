@extends('admin.layouts.base')

@section('documentTitle')
    Home
    
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-secondary mt-4">
                    <thead>
                        <tr class="table-secondary">
                            <th>Title</th>
                            <th>Genre</th>
                            <th>Developer</th>
                            <th>Price</th>
                            <th colspan="3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($videogames as $videogame)
                        <tr>
                            <td>{{ $videogame->title }}</td>
                            <td>{{ $videogame->genre }}</td>
                            <td>{{ $videogame->developer }} </td>
                            <td>{{ $videogame->price }} €</td>
                            <td colspan="2"><a class="btn btn-danger" href="{{ route('videogames.show', $videogame->id) }}">View</a>
                            <a class="btn btn-danger" href="{{ route('videogames.edit', $videogame->id) }}" > Edit</a>
                            </td>
                            <td>
                                {{-- bottone Delete con mini Form --}}
                                <form action="{{ route('videogames.destroy', $videogame->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Delete">
                                </form>
                            </td>
                            
                        </tr>
                    @endforeach
                    </tbody>
                </table>




                </table>


            </div>

        </div>


    </div>
    
@endsection


