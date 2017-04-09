<!DOCTYPE html>
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
   
    <h1>เพิ่มบันทึก</h1>
    
  </div>

 


<form action="donote.php" method="post" class="a">
    ชื่อเรื่อง: <br/>
    <input type="text" class="text" name="notetitle" id="notetitle" /> <br/>
    รายละเอียด: <br/>
    <textarea class="text" name="notecontent" id="notecontent" rows="4" cols="50" ></textarea>
    <input type="submit" id="submit" value="บันทึก" name="submit" >
  
</form>

<script type="text/javascript">
$('#submit').on('click',function(event){
    var valid = true;
    errorMessage = "";
    if ($('#notetitle').val() == '') {
        errorMessage = "โปรดป้อน ชื่อเรื่อง \n";
        valid = false;
    }
    
    if ($('#notecontent').val() == '') {
        errorMessage += "โปรดป้อน รายละเอียด\n";
        valid = false;
    }

    if ( !valid && errorMessage.length > 0) {
        alert(errorMessage);
        event.preventDefault();
    }
});

    function linkto() {
        window.location='http://angsila.cs.buu.ac.th/~58160188/887371/miniprj2/index.php';
    }

    </script>

    </div>
  </div>
</div>

</body>
</html>
