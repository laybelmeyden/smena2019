@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
      @if (Session::has('flash message'))
      <div class="col s12 m12 l12 mol alert">
      <div class="card card-green">
        <div class="card-content white-text">
          <span class="card-title">{{ Session::get('flash_message') }} Заявка успешно отправлена !</span>
        </div>
      </div>
    </div>
      @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    <div class="col s12 m12 s12 mol">
    <div class="card horizontal">
      <div class="card-stacked">
        <div class="card-content">
          <p>Добро пожаловать в личный кабинет  <b> {{ Auth::user()->name }}</b>  !</p>
          <br>
          <p>Чтобы принять участие в Всероссийской профильной смене по информационным технологиям и техническим видам спорта заполните анкету участника и отправьте свой проект ниже !</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col s12 m6 s6">
    <div class="card horizontal">
      <div class="card-stacked">
        <div class="card-content">
          <p>Анкета участника</p>
        </div>
        <div class="card-action">
          <a class="a2" href="/anketa">Отправить анкету</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col s12 m6 s6">
    <div class="card horizontal">
      <div class="card-stacked">
        <div class="card-content">
          <p>Проект участника</p>
        </div>
        <div class="card-action">
          <a class="a2" href="/uchat">Отправить проект</a>
        </div>
      </div>
    </div>
  </div>
    </div>
</div>
@endsection

