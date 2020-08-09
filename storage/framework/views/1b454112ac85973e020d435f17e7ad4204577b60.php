

<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sách
                    <small>Sửa</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($err); ?><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
                <?php if(session('loi')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('loi')); ?>

                    </div>
                <?php endif; ?>
                <?php if(session('thongbao')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('thongbao')); ?>

                    </div>
                <?php endif; ?>

                <form action="admin/sach/sua/<?php echo e($sach->id); ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <div class="form-group">
                        <label>Tên sách</label>
                        <input class="form-control" name="TenSach" placeholder="Tên sách" value="<?php echo e($sach->TenSach); ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Tác giả</label>
                        <input class="form-control" name="TacGia" placeholder="Tác giả" value="<?php echo e($sach->TacGia); ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Thể loại</label>
                        <select class="form-control" name="TheLoai" id="TheLoai">
                            <?php $__currentLoopData = $theloai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
                                <?php if($sach->id_TheLoai == $tl->id): ?>
                                    <?php echo e("selected"); ?>

                                <?php endif; ?>
                                value="<?php echo e($tl->id); ?>"><?php echo e($tl->Ten); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Năm xuất bản</label>
                        <input type="number" class="form-control" name="NamXuatBan" placeholder="Năm xuất bản" value="<?php echo e($sach->NamXuatBan); ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Nhà xuất bản</label>
                        <input class="form-control" name="NhaXuatBan" placeholder="Nhà xuất bản" value="<?php echo e($sach->NhaXuatBan); ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <img src="images/<?php echo e($sach->Hinh); ?>" width="400px"><br><br>
                        <label>Hình ảnh mới</label>
                        <input id="Hinh" type="file" class="form-control" name="Hinh"/>
                    </div>
                    <div class="form-group">
                        <label>Trị giá</label>
                        <input type="number" class="form-control" name="TriGia" placeholder="Tri giá" value="<?php echo e($sach->TriGia); ?>"/>
                    </div>
                    <div class="form-group">
                        <label>Số lượng hiện có</label>
                        <input type="number" class="form-control" name="SoLuong" placeholder="Số lượng" value="<?php echo e($sach->SoLuong); ?>"/>
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
<!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    $("#Hinh").change(function(e) {
        for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {        
            var file = e.originalEvent.srcElement.files[i];      
            var img = document.createElement("img");
            var reader = new FileReader();
            reader.onloadend = function() {
                img.src = reader.result;
                img.width = 300;
            }
            reader.readAsDataURL(file);
            $("input").after(img);
        }
    });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quanlythuvien\resources\views/admin/sach/sua.blade.php ENDPATH**/ ?>