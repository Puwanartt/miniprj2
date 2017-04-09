<?php 
include("db.php");

    $id = $_POST['id'];
    $title = $_POST['notetitle'];
    $content = $_POST['notecontent'];
    $date = date('Y-m-d H:i:s');
    $sql = "UPDATE note SET notetitle='$title', notecontent='$content', note_date='$date' WHERE note_id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "<meta http-equiv='refresh' content=\"1;URL='index.php'\">";
    }else{
        echo "Error updating record: " . $conn->error;
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