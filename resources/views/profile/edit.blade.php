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
    <div>Измените информацию о себе</div>
    <div>
        <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                  <label for="avatar">Изменить ваш аватар</label>
                  <input type="file" name="avatar" class="form-control" accept="image/*">
            </div>
            <div class="form-group">
                  <label for="location">Страна</label>
                  <input type="text" name="location" value="{{ $info->location }}" class="form-control" required>
            </div>
            <div class="form-group">
                  <label for="location">Статус</label>
                  <textarea name="about" id="about" cols="30" rows="10" class="form-control" required>{{ $info->about }}</textarea>
            </div>

            <div class="form-group">
                  <p class="text-center">
                        <button class="btn btn-primary" type="submit">
                              Сохранить
                        </button>
                  </p>
            </div>
        </form>
    </div>
</div>
@endsection

<style>
    body {
            background-image: url({{URL::asset('/images/backProfile.png')}});
    }
    .content {
        display: flex;
        margin-left: auto;
        margin-right: auto;
        width: 172vh;
        height: 83.7vh;
        background-color: #020115;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
    }
    </style>