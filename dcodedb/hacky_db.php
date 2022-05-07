<?php
if (isset($_POST['data'])) {
    $id = $_POST['data'];
    // get user form env
    $db_user = getenv('HTTP_DB_USER');
    $db_pass = getenv('HTTP_DB_PASS');
    $db_host = getenv('HTTP_DB_HOST');

    $conn = mysqli_connect($db_host, $db_user, $db_pass);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_select_db($conn, "OJfVvdrGUl");

    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    // get the data from the database
    // $name = "2 UNION SELECT * FROM OJfVvdrGUl; --";
    $query = "SELECT * FROM OJfVvdrGUl WHERE id = $id";
    echo "<br>";
    echo "<!-- $query; -->";
    $result = mysqli_query($conn, $query);
    echo "<br>\n";
    if ($result) {
        $row = $result->fetch_all();
        // if row length 1
        if (count($row) == 0) {
            echo "$id not found";
        } else if (count($row) == 1) {
            echo "<pre>";
            print_r($row);
            echo "</pre>";
        }
        echo "<!-- ";
        echo "<pre>";
        print_r($row);
        echo "</pre>";
        echo "-->";
    }
}


