@extends('layouts.master')


@section('title')
"Онлайн-школа"
@endsection



@section('content')
@include('includes.header')
<div id="help" class="container-fluid" >
<h1 style="color:#FFFFFF; color: black;
   -webkit-text-fill-color: white; /* Will override color (regardless of order) */
   -webkit-text-stroke-width: 1px;
   -webkit-text-stroke-color: black;
   font-size:50px;
   text-shadow:
  0 1px 0 rgba(0,0,0,.9),
  0 2px 0 rgba(0,0,0,.8),
  0 3px 0 rgba(0,0,0,.7),
  0 4px 0 rgba(0,0,0,.6)
 /* И т.д. */
;"> Добро пожаловать </h1>

<h2 style="color: black;
   -webkit-text-fill-color: white; /* Will override color (regardless of order) */
   -webkit-text-stroke-width: 1px;
   -webkit-text-stroke-color: black;
   font-size:50px;
   text-shadow:
  0 1px 0 rgba(0,0,0,.9),
  0 2px 0 rgba(0,0,0,.8),
  0 3px 0 rgba(0,0,0,.7),
  0 4px 0 rgba(0,0,0,.6)
 /* И т.д. */
;"
    > Вы находитесь на сайте "Онлайн-Школа" </h2>
</div>
<div class="container-fluid">
<div class="row">
 <div class="col-sm-4 tpk" ><h2>Учеба в интернете - легко!</h2><br><p>Изучайте интересующие вас темы прямо в интернете в любое время! </p></div>
 <div class="col-sm-4 tpk" ><h2>Удобный интерфейс</h2><br><p>Все просто и интуитивно понятно. Вы легко найдете на сайте те курсы, которые вам больше всего подходят!</p></div>
 <div class="col-sm-4 tpk" ><h2>Вы преподаватель?</h2><br><p>С нашей системой создания курсов делиться знаниями стало намного проще!</p></div>
</div>
</div>

@include('includes.footer')

@endsection
