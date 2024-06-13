<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YoTen</title>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    
    <link rel="stylesheet" href="styles/style.scss">
    <link rel="stylesheet" href="styles/style.css">
    <script src="js/script.js" defer></script>
</head>
<body>

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>
    <a href="#" class="logo"><img src="imgs/yOTENLOGO.png" alt="Logotipo-web" width="100px" height="110px" /></a>

    <nav class="navbar">
        <a href="#Inicio">Inicio</a>
        <a href="#about">Sobre nosotros</a>
        <a href="#destination">Actividades</a>
        <a href="#services">Servicios</a>
        <a href="#gallery">Galeria</a>

        
    </nav>

    <a href="login.html"  id="btnOpenModal" class="btn show-modal">Login</a>
        <div class="icon-cart">
            <img src="imgs/cart.png" id="img-carrito" />
        </div>
      
</header>



<div class="container">
    <section class="home" id="home">
        <div class="content">
<!-- COMENTARIO DE BIENVENIDA-->
        <h1>Muy buenas, {{ Auth::user()->name }}</h1>
        <a href="{{ route('logout') }}">Logout</a>
            
        
        <span>Hacia las estrellas</span>
            <h3>星に向かって</h3>
            <h2>Experiencias que se quedan en la cabeza // 頭に残る経験</h2>
            <h2>Descubre un mundo exótico y oriental // エキゾチックでオリエンタルな世界を発見</h2>
            <a  class="btn show-modal">Leer más</a>

            <div class="modal hidden">
                <button class="close-modal">&times;</button>
                <h1>I'm a modal window 😍</h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                  occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                  mollit anim id est laborum.
                </p>
            </div>
            <div class="overlay hidden"></div>
    
            
    
        </div>
    </section>

    
    <section class="about" id="about">
    
        <div class="about-card">
            <div class="card-details">
              <p class="text-title">Sobre nosotros</p>
              <p class="text-body">Here are the details of the card</p>
            </div>
            <button class="card-button"><a href="nosotros.html">Saber más</a> </button>
        </div>
    
    </section>
    
    
    <section class="destination" id="destination">
    
        <div class="heading">
            <span>LOS MÁS VENDIDOS</span>
        </div>
        
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="/imgs/osaka-night-s786283990.jpg" alt="imagen-destino-estatico-1">
                </div>
                <div class="content">
                    <h3>Observacion astronomica</h3>
                    <p>lore ipsum niownceiobnwicjebiwebc</p>
                    <a href="#">Más info<i class="fas fa-angle-right"></i></a>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="/imgs/osaka-night-s786283990.jpg" alt="imagen-destino-estatico-2">
                </div>
                <div class="content">
                    <h3>Yukata y fuegos artificiales</h3>
                    <p>lore ipsum niownceiobnwicjebiwebc</p>
                    <a href="#" class="agregar-carrito" data-id="1">Más info<i class="fas fa-angle-right" ></i></a>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="/imgs/osaka-night-s786283990.jpg" alt="imagen-destino-estatico-3">
                </div>
                <div class="content">
                    <h3>Fotografía nocturna</h3>
                    <p>lore ipsum niownceiobnwicjebiwebc</p>
                    <a href="#" class="agregar-carrito" data-id="2">Más info<i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            
            <div class="box">
                <div class="image">
                    <img src="/imgs/osaka-night-s786283990.jpg" alt="imagen-destino-estatico-4">
                </div>
                <div class="content">
                    <h3>Observacion astronomica</h3>
                    <p>lore ipsum niownceiobnwicjebiwebc</p>
                    <a href="#" class="agregar-carrito" data-id="3">Más info<i class="fas fa-angle-right"></i></a>
                </div>
            </div>
    
    
        </div><br><br>
    
        <div class="heading">
            <span>NUESTROS ATRACTIVOS</span>
        </div>
    
    </section>
    
    <section class="services" id="services">
        <div class="heading">
            <span>NUESTROS SERVICIOS</span>
            <h1>Contamos con las mejores facilidades</h1>
        </div>
    
        <div class="box-container">
    
            <div class="box">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" width="290" height="290">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802" alt="svg-idioma" />
                </svg>
                <h3>Inmersión cultural</h3>
                 
            </div>
    
            <div class="box">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" width="290" height="290">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" alt="svg-camara" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                  </svg>
                <h3>Equipo a disposición</h3>
                 
            </div>
    
            <div class="box">
                <?xml version="1.0" encoding="UTF-8"?><svg width="290" height="290" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000"><path d="M4 11.4998L3.51493 11.6211C2.62459 11.8437 2 12.6436 2 13.5614V15.4382C2 16.356 2.62459 17.1559 3.51493 17.3785L5.25448 17.8134C5.63317 17.9081 6 17.6217 6 17.2313V11.7683C6 11.3779 5.63317 11.0915 5.25448 11.1862L4 11.4998ZM4 11.4998V11C4 6.58172 7.58172 3 12 3C16.4183 3 20 6.58172 20 11V11.4998M20 11.4998L20.4851 11.6211C21.3754 11.8437 22 12.6436 22 13.5614V15.4382C22 16.356 21.3754 17.1559 20.4851 17.3785L20 17.4998M20 11.4998L18.7455 11.1862C18.3668 11.0915 18 11.3779 18 11.7683V17.2313C18 17.6217 18.3668 17.9081 18.7455 17.8134L20 17.4998M15 20.5H18C19.1046 20.5 20 19.6046 20 18.5V18V17.4998M15 20.5C15 19.6716 14.3284 19 13.5 19H10.5C9.67157 19 9 19.6716 9 20.5C9 21.3284 9.67157 22 10.5 22H13.5C14.3284 22 15 21.3284 15 20.5Z" stroke="#000000" stroke-width="1.5" alt="svg-cascos" ></path></svg>
                <h3>Guias profesionales</h3>
                 
            </div>
    
            <div class="box">
                <?xml version="1.0" encoding="UTF-8"?><svg width="290" height="290" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000"><path d="M6 20H9M12 20H9M9 20V15" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17 20V12C17 12 19.5 11 19.5 9C19.5 7.24264 19.5 4.5 19.5 4.5" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17 8.5V4.5" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M4.49999 11C5.49991 13.1281 8.99999 15 8.99999 15C8.99999 15 12.5001 13.1281 13.5 11C14.5795 8.70257 13.5 4.5 13.5 4.5L4.49999 4.5C4.49999 4.5 3.42047 8.70257 4.49999 11Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" alt="svg-comida"></path></svg>
                <h3>Comida sin sorpresas</h3>
                 
            </div>
    
            <div class="box">
                <i class="fa-solid fa-person-hiking" width="290" height="290" alt="svg-senderista"></i>
                <h3>Recorre su naturaleza</h3>
                
            </div>
    
            
      
    
        </div>
    </section>
    
    <section class="gallery" id="gallery">
        <div class="heading">
            <span>GALERIA</span>
            <h1>Los recuerdos nunca han estado más presentes que antes</h1>
        </div>
    
        <div class="box-container">
    
            <div class="box" id="bento1">
                <img src="/imgs/ojo.png" alt="imagen-ojo-bento">
                <!-- <span>Astronomia</span>
                <h3>Lugar</h3> -->
            </div>
    
            <div class="box" id="bento2">
                <img src="/imgs/telescope.png" alt="imagen-telescopio-bento">
                <!-- <span>Yukata</span>
                <h3>Osaka</h3> -->
            </div>
    
            <div class="box" id="bento3">
                <img src="https://estaticos-cdn.prensaiberica.es/clip/48c273cc-e7a9-4190-bdc6-eb0844d336bb_alta-aspect-ratio_default_0.jpg" alt="">
                <!-- <span>Fotografia</span>
                <h3>Kyoto</h3> -->
            </div>
    
            <div class="box" id="bento4">
                <img src="/imgs/sabor.png" alt="imagen-comida-bento">
                <!-- <span>Comida</span>
                <h3>Shibuya</h3> -->
            </div>
    
            <div class="box" id="bento5">
                <img src="/imgs/amar.png" alt="imagen-chasquido-bento">
                <!-- <span>Mar</span>
                <h3>Saitama</h3> -->
            </div>
    
            <div class="box" id="bento6">
                <img src="/imgs/samurai.png" alt="imagen-samurai-bento">
                <!-- <span>Pescado</span>
                <h3>Morioh</h3> -->
            </div>
    
            <div class="box" id="bento7">
                <img src="/imgs/inclinate.png" alt="imagen-luna-bento">
                <!-- <span>mapache</span>
                <h3>Kobe</h3> -->
            </div>
    
            <div class="box" id="bento8">
                <img src="/imgs/alegrate.png" alt="imagen-cara_alegria-bento">
                <!-- <span>Tuna</span>
                <h3>Himeji</h3> -->
            </div>
    
            <div class="box" id="bento9">
                <img src="/imgs/montefuji.jpg" alt="">
                <!-- <span>Patata</span>
                <h3>Fukuyama</h3> -->
            </div>
    
            <div class="box" id="bento10">
                <img src="/imgs/guitar.png" alt="imagen-guitarra-bento">
                <!-- <span>Patata</span>
                <h3>Fukuyama</h3> -->
            </div>
    
            <div class="box" id="bento11">
                <img src="/imgs/quedate.png" alt="imagen-acampada-bento">
                <!-- <span>Patata</span>
                <h3>Fukuyama</h3> -->
            </div>
    
            <div class="box" id="bento12">
                <img src="/imgs/camera.png" alt="imagen-camara-bento">
                <!-- <span>Patata</span>
                <h3>Fukuyama</h3> -->
            </div>
    
    
        </div>
    
    
    </section>
    <section class="opinion" id="opinion">
        <div class="heading">
            <span>OPINIONES</span>
            <h3>Nuestros clientes han salido satisfechos con las actividades</h3>
        </div>
        
        <div class="slider-container">
            <div class="slider">
                <div class="slide">
                    <img src="/imgs/p1.png" alt="imagen-opinion-1">
                    <h2>Rodolfo || San Francisco</h2>
                    <blockquote>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium quas quisquam non? Quas voluptate nulla minima deleniti optio ullam nesciunt, numquam corporis et asperiores laboriosam sunt, praesentium suscipit blanditiis. Necessitatibus id alias reiciendis, perferendis facere pariatur dolore veniam autem esse non voluptatem saepe provident nihil molestiae.
                    </blockquote>
                </div>
                <div class="slide">
                    <img src="/imgs/p2.png" alt="imagen-opinion-2">
                    <h2>Monica || San Francisco</h2>
                    <blockquote>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium quas quisquam non? Quas voluptate nulla minima deleniti optio ullam nesciunt, numquam corporis et asperiores laboriosam sunt, praesentium suscipit blanditiis. Necessitatibus id alias reiciendis, perferendis facere pariatur dolore veniam autem esse non voluptatem saepe provident nihil molestiae.
                    </blockquote>
                </div>
                <div class="slide">
                    <img src="/imgs/p3.png" alt="imagen-opinion-3">
                    <h2>Rodolfo || San Francisco</h2>
                    <blockquote>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium quas quisquam non? Quas voluptate nulla minima deleniti optio ullam nesciunt, numquam corporis et asperiores laboriosam sunt, praesentium suscipit blanditiis. Necessitatibus id alias reiciendis, perferendis facere pariatur dolore veniam autem esse non voluptatem saepe provident nihil molestiae.
                    </blockquote>
                </div>
            </div>
            <button id="prev">&#10094;</button>
            <button id="next">&#10095;</button>
        </div>
        
    </section>

    
    
    
    
    <footer>
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <a href="#" class="logo"><img src="imgs/yOTENLOGO.png" alt="Logotipo-footer" width="110px" height="130px" /></a>
                    <p>Lore ipsum sjifbnvihjsbnvdfibsnivrbnsijdv uihheiufbiuwe. Ocetvygt</p>
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
        
                <div class="box">
                    <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> Inicio </a>
                    <a href="#about" class="links"> <i class="fas fa-arrow-right"></i> Sobre nosotros </a>
                    <a href="#destination" class="links"> <i class="fas fa-arrow-right"></i> Actividades </a>
                    <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> Servicios </a>
                    <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> Reviews </a>
                    <a href="#gallery" class="links"> <i class="fas fa-arrow-right"></i> Galería </a>
                </div>
        
                <div class="box">
                    <h3>Info de contacto</h3>
                    <p> <i class="fas fa-phone"></i> 676 888 000</p>
                    <p> <i class="fas fa-map"></i> Tokio, Japón</p>
                    <p> <i class="fas fa-envelope"></i> info@yoten.com</p>
                    <p> <i class="fas fa-clock"></i> 8.00 -- 21.00</p>
                </div>
            </div>
        </section>
        <div class="credit"> Desarrollado y maquetado por <b>Cubillos();</b> ||</div>
    </footer>
</div>

<div class="cart">
    <h2>Carta</h2>

    <div class="list-cart">
       
        
    </div>
    <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>

    <div class="buttons">
        <div class="close">
            CERRAR
        </div>
        <div class="checkout">
            <a href="checkout.html">checkout</a>
        </div>
    </div>
    
</div>





</body>
</html>