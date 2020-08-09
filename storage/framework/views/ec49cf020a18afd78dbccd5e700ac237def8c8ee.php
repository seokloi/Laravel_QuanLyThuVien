

<?php $__env->startSection('content'); ?>
     <!-- Page Content -->
     <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh sách phiếu mượn
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID Phiếu</th>
                            <th>Khách hàng</th>
                            <th>Ngày mượn</th>
                            <th>Ngày trả</th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái</th>
                            <th>Chi tiết</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $lend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="odd gradeX" align="center" >
                            <td><?php echo e($item -> id); ?></td>
                            <td><?php echo e($item -> user -> HoTen); ?></td>
                            <td><?php echo e($item -> NgayMuon); ?></td>
                            <td><?php echo e($item -> NgayTra); ?></td>
                            <td class="center"> <?php echo e($item -> TongTien); ?></td>
                            <td class="center"><?php echo e($item -> TrangThai == 1 ? 'Đã trả sách' : 'Chưa trả sách'); ?></td>
                            <td><a href="<?php echo e(route('chitietmuon', $item)); ?>">Chi tiết</a></td>
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

<?php echo $__env->make('nhanvien.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quanlythuvien\resources\views/nhanvien/muonsach/index.blade.php ENDPATH**/ ?>