<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reborntech</title>
    @vite("resources/css/app.css")
</head>
<body class="flex flex-col min-h-screen">
    <!-- Header -->
    <header class="bg-black text-white p-4 flex items-center justify-between">
        <!-- Logo de la empresa -->
        <div class="flex items-center mr-4">
            <img src="{{ asset('img/logo-reborntech1.png') }}" alt="Logo Empresa" class="h-16 w-15 mr-4">
        </div>

        <!-- Botón de menú con texto centrado debajo -->
        <div class="flex flex-col items-center -space-y-3.5">
            <button class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
            <span class="text-white text-sm block text-center">Menu</span>
        </div>

        <!-- Barra de búsqueda centrada -->
        <div class="flex-grow mx-4 flex items-center justify-center">
            <input type="text" placeholder="Buscar..." class="w-10/12 p-2 rounded-lg bg-gray-100 text-black">
            <button class="ml-2 text-white">
                <img src="{{ asset('img/logo-lupa.png') }}" alt="Buscar" class="h-12 w-12">
            </button>
        </div>

        <!-- Sección de usuario y carrito -->
        <div class="flex items-center space-x-6 -ml-4">
            <!-- Logo de usuario -->
            <div class="text-center">
                <img src="{{ asset('img/logo-usuario.png') }}" alt="Usuario" class="h-12 w-15 mx-auto">
                <span class="block text-sm tex">Iniciar sesión</span>
            </div>

            <!-- Logo de carrito -->
            <div class="text-center">
                <img src="{{ asset('img/logo-carrito.png') }}" alt="Carrito" class="h-12 w-15 mx-auto">
                <span class="block text-sm">Carrito</span>
            </div>
        </div>
    </header>
    <!-- Fin de la cabecera -->

    <!-- Contenido específico de la vista -->
    @yield('content')

    <!-- Footer -->
    <footer class="bg-black text-white p-8 mt-auto">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Redes Sociales -->
            <div>
                <h3 class="text-yellow-400 font-bold mb-4">VISITA NUESTRAS REDES</h3>
                <div class="flex space-x-4">
                    <a href="#" class="hover:opacity-80"><img src="{{ asset('img/fblogofifi.png') }}" alt="Facebook" class="w-8 h-8"></a>
                    <a href="#" class="hover:opacity-80"><img src="{{ asset('img/iglogo.png') }}" alt="Instagram" class="w-8 h-8"></a>
                    <a href="#" class="hover:opacity-80"><img src="{{ asset('img/ytlogo.png') }}" alt="YouTube" class="w-8 h-8"></a>
                    <a href="#" class="hover:opacity-80"><img src="{{ asset('img/tiktologo.png') }}" alt="TikTok" class="w-8 h-8"></a>
                    <a href="#" class="hover:opacity-80"><img src="{{ asset('img/twilogo.png') }}" alt="Twitter" class="w-8 h-8"></a>
                </div>
            </div>

            <!-- Nuestra Empresa -->
            <div>
                <h3 class="text-yellow-400 font-bold mb-4">NUESTRA EMPRESA</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-yellow-400">Acerca de nosotros</a></li>
                </ul>
            </div>

            <!-- Te Ayudamos -->
            <div>
                <h3 class="text-yellow-400 font-bold mb-4">TE AYUDAMOS</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-yellow-400">Atención al cliente</a></li>
                </ul>
            </div>

            <!-- Métodos de Pago -->
            <div>
                <h3 class="text-yellow-400 font-bold mb-4">MÉTODOS DE PAGO</h3>
                <div class="flex flex-col space-y-4">
                    <!-- Primera fila: 3 logos -->
                    <div class="flex justify-between items-center">
                        <img src="{{ asset('img/goopay.png') }}" alt="Google Pay" class="w-auto h-6 object-contain">
                        <img src="{{ asset('img/mastercad.png') }}" alt="Mastercard" class="w-auto h-10 object-contain">
                        <img src="{{ asset('img/vilogo.png') }}" alt="Visa" class="w-auto h-6 object-contain">
                    </div>
                    <!-- Segunda fila: 2 logos -->
                    <div class="flex justify-around items-center">
                        <img src="{{ asset('img/paypalogo.png') }}" alt="PayPal" class="w-auto h-6 object-contain">
                        <img src="{{ asset('img/amerilogo.png') }}" alt="American Express" class="w-auto h-6 object-contain">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Fin del Footer -->
</body>
</html>
