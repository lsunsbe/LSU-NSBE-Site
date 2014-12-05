<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "cabrini93";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, "GeauxNSBE");
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully"; 

    $sql = "SELECT * FROM posts";
   $result = $conn->query($sql);

       if ($result->num_rows > 0) {
       // output data of each row
       while($row = $result->fetch_assoc()) {
           echo $row["ident"];
       }
   }
     else {
       echo "0 results";
    
    $conn->close();  
}
?>