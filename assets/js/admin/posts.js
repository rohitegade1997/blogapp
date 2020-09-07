(function ($) {
    jQuery(document).ready(function () {
        $("#addPost").click(function () {
            window.location.replace("../dashboard/add_post");
        });
        $("#deletePost").click(function () {
            var postId = $('#delPost').val();
            console.log(postId);
            // var objToSend = { postId: postId };
            // $.ajax({
            //     url: '../../admin/dashboard/delete_post',
            //     method: 'post',
            //     data: { result: objToSend },
            //     success: function (response) {
            //         response = JSON.parse(response);
            //         if (response["status"]) {
            //             window.location.replace("../dashboard/get_posts");
            //         }
            //     },
            //     error: function (jqXhr, status, error) {
            //         alert(error);
            //     }
            // });
        });
    });
})(jQuery);