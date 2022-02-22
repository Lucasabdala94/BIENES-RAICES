<?php   
    require 'includes/funciones.php'; 
    incluirTemplate('header');
?>
    <main class="contenedor secccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>
        <picture>
            <source srcset="build/img/destacada.avif" type="image/avif">
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">$3000000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class='icono' loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>4</p>
                </li>
                <li>
                    <img class='icono' loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class='icono' loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>7</p>
                </li>
            </ul>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt dolorem ipsum perferendis eius voluptatem hic cumque deleniti iusto ratione dolor vel ut cum reprehenderit inventore fugit quam doloremque a iure, aperiam velit. Adipisci soluta velit excepturi non consectetur! Nam ad quasi a? Qui voluptatum aspernatur veniam, assumenda, sequi laborum minus vitae tempora recusandae libero obcaecati. Vel ipsa eaque nam qui repellat ea a magni, quae quo fuga placeat quia eius, illo est quas 
            </p>
            <p>dolore quidem quod odit doloremque dolor. Suscipit corrupti impedit ipsam? Distinctio eos sapiente reiciendis, beatae cupiditate, cum accusantium debitis ab nihil minus veniam enim modi omnis qui odio repellat pariatur minima dolorum neque soluta, nisi consectetur inventore. Expedita assumenda sapiente totam saepe, quo tenetur voluptatum laudantium iusto libero repellat, officiis vel. Accusamus consectetur quidem architecto atque perferendis impedit praesentium? Harum, dolorum voluptatem. Facere veniam, libero dolorum, aut necessitatibus nobis atque rerum corrupti quo error iure perspiciatis quam?</p>
        </div>
    </main>
<?php
    incluirTemplate('footer');
?>