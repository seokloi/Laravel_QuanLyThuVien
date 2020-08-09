

<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sách
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            
            <?php if(session('thongbao')): ?>
                <div class="alert alert-success"><?php echo e(session('thongbao')); ?></div>
            <?php endif; ?>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Tác giả</th>
                        <th>Thể loại</th>
                        <th>Hình ảnh</th>
                        <th>Năm xuất bản</th>
                        <th>Nhà xuất bản</th>
                        <th>Trị giá</th>
                        <th>Số lượng</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $sach; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="odd gradeX" align="center">
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->TenSach); ?></td>
                        <td><?php echo e($item->TacGia); ?></td>
                        <td><?php echo e($item->theloai->Ten); ?></td>
                        <td><img width="100px" src="images/<?php echo e($item->Hinh); ?>"></td>
                        <td><?php echo e($item->NamXuatBan); ?></td>
                        <td><?php echo e($item->NhaXuatBan); ?></td>
                        <td><?php echo e($item->TriGia); ?></td>
                        <td><?php echo e($item->SoLuong); ?></td>
                        <td class="center"><a href="admin/sach/xoa/<?php echo e($item->id); ?>"> <i class="fa fa-trash-o  fa-fw"></i></a></td>
                        <td class="center"> <a href="admin/sach/sua/<?php echo e($item->id); ?>"> <i class="fa fa-pencil fa-fw"></i></a></td>
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
<?php echo $__env->make('admin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quanlythuvien\resources\views/admin/sach/danhsach.blade.php ENDPATH**/ ?>