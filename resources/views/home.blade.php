<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concurso Exclusivo - Experiencia Premium</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand': '#c00000',
                        'dark': '#111111',
                        'silver': '#e0e0e0',
                    },
                    fontFamily: {
                        'sans': ['Helvetica', 'Arial', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
        }

        .hero-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('images/luxury-car.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        .transition-all {
            transition: all 0.3s ease;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">
    <!-- Header -->
    <header class="bg-black text-white fixed w-full z-50">
        <div class="container mx-auto px-4 flex justify-between items-center" style="height: 4.5rem;">
            <div class="flex items-center" style="height: 100%;">
                <img src="{{ asset('images/logo.png') }}" alt="AutoCrixus"
                    style="height: 100%; width: auto; transform: scaleX(1.4); transform-origin: left;">
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="#" class="text-sm uppercase tracking-wider hover:text-brand transition-all">Modelos</a>
                <a href="#" class="text-sm uppercase tracking-wider hover:text-brand transition-all">Servicios</a>
                <a href="#"
                    class="text-sm uppercase tracking-wider hover:text-brand transition-all">Concesionarios</a>
                <a href="#" class="text-sm uppercase tracking-wider hover:text-brand transition-all">Contacto</a>
            </nav>
            <div class="md:hidden">
                <button class="text-white">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-bg text-white pt-32 pb-24 md:pt-48 md:pb-40">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-light mb-4 tracking-wide">EXPERIENCIA EXCLUSIVA</h1>
            <div class="w-24 h-1 bg-brand mx-auto mb-8"></div>
            <p class="text-xl md:text-2xl font-light max-w-3xl mx-auto mb-12 leading-relaxed">
                Regístrate y sé parte de un evento único diseñado para los verdaderos conocedores de nuestra marca.
            </p>
            <a href="#registro"
                class="inline-block bg-brand hover:bg-red-700 text-white font-medium py-3 px-8 rounded-sm uppercase tracking-wider transition-all transform hover:scale-105">
                Participar ahora
            </a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-light mb-4">DESCUBRE LA EXCELENCIA</h2>
                <div class="w-24 h-1 bg-brand mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 transform transition-all hover:translate-y-[-10px]">
                    <div class="inline-block p-4 rounded-full bg-gray-100 mb-6">
                        <i class="fas fa-tachometer-alt text-3xl text-brand"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">RENDIMIENTO SUPERIOR</h3>
                    <p class="text-gray-600">Experimenta la potencia y precisión que definen a nuestra marca en cada
                        kilómetro.</p>
                </div>

                <div class="text-center p-6 transform transition-all hover:translate-y-[-10px]">
                    <div class="inline-block p-4 rounded-full bg-gray-100 mb-6">
                        <i class="fas fa-cogs text-3xl text-brand"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">TECNOLOGÍA AVANZADA</h3>
                    <p class="text-gray-600">Innovación que redefine la experiencia de conducción con sistemas
                        inteligentes.</p>
                </div>

                <div class="text-center p-6 transform transition-all hover:translate-y-[-10px]">
                    <div class="inline-block p-4 rounded-full bg-gray-100 mb-6">
                        <i class="fas fa-gem text-3xl text-brand"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">DISEÑO EXCLUSIVO</h3>
                    <p class="text-gray-600">Elegancia y sofisticación en cada detalle, creando una presencia
                        inconfundible.</p>
                </div>
            </div>
        </div>
    </section>

    @if ($ganador)
    <div class="bg-gradient-to-r from-yellow-100 via-yellow-300 to-yellow-400 p-8 rounded-2xl shadow-lg text-center mt-10">
        <h2 class="text-4xl font-bold text-gray-900 mb-6 flex justify-center items-center gap-3">

            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow-500 animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-3-3v6m3-9a9 9 0 11-6 0 9 9 0 016 0z" />
            </svg>
            ¡Tenemos un ganador!
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow-500 animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-3-3v6m3-9a9 9 0 11-6 0 9 9 0 016 0z" />
            </svg>
        </h2>

        <div class="flex flex-col items-center gap-6">

            <div class="w-36 h-36 rounded-full bg-yellow-400 flex justify-center items-center shadow-lg border-4 border-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2a7 7 0 017 7c0 3.87-3.13 7-7 7s-7-3.13-7-7a7 7 0 017-7zm0 2a5 5 0 100 10 5 5 0 000-10z" />
                <path d="M12 14l3 3h-6l3-3z" />
            </svg>
            </div>

            <p class="text-2xl text-gray-800 font-semibold flex items-center gap-2">
                🏅 <strong>{{ $ganador->name.' '.$ganador->last_name }}</strong> ha sido seleccionado como el afortunado ganador.
            </p>

            <div class="w-full max-w-xl rounded-xl bg-yellow-200 p-6 flex justify-center items-center shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M12 2v4m0 12v4m10-10h-4M2 12H6m15.364 6.364l-2.828-2.828M6.464 6.464l-2.828-2.828" />
            </svg>
            </div>

            <p class="mt-4 text-lg text-gray-700">
                Gracias a todos por participar. ¡No olvides seguirnos para los próximos sorteos! 🎁
            </p>
        </div>
    </div>
    @endif

    <!-- Registration Form -->
    <section id="registro" class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-white shadow-xl rounded-lg overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/3 bg-dark text-white p-8 md:p-12">
                        <h2 class="text-2xl font-light mb-6 tracking-wide">REGISTRO EXCLUSIVO</h2>
                        <div class="w-12 h-1 bg-brand mb-6"></div>
                        <p class="text-gray-300 mb-8">
                            Complete el formulario para participar en nuestra experiencia exclusiva diseñada para
                            clientes distinguidos.
                        </p>
                        <div class="space-y-6 text-sm">
                            <div class="flex items-start">
                                <i class="fas fa-trophy text-brand mt-1 mr-3"></i>
                                <span>Acceso a eventos VIP</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-star text-brand mt-1 mr-3"></i>
                                <span>Pruebas de manejo exclusivas</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-gift text-brand mt-1 mr-3"></i>
                                <span>Regalos de edición limitada</span>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-2/3 p-8 md:p-12">
                        <form id="registration-form" method="POST" action="{{ route('registro.store') }}">
                            @csrf

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Nombre
                                        *</label>
                                    <input type="text" id="name" name="name" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:outline-none focus:ring-1 focus:ring-brand focus:border-brand">
                                </div>

                                <div>
                                    <label for="last_name" class="block text-gray-700 text-sm font-medium mb-2">Apellido
                                        *</label>
                                    <input type="text" id="last_name" name="last_name" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:outline-none focus:ring-1 focus:ring-brand focus:border-brand">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label for="type_identification_id"
                                        class="block text-gray-700 text-sm font-medium mb-2">Tipo de identificación
                                        *</label>
                                    <select id="type_identification_id" name="type_identification_id" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:outline-none focus:ring-1 focus:ring-brand focus:border-brand">
                                        <option value="" disabled selected>Seleccione tipo</option>
                                        @foreach ($identificaciones as $identificacion)
                                            <option value="{{ $identificacion->id }}">{{ $identificacion->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>

                                <div>
                                    <label for="document_number"
                                        class="block text-gray-700 text-sm font-medium mb-2">Número de identificación
                                        *</label>
                                    <input type="text" id="document_number" name="document_number" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:outline-none focus:ring-1 focus:ring-brand focus:border-brand">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label for="province"
                                        class="block text-gray-700 text-sm font-medium mb-2">Departamento *</label>
                                    <select id="province" name="province" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:outline-none focus:ring-1 focus:ring-brand focus:border-brand appearance-none bg-white">
                                        <option value="">Seleccionar</option>
                                        @foreach ($departamentos as $departamento)
                                            <option value="{{ $departamento->id }}">{{ $departamento->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <label for="city_id" class="block text-gray-700 text-sm font-medium mb-2">Ciudad
                                        *</label>
                                    <select id="city_id" name="city_id" required disabled
                                        class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:outline-none focus:ring-1 focus:ring-brand focus:border-brand appearance-none bg-white">
                                        <option value="">Seleccionar</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label for="phone" class="block text-gray-700 text-sm font-medium mb-2">Celular
                                        *</label>
                                    <input type="text" id="phone" name="phone" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:outline-none focus:ring-1 focus:ring-brand focus:border-brand">
                                </div>

                                <div>
                                    <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Correo
                                        Electrónico *</label>
                                    <input type="email" id="email" name="email" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:outline-none focus:ring-1 focus:ring-brand focus:border-brand">
                                </div>
                            </div>

                            <div class="mb-8">
                                <div class="flex items-start">
                                    <input type="checkbox" id="habeas-data" name="habeas_data" required
                                        class="mt-1 mr-3 h-4 w-4 text-brand focus:ring-brand rounded-sm">
                                    <label for="habeas-data" class="text-gray-700 text-sm">
                                        Autorizo el tratamiento de mis datos de acuerdo con la finalidad establecida en
                                        la
                                        <a href="# target="_blank" class="text-brand hover:underline">
                                            política de protección de datos personales.
                                        </a>. *
                                    </label>
                                </div>
                            </div>

                            <button type="submit"
                                class="w-full bg-brand hover:bg-red-700 text-white font-medium py-3 px-6 rounded-sm uppercase tracking-wider transition-all transform hover:scale-105">
                                Registrarme
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-dark text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-light mb-4">LA EXPERIENCIA</h2>
                <div class="w-24 h-1 bg-brand mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-900 p-8 rounded-sm">
                    <div class="flex items-center mb-6">
                        <div class="mr-4">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Cliente"
                                class="w-16 h-16 rounded-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-medium">Carlos Ramírez</h4>
                            <p class="text-gray-400 text-sm">Propietario desde 2018</p>
                        </div>
                    </div>
                    <p class="text-gray-300 italic">"La atención personalizada y el servicio exclusivo hacen que la
                        experiencia con esta marca sea incomparable. Cada detalle está pensado para satisfacer."</p>
                </div>

                <div class="bg-gray-900 p-8 rounded-sm">
                    <div class="flex items-center mb-6">
                        <div class="mr-4">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Cliente"
                                class="w-16 h-16 rounded-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-medium">Ana Martínez</h4>
                            <p class="text-gray-400 text-sm">Propietaria desde 2020</p>
                        </div>
                    </div>
                    <p class="text-gray-300 italic">"Los eventos exclusivos para clientes son una oportunidad única
                        para conocer las últimas innovaciones y compartir con personas que aprecian la excelencia."</p>
                </div>

                <div class="bg-gray-900 p-8 rounded-sm">
                    <div class="flex items-center mb-6">
                        <div class="mr-4">
                            <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="Cliente"
                                class="w-16 h-16 rounded-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-medium">Javier López</h4>
                            <p class="text-gray-400 text-sm">Propietario desde 2019</p>
                        </div>
                    </div>
                    <p class="text-gray-300 italic">"Más que un automóvil, es una experiencia completa. El servicio
                        post-venta y la atención al cliente son tan excepcionales como el vehículo mismo."</p>
                </div>
            </div>
        </div>
    </section>


    <!-- CTA Section -->
    <section class="py-20 bg-brand text-white text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-light mb-6">NO PIERDAS ESTA OPORTUNIDAD EXCLUSIVA</h2>
            <p class="text-xl max-w-3xl mx-auto mb-10">Regístrate hoy y sé parte de una experiencia diseñada para
                verdaderos conocedores.</p>
            <a href="#registro"
                class="inline-block bg-white text-brand hover:bg-gray-100 font-medium py-3 px-8 rounded-sm uppercase tracking-wider transition-all transform hover:scale-105">
                Participar ahora
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <img src="{{ asset('images/logo.png') }}" alt="AutoCrixus" class="h-16 mb-6">
                    <p class="text-gray-400 text-sm">
                        Experiencia, innovación y excelencia en cada detalle. Descubra por qué somos líderes en la
                        industria automotriz premium.
                    </p>
                </div>

                <div>
                    <h4 class="text-lg font-medium mb-4">Enlaces rápidos</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white transition-all">Modelos</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Configurador</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Servicios</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Financiación</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-medium mb-4">Soporte</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white transition-all">Contacto</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Concesionarios</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Servicio técnico</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Preguntas frecuentes</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-medium mb-4">Síguenos</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-all">
                            <i class="fab fa-facebook-f text-lg"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-all">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-all">
                            <i class="fab fa-twitter text-lg"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-all">
                            <i class="fab fa-youtube text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="pt-8 border-t border-gray-800 text-center text-sm text-gray-500">
                <p>&copy; {{ date('Y') }} Compañía de Automóviles Premium. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const provinceSelect = document.getElementById('province');
        const citySelect = document.getElementById('city_id');

        provinceSelect.addEventListener('change', function() {
            const provinceId = this.value;

            if (!provinceId) {
                citySelect.innerHTML = '<option value="">Seleccionar</option>';
                citySelect.disabled = true;
                return;
            }

            citySelect.disabled = false;
            citySelect.innerHTML = '<option value="">Cargando...</option>';

            fetch(`/ciudades/${provinceId}`)
                .then(response => response.json())
                .then(data => {
                    citySelect.innerHTML = '<option value="">Seleccionar</option>';
                    data.forEach(city => {
                        const option = document.createElement('option');
                        option.value = city.id;
                        option.textContent = city.name;
                        citySelect.appendChild(option);
                    });
                })
                .catch(() => {
                    citySelect.innerHTML = '<option value="">Error cargando ciudades</option>';
                });
        });
    });
</script>
@if(session('success'))
<script>
    alert("🎉 ¡Éxito! {{ session('success') }}");
</script>
@endif

@if($errors->any())
<script>
    let errores = @json($errors->all());
    alert("❌ Error:\n" + errores.join("\n"));
</script>
@endif
</html>
