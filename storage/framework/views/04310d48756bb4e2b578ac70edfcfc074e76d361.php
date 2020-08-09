

<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thông tin mượn sách</h1>
            </div>
            <!-- /.col-lg-12 -->
            
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Người mượn</th>
                        <th>Ngày mượn</th>
                        <th>Ngày trả</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                        <th>Chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $muonsach; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="odd gradeX" align="center">
                        <td><?php echo e($ms->id); ?></td>
                        <td><?php echo e($ms->users->HoTen); ?></td>
                        <td><?php echo e($ms->NgayMuon); ?></td>
                        <td><?php echo e($ms->NgayTra); ?></td>
                        <td><?php echo e($ms->TongTien); ?></td>
                        <td <?php if($ms->TrangThai==0): ?> class="alert alert-warning" <?php else: ?> class="alert alert-success" <?php endif; ?>>
                            <?php if($ms->TrangThai==0): ?> Chưa trả sách <?php else: ?> Đã trả sách <?php endif; ?>
                        </td>
                        <td><button class="btn btn-info" onclick="showDetail(<?php echo e($ms->id); ?>)">Xem</button></td>
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
                        <th>ID mượn sách</th>
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
        function showDetail(idMuonSach){
            $('.showDetail').show();
            $.get('admin/ajax/muonsach/' + idMuonSach, function (data) { 
                $('.detailHere').html("");
                $('.detailHere').html(data);
            })
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quanlythuvien\resources\views/admin/taichinh/phieumuon.blade.php ENDPATH**/ ?>