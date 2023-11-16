<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>
        
        <p class="informacion-meta">Escrito el: <span>20/10/2023</span> por: <span>Admin</span> </p>

        <div class="resumen-propiedad"> 
            <p>
                Etiam facilisis, sapien eget suscipit placerat, enim turpis feugiat mauris, eget molestie risus augue eu lorem. Integer in leo at elit congue commodo. Sed a enim condimentum, elementum orci vitae, sagittis tortor. Cras molestie cursus arcu eget tempus. Mauris felis leo, commodo pulvinar mauris eu, volutpat sagittis dolor. Duis pretium fringilla nunc, et dictum magna elementum a. Fusce ac neque a mauris fermentum faucibus.
            </p>
            <p>
                Nulla maximus maximus magna, eu bibendum felis semper eu. Etiam molestie commodo libero nec ornare. Curabitur ultricies viverra auctor. Integer nec feugiat tellus. Proin rutrum ante metus, in dignissim ligula facilisis eget. Vestibulum nec malesuada lorem. Nullam sit amet sem interdum, scelerisque odio in, elementum diam. Cras ultrices enim ut nisi consectetur, non congue felis mattis. Donec hendrerit et ipsum et dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus suscipit dictum ultrices.
            </p>
        </div>
    </main>
    
<?php
incluirTemplate('footer');
?>