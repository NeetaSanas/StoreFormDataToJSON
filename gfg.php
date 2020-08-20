<?php 
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
		
			$current_data = file_get_contents('data.json');
			$array_data = json_decode($current_data, true);
			$datae = array(
			'Name' => $_POST['name'],
			'Description' => $_POST['description'],
			'Reference' => $_POST['reference']
			);
			$array_data[] = $datae;
			$final_data = json_encode($array_data, JSON_PRETTY_PRINT); 
			
		
		if(file_put_contents('data.json', $final_data)){
			//echo "added";
			header("Location: index.html");
			return true;
		}
		else { 
            echo "There is some error"; 
			return false;
        } 
    } 
?> 