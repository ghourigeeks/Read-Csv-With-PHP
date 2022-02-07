<?php
	
	$open = fopen("feb2022.csv", "r");	
	$data = fgetcsv($open, 1000, ",");
	$array = array();

  	if (($open = fopen("feb2022.csv", "r")) !== FALSE) {
  
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {        
      $array[] = $data; 
    }
    fclose($open);
  }
  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
		table{
			width: 100%;
			border: 1px solid #000;
		}
		table th,table td{
			border: 1px solid #000;
			text-align: center;
		}
	</style>
<body>
	<table style="width: 100%;">
		<tr>
			<th>#</th>
			<th>Name</th>

		</tr>
		<?php foreach ($array as $key => $value) { ?>
            <?php if ($_POST['get_name'] == $value[0]) {?>
            <tr>
				<td style="width: 20%; border: 1px solid #000"><?php echo $value[0];?></td>
				<td style="width: 20%; border: 1px solid #000"><?php echo $value[1];?></td>
                <td style="width: 20%; border: 1px solid #000"><?php echo $value[4];?></td>
			</tr>
		<?php }
        }?>
	</table>
</body>
</html>