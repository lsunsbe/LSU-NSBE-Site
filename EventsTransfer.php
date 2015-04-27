<?php
/**
 * Created by PhpStorm.
 * User: josephbates
 * Date: 3/6/15
 * Time: 12:18 AM
 * Description: Transfers post data from GeauxNSBE database to Big tree database
 */


//Start by accessing server and retreiving query result from GeauxNSBE


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Events";
$result = $conn->query($sql);

$post_data = array();
/*
 * 0- title
 * 1- date
 * 2- time
 * 3- description
 * 4- place
 */

while ($row = $result->fetch_assoc()) {
    $data_fetched = array($row['Name'], $row['Date'], $row['Time'], $row['Description'], $row['Place']);
    array_push($post_data, $data_fetched);
}

//New connection to new database


$dbname = "GeauxBigTree";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


/*
 * 0- title
 * 1- date
 * 2- time
 * 3- description
 * 4- place
 */

foreach($post_data as $old_post){
    $id = strval(rand(2000,2000000));
    $title = $old_post[0];
    $date_start = $old_post[1];
    $date_end = $date_start;
    $time_start = $old_post[2];
    $time_end = "-";
    if (strpos($time_start,'-') !== false){
        $time_end = strtotime(explode($time_start, "-")[1]);
        $time_start = strtotime(explode($time_start, "-")[0]);
    } else
        $time_start = strtotime($time_start);
    $description = $old_post[3];
    $place = $old_post[4];


    $query = "INSERT INTO Events (id, name, start_date, end_date, start_time, end_time, description, place)
                VALUES ($id, '$title', '$date_start', '$date_end', '$time_start', '$time_end', '$description', '$place')";
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    if ($conn->query($query)){
        echo "Worked\n";
    } else{
        echo "Failed";
        echo mysql_error();
    }
}

?>



