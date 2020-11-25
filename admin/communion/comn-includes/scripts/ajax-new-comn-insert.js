function add1stCommRecord(){
        
    var first_name = $('#fname').val();
    var middle_name = $('#mname').val();
    var last_name = $('#lname').val();
    
    var gender = $('#radio-stacked').val();
    var date_of_birth = $('#dob').val();
    var baptism_date = $('#dobaptism').val();
    var minister_name = $('#bby').val();

    var fathers_name = $('#fathername').val();
    var fathers_surname = $('#fathersname').val();
    var fathers_occupation = $('#foccupation').val();
    var domicile = $('#domicile').val();

    var mothers_name = $('#mothername').val();
    var mothers_surname = $('#mothersname').val();
    var mothers_occupation = $('#moccupation').val();

    var first_sponsor_name = $('#GFname').val();
    var first_sponsor_domicile = $('#GFdomicile').val();

    var second_sponsor_name = $('#GMname').val();
    var second_sponsor_domicile = $('#GMdomicile').val();

    var permanent_address = $('#padd').val();
    var current_address = $('#cadd').val();

    var mobile_no = $('#phone-mask').val();
    var email_id = $('#email').val();

    //var home_parish = $('#parish').val();

    var communion_date = $('#comndate').val();
    var communion_church = $('#cchurchname').val();
    var school_name = $('#comnschool').val();

    console.log(first_name);


    json_data_to_send = {'first_name' : first_name,
                        'last_name' : last_name
                        };



    $.ajax({
        url: "comn-includes/ajax-backend/insert-backend.php",
        type: 'POST',
        //data : {'first_name' : first_name},
        data: json_data_to_send, 

        success:function(data, status){
            console.log('Data Received',data);  
            console.log('Status:', status);
            alert(status);
            $("#myModal").animate({'scrollTop':0},800);
            $("#1st-communion-form").trigger("reset");
            console.log('Successfully Inserted! and Form Reset');
        },

        error:function(errMsg){
            console.log('Error in inserting');
            colsole.log(errMsg);
        }


    });

    
}