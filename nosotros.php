<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

    <main class="contenedor seccion-nosotros">
        <h1>Conoce Sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen" >
                <picture>
                    <source srcset="build/img/nosotros.webp" type="'image/webp">
                    <source srcset="build/img/nosotros.jpg" type="'image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-nosotros" >
                <blockquote>
                    25 Años de Experiencia
                </blockquote>
                
                    <p>
                        Etiam facilisis, sapien eget suscipit placerat, enim turpis feugiat mauris, eget molestie risus augue eu lorem. Integer in leo at elit congue commodo. Sed a enim condimentum, elementum orci vitae, sagittis tortor. Cras molestie cursus arcu eget tempus. Mauris felis leo, commodo pulvinar mauris eu, volutpat sagittis dolor. Duis pretium fringilla nunc, et dictum magna elementum a. Fusce ac neque a mauris fermentum faucibus.
                    </p>
                    <p>
                        Nulla maximus maximus magna, eu bibendum felis semper eu. Etiam molestie commodo libero nec ornare. Curabitur ultricies viverra auctor. Integer nec feugiat tellus. Proin rutrum ante metus, in dignissim ligula facilisis eget. Vestibulum nec malesuada lorem. Nullam sit amet sem interdum, scelerisque odio in, elementum diam. Cras ultrices enim ut nisi consectetur, non congue felis mattis. Donec hendrerit et ipsum et dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus suscipit dictum ultrices.
                    </p>
            </div>
        </div>
    </main>
    <secccion class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>
        
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa cum fugiat voluptatum, explicabo illo recusandae, earum aspernatur deserunt reiciendis animi enim incidunt, in optio saepe sequi eius? Commodi, nobis magnam?</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa cum fugiat voluptatum, explicabo illo recusandae, earum aspernatur deserunt reiciendis animi enim incidunt, in optio saepe sequi eius? Commodi, nobis magnam?</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa cum fugiat voluptatum, explicabo illo recusandae, earum aspernatur deserunt reiciendis animi enim incidunt, in optio saepe sequi eius? Commodi, nobis magnam?</p>
            </div>
        </div>
    </seccion>
<?php
incluirTemplate('footer');
?>