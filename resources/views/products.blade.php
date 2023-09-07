<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css'])
  <title>Document</title>
</head>
<body>
  <header>
    <nav class="flex justify-between bg-gray-500 text-white py-4 px-2 ">
      <div class="logoHome uppercase font-bold">
        <a href="{{ route('products') }}">Prodotti</a>
      </div>
      <ul class="flex gap-2">
        <li class="underline">
          <a href="{{ route('home') }}">Home</a>
        </li>
        <li class="underline">
          <a href="{{ route('about') }}">Info</a>
        </li>
        <li class="underline">
          <a href="{{ route('contact') }}">Contatti</a>    
        </li>
      </ul>
    </nav>
  </header>
  <h1 class="text-green-500 font-bold text-center mt-4">
    {{ $message }}
  </h1>
</body>
</html>