<?php   
    require 'includes/funciones.php'; 
    incluirTemplate('header');
?>
    <main class="contenedor secccion">
        <h1>Conoce sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.avif" type="image/avif">
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/pjeg">
                    <img loading="lazy" src="build/img/.jpg" alt="sobre nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>25 Años de experiencia</blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod optio reprehenderit, repellat, exercitationem beatae consequatur, illum qui id architecto fugit tempora explicabo quos vel molestias voluptatum est delectus laboriosam? Reiciendis, ex, sequi consectetur, placeat veniam voluptas impedit laudantium necessitatibus sapiente fugit similique! Iste, libero tempore blanditiis vero perspiciatis quae modi quasi repellat nesciunt obcaecati dolorum molestias ipsum, quaerat odio laudantium incidunt corrupti. Maxime esse assumenda neque in autem debitis, ratione cum ipsam perferendis, nulla dolore. Quas itaque, sapiente animi tenetur eaque quibusdam tempora nisi fuga repellat doloribus quis ipsum dolores, sint voluptatibus cumque ullam exercitationem facere? Ipsa alias possimus nihil?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nostrum, fuga facere soluta et neque quae in eaque ad odit ea explicabo inventore. Eum molestiae modi rem doloremque magni alias nemo asperiores optio totam! At error fugit dolores atque omnis? Nostrum, quo. Eos molestias velit magnam nisi itaque temporibus consequuntur!</p>
            </div>
        </div>
    </main>
    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  Unde earum cupiditate quia, ipsum quas beatae, architecto magni repellat enim nostrum perferendis, soluta ullam!
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  Unde earum cupiditate quia, ipsum quas beatae, architecto magni repellat enim nostrum perferendis, soluta ullam!
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono A Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  Unde earum cupiditate quia, ipsum quas beatae, architecto magni repellat enim nostrum perferendis, soluta ullam!
                </p>
            </div>           
        </div>
    </section>
<?php
    incluirTemplate('footer');
?>