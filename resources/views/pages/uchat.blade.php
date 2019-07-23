@extends('layouts.master')

@section('content')
		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
			<form action="/form2" method="POST" class="fs-form fs-form-full" autocomplete="off" enctype="multipart/form-data">
				{{ csrf_field() }}
					<ol class="fs-fields">
					   <li>
                         <label class="fs-field-label fs-anim-upper" for="q1">Введите Вашу почту</label>
							<input id="q1" name="email" type="email" placeholder="email@email.com"/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">Введите ФИО автора проекта</label>
							<input class="input validate" name="fio" placeholder="Иванов Иван Иванович" required>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q2">Введите название проекта</label>
							<input class="fs-anim-lower validate" id="q2" name="nameproject" type="text" placeholder="Мой проект" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q6">Цели и задачи проекта</label>
							<label class="fs-field-label fs-anim-upper" for="q6" style="font-size:12px;">(Не более 5 целей и задач)</label>
							
							<textarea class="fs-anim-lower" id="q6" name="celi"></textarea>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q7">Актуальность проекта</label>
							<label class="fs-field-label fs-anim-upper" for="q6" style="font-size:12px;">(Не более 5 предложений)</label>
							
							<textarea class="fs-anim-lower" id="q7" name="aktual"></textarea>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper lb2" for="q8">Описание проекта</label>
							<label class="fs-field-label fs-anim-upper lb1" for="q8" style="font-size:12px;">(Не более 1 стр)</label>
							<textarea class="fs-anim-lower" id="q8" name="opis"></textarea>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper lb2" for="q8">План реализации проекта</label>
							<label class="fs-field-label fs-anim-upper lb1" for="q8" style="font-size:12px;">(Не более 1 стр)</label>
							<textarea class="fs-anim-lower" id="q8" name="plan"></textarea>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper lb2" for="q8">Команда проекта</label>
							<textarea class="fs-anim-lower" id="q8" name="team"></textarea>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper lb2" for="q8">Приложение</label>
							<label class="fs-field-label fs-anim-upper lb1" for="q8" style="font-size:12px;">- Указанная форма носит рекомендательный характер;
                - отсутствие указанной формы в составе Заявки не является основанием отклонения Заявки</label>
							<br><br>
							<input type="file" id="priloj" name="priloj" class="fs-anim-lower" value="no_file">
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

