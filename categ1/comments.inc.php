<?php

function setComments($conn) {
if (isset($_POST['commentSubmit'])) {

    $uid=$_POST['uid']; 
    $date=$_POST['date']; 
    $message=$_POST['message']; 

    $sql = "INSERT INTO comments2 (uid , date , message)
     VALUES ('$uid','$date','$message')";

    $result = $conn -> query($sql); 
}
}

function getComment($conn) {
    $sql = "SELECT * FROM comments2";
    $result = $conn -> query($sql); 
    while ($row = $result -> fetch_assoc()) {
        echo "<div class= 'comment2-box'>";
        echo $row ['uid']."<br>"; 
        echo $row ['date']."<br>"; 
        echo $row ['message']."<br>"; 
        echo "</div>" ;   
    }
}