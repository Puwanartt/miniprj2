<?php
include('db.php');

echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<hr>";
echo $_POST['title'] . "<br />";
echo $_POST['content'] . "<br />";
$title = $_POST['notetitle'];
$content = $_POST['notecontent'];

$date = date('Y-m-d H:i:s');

    $sql = "INSERT INTO note (notetitle,notecontent,note_date) VALUES ('$title','$content','$date')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
?>
<html>
<head>
<meta charset="utf-8">


</head>
<body>
<br>

<script>
    
        window.location='http://angsila.cs.buu.ac.th/~58160188/887371/miniprj2/index.php';
    
</script>
</body>
</html>