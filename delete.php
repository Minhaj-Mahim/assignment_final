<?php

include('db_conn.php');

?>

<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];

    $query = "DELETE FROM `students` WHERE `id` = '$id'";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed!".mysqli_error());
    }
    else{
        header('Location: homePage.php?delete_msg= You have deleted the record...');
    }

}

?>