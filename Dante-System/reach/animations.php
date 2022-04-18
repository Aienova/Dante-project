<?php


$fileList = glob('./animations/*');
foreach($fileList as $filename){
    if(is_file($filename)){
        echo '<script src="'.$filename.'"></script>'; 
    }   
}
?>