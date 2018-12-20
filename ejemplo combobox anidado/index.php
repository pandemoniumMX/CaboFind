<?php
	
    include'conexion.php';
    $ramos = "SELECT ID_RAMO, RAM_NOMBRE From ramos where estatus='A'";
?>

<html>
	<head>
		<title>ComboBox Ajax, PHP y MySQL</title>
		
        <script language="javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.min.js"></script>

		
	
<script type="text/javascript">
//Script para el combobox dinamico (anidado)

			

            $(document).ready(function(){
				$("#ramo").click(function () {
                $("#ramo option:selected").each(function () {
				ID_RAMO = $(this).val();
				$.post("registro_negocio_combo_cat.php", { ID_RAMO: ID_RAMO }, function(data){
				$("#categoria").html(data);
                      });            
					});
				})
            });
            
            $(document).ready(function(){
				$("#categoria").click(function () {
                $("#categoria option:selected").each(function () {
                    ID_CATEGORIA = $(this).val();
				$.post("registro_negocio_combo_subcat.php", { ID_CATEGORIA: ID_CATEGORIA }, function(data){
				$("#subcategoria").html(data);
                      });            
					});
				})
			});

		</script>
		
	</head>
	
	<body>
		<form id="combo" name="combo" action="guarda.php" method="POST">
        <div>Selecciona Ramo : 
        <select class="form-control form-control-sm" textalign="center" required name="ramo" id="ramo">
                              <option value="" ></option>
                                <?php
                                $ejec7 = mysqli_query($conn, $ramos);
                                while($fila=mysqli_fetch_array($ejec7)){?>
                                <?php echo '<option value="'.$fila["ID_RAMO"].'">'.$fila["RAM_NOMBRE"].'</option>'; ?>
                                <?php } ?>
                                </select></div>
			
			<br />
			
			<div>Selecciona categoria : <select name="categoria" id="categoria"></select></div>
			
			<br />
			
			<div>Selecciona subcategoria : <select name="subcategoria" id="subcategoria"></select></div>
			
			<br />
		</form>
	</body>
</html>