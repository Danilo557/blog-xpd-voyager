<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    
    @stack('seo')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap">

    <link href=" https://cdn.jsdelivr.net/npm/icofont@1.0.0/dist/icofont.min.css " rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="{{ asset('/css/general.min.css') }}">

    @stack('css')
</head>

<body>
     
    <!-- ======= Header ======= -->
    <header id="header" class="lazy"
        data-bg-multi="url({{ asset('/img/bj_menu_blog.jpg') }}), linear-gradient(#242740,#242740)">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-9 d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="img-logo-content d-none d-lg-block">
                            <a href="{{route('posts.index')}}">
                                <img class="img-logo lazy" data-src="{{ asset('/img/xpdbloglog.png') }} " height="100px"
                                    width="100px" alt="logo dorado XPD">
                            </a>
                        </div>
                    </div>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="../index.html" class="logo"><img src="../img/landing/logo.png" alt="" class="img-fluid"></a>-->

                    <nav class="nav-menu d-none d-lg-block">
                        <ul>
                            <li>
                                <a class="d-block d-lg-none" href="#">Blog</a>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="circle"> </div>
                                    <div class="circle"> </div>
                                    <div class="circle"> </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://expidetufactura.com.mx/XPD/index.html">XPD</a>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="circle"> </div>
                                    <div class="circle"> </div>
                                    <div class="circle"> </div>
                                </div>
                            </li>
                            <li><a href="https://expidetufactura.com.mx/XPD/facturacion.html#nuestros-planes">Planes de
                                    Facturación</a>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="circle"> </div>
                                    <div class="circle"> </div>
                                    <div class="circle"> </div>
                                </div>
                            </li>
                            <li><a href="https://expidetufactura.com.mx/XPD/facturacion.html#nomina">Nómina</a>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="circle"> </div>
                                    <div class="circle"> </div>
                                    <div class="circle"> </div>
                                </div>
                            </li>
                            <li><a href="https://expidetufactura.com.mx/XPD/timbrado.html">Timbrado</a>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="circle"> </div>
                                    <div class="circle"> </div>
                                    <div class="circle"> </div>
                                </div>
                            </li>
                            <li><a href="https://expidetufactura.com.mx/XPD/validador-cfdi.html">Validador CFDI</a>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="circle"> </div>
                                    <div class="circle"> </div>
                                    <div class="circle"> </div>
                                </div>
                            </li>
                            <li><a href="https://expidetufactura.com.mx/XPD/negocio.html">Haz Negocio</a>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="circle"> </div>
                                    <div class="circle"> </div>
                                    <div class="circle"> </div>
                                </div>
                            </li>
                        </ul>
                    </nav><!-- .nav-menu -->
                </div>
            </div>

        </div>
    </header>

    <!-- Page Content -->
    <main>
        @yield('content')

    </main>



    <footer id="footer">
        <div class="container-fluid">
          <div class="d-flex flex-lg-row flex-column">
            <div class="col">
              <div class="d-flex flex-column text-left">
                <a class="img-footer-content  mx-auto" href="https://expidetufactura.com.mx/XPD/">
                <img class="img-footer lazy" data-src=" {{asset("/img/footer-color.webp")}}"  height="100px" width="100px" alt="Logo color XPD footer">
                </a>
                <a class="h4 font-weight-bold" href="https://expidetufactura.com.mx/XPD/aviso_privacidad.html" target="_blank">Aviso de Privacidad</a>
                <a class="h4 font-weight-bold" href="https://expidetufactura.com.mx/XPD/terminos_condiciones.html" target="_blank">Términos y Condiciones</a>
                <p class="h2 font-weight-bold">22.22.48.74.85</p>
              </div>
            </div>
            <div class="col">
              <div class="d-flex flex-column text-left">
                <p class="h3 font-weight-bold">Servicios</p>
                <a class="h4" href="https://expidetufactura.com.mx/XPD/facturacion.html#nuestros-planes">Facturación en línea</a>
                <a class="h4" href="https://expidetufactura.com.mx/XPD/timbrado.html">Timbrado</a>
                <a class="h4" href="https://expidetufactura.com.mx/XPD/facturacion.html#nomina">Nómina</a>
                <a class="h4" href="https://expidetufactura.com.mx/XPD/facturacion.html#adendas">Addendas</a>
                <a class="h4" href="https://expidetufactura.com.mx/XPD/negocio.html">Se un distribuidor</a>
                <a class="h4" href="https://expidetufactura.com.mx/XPD/cfdi-con-complemento-carta-porte.html">Carta Porte</a>
              </div>
    
            </div>
            <div class="col">
              <div class="d-flex flex-column text-left">
                <p class="h3 font-weight-bold">Facturación</p>
                <a class="h4" href="https://expidetufactura.com.mx/XPD/facturacion/plan-micro.html">Plan Micro</a>
                <a class="h4" href="https://expidetufactura.com.mx/XPD/facturacion/plan-basico.html">Plan Básico</a>
                <a class="h4" href="https://expidetufactura.com.mx/XPD/facturacion/plan-premier.html">Plan Premier</a>
                <a class="h4" href="https://expidetufactura.com.mx/XPD/facturacion/plan-personalizado.html">Plan Personalizado</a>
              </div>
            </div>
            <div class="col">
              <div class="d-flex flex-column text-left">
                <p class="h3 font-weight-bold">Herramientas</p>
                <a class="h4" href="https://expidetufactura.com.mx/XPD/validador-cfdi.html" target="_blank">Validador CFDI</a>
                <a class="h4" href="https://cionline.mx/" target="_blank">Sistema de contabilidad online</a>
                <a class="h4" href="https://protectorfiscal.mx/" target="_blank">Sistema contra EFOS y EDOS</a>
                <a class="h4" href="https://cafidi.mx/" target="_blank">Calculadora Fiscal Digital</a>
              </div>
            </div>
            <div class="col">
              <div class="d-flex flex-column text-left">
                <p class="h3 font-weight-bold">Ayuda</p>
                <a class="h4" href="https://expidetufactura.com.mx/XPD/soporte.html">Soporte XPD</a>
                <a class="h4" href="https://expidetufactura.com.mx/XPD/soporte/preguntas-frecuentes.html">Preguntas Frecuentes</a>
                <a class="h4" href="#">Blog</a>
                <div class="social-links">
                  <a rel="no-referrer" aria-label="facebook" href="https://www.facebook.com/ExpideTuFactura" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
                  <a rel="no-referrer" aria-label="twitter" href="https://twitter.com/ExpideTuFactura" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
                  <a rel="no-referrer" aria-label="youtube" href="https://www.youtube.com/channel/UCIVT7J6C9tisMZPq-98WxiA" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
                  <a rel="no-referrer" aria-label="instagram" href="https://www.instagram.com/xpdtufactura/" target="_blank" class="linkedin"><i class="fab fa-instagram"></i></a>
                  <a rel="no-referrer"aria-label="linkedin"  href="https://www.linkedin.com/company/expide-tu-factura/" target="_blank" class="linkedin">
                    <i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>

    <script defer src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"
        integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@19.1.3/dist/lazyload.min.js"></script>
    <script defer src="{{ asset('/js/main.js') }}"></script>
    @stack('js')


    
</body>
</html>