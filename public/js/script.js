var new_address_dialog;

function add_new_address_dialog(){

    new_address_dialog = $.confirm({
        title: "Add New Address",
        content: "url:"+base_url+"/address/_create_dialog",
        // theme: 'material',
        columnClass: "col-md-6",
        containerFluid: true,
        smoothContent: true,
        buttons: {
            Cancel: function() {},
            Save: {
                btnClass: 'btn btn-success',
                action: function() {
                },

            }
        },
        onContentReady: function() {
        },
    });
}
