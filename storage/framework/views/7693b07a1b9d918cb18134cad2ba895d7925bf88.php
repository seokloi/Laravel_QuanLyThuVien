

<?php $__env->startSection('content'); ?>
     <!-- Page Content -->
     <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thông tin mượn sách
                        <small>Trả sách</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <?php if(session('thongbao')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('thongbao')); ?>

                    </div>
                <?php endif; ?>
                <div class="col-lg-12" style="padding-bottom:120px">
                    <form action="nhanvien/trasach/<?php echo e($muonsach->id); ?>" method="POST">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
                        <div class="form-group  col-lg-3" >
                            <label>ID khách hàng</label>
                        <input id="id-user" disabled class="form-control id-user" type="number" name="id_User" value="<?php echo e($muonsach->users->id); ?>"/>
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label>Tên khách hàng</label>
                            <input id="HoTen" disabled type="text" class="form-control" name="HoTen"  value="<?php echo e($muonsach->users->HoTen); ?>" />
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                                <label>Số điện thoại</label>
                            <input id="SoDT" disabled type="text" class="form-control" name="SoDT"  value="<?php echo e($muonsach->users->SoDT); ?>" />
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label>Email</label>
                            <input id="Email" disabled type="email" class="form-control" name="Email"  value="<?php echo e($muonsach->users->email); ?>" />
                        </div>
                        <div class="form-group col-md-12 col-lg-3" >
                            <label>Ngày mượn</label>
                            <input disabled class="form-control" name="NgayMuon" type="text" value="<?php echo e($muonsach->NgayMuon); ?>"/>
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label>Ngày trả dự định</label>
                            <input disabled class="form-control" name="NgayTraDuDinh" type="text" value="<?php echo e($muonsach->NgayTra); ?>"/>
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label>Tiền mượn</label>
                            <input disabled class="form-control" name="TienMuon" type="text" value="<?php echo e($muonsach->TongTien); ?>"/>
                        </div>
                        <div class="form-group col-md-12 col-lg-12 text-center">
                            <h2>Danh sách sách đã mượn</h2>
                            
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr >
                                        <th width="10%">Sách muốn trả</th>
                                        <th>Tên sách</th>
                                        <th>Thể loại</th>
                                        <th>Tác giả</th>
                                        <th>Giá mượn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $chitiet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="odd gradeX" align="center">
                                        <td><input type="checkbox" name="<?php echo e($item->id); ?>"></td>
                                        <td><?php echo e($item->sach->TenSach); ?></td>
                                        <td><?php echo e($item->sach->theloai->Ten); ?></td>
                                        <td><?php echo e($item->sach->TacGia); ?></td>
                                        <td>5000</td>     
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <button class="btn btn-success">Trả sách</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('nhanvien.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quanlythuvien\resources\views/nhanvien/trasach/trasach.blade.php ENDPATH**/ ?>