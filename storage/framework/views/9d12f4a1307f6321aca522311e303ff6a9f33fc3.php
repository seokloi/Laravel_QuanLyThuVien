

<?php $__env->startSection('content'); ?>
     <!-- Page Content -->
     <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Phiếu mượn
                        <small>Chi tiết</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <?php if(session('thongtin')): ?>
                    <div class="alert alert-success">
                        Trả sách thành công
                        <table class="table">
                            <tbody>
                              <tr>
                                <th class="product__details__price" scope="row">Số ngày trễ</th>
                                <th scope="row">Tiền trễ</th>
                                <th scope="row">Tiền bồi thường</th>
                                <th scope="row">Tiền thuê sách</th>
                                <th scope="row">Tổng tiền</th>
                                
                              </tr>
                              <tr>
                                <td><?php echo e(session('thongtin')->SoNgayTre); ?></td>
                                <td><?php echo e(session('thongtin')->TienTre); ?></td>
                                <td><?php echo e(session('thongtin')->TienBoiThuong); ?></td>
                                <td><?php echo e(session('thongtin')->TienThueSach); ?></td>
                                <td><?php echo e(session('thongtin')->TongTien); ?></td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
                <div class="col-lg-12" style="padding-bottom:120px">
                    <form action="nhanvien/trasach/<?php echo e($lend->id); ?>" method="POST">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <div class="form-group  col-lg-3" >
                            <label>ID khách hàng</label>
                            <input id="id-user" class="form-control id-user" type="number" name="id_User" value="<?php echo e($lend->user->id); ?>" readonly/>
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label>Tên khách hàng</label>
                            <input id="HoTen" type="text" class="form-control" name="HoTen"  value="<?php echo e($lend->user->HoTen); ?>" readonly/>
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label>Số điện thoại</label>
                            <input id="SoDT" type="text" class="form-control" name="SoDT"  value="<?php echo e($lend->user->SoDT); ?>" readonly/>
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label>Email</label>
                            <input id="Email" type="email" class="form-control" name="Email"  value="<?php echo e($lend->user->email); ?>" readonly/>
                        </div>
                        <div class="form-group col-md-12 col-lg-3" >
                            <label>Ngày mượn</label>
                            <input class="form-control" name="NgayMuon" type="text" value="<?php echo e($lend->NgayMuon); ?>" readonly/>
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label>Ngày trả</label>
                            <input class="form-control" name="NgayTraDuDinh" type="text" value="<?php echo e($lend->NgayTra); ?>" readonly/>
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label>Tiền mượn</label>
                            <input class="form-control" name="NgayTraDuDinh" type="text" value="<?php echo e($lend->TongTien); ?>" readonly/>
                        </div>
                        <div class="form-group col-md-12 col-lg-3">
                            <label>Trạng thái</label>
                            <input class="form-control" name="Trạng thái" type="text" value="<?php echo e($lend->TrangThai == 1 ? 'Đã trả sách' : 'Chưa trả sách'); ?>" readonly/>
                        </div>
                        <div class="form-group col-md-12 col-lg-12 text-center">
                            <h2>Danh sách sách mượn</h2>
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr align="center">
                                        <th width="10%">Sách muốn trả</th>
                                        <th>Tên sách</th>
                                        <th>Thể loại</th>
                                        <th>Tác giả</th>
                                        <th>Giá mượn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $lend_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="odd gradeX" align="center">
                                        <td><input type="checkbox" name="<?php echo e($lend->id); ?>"></td>
                                        <td><?php echo e($item->book->TenSach); ?></td>
                                        <td><?php echo e($item->book->theloai->Ten); ?></td>
                                        <td><?php echo e($item->book->TacGia); ?></td>
                                        <td>5000</td>     
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php if($lend->TrangThai == 0): ?>
                                <button type="submit" class="btn btn-success">Trả sách</button>
                            <?php endif; ?>
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

<?php echo $__env->make('nhanvien.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quanlythuvien\resources\views/nhanvien/muonsach/chitiet/index.blade.php ENDPATH**/ ?>