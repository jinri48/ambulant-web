$(document).ready(function () {
    cl(['tables.js']);
    if (!isLogin()) {
        redirectTo('/login');
        return;
    }
    console.log(getStorage('table_for'));
    if(getStorage('table_for') == '' || getStorage('table_for') == null ){
        console.log("inside " +getStorage('table_for'));
        redirectTo('/table-selection');
        return;
    }
    
    getTables(getStorage('table_for'));
});


function getTables(tableFor) {
    data = {
        table_for: tableFor
    }
    getWithHeader('/tables', data, function (response) {
        if (response.success == false) {
            return;
        }

        var container = $('#table-container');
        container.empty();
        // showing all the tables
        $.each(response.data, function (k, v) {
            console.log(v);
            var status = 'bg-success';
            //var status_bolean = true;
            if (v.is_available == false) {
                status = 'bg-danger';
                //status_bolean = false;
            }
            container.append(
                
                // version ni david
                // '<div class="col-md-3 card col-sm-4 text-center mr-3">  '+
                //     '<div class="card-body">'+
                //         '<span class="badge badge-pill '+status+' namber" >'+v.number+'</span>'+
                //         '<img data-is-available="'+v.is_available+'" data-id="'+v.id+'" src="/assets/images/table.png" class="img-fluid tbl-order-guest" alt="Responsive image">'+
                //     '</div>'+ 
                // '</div> '

                // 2nd version - reg
                // '<div class="col-md-2 col-sm-3 text-center mr-2 '+status+'">' +
                //     // '<div class="card-header row d-flex justify-content-between p-0 border-0">' +
                //     //     '<span class="badge badge-pill '+status+' number">'+v.number+'</span>' +
                //     // '</div>' +
                //     '<div class="card-body">' +
                //         '<h4>'+v.number+'</h>' +
                //         // '<img data-id="1" src="/assets/images/table.png" class="img-fluid tbl-order-guest" alt="Table image">' +
                //     '</div>' +
                // '</div>'


                // 3rd version - reg
                
                // '<div class="card text-center mr-2  item tbl-order-guest  ' + status + '"  data-id="'+v.id+'" data-is-available="'+v.is_available+'" >' +
                //     '<div class="card-body">' +
                //         '<h3 >' + v.number + '</h3>' +
                //     '</div>' +
                // '</div>'
                

                //4th version - reg
                '<div class="item card tbl-order-guest '+status+'" data-is-available="'+v.is_available+'"  data-id="'+v.id+'">'+
                    '<h3>'+v.number+'</h3>'+
                '</div>'
            );
        });
        tableSelection();
    });
}

function tableSelection() {
    $('.tbl-order-guest').on('click', function () {

        var self = $(this);
        console.log(self);
        if (self.data('is-available') == false) {
            showWarning('', 'Unavailable, Please Select other table!', function () {

            });
            return;
        }


        var data = {
            table_id: self.data('id')
        };
        postWithHeader(routes.tableEntry, data, function (response) {
            if (response.success == false) {
                showError('', response.message, function () {
                });
                return;
            }

            setStorage('selected_table_id', self.data('id'));
            setStorage('selected_guest_no', '');
            redirectTo('/guest-selection');
        });

    });
}