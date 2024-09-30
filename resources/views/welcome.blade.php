<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Joyería Tito</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('asset/css/fonts.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/css.css') }}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=Beau-Rivage:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        <script src="{{ asset('asset/js/main.js') }}"></script>
    </head>
    <body class="antialiased bg-gray-900 text-white">
        <div>
            <!-- Navbar -->
            <nav class="">
                <div class="container mx-auto flex justify-between items-center">        
                    <!-- Logo o nombre de la aplicación -->
                    <a href="#" class="navbar-title text-yellow-400 hover:text-white flex items-center">
                        <!-- SVG Icono -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 15 15" class="mr-2">
                            <path fill="#facc15" d="M12 8.5a4.5 4.5 0 1 1-9 0a4.5 4.5 0 0 1 2.71-4.125l.176.137l.774.601A3.5 3.5 0 0 0 4 8.5C4 10.43 5.57 12 7.5 12S11 10.43 11 8.5a3.5 3.5 0 0 0-2.66-3.387l.95-.738A4.5 4.5 0 0 1 12 8.5m-4.5-4L10 2.555L9 1H6L5 2.555l1.5 1.167z"/>
                        </svg>
                        Joyería Tito
                    </a>
                    <!-- Enlaces de navegación -->
                    <div class="flex space-x-4">
                        @if (Auth::check())
                            <a href="{{ route('dashboard') }}" class="font-semibold text-yellow-400 hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-yellow-500">Dashboard</a>
                        @else
                            <a href="#inicio-section" class="font-semibold text-yellow-400 hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-yellow-500">Inicio</a>
                            <a href="#carousel-section" class="font-semibold text-yellow-400 hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-yellow-500">Aretes</a>
                            <a href="#coleccion-section" class="font-semibold text-yellow-400 hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-yellow-500">Collares</a>
                            <a href="#pulseras-section" class="font-semibold text-yellow-400 hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-yellow-500">Pulseras</a>
                            <a href="#expandible-section" class="font-semibold text-yellow-400 hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-yellow-500">Colección</a>
                        @endif
                    </div>
                </div>
            </nav>   
        </div>
        
        <!-- Hero Section Inicio -->
        <section id="inicio-section" class="bg-gradient-to-r from-gray-400 via-gray-300 to-gray-400 p-8 text-center flex flex-col items-center">
            <div class="image-slider">
                <div class="image-container">
                    <img class="image-slide" src="asset/img/1.jpg" alt="image description">
                    <img class="image-slide" src="asset/img/2.jpg" alt="image description">
                    <img class="image-slide" src="asset/img/3.jpg" alt="image description">
                    <img class="image-slide" src="asset/img/4.jpg" alt="image description">
                    <img class="image-slide" src="asset/img/5.jpg" alt="image description">
                </div>
            </div>
            <h1 class="font-semibold text-gray-700 italic uppercase">
            Desde 1970 ofreciendo joyas elegantes, sofisticadas, modernas, para todo tipo de acontecimientos
            </h1>
            <p class="text-gray-700">Te brindamos joyas de 18 y 22 kltes, Oro Italiano y Nacional</p>
        </section>

        <!-- Carrusel Section -->
        <section id="carousel-section" class="bg-gradient-to-r from-gray-400 via-gray-300 to-gray-400 p-16 text-center">
            <div class="carousel-list">
                <ul class="carousel-list">
                    <li class="carousel-item" data-pos="-2" style="background-image: url('asset/img/1.jpg');"></li>
                    <li class="carousel-item" data-pos="-1" style="background-image: url('asset/img/2.jpg');"></li>
                    <li class="carousel-item" data-pos="0" style="background-image: url('asset/img/3.jpg');"></li>
                    <li class="carousel-item" data-pos="1" style="background-image: url('asset/img/4.jpg');"></li>
                    <li class="carousel-item" data-pos="2" style="background-image: url('asset/img/5.jpg');"></li>
                </ul>                
            </div>
        </section>

        <!-- Hero Section Servicios -->
        <section id="coleccion-section" class="bg-gradient-to-r from-gray-400 via-gray-300 to-gray-400 p-16 text-center">
            <h1 class="text-4xl font-bold mb-4 text-yellow-400 uppercase">Colección especial</h1>
            <p class="text-gray-300">Nuestros servicios más exclusivos</p>
    
            <!-- Cards Section 1-->
            <div class="flex justify-center mt-8 space-x-16">
                <!-- Card 1 -->
                <div class="max-w-xs bg-gray-800 rounded-lg overflow-hidden shadow-md">
                    <img src="asset/img/2.jpg" alt="Product Image" class="w-full h-48 object-cover object-center">
                    <div class="p-8">
                        <h2 class="text-xl font-semibold mb-2 text-yellow-400 uppercase">Collares exclusivos</h2>
                        <p class="text-gray-300">Descubre nuestras piezas más destacadas.</p>
                    </div>
                </div>
    
                <!-- Card 2 -->
                <div class="max-w-xs bg-gray-800 rounded-lg overflow-hidden shadow-md">
                    <img src="asset/img/3.jpg" alt="Product Image" class="w-full h-48 object-cover object-center">
                    <div class="p-8">
                        <h2 class="text-xl font-semibold mb-2 text-yellow-400 uppercase">Anillos únicos</h2>
                        <p class="text-gray-300">Joyas que marcarán tu estilo.</p>
                    </div>
                </div>
    
                <!-- Card 3 -->
                <div class="max-w-xs bg-gray-800 rounded-lg overflow-hidden shadow-md">
                    <img src="asset/img/4.jpg" alt="Product Image" class="w-full h-48 object-cover object-center">
                    <div class="p-8">
                        <h2 class="text-xl font-semibold mb-2 text-yellow-400 uppercase">Pulseras elegantes</h2>
                        <p class="text-gray-300">Accesorios para cualquier ocasión.</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="max-w-xs bg-gray-800 rounded-lg overflow-hidden shadow-md">
                    <img src="asset/img/5.jpg" alt="Product Image" class="w-full h-48 object-cover object-center">
                    <div class="p-8">
                        <h2 class="text-xl font-semibold mb-2 text-yellow-400 uppercase">Pulseras elegantes</h2>
                        <p class="text-gray-300">Accesorios para cualquier ocasión.</p>
                    </div>
                </div>
            </div>

            <!-- Cards Section 2-->
            <div class="flex justify-center mt-8 space-x-16">
                <!-- Card 1 -->
                <div class="max-w-xs bg-gray-800 rounded-lg overflow-hidden shadow-md">
                    <img src="asset/img/7.jpg" alt="Product Image" class="w-full h-48 object-cover object-center">
                    <div class="p-8">
                        <h2 class="text-xl font-semibold mb-2 text-yellow-400 uppercase">Collares exclusivos</h2>
                        <p class="text-gray-300">Descubre nuestras piezas más destacadas.</p>
                    </div>
                </div>
    
                <!-- Card 2 -->
                <div class="max-w-xs bg-gray-800 rounded-lg overflow-hidden shadow-md">
                    <img src="asset/img/9.jpg" alt="Product Image" class="w-full h-48 object-cover object-center">
                    <div class="p-8">
                        <h2 class="text-xl font-semibold mb-2 text-yellow-400 uppercase">Anillos únicos</h2>
                        <p class="text-gray-300">Joyas que marcarán tu estilo.</p>
                    </div>
                </div>
    
                <!-- Card 3 -->
                <div class="max-w-xs bg-gray-800 rounded-lg overflow-hidden shadow-md">
                    <img src="asset/img/10.jpg" alt="Product Image" class="w-full h-48 object-cover object-center">
                    <div class="p-8">
                        <h2 class="text-xl font-semibold mb-2 text-yellow-400 uppercase">Pulseras elegantes</h2>
                        <p class="text-gray-300">Accesorios para cualquier ocasión.</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="max-w-xs bg-gray-800 rounded-lg overflow-hidden shadow-md">
                    <img src="asset/img/8.jpg" alt="Product Image" class="w-full h-48 object-cover object-center">
                    <div class="p-8">
                        <h2 class="text-xl font-semibold mb-2 text-yellow-400 uppercase">Pulseras elegantes</h2>
                        <p class="text-gray-300">Accesorios para cualquier ocasión.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Nosotros -->
        <section id="pulseras-section" class="bg-gradient-to-r from-gray-400 via-gray-300 to-gray-400 p-16 text-center">
            <h1 class="text-4xl font-bold mb-4 text-yellow-400 uppercase">pulseras</h1>
            <p class="text-gray-300">La esencia de nuestra joyería.</p>
            <img class="w-128 mx-auto object-center rounded-lg mt-5 shadow-lg" src="asset/img/1.jpg" alt="Descripción de la imagen">        
        </section>

        <!-- Expandible images Section -->
        <section id="expandible-section" class="bg-gradient-to-r from-gray-400 via-gray-300 to-gray-400 p-16 text-end">                
            <h2 class="text-4xl font-bold mb-8 text-center text-fuchsia-700 uppercase">Colección primavera</h2>
            <div class="flex flex-auto image-accordion" style="gap: 5px;">
                <div class="card auto-cols-max">
                    <img class="background rounded-xl" src="asset/img/11.jpg" style="margin-right: 5px;">
                    <div class="card-content">
                        <h3 class="title">Anillo de Dama Italiano 18 kltes</h3>
                    </div>                    
                </div>
                <div class="card">
                    <img class="background rounded-xl" src="asset/img/10.jpg" style="margin-right: 5px;">
                    <div class="card-content">
                        <h3 class="title">Anillo de Dama Italiano 18 kltes</h3>
                    </div>
                </div>
                <div class="card">
                    <img class="background rounded-xl" src="asset/img/9.jpg" style="margin-right: 5px;">
                    <div class="card-content">
                        <h3 class="title">Anillo de Dama Italiano 18 kltes</h3>
                    </div>
                </div>
                <div class="card">
                    <img class="background rounded-xl" src="asset/img/4.jpg" style="margin-right: 5px;">
                    <div class="card-content">                        
                        <h3 class="title">Anillo de Dama Italiano 18 kltes</h3>
                    </div>
                </div>
                <div class="card">
                    <img class="background rounded-xl" src="asset/img/2.jpg" style="margin-right: 5px;">
                    <div class="card-content">
                        <h3 class="title">Anillo de Dama Italiano 18 kltes</h3>
                    </div>
                </div>
                <div class="card">
                    <img class="background rounded-xl" src="asset/img/5.jpg" style="margin-right: 5px;">
                    <div class="card-content">
                        <h3 class="title">Anillo de Dama Italiano 18 kltes</h3>
                    </div>
                </div>
                <div class="card">
                    <img class="background rounded-xl" src="asset/img/1.jpg" style="margin-right: 5px;">
                    <div class="card-content">
                        <h3 class="title">Anillo de Dama Italiano 18 kltes</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Section Redes Sociales -->
        <section class="bg-gradient-to-r from-gray-400 via-gray-300 to-gray-400 p-16 text-end">
            <hr class="border-t border-white mb-4">
            <div class="grid grid-cols-3 gap-4 pt-4">
                <div class="text-fuchsia-700 text-left hover:text-yellow-300 font-bold">
                    <p>Estamos entre las calles Quijarro y Súarez Arana</p>
                    <p class="mt-1">Cooperativa 1ro de Septiembre | Caseta #83</p>
                    <p class="mt-1">Llámanos a los siguientes números:</p>
                    <p class="mt-1">73975213 | 72631600 | 73975262</p>
                </div>                
                <div></div>
                <div class="text-end">
                    <section class="pt-2">
                        <div class="flex justify-end">
                        <!-- Tik tok -->
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            class="h-10 w-10 inline-block mx-2 transition-all duration-300 hover:filter hover:drop-shadow-lg hover:text-black hover:p-2 rounded-full"
                            fill="currentColor" 
                            viewBox="0 0 448 512">
                            <path 
                                d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"
                            />
                        </svg>
                        <!-- Whatsapp -->
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-10 w-10 inline-block mx-2 transition-all duration-300 hover:filter hover:drop-shadow-lg hover:text-green-700 hover:p-2 rounded-full"
                            fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                        </svg>
                        <!-- Facebook -->
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-10 w-10 inline-block mx-2 transition-all duration-300 hover:filter hover:drop-shadow-lg hover:text-blue-900 hover:p-2 rounded-full"
                            fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                        </svg>
                        <!-- Instagram -->
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-10 w-10 inline-block mx-2 transition-all duration-300 hover:filter hover:drop-shadow-lg hover:bg-gradient-to-r from-purple-400 to-pink-600 hover:p-1 rounded-full"
                            fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>                      
                    </div>
                    <br>
                    <p class="text-fuchsia-700 hover:text-yellow-300 font-bold">Encuentranos en nuestras redes sociales</p>
                    </section>
                </div>
            </div>         
        </section>
    </body>
</html>
