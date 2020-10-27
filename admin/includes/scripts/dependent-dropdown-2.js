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
        $('#province').html('<option value="">Province - Oswin</option>');
        $('#diocese').html('<option value=""> Diocese - Oswin</option>'); 
        $('#parish').html('<option value=""> Parish - Oswin</option>');
    }
});

// ajax script for getting diocese data
 $(document).on('change','#province', function(){
    var provinceID = $(this).val();
    if(provinceID){
        $.ajax({
            type:'POST',
            url:'../includes/dependent-dropdown-2.php',
            data:{'province_id':provinceID},
            success:function(result){
                $('#diocese').html(result);  
            }
        }); 
    }else{
        $('#diocese').html('<option value="">Diocese </option>'); 
    }
});
