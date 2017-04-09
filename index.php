<!DOCTYPE html>
<html>
<?php
include('db.php');
$query = "SELECT * FROM note ";
$result = $conn->query($query);
if (!$result) die($conn->error);
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>
<body>
<div data-role="page">
  <div data-role="header">
    <h1>MyNote</h1>
    <!-- <a href="index.php" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left"></a> -->
    <a href="NewNote.php" class="ui-btn ui-btn-right ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add</a>
</div>
<br>
<div id="pageone">
<div data-role="main">
<ul data-role="listview" date ="true" data-inset="true">

<?php 
$query = "SELECT * FROM note GROUP BY note_date ORDER BY note_date DESC"; 
mysqli_query("SET NAMES utf8");
$result1 = $conn->query($query); 
while ($row = $result1->fetch_array()) { ?>
<li data-role="list-divider"><?php echo $row['note_date']; ?></li>

<?php
$query = "SELECT * FROM note WHERE note_date='".$row['note_date']."'"; 
mysqli_query("SET NAMES utf8");
$result2 = $conn->query($query);
while($row = $result2->fetch_array()) {
?> 
<li> 
<a href='Note.php?note_id=<?php echo $row['note_id']; ?>'>
<p align="left"><h2><?php echo $row['notetitle']; ?></h2></p><br><p><?php echo $row['notecontent']; ?></p></a>
<a href='Edit.php?note_id=<?php echo $row['note_id']; ?>' class= "ui-btn ui-icon-arrow-r ui-btn-icon-left">Edit</a>
</li>

<?php } ?>
<?php } ?>

</ul>
</div>
</div>




<script>
    function linkto() {
        window.location='http://angsila.cs.buu.ac.th/~58160188/887371/miniprj2/index.php';
    }
</script>
<?php  
$conn->close();
?>
</body>
</html>


