<?php 
Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
Header('Access-Control-Allow-Methods: GET, POST'); //method allowed
Header("Content-Security-Policy: default-src 'self'");



if(!empty($_POST['listdata']) && $_POST['listdata'] != "[]"){
$jsondata = json_decode($_POST['listdata']);


// exit();
$con = mysqli_connect('localhost', 'homeofbu_csv_dat', 'csv_dat_csv_dat','homeofbu_csv_data');

	$text = json_encode($jsondata);
 	$date = date('Y-m-d H:i:s');
	$sql = "INSERT INTO csv_data(data,created_on) VALUES('$text', '$date')";
	$query = mysqli_query($con, $sql);
	 

}
/*$jsondata = json_decode($_POST['listdata']);
echo "<pre>";print_r($jsondata);*/

?>

 <!-- CSV format and current data format check  (if matched insert else wrong format selected)  -->
 <!-- Admin comapany  -->
 <!-- Admin CSV format column  -->
 <!-- Admin CSV data  -->