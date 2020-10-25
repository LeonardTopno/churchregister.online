// ajax script for getting state data
$(document).on('change','#country', function(){
    var countryID = $(this).val();
    if(countryID){
        $.ajax({
            type:'POST',
            //url:'backend-script.php',
            url:'../includes/backend-script.php',
            data:{'country_id':countryID},
            success:function(result){
                //console.log(result);
                $('#state').html(result);
               
            }
        }); 
    }else{
        $('#state').html('<option value="">Country - Oswin</option>');
        $('#city').html('<option value=""> State - Oswin  </option>'); 
    }
});

// ajax script for getting  city data
 $(document).on('change','#state', function(){
    var stateID = $(this).val();
    if(stateID){
        $.ajax({
            type:'POST',
            //url:'backend-script.php',
            url:'../includes/backend-script.php',
            data:{'state_id':stateID},
            success:function(result){
                $('#city').html(result);  
            }
        }); 
    }else{
        $('#city').html('<option value="">City </option>');
        
    }
});