(function ($) {
    jQuery(document).ready(function () {
        $("#back").click(function () {
            window.location.replace("../dashboard/get_posts");
        });
        $("#addNewPost").click(function () {
            var form = new FormData(document.getElementById('addPost'));
            $.ajax({
                method: "POST",
                url: "../../admin/dashboard/add_post",
                dataType: "json",
                data: form,
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function (postRespose) {
                    alert(postRespose['message']);
                    if (postRespose["status"]) {
                        window.location.replace("../dashboard/get_posts");
                    }
                }
            });
        });

    });
})(jQuery);