<?php
$conn = mysqli_connect('localhost', 'root', '', 'helperland');

if (!$conn) {
    die('database connection failed' . mysqli_connect_error());
}
// else{
// 	echo "successfully";
// }

if (isset($_POST['login'])) {

    // echo "it's works";
    $Email1 = $_POST['Email'];
    $Password1 = $_POST['password'];
    $Email = mysqli_real_escape_string($conn, $Email1);
    $Password = mysqli_real_escape_string($conn, $Password1);

    $query = "SELECT * FROM user WHERE Email='$Email1'";
    $result = mysqli_query($conn, $query);

    if (!$result) 
    {
        die("QUERY FAILED" . mysqli_error($conn));
    }

    while ($row = mysqli_fetch_assoc($result))
    {

        $Email = $row['Email'];
        $Password = $row['password'];

        
    }
    if(($Email == $Email1) && ($Password == $Password1))
        {
            echo "you already registerd";
        }
        else 
        {
            echo "not";
        }
}
?>