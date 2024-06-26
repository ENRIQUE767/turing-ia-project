<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('CSS/styles.css') }}">
    <link rel="icon" href="{{ asset('img/icono.ico') }}" type="image/x-icon">
    <title>Welcome...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body style="background-color: #c8d3d9;">

     <div class="containerr" style="background-color: #112e40;">
        <div class="columna">
            <h2 class="titulo" style="color: WHITE">TURING-IA</h2>
        </div>
        <div class="columna icono" style="padding-left: 350px;">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin"></i>
            <i class="fab fa-github"></i>
        </div>
     </div>

    <!-- Menú de opciones -->
    <div class="containerr" style="background-color: #c8d3d9;">
        <div>

        </div>
        <div class="menu">
            <ul>
                <li><a href="#bienvenida">Bienvenido</a></li>
                <li><a href="#directorio">Directorio</a></li>
                <li><a href="#asesores">Agentes</a></li>
            </ul>
        </div>
     </div>

    <!-- Contenedor de bienvenida -->
    <section id="bienvenida" class="contenedorBien">
        <div class="inicio">
            <h1 style="font-weight: bold;font-size: 2.5rem; color: #333;  font-family: Arial, sans-serif; border-bottom: 2px solid #ccc;">¡Bienvenido al Sitio!</h1>
            <p>
                Bienvenidos a un mundo lleno de maravillas por descubrir. ¡Prepárate para vivir momentos inolvidables y crea recuerdos que perdurarán toda la vida!

Bienvenidos a Zonas Turísticas, donde comienza tu próxima gran aventura.
            </p>

            <div class="container text-center" style="margin: 80px 0px 0px 0px">

                <div class="row align-items-center " >
                  <div class="col caja">
                    <p><br>
                        Visión: Nos esforzamos por ser un compañero de confianza para todos aquellos que desean explorar el mundo
                    </p>
                  </div>
                  <div class="col caja">
                    <p><br>
                        Misión: Inspirar y facilitar experiencias de viaje inolvidables, conectando a los exploradores con las maravillas del mundo.
                    </p>
                  </div>
                  <div class="col caja">
                    <p><br>
                        Valores: Pasión por los Viajes, Excelencia, Integridad, Innovacion, Compromiso.
                    </p>
                  </div>
                </div>
            </div>
        </div>
    </section>



    <br><br><br><br><br>
    <!-- Pequeño catálogo -->
    <section id="directorio">
        <h2 class="slider-title" style="text-align: center;font-weight: bold; padding: 20px 20px 20px 20px">Directorio</h2>
        <div class="container">
            <div id="users" class="row"></div>
        </div>
    </section>

    <!-- Galeria -->
    <section id="galeria" class="my-5">
        <h2 class="text-center font-weight-bold mb-4">Galería de Fotos</h2>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/galeria1.jpg') }}" class="card-img-top" alt="Foto 1">
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/galeria2.jpg') }}" class="card-img-top" alt="Foto 2">
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/galeria3.jpg') }}" class="card-img-top" alt="Foto 3">
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('img/galeria4.jpg') }}" class="card-img-top" alt="Foto 4">
                    </div>
                </div>
            </div>
    </section>

    <!-- Agentes -->
    <section id="asesores">
        <div class="slider-container" style="background-color: #c8d3d9;">
            <h2 class="slider-title" style="text-align: center;font-weight: bold; padding: 20px 20px 20px 20px">Agentes</h2>
        <div class="slider">
            <div class="slides">
                <div class="slide">
                    <img src="{{ asset('img/persona1.jpg') }}" alt="Person 1">
                    <p style="font-weight: bold; font-size: 20px">Sofía Salabeth​</p>
                </div>
                <div class="slide">
                    <img src="{{ asset('img/persona4.jpg') }}" alt="Person 2">
                    <p style="font-weight: bold; font-size: 20px">Ariel Aragón</p>
                </div>
                <div class="slide">
                    <img src="{{ asset('img/persona3.jpg') }}" alt="Person 3">
                    <p style="font-weight: bold; font-size: 20px">Eligio Enciso</p>
                </div>
            </div>
            <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>
        </div>
    </section>

    <br><br><br><br>

    <!-- Pie de página -->
    <footer id="pie" class="pie">
        <div class="piee" style="background-color: #112e40;">
            <div class="columna icono">
                <br><br>
                <p style="color: white">&copy; 2024 TURING-IA.</p>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-github"></i>
            </div>
            <div class="columna">
                <h4 class="titulos_pie">Lugares</h4>
                <br>
                <ul style="list-style-type: none;">
                    <li><a href="#bienvenida" class="enlaces">Home</a></li>
                    <li><a href="#directorio" class="enlaces">Directorio</a></li>
                    <li><a href="#asesores" class="enlaces">Agentes</a></li>
                    <li><a href="{{ asset('estados') }}" class="enlaces">Estados</a></li>
                    <li><a href="{{ asset('zonas') }}" class="enlaces">Zonas</a></li>
                </ul>
            </div>
            <div class="columna">
                <h4 class="titulos_pie">Experiencia</h4>
                <div class="ratio ratio-16x9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/VbaHIOyqbXs?si=K_3cXAlS0apv0gzv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </div>
            </div>
            <div class="columna">
                <img src="{{ asset('img/turing.jpg') }}" class="rounded float-end" >
            </div>
         </div>
    </footer>

    <script src="{{ asset('JS/script.js') }}"></script>
    <script src="{{ asset('JS/index.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
