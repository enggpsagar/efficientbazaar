<?php
extract($_POST);
    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {

        if (($handle = fopen($_FILES['filename']['tmp_name'], "r")) !== FALSE) {
            fgetcsv($handle);
            $final_data = array();
            $i = 0;
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { 
            	$final_data[$i]['id'] = $data[0];
            	$final_data[$i]['Vendor'] = $data[1];
            	$final_data[$i]['Product Name'] = $data[2];
            	$final_data[$i]['Product Code'] = $data[3];
            	$final_data[$i]['unit'] = $data[4];
            	$final_data[$i]['Weight'] = $data[5];
            	$final_data[$i]['price'] = $data[6];
            	$i++;
            }
        } 
     }// print_r($final_data);  
echo 'listing of products By Specific Product Id'."</br>";
echo "<hr>";

$a=array(3736, 4356, 3732, 3746, 3759, 3719, 3740, 4341);

    foreach ($final_data as $obj) {

       foreach ($obj as $key => $value) {

            if(in_array($value,$a))
           {
            print_r($obj);
            echo "</br>";
            } 
        }  
    }
echo "<hr>";
echo 'listing of products By Sorted'."</br>";
echo "<hr>";

function array_sort_by_column(&$arr, $col, $dir) {
    $sort_col = array();
    foreach ($arr as $key=> $row) {
        $sort_col[$key] = $row[$col];
    }
    if($dir == 'SORT_DESC')
    array_multisort($sort_col, $dir=SORT_DESC, $arr);
else
	    array_multisort($sort_col, $dir=SORT_ASC, $arr);

}
$result = array_sort_by_column($final_data, $method,$process);
//print_r($final_data);
$i = 0;
foreach($final_data as $key => $variable)
{
	foreach ($variable as $key => $value) {
		echo $key .'-' . $value;
		echo "</br>";
	} $i++;
    if($i == 3) break;
	echo "</br>";
}
