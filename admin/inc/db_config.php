<?php
$hname = 'localhost';
$uname = 'root';
$password = '';
$db = 'mikebags';
$con = mysqli_connect($hname, $uname, $password, $db);

// Check for connection errors
if (!$con) {
    die("Cannot Connect to Database: " . mysqli_connect_error());
}

// Function to sanitize input data
function filteration($data)
{
    foreach ($data as $key => $value) {
        // Trim whitespace
        $data[$key] = trim($value);
        // Remove backslashes
        $data[$key] = stripslashes($value);
        // Convert special characters to HTML entities (for XSS protection)
        $data[$key] = htmlspecialchars($value);
        // Remove HTML tags
        $data[$key] = strip_tags($value);
    }
    return $data;
}

// Function to run SELECT queries with prepared statements
function select($sql, $values, $datatypes)
{
    global $con; // Use the global connection variable
    if ($stmt = mysqli_prepare($con, $sql)) {
        // Bind the parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            // Get the result of the query
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Select");
        }
    } else {
        die("Query cannot be prepared - Select");
    }
}
?>
