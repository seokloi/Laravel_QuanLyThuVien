<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Librona">
    <meta name="keywords" content="Librona, quan ly thu vien">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Librona</title>
    <base href="<?php echo e(asset('')); ?>">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="user/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="user/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="user/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="user/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="user/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="user/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="user/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="user/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php echo $__env->make('user.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--Form Dang Nhap -->
    <div align = "center">
         <div style = "width:300px; border: solid 1px #333333;" align = "left">
            <div style = "background-color:#7fad39; color:#FFFFFF; padding:3px;"><b>Đăng Nhập</b></div>
                <?php if(count($errors)>0): ?>
                    <div class="alert alert-danger">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $er): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($er); ?> <br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
                <?php if(session('thongbao')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('thongbao')); ?>

                    </div>
                <?php endif; ?>
            <div style = "margin:30px">
               
               <form action="login" method="post">
                  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                  <label>Email</label><br><input type = "text" name = "txtEmail" class = "box" placeholder="Nhập email"/><br /><br />
                  <label>Mật khẩu</label><br><input type = "password" name = "txtPassword" class = "box" placeholder="Nhập mật khẩu" /><br/><br />
                  <input type = "submit" value = "Đăng Nhập"/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
					
            </div>
				
         </div>
			
      </div>


    <!-- Js Plugins -->
    <script src="user/js/jquery-3.3.1.min.js"></script>
    <script src="user/js/bootstrap.min.js"></script>
    <script src="user/js/jquery.nice-select.min.js"></script>
    <script src="user/js/jquery-ui.min.js"></script>
    <script src="user/js/jquery.slicknav.js"></script>
    <script src="user/js/mixitup.min.js"></script>
    <script src="user/js/owl.carousel.min.js"></script>
    <script src="user/js/main.js"></script>
</body>

</html><?php /**PATH E:\xampp\htdocs\quanlythuvien\resources\views/user/login.blade.php ENDPATH**/ ?>