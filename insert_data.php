<?php

include 'db_conn.php';

if (isset($_POST['add_students'])) {

    $f_name = $_POST['first_name'];
    $l_name = $_POST['last_name'];
    $age = $_POST['age'];

    if ($f_name == "" || empty($f_name)) {
        header('Location: homePage.php?message=You need to fill in the first name!');
    } else {

        $f_name = mysqli_real_escape_string($conn, $f_name);
        $l_name = mysqli_real_escape_string($conn, $l_name);
        $age = mysqli_real_escape_string($conn, $age);

        $query = "INSERT INTO `students` (`first_name`, `last_name`, `age`) VALUES ('$f_name', '$l_name', '$age')";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Failed: ".mysqli_error($conn));
        } else {
            header('Location: homePage.php?insert_msg=Your data has been added successfully');
        }
    }
}

mysqli_close($conn);

?>






/* 
<?php

include 'db_conn.php';

if(isset($_POST['add_students'])){

    $f_name = $_POST['first_name'];
    $l_name = $_POST['last_name'];
    $age = $_POST['age'];

    if($f_name == "" || empty($f_name)){
        header('Location: home.php? message= You need to fill in the first name!');
    }

    else{
        $query = "INSERT INTO `students` (`first_name`, `last_name`, `age`) VALUES (`$f_name`, `$l_name`, `$age`)";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed".mysqli_error());
        }
        else{
            header('Location: home.php? insert_msg= Your data has been added successfully');
        }
    }
}

?> 
*/