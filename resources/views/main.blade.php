@extends('layouts.default',['title'=>'Список страниц'])
@section('content')
    <div class="dark:text-white">
        <div>
            <h1>Список страниц:</h1></div>
        <div>
            <ul>
                @foreach($pages as $page)
                    <li><a href="/pages/{{$page->slug}}">{{$page->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

