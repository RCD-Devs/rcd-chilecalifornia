<?php
/**
 * Template Name: Home
 *
 * @package chilecalifornia
 */

get_header();

?>

<main>
    <div class="banner">
        <div class="banner-text max-width">
            <h1 class="banner-title text-white">Un puente entre culturas para un futuro sostenible</h1>
            <!-- <p class="banner-paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus facere ipsa numquam dolorem? Aut beatae, rem velit quam hic necessitatibus maiores itaque quos eius harum illo similique totam voluptatum quod!</p> -->
            <a href="#" class="btn btn-outline-white">Unéte a nuestra misión</a>
        </div>
        <picture class="banner-img">
            <!-- Imagen para desktop -->
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/banner-desk.png">
            <!-- Imagen para mobile -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/banner-mobile.png" alt="Descripción de la imagen">
        </picture>
        <span class="banner-triangle"></span>
        <!-- <video src=""></video> -->
    </div>
    <section class="section-que-hacemos mb-section px-section">
        <div class="max-width">
            <div class="text-container">
                <div class="text-top-title">
                    <span class="font-overpass">01</span>
                    <h3 class="title-top-section">que hacemos</h3>
                </div>
                <h2 class="title-section text-black">Construimos puentes, impulsamos el futuro</h2>
                <p class="paragraph text-grey">Chile y California son considerados “Mellizos” porque comparten similitudes geográficas, climáticas, económicas e históricas. Por lo tanto, abundan importantes lecciones deben ser aprovechadas para el beneficio mutuo de ambos territorios y para un futuro sostenible.</p>
            </div>
            <div class="mapa-container">
                <img src="<?php echo get_template_directory_uri(); ?>/images/mapa.svg" alt="">
            </div>
        </div>
    </section>
    <section class="section-que-hemos-hecho py-section px-section">
        <div class="max-width">
            <div class="text-container">
                <div class="text-top-title">
                    <span class="font-overpass">02</span>
                    <h3 class="title-top-section">que hemos construido</h3>
                </div>
                <h2 class="title-section text-black">Lo que hemos construido, transforma el mañana</h2>
            </div>
            <div class="carrusel-container swiper carrusel-constriudo">
                <div class="swiper-wrapper">
                    <div class="swiper-slide card-c">
                    <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/img1.png" alt="">
                    <div class="card-text">
                        <h3 class="card-title text-white">Science, technology, innovation and entrepreneurship</h3>
                        <p class="card-paragraph text-white font-overpass">Centro de innovación y softlanding que conecta a startups, empresas e inversionistas, para diseñar, desarrollar e implementar las soluciones de las economías del futuro.</p>
                        <a href="#" class="card-link text-white">ver más</a>
                    </div>
                    <div class="overlay"></div>
                    </div>
                    <div class="swiper-slide card-c">
                    <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/img2.png" alt="">
                    <div class="card-text">
                        <h3 class="card-title text-white">Environment and conservation</h3>
                        <p class="card-paragraph text-white font-overpass">Desarrollo de una hoja de ruta para lograr los objetivos climáticos internacionales al 2030, junto con patrocinio de conferencias anuales en California.</p>
                        <a href="#" class="card-link text-white">ver más</a>
                    </div>
                    <div class="overlay"></div>
                    </div>
                    <div class="swiper-slide card-c">
                    <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/img3.png" alt="">
                    <div class="card-text">
                        <h3 class="card-title text-white">Energy</h3>
                        <p class="card-paragraph text-white font-overpass">Hemos desarrollado una innovadora alianza de energía con el Ministerio de Energía del Gobierno de Chile y entidades publico y privadas de Chile y California con el fin de impulsar la colaboración.</p>
                        <a href="#" class="card-link text-white">ver más</a>
                    </div>
                    <div class="overlay"></div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="section-conecta py-section">
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/conecta1.png" alt="">
            <figcaption>
                <div>
                    <h2 class="title-conecta text-white">Climate change and Disaster risk management</h2>
                    <a class="link-conecta" href="#">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.11959e-07 9L12.17 9L6.58 14.59L8 16L16 8L8 -6.99382e-07L6.59 1.41L12.17 7L7.86805e-07 7L6.11959e-07 9Z" fill="currentcolor"/>
                        </svg>
                    </a>
                </div>
            </figcaption>
        </figure>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/conecta2.png" alt="">
            <figcaption>
                <div>
                    <h2 class="title-conecta text-white">Chile conecta California</h2>
                    <a class="link-conecta" href="#">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.11959e-07 9L12.17 9L6.58 14.59L8 16L16 8L8 -6.99382e-07L6.59 1.41L12.17 7L7.86805e-07 7L6.11959e-07 9Z" fill="currentcolor"/>
                        </svg>
                    </a>
                </div>
            </figcaption>
        </figure>
    </section>
    <section class="py-section px-section">
        <div class="max-width">
            <h2 class="title-lg">Conexiones que <span>transforman</span></h2>
            <h3 class="title-top-section">testimonios</h3>
            <div class="carrusel-testimonios swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide card-testimonios">
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/testimonio1.png" alt="">
                        <div class="text-container">
                            <h4 class="text-white nombre">Lorem ipsum dolor</h4>
                            <p class="text-white testimonio">"Lorem ipsum dolor sit amet consectetur. Et aliquet nisi purus pharetra et elit nam. Sed sed curabitur vitae nisi purus pharetra et elit nam."</p>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="swiper-slide card-testimonios">
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/testimonio1.png" alt="">
                        <div class="text-container">
                            <h4 class="text-white nombre">Lorem ipsum dolor</h4>
                            <p class="text-white testimonio">"Lorem ipsum dolor sit amet consectetur. Et aliquet nisi purus pharetra et elit nam. Sed sed curabitur vitae nisi purus pharetra et elit nam."</p>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="swiper-slide card-testimonios">
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/testimonio1.png" alt="">
                        <div class="text-container">
                            <h4 class="text-white nombre">Lorem ipsum dolor</h4>
                            <p class="text-white testimonio">"Lorem ipsum dolor sit amet consectetur. Et aliquet nisi purus pharetra et elit nam. Sed sed curabitur vitae nisi purus pharetra et elit nam."</p>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="swiper-slide card-testimonios">
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/testimonio1.png" alt="">
                        <div class="text-container">
                            <h4 class="text-white nombre">Lorem ipsum dolor</h4>
                            <p class="text-white testimonio">"Lorem ipsum dolor sit amet consectetur. Et aliquet nisi purus pharetra et elit nam. Sed sed curabitur vitae nisi purus pharetra et elit nam."</p>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="section-noticias py-section px-section">
        <div class="max-width">
            <h3 class="title-top-section text-black">noticias</h3>
            <h2 class="title-section text-black">Explora Nuestras Últimas Noticias</h2>
            <div class="carrusel-noticias swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide card-noticia">
                        <img class="img-noticia" src="<?php echo get_template_directory_uri(); ?>/images/img-noticia1.png" alt="">
                        <div>
                            <h3 class="titulo-noticia">Seminario Cambio Climático y Turismo</h3>
                            <p class="descripcion-noticia text-grey">Hoja de ruta basada en la ciencia para alcanzar los compromisos costeros de Chile para el 2030, utilizando curvas de aprendizaje favorables de California.</p>
                            <a class="btn btn-show-more text-black2" href="#">ver más</a>
                        </div>
                    </div>
                    <div class="swiper-slide card-noticia">
                        <img class="img-noticia" src="<?php echo get_template_directory_uri(); ?>/images/img-noticia1.png" alt="">
                        <div>
                            <h3 class="titulo-noticia">Seminario Cambio Climático y Turismo</h3>
                            <p class="descripcion-noticia text-grey">Hoja de ruta basada en la ciencia para alcanzar los compromisos costeros de Chile para el 2030, utilizando curvas de aprendizaje favorables de California.</p>
                            <a class="btn btn-show-more text-black2" href="#">ver más</a>
                        </div>
                    </div>
                    <div class="swiper-slide card-noticia">
                        <img class="img-noticia" src="<?php echo get_template_directory_uri(); ?>/images/img-noticia1.png" alt="">
                        <div>
                            <h3 class="titulo-noticia">Seminario Cambio Climático y Turismo</h3>
                            <p class="descripcion-noticia text-grey">Hoja de ruta basada en la ciencia para alcanzar los compromisos costeros de Chile para el 2030, utilizando curvas de aprendizaje favorables de California.</p>
                            <a class="btn btn-show-more text-black2" href="#">ver más</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    
</main>

<?php get_footer(); ?>