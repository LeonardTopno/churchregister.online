<?php
include('./includes/dbConnect.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>     
<body>
 <!--===== dependent dropdown form============-->
<div class="dependent-dropdown">
<form autocomplete="off" action="">
  <div class="input-field">
   <select id="country">
     <option selected="" disabled= "" value="">Select Country</option>
       <?php  
        $contryData="SELECT id, name from countries";
        $result=mysqli_query($conn,$contryData);
        if(mysqli_num_rows($result)>0)
        {
          while($arr=mysqli_fetch_assoc($result))
          {
         ?>
         <option value="<?php echo $arr['id']; ?>"><?php echo $arr['name']; ?></option>
       <?php }} ?>
   </select>
   
  </div>


  <div class="input-field">
    <select id="state">
     <option value="">State-Leo</option>
   </select>
  </div>


  <div class="input-field">
    <select id="city">
     <option value="">City-Leo </option>
   </select>
  </div>
  
</form>
</div>
<!--===== dependent dropdown form============-->

         
         
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="ajax-script.js" type="text/javascript"></script>
</body>
</html>