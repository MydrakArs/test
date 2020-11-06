@extends('layouts.header')

@section('content')
<div class="main-menu">
    <ul class="main-menu-ul">
        <a href="{{ route('profile', ['id' => Auth::user()->id]) }}">
            <li>
                <img src="{{URL::asset('/images/person.svg')}}">
            </li>
        </a>
        <a class="music-block" href="{{ url('music') }}">
            <li>
                <img src="{{URL::asset('/images/music1.svg')}}">
            </li>
        </a>
        <a href="{{ url('friends') }}">
            <li>
                <img src="{{URL::asset('/images/friend.svg')}}">
            </li>
        </a>
        <a href="{{ url('home') }}">
            <li>
                <img src="{{URL::asset('/images/message.svg')}}">
            </li>
        </a>
    </ul>
    <div class="music">
        <p>Музыка</p>
    </div>
</div>

<div class="content">
    <div class="album-info">
        <div class="image">
            <img src="{{Storage::url($album->album_image)}}" alt="">
        </div>
        <div class="album-name">
            <h3>{{$album->name}}</h3>
        </div>
        <div class="artist-name">
            <h4>{{$album->artist->name }}</h4>
        </div>
        <div class="count">
            <p>{{$count}} аудиозаписи</p>
        </div>
    </div>
    <div class="song-list">
        <div class="songs">
            @foreach ($singls as $singl)
                <p>{{$singl->title}}</p>
                <audio controls preload="auto">
                    <source src="{{Storage::url($singl->path)}}">
                </audio>
            @endforeach
        </div>
    </div>
</div>
@endsection

<style>
    body {
        background-image: url({{URL::asset('/images/backMusic.png')}});
    }
    .content {
        display: flex;
        margin-left: auto;
        margin-right: auto;
        width: 172vh;
        height: 76.6vh;
        justify-content: space-around;  
        background-color: #020115;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
    }

    .album-info {
        flex: 2.5;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .album-name {
        margin-top: 10px;
    }

    .album-name h3 {
        color: #fff;
        font-weight: 800;
    }

    .artist-name {
        margin-top: 10px;
        color: #fff;
    }

    .song-list {
        flex: 3;
    }

    .songs {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 100px;
    }

    .songs p:first-child {
        margin-top: 0;
    }
    .songs p {
        margin-top: 10px;
        margin-bottom: 5px;
    }

    .songs audio:first-child {
        margin-top: 0;
        border: none;
        background: none;
    }
    
    audio::-webkit-media-controls-seek-back-button {
        background-color: #020115;
    }
    
    .songs audio {
        margin-top: 10px;
        outline: none;
        background-color: #020115;
    }


    .image {
        margin-top: 100px;
    }

    .count {
        margin-top: 10px;
    }

    .image img {
        width: 300px;
        height: 300px;
        object-fit: cover;
    }
</style>