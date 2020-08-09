

<?php $__env->startSection('content'); ?>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>Sửa</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <?php if(count($errors) > 0): ?>
                    <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger">
                        <?php echo e($err); ?> <br>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <?php if(session('thongbao')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('thongbao')); ?>

                </div>
                <?php endif; ?>
                <form action="nhanvien/user/sua/<?php echo e($nhanvien->id); ?>" method="POST">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="txtEmail" placeholder="Nhập email" value="<?php echo e($nhanvien->email); ?>" readonly />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="changePassword" id="changePassword">
                        <label>Mật khẩu mới</label>
                        <input type="password" class="form-control password" name="txtPass" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input type="password" class="form-control password" name="txtRePass" placeholder="Nhập lại mật khẩu">
                    </div>
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input type="text" class="form-control" name="txtName" placeholder="Please Enter Name" value="<?php echo e($nhanvien->HoTen); ?>" />
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh</label>
                        <input type="date" class="form-control" name="txtDateBirdth" placeholder="Please Enter Date of bird" value="<?php echo e($nhanvien->NgaySinh); ?>" />
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label><br>
                        <label class="radio-inline">
                            <input name="txtSex" <?php if($nhanvien->GioiTinh == 1 ): ?> checked <?php endif; ?> value="1"  type="radio">Nam
                        </label>
                        <label class="radio-inline">
                            <input name="txtSex" <?php if($nhanvien->GioiTinh == 2 ): ?> checked <?php endif; ?>  value="2" type="radio">Nữ
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" name="txtAddress" placeholder="Please Enter Address" value="<?php echo e($nhanvien->DiaChi); ?>" />
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" class="form-control" name="txtPhone" placeholder="Please Enter Phone Number" value="<?php echo e($nhanvien->SoDT); ?>" />
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
                    
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    $(document).ready(function(){
        $(".password").attr('disabled', '');
        $("#changePassword").change(function(){
            if($(this).is(":checked")){
                $(".password").removeAttr('disabled');
            }
            else{
                $(".password").attr('disabled', '');
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('nhanvien.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quanlythuvien\resources\views/nhanvien/user/sua.blade.php ENDPATH**/ ?>