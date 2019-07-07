@extends('layouts.master')

@section('content')

<section class="">

<div class="container">
<div class="row">
  		<div class="col l6 m12 s12">
          @foreach ( $forms as $form )
   		<div class="card blue-grey darken-1">
    	<div class="card-content white-text">
    <span class="card-title">Анкета участника конкурса</span>
    	<p>ФИО - {{ $form -> name }}</p>
          <p>Дата рождения - {{ $form -> date }}</p>
          <p>Место рождения - {{ $form ->  birthplace }}</p>
          <p>Адрес места жительства - {{ $form -> address}}</p>
          <p>Место учебы - {{ $form -> place }}</p>
          <p>Наличие опыта участия в Конкурсах - {{ $form -> exp }}</p>
          <p>Наличие / отсутствие наград - {{ $form -> wins }}</p>
          <p>Наличие рекомендательного - {{ $form -> letter }}</p>
          <p>Телефон - {{ $form -> tel }}</p>
          <p>Почта - {{ $form -> email }}</p>
          <p>Приложение - 
          <a href="{{ $form -> app}}" class="oi">123</a>
         </div>
         </div>
            @endforeach 
         </div>   
	<div class="col l6 m12 s12">
      @foreach ( $formtwos as $formtwo )
   		<div class="card blue-grey darken-1">
    	<div class="card-content white-text">
    <span class="card-title">Проект участника</span>
    		<p>Почта - {{ $formtwo -> email }}</p>
          <p>ФИО - {{ $formtwo -> fio }}</p>
          <p>название проекта - {{ $formtwo -> nameproject }}</p>
          <p>цели и задачи проекта - {{ $formtwo -> celi }}</p>
          <p>актуальность проекта - {{ $formtwo -> aktual }}</p>
          <p>описание прокета - {{ $formtwo -> opis }}</p>
          <p>план реализации прокета - {{ $formtwo -> plan }}</p>
          <p>команда прокета - {{ $formtwo -> team }}</p>
          <p>приложение - {{ $formtwo -> priloj }}</p>
         </div>
         </div>
        @endforeach
         </div>  
</div>
</div>

      

@endsection
