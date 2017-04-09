<?php 
include("db.php");


$note_id = addslashes($_GET['note_id']);
$sql = "DELETE FROM note WHERE note_id='$note_id'";
if ($conn->query($sql) === TRUE) {
    echo "<meta http-equiv='refresh' content=\"1;URL='index.php'\">";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>