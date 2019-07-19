$(document).ready(function(){ 
    cl(['table-selection.js']);
    if(!isLogin()){
        redirectTo('/login');
        return;
    } 

    getTables(); 
    selectTable();
});


function getTables(){
    getWithHeader('/table-selection',{}, function(response){
        //console.log(response);

        if(response.success == false){
            return;
        }

        var container = $('#table-container');
        container.empty();
        // showing all the tables
       
        tableSelection();
    });
}

function tableSelection(){
    $('.tbl-order-guest').on('click', function(){

        var self = $(this); 

        if( self.data('is-available') == false ){
            showWarning('','Unavailable, Please Select other table!', function(){

            });
            return;
        }


        var data = {
            table_id : self.data('id')
        };
        postWithHeader(routes.tableEntry, data, function(response){
            if(response.success == false){  
                showError('',response.message, function(){
                });
                return;
            }
            
            setStorage('selected_table_id',self.data('id'));
            setStorage('selected_guest_no','');
            redirectTo('/guest-selection');
        }); 

    });
}


function selectTable(){
    $('.table-for').on('click', function(){
        var self = $(this);
        let table_capacity = self.data('tablefor');
        console.log("table for :" +table_capacity);

        setStorage("table_for", table_capacity);
        redirectTo('/tables');
       
    });
}