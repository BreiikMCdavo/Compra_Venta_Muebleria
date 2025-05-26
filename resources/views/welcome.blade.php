<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Sistema de ventas para gestionar compras, ventas
    clientes, proveedores, productos, categorías, etc. Ideal para pequeños y medianos negocios que deesen
    automatizar sus procesos y tener a la mano cualquier información sobre su negocio" />
    <meta name="author" content="SakCode" />
    <title>Sistema de venta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <!--Barra de navegación--->
    <nav class="navbar navbar-expand-md " style="background-color:rgb(0, 0, 0);">
        <div class="container-fluid">
            <!---Marca navegación-->
            <a class="navbar-brand" href="{{route('panel')}}">
                <img src="{{ asset('assets/img/icon.png') }}" alt="Logo" width="30" height="30"
                    class="d-inline-block align-text-top">
                Sistema de venta
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!----Lista de opciones del menú-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('panel')}}">Inicio</a>
                    </li>

                </ul>

                <form class="d-flex" action="{{route('login')}}" method="get">
                    <button class="btn btn-outline-primary" type="submit">Iniciar sesión</button>
                </form>

            </div>
        </div>
    </nav>
    <!-- ---------------------------------------------------------------------------------------------------------------- -->

    <div class="carousel-inner">
        <div class="carousel-item active">

        </div>

        <!-- <div class="carousel-item active">
            <img src="https://media.gettyimages.com/id/1396593401/es/foto/showroom-de-muebles-con-diferentes-muebles-de-cama-plantas-en-macetas-y-mesas-auxiliares.jpg?s=2048x2048&w=gi&k=20&c=rELogYAUm8KwxXc3RdylMFLp6Lf1shQCP0NKkllVlSQ=
                " class="d-block w-100" alt="banner de invitacion">
        </div>
    -->
        <div class="carousel-item active">
            <img src="https://media.gettyimages.com/id/1350859272/es/foto/muebles-de-lujo.jpg?s=2048x2048&w=gi&k=20&c=XuIWH3mOHLYa80QJa5WJfMsMXOlNWSDyIHzOa3Aw7J8="
                class="d-block w-100" style="height: 600px; object-fit: cover;" alt="Banner de publicidad">
        </div>


        <!-- ---------------------------------------------------------------------------------------------------------------- -->

        <!----Carrusel--->
        <div id="carouselExample" class="carousel slide carousel-fade">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" style="max-width: 900px; margin: auto;"> <!-- Margen centrado y ancho -->

                    <div class="carousel-item active">
                        <video class="d-block w-100" autoplay muted loop>
                            <source
                                src="https://media.gettyimages.com/id/2149884369/es/v%C3%ADdeo/im%C3%A1genes-de-v%C3%ADdeo-a-trav%C3%A9s-de-una-tienda-departamental-con-una-gran-selecci%C3%B3n-de-muebles-en.mp4?s=mp4-640x640-gi&k=20&c=7WMSZ2PVe48Ole5uRYNQ-7GibLWj08bgKkJmD9L99d4="
                                type="video/mp4">

                        </video>
                    </div>

                    <div class="carousel-item">
                        <img src="https://media.gettyimages.com/id/1396593401/es/foto/showroom-de-muebles-con-diferentes-muebles-de-cama-plantas-en-macetas-y-mesas-auxiliares.jpg?s=2048x2048&w=gi&k=20&c=rELogYAUm8KwxXc3RdylMFLp6Lf1shQCP0NKkllVlSQ="
                            class="d-block w-100" alt="banner de invitación">
                    </div>

                    <div class="carousel-item">
                        <img src="https://media.gettyimages.com/id/200477494-001/es/foto/customer-in-furniture-shop.jpg?s=2048x2048&w=gi&k=20&c=KZZ6PcqMFApD4rLryfV4iL0jYsJWmQ8pJvI7_bpRw8s="
                            class="d-block w-100" style="max-height: 500px; object-fit: cover;"
                            alt="Banner de publicidad">
                    </div>

                    <div class="carousel-item">
                        <img src="https://media.gettyimages.com/id/1350859272/es/foto/muebles-de-lujo.jpg?s=2048x2048&w=gi&k=20&c=XuIWH3mOHLYa80QJa5WJfMsMXOlNWSDyIHzOa3Aw7J8="
                            class="d-block w-100" style="max-height: 500px; object-fit: cover;"
                            alt="Banner de publicidad">
                    </div>

                </div>

                <!-- Controles opcionales -->
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button> -->
            </div>

            <!-- RUTA ASSET
             <div class="carousel-item">
                <img src="{{asset('assets/img/summonersrift.png')}}" class="d-block w-100" alt="Banner de contáctanos">
            </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!---Section Ventajas / Desventajas--->

    <!-- ----------------------------------------------------------------------------------------------------- -->

    <head>
        <meta charset="UTF-8">
        <title>Galería de Muebles</title>
        <style>
            body {
                font-family: 'Segoe UI', sans-serif;
                background: #f4f4f4;
                margin: 0;
                padding: 20px;
            }

            h1 {
                text-align: center;
                color: #333;
            }

            .galeria {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 20px;
                margin-top: 30px;
                max-width: 1200px;
                margin-left: auto;
                margin-right: auto;
            }

            .cuadro {
                background: #fff;
                border: 6px solid #bbb;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                padding: 5px;
                transition: transform 0.3s, box-shadow 0.3s;
            }

            .cuadro:hover {
                transform: scale(1.03);
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            }

            .cuadro img {
                width: 100%;
                height: auto;
                display: block;
            }

            .descripcion {
                text-align: center;
                margin-top: 8px;
                font-weight: bold;
                color: #555;
            }
        </style>
    </head>

    <body>

        <h1>Galería de Cuadros de Muebles</h1>

        <div class="galeria">
            <div class="cuadro">
                <img src="https://imgs.search.brave.com/ZuUYSuZGMOH3gMJLrfnzGyVxuIOeGOQETW6QTK5jMHg/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWdz/LnNlYXJjaC5icmF2/ZS5jb20vNVZTUU9m/eHBmUEZEbVQtcXM3/RVRqNTMxeXByTFZj/VWhXRXRmbVJId29r/SS9yczpmaXQ6NTAw/OjA6MDowL2c6Y2Uv/YUhSMGNITTZMeTl0/WldScC9ZUzVwYzNS/dlkydHdhRzkwL2J5/NWpiMjB2YVdRdk9U/STMvTURnd05UZzRM/MlZ6TDJadi9kRzh2/YzI5bUpVTXpKVUV4/L0xXUmxMWFJsYkdF/dFlYcDEvYkMxbGJp/MXlaVzVrWlhKcC9l/bUZrYnkwelpDMWta/UzFtL2IyNWtieTFp/YkdGdVkyOHUvYW5C/blAzTTlOakV5ZURZ/eC9NaVozUFRBbWF6/MHlNQ1pqL1BYWk9M/WGxmVkVneWQwMXIv/U1dwNFRHTmZVMHAw/ZDJOeS9XRlJLYzBw/T1VYUlBVSFZRL2Mx/RndSR3hoV0hNOQ.jpeg
      " alt="Sofá moderno">
                <div class="descripcion">Sofá Moderno</div>
            </div>
            <div class="cuadro">
                <img src="https://imgs.search.brave.com/83C0qVIogmPNkGE0RKjEOy2PUdAUfPGlVI0LeeO4HLY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWdz/LnNlYXJjaC5icmF2/ZS5jb20vem9OX2VB/TnNRVDVWbjg1SEtZ/LXA1MmZzVmQxYk1K/Vk1LRzNRTTY5R0NU/Yy9yczpmaXQ6NTAw/OjA6MDowL2c6Y2Uv/YUhSMGNITTZMeTl0/WldScC9ZUzVwYzNS/dlkydHdhRzkwL2J5/NWpiMjB2YVdRdk9U/VXcvTVRJM05EWTBM/MlZ6TDJadi9kRzh2/YVcxd2NtVnphVzl1/L1lXNTBaUzFqYjJO/cGJtRXQvZVMxamIy/MWxaRzl5TFdWdS9M/V05oYzJFdFpHVXRi/SFZxL2J5MXVkV1Yy/WVMxMmFXZGgvY3kx/a1pTMXRZV1JsY21F/dC9lUzFzSlVNekpV/RXhiWEJoL2NtRnpM/V052YkdkaGJuUmwv/Y3kxa1pTNXFjR2Nf/Y3owMi9NVEo0TmpF/eUpuYzlNQ1pyL1BU/SXdKbU05VlVOTFpF/Y3QvYzBGNk1HTlFj/MVpqT0ZOMC9RWEZZ/VTJWd1l6UkRiR2xs/L09FNXBUR2w0ZFZS/eVkzSkIvVlQw
      " alt="Comedor elegante">
                <div class="descripcion">Comedor Elegante</div>
            </div>
            <div class="cuadro">
                <img src="https://imgs.search.brave.com/xXr_1IRt3wFOU58AjfToi6Z2TIjaUl2n1iXJicG1ouA/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWdz/LnNlYXJjaC5icmF2/ZS5jb20vYi1wLXpW/TjJDNTI1ZUR2U1Vj/MkFyLXN1SW15Szl3/a0U2MWJLUHBibzlh/NC9yczpmaXQ6NTAw/OjA6MDowL2c6Y2Uv/YUhSMGNITTZMeTl0/WldScC9ZUzVwYzNS/dlkydHdhRzkwL2J5/NWpiMjB2YVdRdk1U/TTEvTVRNeU1EZ3pO/QzlsY3k5bS9iM1J2/TDNSeVpYTXRjMmxz/L2JHRnpMV0pzWVc1/allYTXQvZG1GakpV/TXpKVUZFWVhNdC9l/UzExYm1FdGNtOXFZ/UzF6L2IySnlaUzFt/YjI1a2J5MWsvWlMx/d1lYSmxaQzFuY21s/ei9MV1Z1TFc5bWFX/TnBibUV0L2J5MW9Z/V0pwZEdGamFTVkQv/TXlWQ00yNHVhbkJu/UDNNOS9OakV5ZURZ/eE1pWjNQVEFtL2F6/MHlNQ1pqUFZodlVt/WTMvTlZGMFVsWnNR/bGxoWDBGQy9ORTR3/U21KWWQxaDBTMkp4/L1lVZDRYekpOTkdG/WVZUbHAvWWtrOQ
      " alt="Silla de diseño">
                <div class="descripcion">Silla de Diseño</div>
            </div>
            <div class="cuadro">
                <img src="https://imgs.search.brave.com/BjZ8C5CANVYs8B9nm0o1cJj-6hKSfOe7YvD3gtp6cYo/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWdz/LnNlYXJjaC5icmF2/ZS5jb20vZF83YTl3/aURRVzNhT2lyVEY4/YktoZDVRLTVnQ3Bx/LW9RLXVRTzJwX2JJ/MC9yczpmaXQ6NTAw/OjA6MDowL2c6Y2Uv/YUhSMGNITTZMeTl0/WldScC9ZUzVwYzNS/dlkydHdhRzkwL2J5/NWpiMjB2YVdRdk1U/QTIvTnpNeU5UVTNP/QzlsY3k5bS9iM1J2/TDJObGNtTmhMV1Js/L0xXMWhaR1Z5WVMx/bGMzUmgvYm5SbExX/TnZiaTFzYVdKeS9i/M010Wlc0dGJHRXRj/MkZzL1lTMWtaUzFs/YzNSaGNpNXEvY0dj/X2N6MDJNVEo0TmpF/eS9KbmM5TUNaclBU/SXdKbU05L09FOXRh/MlZCWWtOZlgxSXov/Wkd4VFlqUndlRU5U/VjBGTS9OM0JxTXpK/SFdIaFRkVGhNL1lW/RnBOMk13Wnow
      " alt="Estantería moderna">
                <div class="descripcion">Estantería Moderna</div>
            </div>
            <div class="cuadro">
                <img src="https://imgs.search.brave.com/as05-VBeuyt-w6O2urqRRLt6wKpy0vWFHZLydyuyE30/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWdz/LnNlYXJjaC5icmF2/ZS5jb20vRXZYWlVX/WEpvRGVHUmVnVHVv/ZHZjTlhuUUlHY0h4/a3V0c1N3UGFrM1BF/WS9yczpmaXQ6NTAw/OjA6MDowL2c6Y2Uv/YUhSMGNITTZMeTl0/WldScC9ZUzVwYzNS/dlkydHdhRzkwL2J5/NWpiMjB2YVdRdk5q/VTEvTnpnMU16YzJM/MlZ6TDJadi9kRzh2/WTJGdFlTMWtiMkpz/L1pTMXhkV1ZsYmkx/emFYcGwvTG1wd1p6/OXpQVFl4TW5nMi9N/VEltZHowd0ptczlN/akFtL1l6MDJVazQ1/WlhWS2FtWnIvVW5Z/MFJTMDFVRkZ5YUdw/Wi9jSFZRWDFCUlUw/VjRaRnBRL1JWTjNi/bGxGUWswd1BR
      " alt="Cama minimalista">
                <div class="descripcion">Cama Minimalista</div>
            </div>
            <div class="cuadro">
                <img src="https://imgs.search.brave.com/as05-VBeuyt-w6O2urqRRLt6wKpy0vWFHZLydyuyE30/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWdz/LnNlYXJjaC5icmF2/ZS5jb20vRXZYWlVX/WEpvRGVHUmVnVHVv/ZHZjTlhuUUlHY0h4/a3V0c1N3UGFrM1BF/WS9yczpmaXQ6NTAw/OjA6MDowL2c6Y2Uv/YUhSMGNITTZMeTl0/WldScC9ZUzVwYzNS/dlkydHdhRzkwL2J5/NWpiMjB2YVdRdk5q/VTEvTnpnMU16YzJM/MlZ6TDJadi9kRzh2/WTJGdFlTMWtiMkpz/L1pTMXhkV1ZsYmkx/emFYcGwvTG1wd1p6/OXpQVFl4TW5nMi9N/VEltZHowd0ptczlN/akFtL1l6MDJVazQ1/WlhWS2FtWnIvVW5Z/MFJTMDFVRkZ5YUdw/Wi9jSFZRWDFCUlUw/VjRaRnBRL1JWTjNi/bGxGUWswd1BR
      " alt="Cama minimalista">
                <div class="descripcion">Cama Minimalista</div>
            </div>
            <div class="cuadro">
                <img src="https://imgs.search.brave.com/as05-VBeuyt-w6O2urqRRLt6wKpy0vWFHZLydyuyE30/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWdz/LnNlYXJjaC5icmF2/ZS5jb20vRXZYWlVX/WEpvRGVHUmVnVHVv/ZHZjTlhuUUlHY0h4/a3V0c1N3UGFrM1BF/WS9yczpmaXQ6NTAw/OjA6MDowL2c6Y2Uv/YUhSMGNITTZMeTl0/WldScC9ZUzVwYzNS/dlkydHdhRzkwL2J5/NWpiMjB2YVdRdk5q/VTEvTnpnMU16YzJM/MlZ6TDJadi9kRzh2/WTJGdFlTMWtiMkpz/L1pTMXhkV1ZsYmkx/emFYcGwvTG1wd1p6/OXpQVFl4TW5nMi9N/VEltZHowd0ptczlN/akFtL1l6MDJVazQ1/WlhWS2FtWnIvVW5Z/MFJTMDFVRkZ5YUdw/Wi9jSFZRWDFCUlUw/VjRaRnBRL1JWTjNi/bGxGUWswd1BR
      " alt="Cama minimalista">
                <div class="descripcion">Cama Minimalista</div>
            </div>
            <div class="cuadro">
                <img src="https://imgs.search.brave.com/as05-VBeuyt-w6O2urqRRLt6wKpy0vWFHZLydyuyE30/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWdz/LnNlYXJjaC5icmF2/ZS5jb20vRXZYWlVX/WEpvRGVHUmVnVHVv/ZHZjTlhuUUlHY0h4/a3V0c1N3UGFrM1BF/WS9yczpmaXQ6NTAw/OjA6MDowL2c6Y2Uv/YUhSMGNITTZMeTl0/WldScC9ZUzVwYzNS/dlkydHdhRzkwL2J5/NWpiMjB2YVdRdk5q/VTEvTnpnMU16YzJM/MlZ6TDJadi9kRzh2/WTJGdFlTMWtiMkpz/L1pTMXhkV1ZsYmkx/emFYcGwvTG1wd1p6/OXpQVFl4TW5nMi9N/VEltZHowd0ptczlN/akFtL1l6MDJVazQ1/WlhWS2FtWnIvVW5Z/MFJTMDFVRkZ5YUdw/Wi9jSFZRWDFCUlUw/VjRaRnBRL1JWTjNi/bGxGUWswd1BR
      " alt="Cama minimalista">
                <div class="descripcion">Cama Minimalista</div>
            </div>
        </div>

    </body>


    <!-- ----------------------------------------------------------------------------------------------------- -->






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>