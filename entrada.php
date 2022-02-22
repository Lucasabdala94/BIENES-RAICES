<?php   
    require 'includes/funciones.php'; 
    incluirTemplate('header');
?>
    <main class="contenedor secccion contenido-centrado">
        <h1>Guia para la decoracion de tu hogar</h1>
        <picture>
            <source srcset="build/img/destacada2.avif" type="image/avif">
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>
        <p class="informacion-meta">Escrito el:<span>20/10/2021</span> por: <span>Admin</span></p>
        <div class="resumen-propiedad">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt dolorem ipsum perferendis eius voluptatem hic cumque deleniti iusto ratione dolor vel ut cum reprehenderit inventore fugit quam doloremque a iure, aperiam velit. Adipisci soluta velit excepturi non consectetur! Nam ad quasi a? Qui voluptatum aspernatur veniam, assumenda, sequi laborum minus vitae tempora recusandae libero obcaecati. Vel ipsa eaque nam qui repellat ea a magni, quae quo fuga placeat quia eius, illo est quas 
            </p>
            <p>dolore quidem quod odit doloremque dolor. Suscipit corrupti impedit ipsam? Distinctio eos sapiente reiciendis, beatae cupiditate, cum accusantium debitis ab nihil minus veniam enim modi omnis qui odio repellat pariatur minima dolorum neque soluta, nisi consectetur inventore. Expedita assumenda sapiente totam saepe, quo tenetur voluptatum laudantium iusto libero repellat, officiis vel. Accusamus consectetur quidem architecto atque perferendis impedit praesentium? Harum, dolorum voluptatem. Facere veniam, libero dolorum, aut necessitatibus nobis atque rerum corrupti quo error iure perspiciatis quam?</p>
        </div>
    </main>
<?php
    incluirTemplate('footer');
?>