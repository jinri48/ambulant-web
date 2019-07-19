$(document).ready(function(){ 
    cl(['login.js']);
    if(!isLogin()){
        redirectTo('/login');
        return;
    }

    //getCategories();

    checkIfThereIsAnActiveOrder();

    showSelectedGuest();
});

    function checkIfThereIsAnActiveOrder(){
        getWithHeader(
            routes.aboutTableSomething.checkIfThereIsAnActiveOrder,
            {},
            function(response){
                console.log(response);

                if(response.success == false && response.status == 200){
                    redirectTo('/table-selection');
                    return;
                }

                setStorage('selected_table_id', response.data.table_no);
                
                //setStorage('selected_guest_no','');

                if(getStorage('selected_table_id')==''){ 
                    redirectTo('table');
                    return;
                }
                if(getStorage('selected_guest_no')==''){ 
                    redirectTo('guest-selection');
                    return;
                }
                //redirect to guest selection.
                //redirectTo('/guest-selection');
                getCategories();
            });

// function checkIfThereIsAnActiveOrder(){
//     getWithHeader(
//         routes.aboutTableSomething.checkIfThereIsAnActiveOrder,
//         {},
//         function(response){
//             console.log(response);

//             if(response.success == false && response.status == 200){
//                 redirectTo('/tables');
//                 return;
//             }

//             setStorage('selected_table_id', response.data.table_no);
//             //setStorage('selected_guest_no','');

//             if(getStorage('selected_guest_no')==''){ 
//                 redirectTo('guest-selection');
//                 return;
//             }
//             //redirect to guest selection.
//             //redirectTo('/guest-selection');
//             getCategories();
//         });
}

function getCategories(){
    postWithHeader(routes.categories, {}, function(response){
        if(response.success == false){  
            showError('',response.message, function(){
            });
            return;
        }
        cl([response.data]);
        displayCategories(response.data);
    });
}

function displayCategories(data){

    var cc = $('#container');

    cc.empty();

    $.each(data, function(k,v){ 
        cc.append(
            '<div class="col-md-4">'+
                '<a href="#'+v.group_id+'" class="card mrg-btm-15 scroll-to" data-group-id="'+v.group_id+'" data-group-desc="'+v.description+'">'+
                    '<div class="card-block padding-25">'+
                        '<ul class="list-unstyled list-info">'+
                            '<li> '+
                                '<div class="info"  style="padding-left: 0px;">'+
                                    '<b class="text-dark font-size-18">'+v.description+'</b>'+
                                '</div>'+
                            '</li>'+
                        '</ul>'+
                    '</div>'+
                '</a>'+
            '</div>'
        );
    });

    btnCategory();
}

function btnCategory(){
    $('.card.mrg-btm-15.scroll-to').on('click', function(){ 
        setStorage('selected-category', $(this).data('group-id'));
        redirectTo('/sub-category');
    });
}

function showSelectedGuest(){
    let selected_guest_no = getStorage('selected_guest_no');
    let msg = "Selected Guest: # ";
    console.log(selected_guest_no);
    if(selected_guest_no !='' || selected_guest_no !=null){
        msg += selected_guest_no; 
        $('#selected-guest').text(msg).show();
    }else{
        let msg = "";
        $('#selected-guest').text(msg).hide();
    }

}