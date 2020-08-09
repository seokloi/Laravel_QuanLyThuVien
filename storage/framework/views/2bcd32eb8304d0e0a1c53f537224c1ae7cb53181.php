

<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nhân viên
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
            <?php if(session('thongbao')): ?>
                <div class="alert alert-success"><?php echo e(session('thongbao')); ?></div>
            <?php endif; ?>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Họ tên</th>
                        <th>Email</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                        <th>Địa chỉ</th>
                        <th>SĐT</th>
                        <th>Cập nhật mới nhất</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $nhanvien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="odd gradeX" align="center">
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->HoTen); ?></td>
                        <td><?php echo e($item->email); ?></td>
                        <td><?php echo e($item->NgaySinh); ?></td>
                        <td><?php echo e($item->GioiTinh); ?></td>
                        <td><?php echo e($item->DiaChi); ?></td>
                        <td><?php echo e($item->SoDT); ?></td>
                        <td><?php echo e($item->updated_at); ?></td>
                        <td class="center"><a href="admin/nhansu/xoa/<?php echo e($item->id); ?>"> <i class="fa fa-trash-o  fa-fw"></i></a></td>
                        <td class="center"> <a href="admin/nhansu/sua/<?php echo e($item->id); ?>"> <i class="fa fa-pencil fa-fw"></i></a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quanlythuvien\resources\views/admin/nhanvien/danhsach.blade.php ENDPATH**/ ?>