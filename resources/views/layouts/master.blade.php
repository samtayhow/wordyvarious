<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} | @yield('title')</title>

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono|Oswald" rel="stylesheet">
    <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
    
    
    <script>
    var user = {
        "birthDay": 23,
        "birthMonth": 1,
        "city": "Columbus",
        "country": "United States",
        "dateCreated":"2018.02.20 11:45PM EST",
        "dateModified":"2018.02.21 3:19PM EST",
        "email": "wholelotta@nunya.biz",
        "honorific": "Mx.",
        "id":1,
        "language": "English",
        "nameFirst": "Taylor",
        "nameLast": "Howard",
        "pronouns": "hey/they",
        "socialTwitter": "samtayhow",
        "state": "Ohio",
        "username": "Taylor1",
        "website": "example.org"
    }
    
    </script>
    
  </head>
  <body>

    <header data-role="global" name="top"></header>   

    @yield('main')

    <footer data-role="global"></footer>    
    
    <script src="{{mix('js/app.js')}}" ></script>
  </body>
</html>