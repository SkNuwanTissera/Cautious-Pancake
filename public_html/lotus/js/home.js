$('#tour-selection').on('change',function(){
    var tour=$('#tour-selection').find(":selected").text();
        switch(tour){
            case 'Dabadiwa':
                $("#date-selection").empty();
                $("#date-selection").prepend('<option value="8">8 days</option>');
                $("#date-selection").prepend('<option value="12">12 days</option>'); 
                break;
            case 'Thailand':
               $("#date-selection").empty();
               $("#date-selection").prepend('<option value="5">5 days</option>'); 
               break; 
            case 'Singapore':     
                $("#date-selection").empty();
                $("#date-selection").prepend('<option value="6">6 days</option>');
                break;
            case 'Solosmas Thane':     
                $("#date-selection").empty();
                $("#date-selection").prepend('<option value="6">6 days</option>');
                break;    
        
        }
    
});
