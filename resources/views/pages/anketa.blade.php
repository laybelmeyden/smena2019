@extends('layouts.master')

@section('content')
		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
			<form action="/form1" method="POST" class="fs-form fs-form-full" autocomplete="off" enctype="multipart/form-data">
				{{ csrf_field() }}
					<ol class="fs-fields">
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">Введите Ваше ФИО</label>
							<input class="input validate" name="p1" placeholder="Введите ваше имя" required>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q2">Введите Вашу дату рождения</label>
							<input class="fs-anim-lower validate" id="q2" name="p2" type="text" placeholder="21 мая 2102" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q3">Введите место Вашего рождения</label>
							<input class="fs-anim-lower validate" id="q3" name="p3" type="text" placeholder="г.Городовой" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q4">Введите адрес Вашего места жительства</label>
							<input class="fs-anim-lower validate" id="q4" name="p4" type="text" placeholder="г.Городовой, улица Уличная, дом 23, квартира 1" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q5">Введите место Вашего обучения</label>
							<input class="fs-anim-lower validate" id="q5" name="p5" type="text" placeholder="Школа №23" required/>
						</li>
						
						
						<li>
							<label class="fs-field-label fs-anim-upper" for="q6">Наличие опыта участия в Конкурсах и Олимпиадах в сфере информационных технологий, программирования, киберспорта:</label>
							<label class="fs-field-label fs-anim-upper" for="q6" style="font-size:12px;">(указывается дата участия и наименование Конкурса или Олимпиады)</label>
							
							<textarea class="fs-anim-lower" id="q6" name="p6"></textarea>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q7">Наличие / отсутствие наград, призовых мест и иных подтвержденных побед в конкурсах и олимпиадах по программированию, информационным технологиям и киберспорту:</label>
							<label class="fs-field-label fs-anim-upper" for="q6" style="font-size:12px;">(указывается дата проведения, наименование Конкурса или Олимпиады и призовое место, награда)</label>
							
							<textarea class="fs-anim-lower" id="q7" name="p7"></textarea>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper lb2" for="q8">Наличие рекомендательного письма от руководителя образовательного учреждения</label>
							<label class="fs-field-label fs-anim-upper lb1" for="q8" style="font-size:12px;">(указывается наименование образовательного учреждения, номер и дата письма)</label>
							<textarea class="fs-anim-lower" id="q8" name="p8"></textarea>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q9" >Введите номер Вашего телефона</label>
							<input class="fs-anim-lower validate"  type="text" id="q9" name="p9" placeholder="+7 (921) 876 32 42" required/>
						</li>
						<li>
							 <!--data-info="Введите свою почту!" -->
							<label class="fs-field-label fs-anim-upper" for="q10" >Введите Вашу почту</label>
							<input class="fs-anim-lower validate" id="q10" name="email" type="email" placeholder="yandex@yandex.ru" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q11">Приложение</label>
							<label class="fs-field-label fs-anim-upper lb1" for="q8" style="font-size:12px;">(- скан-копии сертификатов (иных документов) подтверждающих участие в Конкурсах, Олимпиадах по информационным технологиям, программированию, киберспорту;

- скан – копии дипломов победителя в Конкурсах и Олимпиадах;)</label>
							
							<input type="file" id="q11" name="p11" class="fs-anim-lower">
						</li>
					</ol>
					<div class="col l12" style="    text-align: right;
    padding-bottom: 40px;
    padding-top: 30px;">
					<button class="fs-submit" type="submit">Отправить</button>
					</div>
				</form><!-- /fs-form -->	
				
			</div><!-- /fs-form-wrap -->

		</div><!-- /container -->

@endsection
