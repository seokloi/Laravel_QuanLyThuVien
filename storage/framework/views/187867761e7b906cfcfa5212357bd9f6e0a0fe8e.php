

<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Doanh thu
                    <small>Theo <?php echo e($fill); ?></small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Thời gian</th>
                        <th>Số lượng</th>
                        <th>Tiền trễ </th>
                        <th>Tiền bồi thường</th>
                        <th>Tiền thuê sách</th>
                        <th>Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $doanhthu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="odd gradeX" align="center">
                            <td><?php if($fill == 'ngày'): ?><?php echo e($dt->NgayTra); ?> <?php endif; ?> <?php if($fill == 'tháng'): ?><?php echo e($dt->nam); ?> - <?php echo e($dt->thang); ?> <?php endif; ?> <?php if($fill == 'năm'): ?> <?php echo e($dt->nam); ?> <?php endif; ?> </td>
                            <td><?php echo e($dt->SLTraSach); ?></td>
                            <td><?php echo e($dt->TongTienTre); ?></td>
                            <td><?php echo e($dt->TongTienBoiThuong); ?></td>
                            <td><?php echo e($dt->TongTienThueSach); ?></td>
                            <td><?php echo e($dt->TongTien); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quanlythuvien\resources\views/admin/taichinh/doanhthu.blade.php ENDPATH**/ ?>