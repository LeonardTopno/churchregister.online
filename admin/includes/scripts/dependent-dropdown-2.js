// ajax script for getting province data
$(document).on('change','#country', function(){
    var countryID = $(this).val();
    if(countryID){
        $.ajax({
            type:'POST',
            url:'../includes/dependent-dropdown-2.php',
            data:{'country_id':countryID},
            success:function(result){
                //console.log(result);
                $('#province').html(result);  
            }
        }); 
    }else{
        $('#state').html('<option value="">Province - Oswin</option>');
        $('#city').html('<option value=""> Diocese - Oswin</option>'); 
    }
});

// ajax script for getting diocese data
 $(document).on('change','#province', function(){
    var dioceseID = $(this).val();
    if(dioceseID){
        $.ajax({
            type:'POST',
            url:'../includes/dependent-dropdown-2.php',
            data:{'diocese_id':dioceseID},
            success:function(result){
                $('#diocese').html(result);  
            }
        }); 
    }else{
        $('#diocese').html('<option value="">Diocese </option>');
        
    }
});
