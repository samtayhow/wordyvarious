<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Name - @yield('title')</title>

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
    
    var list = {
        "id":1,
        "title":"Kwaidan",
        "author":"Taylor1",
        "dateCreated":"2018.02.20 11:45PM EST",
        "dateModified":"2018.02.21 3:19PM EST",
        "description": "This list is based on Kwaidan: Stories and Studies of Strange Things (怪談 Kaidan), is a book by Lafcadio Hearn that features several Japanese ghost stories and a brief non-fiction study on insects.",
        "tags": ["politics", "literature", "activism", "scifi"],
        "faves": 67,
        "shares": 3,
        "slug": "kwaidan",
        "wordsColumnLength": 0,
        "words": ["ghost", "memory", "yokai", "folk", "folklore", "hearsay", "whispers", "curses", "mountains", "streams", "rivers", "demon", "gods", "haunt", "tradition", "ritual", "stories", "lore", "priest", "monks", "monastery", "haiku"]
    }

    // Parsing
    list.words.sort();
    list.wordsColumnLength = Math.ceil(list.words.length * 0.33333333);
    list.wordsOrdered = {
        "column1": [],
        "column2": [],
        "column3": []
    };
    for (var i = 0; i < list.wordsColumnLength; i++) { 
        list.wordsOrdered.column1.push(list.words[i]);
    }
    for (var i = list.wordsColumnLength; i < (list.wordsColumnLength * 2); i++) { 
        list.wordsOrdered.column2.push(list.words[i]);
    }
    for (var i = (list.wordsColumnLength * 2); i < list.words.length; i++) { 
        list.wordsOrdered.column3.push(list.words[i]);
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