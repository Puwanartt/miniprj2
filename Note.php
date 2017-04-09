<!DOCTYPE html>
<?php
include("db.php");
$note_id = $_GET['note_id'];
?>
<html>
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
    <a href="index.php" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left">Back</a>
    <h1>Note</h1>
   </div>
  
      <div class="ui-content">
        <?php 
            $query = "SELECT * FROM note WHERE note_id=$note_id"; 
            mysqli_query("SET NAMES utf8");
            $result = $conn->query($query); 
            while($row = $result->fetch_array()) { ?> 
            <h2><?php echo $row['notetitle']; ?></h2>
            <p><?php echo $row['notecontent']; ?></p>
        <?php } ?>
        </div>
   </div>
    
    
 
    

</body>
</html>
