@extends('plantilla.plantilla')
@section('title')
<title>Busqueda</title>
@endsection
@section('content')


    <!--
  This example requires Tailwind CSS v2.0+ 
  <form action="{{route('busqueda.show')}}" method="GET">
        <input type="text" name="palabra">
        <input type="submit" value="Buscar">
    </form>
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->


<section class="bg-coolGray-100 text-coolGray-800">
	<div class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
		<div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
			<img src="https://www.redeszone.net/app/uploads-redeszone.net/2021/02/SHA10.jpg?x=480&quality=20" alt="" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128 bg-coolGray-500">
		</div>
		<div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
			<h1 class="text-5xl font-bold leading-none sm:text-6xl">Transforma una
				<span class="text-red-600">paraula</span> amb hash
			</h1>
			<p class="mt-6 mb-8 text-lg sm:mb-12">
				<?php
				
				 $spintax = new App\Models\Spintax();
				 $string = 'Hashdecrypt es una {web|pagina web|herramienta} que te {permite|deja} {encriptar|cifrar} {palabras o frases|frases o palabras} que {quieras|desees} {con|entre} {muchos|diferentes|una gran variedad de|una inmensa variedad de|un monton de} algoritmos';
				 echo $spintax->process($string);
				?>
      
				<br class="hidden md:inline lg:hidden">
			</p>
			<div class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
				<a href="#" class="px-8 py-3 text-lg font-semibold rounded bg-red-600 text-coolGray-50">Buscador</a>
				<a href="#" class="px-8 py-3 text-lg font-semibold border rounded border-coolGray-800">Info</a>
			</div>
		</div>
	</div>
</section>




<div class="flex flex-col max-w-md p-6 rounded-md sm:p-10 bg-coolGray-50 text-coolGray-800 centrar">
	<div class="mb-8 text-center">
		<h1 class="my-3 text-4xl font-bold">INTRODUIR PARAULA</h1>
		<p class="text-sm text-coolGray-600"></p>
	</div>
	<form method="GET" action="{{route('busqueda.show')}}" class="space-y-12 ng-untouched ng-pristine ng-valid">
		<div class="space-y-4">
			<div>
				
				<input type="text" name="palabra" id="email" placeholder="patata" class="w-full px-3 py-2 border rounded-md border-coolGray-300 bg-coolGray-50 text-coolGray-800">
			</div>
			
		</div>
		<div class="space-y-2">
			<div>
				<button type="submit" class="w-full px-8 py-3 rounded-md bg-red-600 text-coolGray-50">Buscar</button>
			</div>
			
		</div>
	</form>
</div>



@endsection