<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Admin</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/toastr.min.css">

</head>


<body class="bg-gradient-success">



<?= $this->renderSection('content'); ?>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/js/toastr.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>
    <script type="text/javascript">
    $("#form_login").validate({
        submitHandler : function(){
          var username = $("#username").val();
          var password = $("#password").val();
            $.ajax({
                type:'post',
                url:'/ajax/login',
                data:{username:username,password:password},
                success:function(resp){
                    var res = JSON.parse(resp);
                    var html = "";
                    if(res.is_error){
                        toastr["error"](res.msg);
                    }else{
                        window.location = "/admin/index";
                    }
                },error:function(){
                    toastr["error"]("Gagal login, coba beberapa saat lagi");
                }
            });
        }
    });
    </script>
</body>

</html>