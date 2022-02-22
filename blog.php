<?php   
    require 'includes/funciones.php'; 
    incluirTemplate('header');
?>
    <main class="contenedor secccion contenido-centrado">
        <h1>Nuestro Blog</h1>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.avif" type="image/avif">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="imagen blog1">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el Techo de tu Casa</h4>
                    <p>Escrito el:  <span>20/01/2022</span> por: <span>Admin</span> </p>
                    <p>Consejos para Construir una Terraza en el Techo de tu Casa, con los mejores materiales al mejor precio.</p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.avif" type="image/avif">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="imagen blog1">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guia para Decoracion de tu Hogar</h4>
                    <p>Escrito el:  <span>22/01/2022</span> por: <span>Admin</span> </p>
                    <p>Maximiza el espacio en tu hogar con esta guia,aprende a combinar muebles y colores para darle vida a tu espacio</p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.avif" type="image/avif">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="imagen blog1">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el Techo de tu Casa</h4>
                    <p>Escrito el:  <span>20/01/2022</span> por: <span>Admin</span> </p>
                    <p>Consejos para Construir una Terraza en el Techo de tu Casa, con los mejores materiales al mejor precio.</p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.avif" type="image/avif">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="imagen blog1">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guia para Decoracion de tu Hogar</h4>
                    <p>Escrito el:  <span>22/01/2022</span> por: <span>Admin</span> </p>
                    <p>Maximiza el espacio en tu hogar con esta guia,aprende a combinar muebles y colores para darle vida a tu espacio</p>
                </a>
            </div>
        </article>
    </main>
<?php
    incluirTemplate('footer');
?>