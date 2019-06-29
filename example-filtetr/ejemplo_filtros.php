
<?php

$id_cat = 67;
$id_subcat = 8009;

include('conexion.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product filter in php</title>

    <script src="assets/js/jquery/jquery-2.2.4.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
         <br />connect
         <h2 align="center">Advance Ajax Product Filters in PHP</h2>
         <br />
            <div class="col-md-3">

                <div class="list-group">
     <h3>Brand</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">


                  <?php
                  $consultar = "SELECT * FROM CARACTERISTICAS";
                  $ejec2 = mysqli_query($conn, $consultar);
                  while($fila=mysqli_fetch_array($ejec2)){
                    $id_c           = $fila['ID_CARACTERISTICAS'];
                  $caract           = $fila['CAR_NOMBRE'];
                  ?>
                  <div class="list-group-item checkbox">
                      <label><input type="checkbox" class="common_selector brand" value="<?php echo $id_c ?>"  > <?php echo $caract ?></label>
                  </div>
                  <?php

                }
                ?>
                    </div>
                </div>

    <div class="list-group">
     <h3>Internal Storage</h3>
     <?php
     $consultar2 = "SELECT * FROM SUBCATEGORIA";
     $ejec3 = mysqli_query($conn, $consultar2);
     while($fila=mysqli_fetch_array($ejec3)){
       $id_b           = $fila['ID_SUBCATEGORIA'];
     $sub           = $fila['SUB_NOMBRE'];
     ?>
     <div class="list-group-item checkbox">
         <label><input type="checkbox" class="common_selector storage" value="<?php echo $id_b ?>"  > <?php echo $sub ?></label>
     </div>
     <?php

   }
   ?>


                </div>
            </div>

            <div class="col-md-9">
             <br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>
<style>
#loading
{
 text-align:center;
 background: url('loader.gif') no-repeat center;
 height: 150px;
}
</style>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var brand = get_filter('brand');
        var ram = get_filter('ram');

        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, brand:brand, ram:ram},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });



});
</script>

</body>

</html>
