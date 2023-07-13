@extends('layouts.main')
{{--@section('title') {{ $categories['title'] }} - @parent @stop--}}
@section('content')
    <h2>Categories list</h2> <br />
    @forelse($categoriesList as $categories)
        <div>
            <h4><a href="{{ route('user.news.index') }}">{{ $categories['title'] }}</a></h4>
        </div><hr /><br />
    @empty
        <h2>Категорий нет</h2>
    @endforelse
@endsection

