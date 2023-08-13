@extends('layouts.default',['title'=>sprintf('Страница %s',$page->meta_title),'meta'=>$meta])
@section('content')
    <div class="py-4">
        <div class="flex justify-center dark:text-white">
            <h1>{{$page->title}}</h1>
        </div>
        <div class="flex justify-center dark:text-white flex-col">
            <p>{{$page->description}}</p>
        </div>
    </div>
@endsection
