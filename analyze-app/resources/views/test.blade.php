<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<x-guest-layout>
    <x-auth-card>

       
    <form action="{{  route('result') }}">
@foreach ($test as $q)
    <p style='float:right;' class="mt-3">{{$q->Q_title}}</p>
  <br>
  <br>
    <input style='float:right;' type='radio'name='Q{{$q->id}}'  value='{{$q->answer1}}'>
    <label style='float:right;'>{{$q->answer1}}</label>
   <br>
    
    <input style='float:right;' type='radio'  name='Q{{$q->id}}' value='{{$q->answer2}}'>
    <label style='float:right;'>{{$q->answer2}}</label>

    <br>
    @if($q->Q_title=='ما هي الفئة العمرية التي تنتمي اليها؟')
   
    <input style='float:right;' type='radio'name='Q{{$q->id}}' value='{{$q->answer3}}'>
    <label style='float:right;'>{{$q->answer3}}</label>
     <br>
    <input style='float:right;' type='radio'name='Q{{$q->id}}' value='{{$q->answer4}}'>
    <label style='float:right;'>{{$q->answer4}}</label>

    <br>
    
    <input style='float:right;' type='radio'name='Q{{$q->id}}' value='{{$q->answer5}}'>
    <label style='float:right;'>{{$q->answer5}}</label>
      <br>
    <input style='float:right;' type='radio'name='Q{{$q->id}}' value='{{$q->answer6}}'>
    <label style='float:right;'>{{$q->answer6}}</label>

    <br>
    
    <input style='float:right;' type='radio'name='Q{{$q->id}}' value='{{$q->answer7}}'>
    <label style='float:right;'>{{$q->answer7}}</label>
    <br>
    @endif
    @endforeach
    <x-button  class="mt-3" type='submit'>ارسل</x-button>
</form>
</body>

</x-auth-card>
</x-guest-layout>
</html>