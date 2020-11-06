@extends('layouts.header')

@section('content')
<div class="main-menu">
    <ul class="main-menu-ul">
        <a class="profile-block" href="{{ route('profile', ['id' => Auth::user()->id]) }}">
            <li>
                <img src="{{URL::asset('/images/person.svg')}}">
            </li>
        </a>
        <a href="{{ url('music') }}">
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
    <div class="profile">
        <p>Профиль</p>
    </div>
</div>
<div class="content">
    <div class="header">
        <div class="margin-right">
            <h2>Альбом</h2>
        </div>
        <div class="bottom-line">
            <h2>Аудиозапись</h2>
        </div>
    </div>
    <div class="form">
        <form action="{{ route('profile.add_song') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-content">
                <imageUploader></imageUploader>
                <div class="form-group">
                    <label for="avatar">Выберите обложку к песне</label>
                    <input type="file" name="avatar" class="form-control" accept="image/*">
                </div>
                <div class="info">
                    <div class="album-name">
                        <input type="text" name="name" placeholder="Название аудиозаписи" required>
                    </div>
                </div>
                <div class="form-group">
                    <p class="text-center">
                        <button class="btn btn-primary" type="submit">
                            Сохранить
                        </button>
                    </p>
                </div>
            </div>
        </form>
    </div>
    <div>
    </div>
</div>

@endsection

<style>
    body {
            background-image: url({{URL::asset('/images/backProfile.png')}});
    }
    .content {
        margin-left: auto;
        margin-right: auto;
        width: 172vh;
        height: 76.6vh;
        justify-content: space-between;
        background-color: #020115;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
    }

    .form {
        margin-top: 50px;
        margin-left: 70px;
        display: flex;
    }

    .form-content {
        display: flex;
    }

    .info input {
        border: none;
        width: 300px;
        border-bottom: 1px solid #00D4FF;
        background: transparent;
        outline: none;
        color: #ffffff;
    }

    .info input:focus {
        border-bottom: 2px solid #00D4FF;
    }

    .album-name {
        margin-top: 35px;
        margin-left: 50px
    }

    .cover {
        margin-top: 100px;
        margin-left: 50px;
    }

    ::-webkit-input-placeholder {
        color: #ffffff;
        font-size: 18px;
        line-height: 21px;
    }

    :-moz-placeholder { /* Firefox 18- */
        color: #ffffff;
        font-size: 18px;
        line-height: 21px;
    }

    ::-moz-placeholder {  /* Firefox 19+ */
        color: #ffffff;
        font-size: 18px;
        line-height: 21px;
    }

    :-ms-input-placeholder {  
        color: #ffffff;
        font-size: 18px;
        line-height: 21px;
    }

    .header {
    display: flex;
    margin-left: 105px;
    width: 700px;
    justify-content: center;
    }

    .header .margin-right {
        margin-right: 100px;
        width: 220px;
        border-bottom: 1px solid @line;
        display: flex;
        justify-content: center;
    }

    .header .bottom-line {
        width: 220px;
        border-bottom: 1px solid @line;
        display: flex;
        justify-content: center;
    }

    .header h2 {
        font-size: 24px;
        line-height: 28px;
        align-items: center;
    }
</style>