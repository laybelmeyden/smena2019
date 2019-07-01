@extends('layouts.master')

@section('content')


<p class="main_p3">Наши фотографии</p>

<div class="container">
<div class="row">
<a href="/vsephoto">
<div class="col l4 m12 s12">
<img class="responsive-img" src="https://pp.userapi.com/c639824/v639824802/5ba0d/-M3rY2icn-8.jpg">
</div>
  <div class="col l4 m12 s12">
<img class="responsive-img" src="https://pp.userapi.com/c639824/v639824802/5ba17/Y-hFCX1cAAU.jpg">
</div>
  <div class="col l4 m12 s12">
<img class="responsive-img" src="https://pp.userapi.com/c639824/v639824802/5ba21/R5_PYAt00nA.jpg">
</div>
</a>
</div>
</div>

<p class="main_p3">Наши видео</p>
  <ul class="collapsible col_photo">
    <li>
      <div class="collapsible-header">Новости смены</div>
      <div class="collapsible-body">
            <div class="videos">
<div class="f_vid">
  <iframe width="100%" class="y_v" src="https://www.youtube.com/embed/KX8iZzDRT4k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
<div class="f_vid">
<iframe width="100%" class="y_v" src="https://www.youtube.com/embed/lrQ9jMqRov4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
<div class="f_vid">
<iframe width="100%" class="y_v" src="https://www.youtube.com/embed/u-tddqZincg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
<div class="f_vid">
<iframe width="100%" class="y_v" src="https://www.youtube.com/embed/18ngmvPFK7k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
</div>
      </div>
    </li>
  </ul>
@endsection