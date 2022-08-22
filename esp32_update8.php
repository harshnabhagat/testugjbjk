<?php
//$servername = "localhost";
//$dBUsername = "id19436298_gcet1";
#$dBPassword = "4(M(&g6!RjzK2c6{";
$servername = "20.219.146.102";
$dBUsername = "root";
#$dBPassword = "4(M(&g6!RjzK2c6{";
$dBPassword = "Sg9aVUBUCAMy";
$dBName = "ciladmin";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

	$sql = "SELECT * FROM truck_status ";
	//if (isset($_POST['qst']))
     	//{ $VAL = 1;  echo "AB="; echo $VAL; echo "<br>" ; }
	#echo "AA="; echo $sql; echo "<br>" ;
	
	$result   = mysqli_query($conn, $sql);
	$row  = mysqli_fetch_assoc($result);
    #echo "B="; echo $result; echo "<br>" ;
	#echo "C="; echo $row; echo "<br>" ;
    #$update = mysqli_query($conn, "INSERT INTO truck_status (sno,truckno,weight,value) VALUES (3,'JK02CS1001',101,1000)  ");
    #$update = mysqli_query($conn, "INSERT INTO truck_status (sno) VALUES (2)  ");

//Read the database
if (isset($_POST['check_LED_status'])) {
	#$led_id = $_POST['check_LED_status'];	
    $led_id = ($_POST['check_LED_status']);	
	$sql = "SELECT * FROM truck_status ";
	$result   = mysqli_query($conn, $sql);
	$row  = mysqli_fetch_assoc($result);
	#echo "Truck_is_off";
	echo $led_id;
	/*if($row['status'] == 0){
		echo "LED_is_off";
	}
	else{
		echo "LED_is_on";
	}	*/
}	

if (isset($_POST['toggle_LED'])) {
	#$led_id = $_POST['check_LED_status'];	
    $led_id = $_POST['toggle_LED'];	
	$sql = "SELECT * FROM truck_status ";
	$result   = mysqli_query($conn, $sql);
	$row  = mysqli_fetch_assoc($result);
	#echo "Truck_is_ON";
	echo $led_id;
	/*if($row['status'] == 0){
		echo "LED_is_off";
	}
	else{
		echo "LED_is_on";
	}	*/
}	

//Read the database
if (isset($_POST['qst'])) {
	#$led_id = $_POST['check_LED_status'];	
    $SN = $_POST['qst'];	
    
	$sql = "SELECT * FROM truck_status ";
	$result   = mysqli_query($conn, $sql);
	$row  = mysqli_fetch_assoc($result);
	#echo "Truck_values";
	echo $SN;
    #$update = mysqli_query($conn, "INSERT INTO truck_status (sno) VALUES ($SN)  ");
	/*if($row['status'] == 0){
		echo "LED_is_off";
	}
	else{
		echo "LED_is_on";
	}	*/
}	

//Read the database
if (isset($_POST['qst1'])) {
	#$led_id = $_POST['check_LED_status'];	
    $TN = $_POST['qst1'];	
	$sql = "SELECT * FROM truck_status ";
	$result   = mysqli_query($conn, $sql);
	$row  = mysqli_fetch_assoc($result);
	#echo "Truck_values";
	echo $TN;
	#$update = mysqli_query($conn, "INSERT INTO truck_status (truckno) VALUES ('$TN')  "); 
	/*if($row['status'] == 0){
		echo "LED_is_off";
	}
	else{
		echo "LED_is_on";
	}	*/
}	

//Read the database
if (isset($_POST['qst2'])) {
	#$led_id = $_POST['check_LED_status'];	
    $TW = $_POST['qst2'];	
	$sql = "SELECT * FROM truck_status ";
	$result   = mysqli_query($conn, $sql);
	$row  = mysqli_fetch_assoc($result);
	#echo "Truck_values";
	echo $TW;
	#$update = mysqli_query($conn, "INSERT INTO truck_status (weight) VALUES ($TW)  ");
	/*if($row['status'] == 0){
		echo "LED_is_off";
	}
	else{
		echo "LED_is_on";
	}	*/
}	

//Read the database
if (isset($_POST['qst3'])) {
	#$led_id = $_POST['check_LED_status'];	
    $TV = $_POST['qst3'];	
	$sql = "SELECT * FROM Records1 ";
	$result   = mysqli_query($conn, $sql);
	$row  = mysqli_fetch_assoc($result);
	#echo "Truck_values";
	echo $TV;
	$update = mysqli_query($conn, "INSERT INTO Records1 (Weight) VALUES (100)  ");
	/*if($row['status'] == 0){
		echo "LED_is_off";
	}
	else{
		echo "LED_is_on";
	}	*/
}

//Read the database
if (isset($_POST['GET_weight'])) {
    //echo "GET_weight";
	#$led_id = $_POST['check_LED_status'];	
    #$led_id = ($_POST['check_LED_status']);
    $TN = $_POST['GET_weight'];	
    //echo $TN;
	$sql = "SELECT * FROM Dumpers WHERE Dumper_ID = '$TN' ";
	//echo $TN;
	//$sql = "SELECT * FROM Dumpers ";
	$result   = mysqli_query($conn, $sql);
	$row  = mysqli_fetch_assoc($result);
	#echo "Truck_is_off";
	#echo $led_id;
	/*if($row['status'] == 0){
		echo "LED_is_off";
	}
	else{
		echo "LED_is_on";
	}	*/
    /*if($row['id'] != 0){
		echo $row['id'];
	}
	else{
		echo "Dumper not present";
	}*/
	 if($row['Capacity'] != 0){
		echo $row['Capacity'];
	}
	else{
		echo 0 ;
	}	
}	

//Read the database
if (isset($_POST['qst10'])) {
	#$led_id = $_POST['check_LED_status'];	
    $TN = $_POST['qst10'];	
    
	/*$sql = "SELECT * FROM truck_status ";
	$result   = mysqli_query($conn, $sql);
	$row  = mysqli_fetch_assoc($result);*/
	#echo "Truck_values";
	echo $TN;
    #$update = mysqli_query($conn, "INSERT INTO truck_status (sno) VALUES ($SN)  ");
	/*if($row['status'] == 0){
		echo "LED_is_off";
	}
	else{
		echo "LED_is_on";
	}	*/
}	

//Read the database
if (isset($_POST['qst11'])) {
	#$led_id = $_POST['check_LED_status'];	
    $LO = $_POST['qst11'];	
	/*$sql = "SELECT * FROM truck_status ";
	$result   = mysqli_query($conn, $sql);
	$row  = mysqli_fetch_assoc($result);*/
	#echo "Truck_values";
	echo $LO;
	#$update = mysqli_query($conn, "INSERT INTO truck_status (truckno) VALUES ('$TN')  "); 
	/*if($row['status'] == 0){
		echo "LED_is_off";
	}
	else{
		echo "LED_is_on";
	}	*/
}	

//Read the database
if (isset($_POST['qst12'])) {
	#$led_id = $_POST['check_LED_status'];	
    $LA = $_POST['qst12'];	
	/*$sql = "SELECT * FROM truck_status ";
	$result   = mysqli_query($conn, $sql);
	$row  = mysqli_fetch_assoc($result);*/
	#echo "Truck_values";
	echo $LA;
	#$update = mysqli_query($conn, "INSERT INTO truck_status (weight) VALUES ($TW)  ");
	/*if($row['status'] == 0){
		echo "LED_is_off";
	}
	else{
		echo "LED_is_on";
	}	*/
}	

//Read the database
if (isset($_POST['qst13'])) {
	#$led_id = $_POST['check_LED_status'];	
    $TW = $_POST['qst13'];	
	/*$sql = "SELECT * FROM truck_status ";
	$result   = mysqli_query($conn, $sql);
	$row  = mysqli_fetch_assoc($result);*/
	#echo "Truck_values";
	echo $TW;
	//$update = mysqli_query($conn, "INSERT INTO truck_status (sno, truckno, weight ,value) VALUES ($SN,'$TN',$TW,$TV)  ");
	/*if($row['status'] == 0){
		echo "LED_is_off";
	}
	else{
		echo "LED_is_on";
	}	*/
}

//Read the database
if (isset($_POST['qst14'])) {
	#$led_id = $_POST['check_LED_status'];	
    $LS = $_POST['qst14'];	
	/*$sql = "SELECT * FROM truck_status ";
	$result   = mysqli_query($conn, $sql);
	$row  = mysqli_fetch_assoc($result);*/
	#echo "Truck_values";
	echo $LS;
	//$update = mysqli_query($conn, "INSERT INTO truck_status (sno, truckno, weight ,value) VALUES ($SN,'$TN',$TW,$TV)  ");
	/*if($row['status'] == 0){
		echo "LED_is_off";
	}
	else{
		echo "LED_is_on";
	}	*/
}

//Read the database
if (isset($_POST['qst15'])) {
	#$led_id = $_POST['check_LED_status'];	
    $HS = $_POST['qst15'];	
	$sql = "SELECT * FROM Dumpers ";
	$result   = mysqli_query($conn, $sql);
	$row  = mysqli_fetch_assoc($result);
	#echo "Truck_values";
	echo $HS;
	
	//$update = mysqli_query($conn, "INSERT INTO 1umpers ( Weight) VALUES ($TW)  ");
	//$update = mysqli_query($conn, "UPDATE INTO Dumpers (sno, truckno, weight ,value) VALUES ($SN,'$TN',$TW,$TV)  ");
    $update = mysqli_query($conn, "UPDATE Dumpers SET Longitude='$LO' WHERE Dumper_ID='$TN'");
    $update = mysqli_query($conn, "UPDATE Dumpers SET Latitude='$LA' WHERE Dumper_ID='$TN'");
    $update = mysqli_query($conn, "UPDATE Dumpers SET Weight='$TW' WHERE Dumper_ID='$TN'");
    $update = mysqli_query($conn, "UPDATE Dumpers SET Status='$LS' WHERE Dumper_ID='$TN'");
    $update = mysqli_query($conn, "UPDATE Dumpers SET Heap_Detected	='$HS' WHERE Dumper_ID='$TN'");
    //$update = mysqli_query($conn, "UPDATE Dumpers SET Weight='$TW' WHERE Dumper_ID='$TN'");
    
    /*$sql = "SELECT * FROM Records ";
	$result   = mysqli_query($conn, $sql);
    $update = mysqli_query($conn, "INSERT INTO Records (Longitud, Latitude, Weight ,Status, Heap_Detected) VALUES ('$LO','$LA','$TW','$LS','$HS')  ");
    
	/*if($row['status'] == 0){
		echo "LED_is_off";
	}
	else{
		echo "LED_is_on";
	}	*/
	//$update = mysqli_close($conn);
}

//Read the database
if (isset($_POST['qst16'])) {
	#$led_id = $_POST['check_LED_status'];	
    $HS = $_POST['qst16'];	
    $sql = "SELECT * FROM Records1 ";
	$result   = mysqli_query($conn, $sql);
	$row  = mysqli_fetch_assoc($result);
	#echo "Truck_values";
	//echo $HS;
	 $update = mysqli_query($conn, "INSERT INTO Records (Dumper_ID,Longitude, Latitude, Weight ,Status, Heap_Detected) VALUES ('$TN','$LO','$LA',$TW,'$LS','$HS')  ");
    
	//$update = mysqli_query($conn, "INSERT INTO Records1 (Weight) VALUES (100)  ");
	//$sql = "SELECT * FROM 1umper ";
	//$update = mysqli_query($conn, "INSERT INTO truck_status (sno,truckno,weight,value) VALUES (1,JK02CS1000,100,1000//)  ");
	//$result   = mysqli_query($conn, $sql);
	//$row  = mysqli_fetch_assoc($result);
	//$update = mysqli_query($conn, "INSERT INTO truck_status (sno,truckno,weight,value) VALUES (1,JK02CS1000,100,1000)  ");
	//$update = mysqli_query($conn, "INSERT INTO Record (id,Longitude, Latitude, Weight ,Status, Heap_Detected//,DateTime) VALUES (1,'$LO','$LA','$TW','$LS','$HS','000000')  ");
	//$update = mysqli_query($conn, "INSERT INTO Record (id) VALUES (1)  ");
	#echo "Truck_values";
	echo $HS;
	/*//$update = mysqli_query($conn, "UPDATE INTO Dumpers (sno, truckno, weight ,value) VALUES ($SN,'$TN',$TW,$TV)  ");
    $update = mysqli_query($conn, "UPDATE Dumpers SET Longitude='$LO' WHERE Dumper_ID='$TN'");
    $update = mysqli_query($conn, "UPDATE Dumpers SET Latitude='$LA' WHERE Dumper_ID='$TN'");
    $update = mysqli_query($conn, "UPDATE Dumpers SET Weight='$TW' WHERE Dumper_ID='$TN'");
    $update = mysqli_query($conn, "UPDATE Dumpers SET Status='$LS' WHERE Dumper_ID='$TN'");
    $update = mysqli_query($conn, "UPDATE Dumpers SET Heap_Detected	='$HS' WHERE Dumper_ID='$TN'");
    //$update = mysqli_query($conn, "UPDATE Dumpers SET Weight='$TW' WHERE Dumper_ID='$TN'");
    */
    /*$sql = "SELECT * FROM Records ";
	$result   = mysqli_query($conn, $sql);
    $update = mysqli_query($conn, "INSERT INTO Records (Longitud, Latitude, Weight ,Status, Heap_Detected) VALUES ('$LO','$LA','$TW','$LS','$HS')  ");
    
	/*if($row['status'] == 0){
		echo "LED_is_off";
	}
	else{
		echo "LED_is_on";
	}	*/
	//$update = mysqli_close($conn);
	echo 'C';
}

//Read the database
if (isset($_POST['qst17'])) {
	#$led_id = $_POST['check_LED_status'];	
    $HS = $_POST['qst17'];	
    //#echo $HS ;

    $sql = "SELECT * FROM Dumper ";
	//$result   = mysqli_query($conn, $sql);
    //$update = mysqli_query($conn, "INSERT INTO Record (Longitude, Latitude, Weight ,Status, Heap_Detected) VALUES //('$LO','$LA','$TW','$LS','$HS')  ");
    $update = mysqli_query($conn, "INSERT INTO Record (Longitude) VALUES ('$LO')  ");
    
    echo "A" ;
    
	/*if($row['status'] == 0){
		echo "LED_is_off";
	}
	else{
		echo "LED_is_on";
	}	*/
}


?>