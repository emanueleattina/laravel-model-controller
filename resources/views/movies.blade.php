@extends('layouts.app')

@section('main')
    {{-- {{dump($movies)}} --}}
    <p>{{$title_page}}</p>
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Titolo</td>
                    <td>Titolo originale</td>
                    <td>Nazionalità</td>
                    <td>Data di uscita</td>
                    <td>Voto</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                <tr>
                    <td>{{$movie->id}}</td>
                    <td>{{$movie->title}}</td>
                    <td>{{$movie->original_title}}</td>
                    <td>{{$movie->nationality}}</td>
                    <td>{{$movie->date}}</td>
                    <td>{{$movie->vote}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection