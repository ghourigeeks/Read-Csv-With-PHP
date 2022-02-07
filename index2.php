<?php
	
	$open = fopen("feb2022.csv", "r");	
	$data = fgetcsv($open, 1000, ",");
	$array = array();

  	if (($open = fopen("feb2022.csv", "r")) !== FALSE) {
  
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {        
      $array[] = $data; 
    }

    
    $cus_arr = array();
    $cus_ind = array();

    foreach ($array as $key => $value) {
        

        if( in_array( $value[1], $cus_arr) ){
            // do nothing
        }
        if( in_array( $value[0], $cus_ind) ){
            // do nothing
        }

        $cus_assoc[$value[0]] = $value[1];
    }  

        // echo "<pre>";
        // print_r($cus_arr);
        // echo "</pre>";
        
        // echo "<pre>";
        // print_r($cus_ind);
        // echo "</pre>";

    fclose($open);
  }
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

<div style="margin-top:20px;" class="container">
<form  action="index.php" method="post">
    <select class="form-control" name="get_name">
        <?php foreach ($cus_assoc as $key => $value) {?>
            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
            <?php
        }
        ?>
    </select>
    <button style="margin-top:20px;" type="submit" class=" btn btn-success">submit</button>
</form>
</div>

</body>
</html>