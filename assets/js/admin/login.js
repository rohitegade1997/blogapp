(function ($) {
    jQuery(document).ready(function () {
        $("#sign_in").click(function () {
            var form = new FormData(document.getElementById('login'));
            console.log(form.getAll('email'));
            $.ajax({
                method: "POST",
                url: "../../admin/login/admin_login",
                dataType: "json",
                data: form,
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function (loginRespose) {
                    // $('#loginMessage').text(loginRespose['message']);
                    // $("#submit_design_modal").modal("show");
                    alert(loginRespose['message']);
                    if (loginRespose["status"]) {
                        window.location.replace("../dashboard/get_posts");
                    }
                }
            });
        });
    });
})(jQuery);