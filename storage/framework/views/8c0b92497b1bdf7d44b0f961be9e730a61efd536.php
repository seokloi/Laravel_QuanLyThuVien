

<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thông tin trả sách</h1>
            </div>
            <!-- /.col-lg-12 -->
            
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Người mượn</th>
                        <th>Ngày trả</th>
                        <th>Số ngày trễ</th>
                        <th>Tiền trễ</th>
                        <th>Tiền bồi thường</th>
                        <th>Tiền thuê sách</th>
                        <th>Tổng tiền</th>
                        <th>Chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $trasach; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="odd gradeX" align="center">
                        <td><?php echo e($ts->id); ?></td>
                        <td><?php echo e($ts->users->HoTen); ?></td>
                        <td><?php echo e($ts->NgayTra); ?></td>
                        <td><?php echo e($ts->SoNgayTre); ?></td>
                        <td><?php echo e($ts->TienTre); ?></td>
                        <td><?php echo e($ts->TienBoiThuong); ?></td>
                        <td><?php echo e($ts->TienThueSach); ?></td>
                        <td><?php echo e($ts->TongTien); ?></td>
                        <td><button class="btn btn-info" onclick="showDetail(<?php echo e($ts->id); ?>)">Xem</button></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <div class="showDetail">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chi tiết mượn sách</h1>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID trả sách</th>
                        <th>Tên sách</th>
                        <th>Thể loại</th>
                    </tr>
                </thead>
                <tbody class="detailHere">
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
</div>
<!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $('.showDetail').hide();
        function showDetail(idTraSach){
            $('.showDetail').show();
            $.get('admin/ajax/trasach/' + idTraSach, function (data) { 
                $('.detailHere').html("");
                $('.detailHere').html(data);
            })
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quanlythuvien\resources\views/admin/taichinh/phieutra.blade.php ENDPATH**/ ?>