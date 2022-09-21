<?php

    $conn = mysqli_connect("127.0.0.1","root","","blog");
    $name=$_POST['name'];
    $email=$_POST['email'];
    $comment=$_POST['comment'];
    
    if(!$conn){
        echo "Something went wrong please try again later:  ".mysqli_connect_error();
        exit;
    }
try{
    $sql= "INSERT INTO comment (name, email, comment) VALUES ('$name','$email','$comment')";
}

catch(Exception $e){
    alert("Please enter valid texts");
    $caught = true;
}
if(!$caught){

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }    
    else{
        echo "<script> alert('Successfully added') </script>";
        header("location:index.html");
    }

    mysqli_close($conn);
}
    ?>

