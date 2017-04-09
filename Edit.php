<!DOCTYPE html>
<?php 
include("db.php");
$GETid = addslashes($_GET['note_id']);
    $sql = "SELECT * FROM note WHERE note_id='$GETid'";
    $result = $conn->query($sql);
    $row = $result->fetch_array();
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
   
    <h1>แก้ไขบันทึก</h1>
   
    
  </div>

 


<form action="Edit2.php" method="post" class="a">
    <INPUT TYPE=hidden NAME=id VALUE="<?php echo $row['note_id']; ?>"><BR>ชื่อเรื่อง : <br/>
    <input type="text" class="text" name="notetitle" id="notetitle" value="<?php echo $row['notetitle']; ?>"/><br/>รายละเอียด :  <br/>
    <textarea name="notecontent" id="connotecontent" required ><?php echo $row['notecontent']; ?></textarea><br/>
    
     <input type="submit" id="Save" value="บันทึก" name="Save" onclick="linkto();"/>
  <input type="submit" id="del" value="ลบ" name="delete">
</form>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
    
        $("#del").on("click",function(event){
            event.stopPropagation();
            if(confirm("Do you want to delete?")) {
                this.click;
                window.location.replace("delete.php?note_id=<?php echo $row['note_id']; ?>");
            }     
            event.preventDefault();
        });

   
    </script> 

   

  

</body>
</html>
