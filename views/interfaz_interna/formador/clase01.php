<?php
// Llamar la conexión
include "../../../bd/Conexion.php";
// Iniciar trabajo con sessiones
session_start();
// verificar que no este llegando la variable de ssesion
if (!isset($_SESSION['ID_USUARIO'])){
   echo "<script>window.location='../../interfaz_externa/login.html';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/interfaz_interna/formador/clase.css">
    <title>Document</title>
</head>
<body>
<div class="contenedor_principal">
<?php
    $conectar = new Conexion;
    $conexion = $conectar->conectarBD();
    $consulta = mysqli_query($conexion,"SELECT * FROM CLASE");
      
            while($fila = mysqli_fetch_array($consulta)){
        
            ?>
<div class="contenedor_cards">
    <label class = "card" for="item-1" id="selector-1">
    <?php echo '<img class="image" src="../../../controllers/crud_clase/'.$fila["IMAGEN_CLASE"].'" alt="imagen curso">'; ?>
    <p class="nom_clase"><?php echo $fila['NOMBRE_CLASE']; ?></p>

    <form action="clase01.php" method="post">
   <input type="text" name="id_clase" value="<?php echo $fila['ID_CLASE']; ?>" readonly hidden> 
   <input type="submit" class="btn" name="btn_update" Value="Modificar"> 
   </form>

   <form action="../../../controllers/crud_clase/delete_clase.php" method="post">
   <input type="text" name="id_clase" value="<?php echo $fila['ID_CLASE']; ?>" readonly hidden>
   <input type="submit" class="btn" name="btn_delete" Value="Eliminar"> 
   </form>
 </label>
</div>
<?php
          }
?>
 
   </div>
   <div class="contenedor_cards_mod">
    <label class = "card" for="item-1" id="selector-1">
    <?php
        if (isset($_POST['btn_update'])){
            // Rescato el campo oculto del boton de modificar
            $id_clase = $_POST['id_clase'];
            
            // Realizo la consulta para llenar el formulario de modificar
           $consulta2 = mysqli_query($conexion,"SELECT * FROM CLASE WHERE ID_CLASE = $id_clase") or die ($conexion."Problemas en la consulta");
            
            //Verificamos el resultado de la consulta
            $numero2 = mysqli_num_rows($consulta2);
            
            if($numero2 > 0){
                
                while ($fila2 = mysqli_fetch_array($consulta2)){
            ?>
                   <h1 class="title_modificar">Modificar</h1>
                   <form action="../../../controllers/crud_clase/update_clase.php" method="post" enctype="multipart/form-data">
        <input type="text" name="id_clase" value="<?php echo $fila2['ID_CLASE']; ?>" readonly hidden>
        <input type="text" class="text" name="nombre_class" value="<?php  echo $fila2['NOMBRE_CLASE']; ?>" required><br><br>
        <textarea name="descrip_class" rows="10" cols="40"><?php  echo $fila2['DESCRIPCION_CLASE']; ?></textarea><br><br>
        <label for="jornada_class" class="input-cargo"> Jornada </label> 
                <select name="jornada_class" id="jornada_class" class="input-jornada-options">
                    <option value="Manana">Mañana</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noche">Noche</option>
                </select><br><br>
        <input type="text" class="text" name="horarrio_class" value="<?php  echo $fila2['HORARIOS_CLASE']; ?>" required><br><br>
       <input type="text" class="text" name="costo_class" value="<?php  echo $fila2['COSTO_CLASE']; ?>" required><br><br>
       <label for="tiempo_class" class="input-tiempo">Tiempo Pago</label> 
                <select name="tiempo_class" id="tiempo_class" class="input-tiempo-options">
                    <option value="Quincenal">Quincenal</option>
                    <option value="Mensual">Mensual</option>
                    <option value="Semestral">Semestral</option>
                </select><br><br>
       <label>Imagen de Portada </label><input class="img_arch" type="file" name="imagen_class" accept="image/*" required><br><br>
       <label for="categoria_class" class="input-categoria">Categoria</label> 
                <select name="categoria_class" id="categoria_class" class="input-categoria-options">
                    <option value="1">Artes Visuales</option>
                    <option value="2">Artes Escenicas</option>
                    <option value="3">Artes Literarias</option>
                    <option value="4">Artes Musicales</option>
                </select><br><br>
        <input type="submit" class="btn" name="btn_class" value="Publicar">
      </form>
                   
                   <?php
                    
                }
                
            }
            
        }
    
        ?>
   </div>
   
</body>
</html>