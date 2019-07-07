<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Проект участника на ИТ СМЕНУ 2018 от {{ Auth::user()->name }}</title>
  </head>
  <body>
    <h1>Проект участника</h1><br />
    ФИО автора проекта - {{ $fio }} <br />
    название проекта - {{ $nameproject }} <br />
    Цели и задачи проекта - {{ $celi }} <br />
    Актуальность проекта - {{ $aktual }} <br />
    Описание проекта - {{ $opis }} <br />
    План реализации проекта - {{ $plan }} <br />
    Команда проекта - {{ $team }} <br />
    Приложение - {{ $priloj }} <br />
  </body>
</html>