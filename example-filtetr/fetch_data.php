<?php

//fetch_data.php

include('conexion.php');

if(isset($_POST["action"]))
{
 $query = "
 SELECT n.ID_NEGOCIO, n.NEG_NOMBRE, g.GAL_FOTO, n.NEG_TEL, n.NEG_CORREO
 FROM negocios n, galeria g, caracteristicas c, subcategoria s, categorias ct, neg_car neg
   WHERE NEG_ESTATUS = 'A'
   AND g.ID_NEGOCIO = n.ID_NEGOCIO
   AND ct.ID_CATEGORIA = s.ID_CATEGORIA
   AND c.ID_CARACTERISTICAS = neg.caracteristicas_ID_CARACTERISTICAS
   AND neg.negocios_ID_NEGOCIO = n.ID_NEGOCIO
   AND g.ID_NEGOCIO = n.ID_NEGOCIO
   AND s.ID_SUBCATEGORIA = n.ID_SUBCATEGORIA
   AND g.GAL_TIPO = 'Logo';
 ";

 if(isset($_POST["brand"]))
 {
  $brand_filter = implode("','", $_POST["brand"]);
  $query .= "
   AND product_brand IN('".$brand_filter."')
  ";
 }
 if(isset($_POST["ram"]))
 {
  $ram_filter = implode("','", $_POST["ram"]);
  $query .= "
   AND product_ram IN('".$ram_filter."')
  ";
 }



$statement = mysqli_query($conn, $query);
 $result=mysqli_fetch($statement);
 $total_row = mysqli_num_rows($result);
 $output = '';
 if($total_row > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="col-sm-4 col-lg-3 col-md-3">
    <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
     <img src="image/'. $row['GAL_FOTO'] .'" alt="" class="img-responsive" >
     <p align="center"><strong><a href="#">'. $row['NEG_NOMBRE'] .'</a></strong></p>
     <p>Camera : '. $row['ID_NEGOCIO'].'<br />
     Brand : '. $row['NEG_TEL'] .' <br />
     RAM : '. $row['NEG_CORREO'] .'<br />
    </div>

   </div>
   ';
  }
 }
 else
 {
  $output = '<h3>No Data Found</h3>';
 }
 echo $output;
}

?>
