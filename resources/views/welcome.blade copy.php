<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Joyería Tito</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <div>
            <!-- Navbar -->
            <nav class="bg-gradient-to-r from-gray-900 via-blue-500 to-gray-900 p-4">
                <div class="container mx-auto flex justify-between items-center">
                    <!-- Logo o nombre de la aplicación -->
                    <a href="#" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 uppercase">Joyería Tito</a>

                    <!-- Enlaces de navegación -->
                    <div class="flex space-x-4">
                        @if (Auth::check())
                            <a href="{{ route('dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="#inicio-section" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Inicio</a>
                            <a href="#collares-section" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Collares</a>
                            <a href="#aretes-anillos-section" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Aretes - Anillos</a>
                            <a href="#pulseras-section" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Pulseras</a>
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                            {{-- <a href="{{ route('register') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a> --}}
                        @endif
                    </div>
                </div>
            </nav>   
        </div>
        
        <!-- Resto del contenido -->
        <!-- Hero Sections Home-->
        <section id="home-section" class="bg-gray-900 p-16 text-center flex flex-col items-center">
            <div class="overflow-hidden drop-shadow-2xl saturate-100 backdrop-brightness-150 bg-gray/30 skew-y-12 rounded">
                <img class="h-auto rounded scale-75 transition-opacity duration-500 ease-in-out transform hover:opacity-100" 
                    src="asset/img/1.jpg" alt="image description">
            </div>
            <h1 class="text-4xl font-bold my-4 text-gray-200 uppercase">zentral informatic group</h1>
            <p class="text-gray-200">Nuestra pasión es asegurar tu presente digital y construir un futuro sólido en línea.</p>
        </section>

        <!-- Hero Sections Servicios-->
        <section id="servicios-section" class="bg-gradient-to-r from-red-300 via-rose-700 via-yellow-800 via-cyan-100 via-gray-600 via-orange-700 to-green-300 p-16 text-center">
            <h1 class="text-4xl font-bold mb-4 uppercase">servicios</h1>
            <p class="text-gray-00">Nuestros servicios más requeridos</p>
    
            <!-- Cards Section -->
            <div class="flex justify-center mt-8 space-x-16">
                <!-- Card 1 -->
                <div class="max-w-xs bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="asset/img/2.jpg" alt="Product Image" class="w-full h-48 object-cover object-center">
                    <div class="p-8">
                    <h2 class="text-xl font-semibold mb-2 uppercase">informática forense</h2>
                    <p class="text-gray-700">Descripción del producto 1.</p>
                    </div>
                </div>
    
                <!-- Card 2 -->
                <div class="max-w-xs bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="asset/img/3.jpg" alt="Product Image" class="w-full h-48 object-cover object-center">
                    <div class="p-8">
                    <h2 class="text-xl font-semibold mb-2 uppercase">hacking ético</h2>
                    <p class="text-gray-700">Descripción del producto 2.</p>
                    </div>
                </div>
    
                <!-- Card 3 -->
                <div class="max-w-xs bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="asset/img/4.jpg" alt="Product Image" class="w-full h-48 object-cover object-center">
                    <div class="p-8">
                    <h2 class="text-xl font-semibold mb-2 uppercase">desarrollo web</h2>
                    <p class="text-gray-700">Descripción del producto 3.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hero Sections Nosotros-->
        <section id="nosotros-section" class="bg-gradient-to-l from-green-400 via-blue-700 to-black p-16 text-center">
            <h1 class="text-4xl font-bold mb-4 uppercase">Nosotros</h1>
            <p class="text-gray-700">A description of the third hero section.</p>
            <img class="w-128 mx-auto object-center rounded-lg mt-5 shadow-lg"
            src="asset/img/7.jpg" alt="Descripción de la imagen">        
        </section>

        <!-- Form Section -->
        <section id="contactanos-section" class="bg-gradient-to-r from-green-800 to-90% to-violet-900 text-white p-16">
            <div class="container mx-auto flex justify-center"> <!-- Cambiado a flex justify-center -->
                <div class="max-w-2xl w-full"> <!-- Agregado w-full para ocupar el ancho completo en pantallas pequeñas -->
                <h2 class="text-4xl font-bold mb-8 text-left">Contáctanos</h2> <!-- Añadido text-left para alinear a la izquierda -->
    
                <!-- Form -->
                <form class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="mb-4">
                    <label for="name" class="block text-sm font-semibold text-gray-300">Nombre</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:border-blue-500" />
                    </div>
    
                    <div class="mb-4">
                    <label for="email" class="block text-sm font-semibold text-gray-300">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:border-blue-500" />
                    </div>
    
                    <div class="mb-4 col-span-2">
                    <label for="message" class="block text-sm font-semibold text-gray-300">Mensaje</label>
                    <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 bg-gray-800 border border-gray-700 rounded focus:outline-none focus:border-blue-500"></textarea>
                    </div>
    
                    <div class="col-span-2 text-right"> <!-- Cambiado a col-span-2 y text-right para alinear a la derecha -->
                    <button type="submit" class="px-6 py-3 bg-blue-900 text-white font-semibold rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                        Send
                    </button>
    
                    </div>
                </form>
                </div>
            </div>
        </section>

        <!-- Hero Sections Redes Sociales-->
        <section class="bg-gradient-to-r from-green-800 to-90% to-violet-900 p-16 text-end text-white">
            <hr class="border-t border-white mb-4">
            <div class="grid grid-cols-3 gap-4 pt-4">
                <div class="text-left text-white hover:text-gray-400">ZENTRAL GROUP INFORMATIC
                    <div>
                        <p class="mt-2">Grupo informático especializado en: </p>
                    </div>
                    <div>
                        <p class="mt-1">Desarrollo Web | Informática Forense | Hacking Ético</p>
                    </div>                    
                </div>
                
                <div class="visible ..."></div>

                <div class="text-end text-white">
                    <section class="pt-2">
                        <div class="flex justify-end">
                        <!-- Twitter -->
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-10 w-10 inline-block mx-2 hover:text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"
                            />
                        </svg>
                        <!-- Instagram -->
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-10 w-10 inline-block mx-2 hover:text-gray-400"
                        fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
            
                        <!-- Linkedin -->
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-10 w-10 inline-block mx-2 hover:text-gray-400"
                        fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                        </svg>
                        <!-- Whatsapp -->
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-10 w-10 inline-block mx-2 hover:text-gray-400"
                        fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                        </svg>
                        <!-- Facebook -->
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-10 w-10 inline-block mx-2 hover:text-gray-400"
                        fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                        </svg>
                    </div>
                    <br>
                    <p class="text-gray-200 hover:text-gray-400">Encuentranos en nuestras redes sociales</p>
                    </section>
                </div>
            </div>
            {{-- <section class="text-left text-white">
                <h1 class="text-2xl uppercase">Zentral Group Informatic</h1>
                <p class="mt-2">Grupo informático especializado en: </p>
                <p class="mt-1">Desarrollo Web | Informática Forense | Hacking Ético</p>
            </section> --}}
            <!-- Contenedor de íconos centrado -->
            {{-- <section class="pt-2">
                <div class="flex justify-end">
                <!-- Twitter -->
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-10 w-10 inline-block mx-2"
                    fill="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"
                    />
                </svg>
                <!-- Instagram -->
                <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-10 w-10 inline-block mx-2"
                fill="currentColor"
                viewBox="0 0 24 24">
                <path
                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                </svg>
    
                <!-- Linkedin -->
                <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-10 w-10 inline-block mx-2"
                fill="currentColor"
                viewBox="0 0 24 24">
                <path
                    d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                </svg>
                <!-- Whatsapp -->
                <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-10 w-10 inline-block mx-2"
                fill="currentColor"
                viewBox="0 0 24 24">
                <path
                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                </svg>
                <!-- Facebook -->
                <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-10 w-10 inline-block mx-2"
                fill="currentColor"
                viewBox="0 0 24 24">
                <path
                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                </svg>
            </div>
            <br>
            <p class="text-gray-200">Encuentranos en nuestras redes sociales</p>
            </section> --}}
            
        </section>
    </body>
</html>
