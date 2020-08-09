

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('user.layout.hero2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="user/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Thư viện Librona</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Thể Loại</h4>
                            <ul>
                                <li><a href="thuvien">All</a></li>
                                <?php $__currentLoopData = $theloai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="thuvien?id_TheLoai=<?php echo e($item->id); ?>"><?php echo e($item->Ten); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="row">
                    	<?php $__currentLoopData = $sach; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="images/<?php echo e($item->Hinh); ?>">
                                </div>
                                <div class="product__item__text">
                                    <a href="thongtin?id_Sach=<?php echo e($item->id); ?>"><h6><b><?php echo e($item->TenSach); ?></b></h6>
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <th class="product__details__price" scope="row">Trị giá</th>
                                                <td><?php echo e($item->TriGia); ?> VNĐ</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Số lượng</th>
                                                <td><?php if($item->SoLuong == 0): ?> Hết sách <?php else: ?> <?php echo e($item->SoLuong); ?> <?php endif; ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div style="text-align: center"><?php echo e($sach->links()); ?></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quanlythuvien\resources\views/user/shop-grid.blade.php ENDPATH**/ ?>