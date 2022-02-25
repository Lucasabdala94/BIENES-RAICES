<?php   
    //Base de datos.
    require '../../includes/config/database.php';
    $db= conectarDB();

    //Arreglo de errores.
    $errores=[];

    //ejecuta el codigo despues que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD']==='POST'){

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedorId= $_POST['vendedor'];
        

        if(!$titulo){
            $errores[]='Debes añadir un titulo';
        }
        if(!$precio){
            $errores[]='El precio es obligatorio';
        }
        if(strlen($descripcion)<50){
            $errores[]='La descripción es obligatorio y debe tener al menos 50 caracteres';
        }

        if(!$habitaciones){
            $errores[]='El numero de habitaciones es obligatorio';
        }
        if(!$wc){
            $errores[]='El número de Baños es obligatorio';
        }
        if(!$estacionamiento){
            $errores[]='El Número de Estacionamiento es obligatorio';
        }
        if($vendedorId===""){
            $errores[]='Elige un Vendedor';
        }
        //revisar que el arreglo de errores este vacio.
        if(empty($errores)){
            //Insertar en base de datos.
            $query =" INSERT INTO propiedades (titulo,precio,descripcion,habitaciones,wc,estacionamiento,vendedorId) VALUES ('$titulo','$precio','$descripcion','$habitaciones','$wc','$estacionamiento','$vendedorId')";

            $resultado = mysqli_query($db,$query);

            if($resultado){
                echo "insertado correctamente";
            }
        }

    }

    require '../../includes/funciones.php'; 
    incluirTemplate('header');
?>
    <main class="contenedor secccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
        <div class="alerta error">    
            <?php echo $error;?>
        </div>
        <?php endforeach;?>    


        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Información General</legend>
                
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">
                
                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion"></textarea>
            </fieldset>
            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 1" min="1" max="9">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 2" min="1" max="9">

            </fieldset>
            <fieldset>
                <legend>Vendedor</legend>
                <select name="vendedor">
                    <option value="" selected>-- Elige un vendedor --</option>
                    <option value="1">Juan</option>
                    <option value="2">Karen</option>
                    <option value="3">Lucas</option>
                </select>
            </fieldset>
            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>
<?php
    incluirTemplate('footer');
?>
