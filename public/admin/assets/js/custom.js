(function($){
    $('.delete-btn').on('click', function (e) {
        e.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This student data will be permanently deleted!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
            
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });
    

    $(document).on('click', '#delete-dubmit', function(e) {
        e.preventDefault();
        swal({
            title: 'Are you sure?',
            text: 'This teacher data will be permanently deleted!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
            inputValidator: function (result) {
                return new Promise(function (resolve, reject) {
                    if (result) {
                        resolve();
                    } else {
                        reject('You need to agree with the Terms');
                    }
                })
            }
        }).then(function (result) {
            $('#delete-form').submit();
        });
    });
})(jQuery)