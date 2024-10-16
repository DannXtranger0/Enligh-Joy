<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <title>{{$title}}</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
        html {
            scroll-behavior: smooth; 
        }
    </style>
</head>
<body class= "font-fredoka bg-[#FEFEFE]" >

    <header class="bg-blue-principal-0 w-full fixed px-5 py-5 z-50 ">
        <nav class="flex items-center justify-between ">
            <div class="">
                <a href="/">
                    <img src="{{asset('images\logo1.svg')}}" class="w-40 min-w-40 max-w-40 hover:scale-110 transition-all duration-150"  alt="logo">
                </a>
            </div>

            <ul class="flex space-x-7 mr-8  ">
                <li><a href="/" class="btn">Home</a></li>
                <li><a href="/lessons" class="btn">Lessons</a></li>
                <li><a href="/challenges" class="btn">Challenges</a></li>
                <li><a href="/creators" class="btn">Creators</a></li>
            </ul>

            <div>
                <a href="#">
                    <img src="{{asset('images\traductor.png')}}" class="w-36 min-w-[60px] max-w-[60px] hover:scale-110 transition-all duration-150" alt="Traducir">
                </a>
            </div>
        </nav>
    </header>

    <main>
        {{$slot}}
    </main>
    

    <footer class="bg-blue-principal-0 h-14  flex items-center justify-center mt-24">
        <p class="text-white title text-lg font-semibold">@EnglishJoy</p>
    </footer>
    
</body>
</html>