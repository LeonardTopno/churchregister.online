<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>     
<body>

<script>
// ajax script for getting state data
$(document).on('change','#country', function(){
      var countryID = $(this).val();
      if(countryID){
          $.ajax({
              type:'POST',
              url:'backend-script.php',
              data:{'country_id':countryID},
              success:function(result){
                  $('#state').html(result);
                 
              }
          }); 
      }else{
          $('#state').html('<option value="">Country</option>');
          $('#city').html('<option value=""> State </option>'); 
      }
  });

    // ajax script for getting  city data
   $(document).on('change','#state', function(){
      var stateID = $(this).val();
      if(stateID){
          $.ajax({
              type:'POST',
              url:'backend-script.php',
              data:{'state_id':stateID},
              success:function(result){
                  $('#city').html(result);
                 
              }
          }); 
      }else{
          $('#city').html('<option value="">City</option>');
          
      }
  });
  </script>



<?php
include('connection.php');
// Fetching state data
$country_id=!empty($_POST['country_id'])?$_POST['country_id']:'';
if(!empty($country_id))
  {
        $contryData="SELECT id, name from states WHERE country_id=$country_id";
        $result=mysqli_query($con,$contryData);
        if(mysqli_num_rows($result)>0)
        {
          echo "<option value=''>Select State</option>";
          while($arr=mysqli_fetch_assoc($result))
          {
            echo "<option value='".$arr['id']."'>".$arr['name']."</option><br>";
        
          }
        }  
   }
   // Fetching city data
$state_id=!empty($_POST['state_id'])?$_POST['state_id']:'';
if(!empty($state_id))
  {
        $cityData="SELECT id, name from cities WHERE state_id=$state_id";
        $result=mysqli_query($con,$cityData);
        if(mysqli_num_rows($result)>0)
        {
          echo "<option value=''>Select City</option>";
          while($arr=mysqli_fetch_assoc($result))
          {
            echo "<option value='".$arr['id']."'>".$arr['name']."</option><br>";
        
          }
        }  
   }
   
         ?>

   <!--===== dependent dropdown form============-->
<div class="dependent-dropdown">
<form autocomplete="off" action="">
  <div class="input-field">
   <select id="country">
     <option value="">Select Country</option>
       <?php
        $contryData="SELECT id, name from countries";
        $result=mysqli_query($con,$contryData);
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
     <option value="">State</option>
   </select>
  </div>
  <div class="input-field">
    <select id="city">
     <option value="">City </option>
   </select>
  </div>
  
</form>
</div>
<!--===== dependent dropdown form============-->

         
         
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="ajax-script.js" type="text/javascript"></script>
</body>
</html>