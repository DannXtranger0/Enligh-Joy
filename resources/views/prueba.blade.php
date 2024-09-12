<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,600;1,600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&display=swap" rel="stylesheet">
</head>
<body>

<header class="min-h-screen">
    <nav class="w-full">
        {{-- LOGO --}}
        <div class="flex justify-between px-10 absolute top-10 w-full max-w-screen-sm items-center">

            <img src="{{asset('imagess/logo.svg')}}" class="w-40">
            <input type="checkbox" id="check" class="hidden peer">

            
            <label for="check" class="text-zinc-50 peer-checked:hidden">
                <p class="text-4xl">&#9776</p>
            </label>

            <label for="check" class="text-zinc-50 hidden peer-checked:inline">
                <p class="text-4xl mr-1.5">X</p>
            </label>

         </div>

        <ul class="hidden">
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <h1 class="absolute">We Are Creatives</h1>
    <span class="absolute"><svg width="36" height="114" xmlns="http://www.w3.org/2000/svg"><g stroke="#FFF" stroke-width="6" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><path d="M18 3v100M3 95.484l15 15 15-15"/></g></svg></span>

    <img src="{{asset('imagess\mobile\image-header.jpg')}}" alt="">

</header>

</body>
</html>