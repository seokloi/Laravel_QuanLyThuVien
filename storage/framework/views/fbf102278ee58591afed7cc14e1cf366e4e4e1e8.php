

<?php $__env->startSection('php'); ?>
    <?php session_start(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('user.layout.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <?php $__currentLoopData = $theloai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/<?php echo e($item->Hinh); ?>">
                            <h5><a href="thuvien?id_TheLoai=<?php echo e($item->id); ?>"><?php echo e($item->Ten); ?></a></h5>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sách được mượn nhiều nhất</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
            	<?php $__currentLoopData = $topsach; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               	<div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/<?php echo e($item->Hinh); ?>">
                        </div>
                        <div class="featured__item__text">
                            <a href="thongtin?id_Sach=<?php echo e($item->id_Sach); ?>"><h6><b><?php echo e($item->TenSach); ?></b></h6>
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
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sách mới nhất</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
            	<?php $__currentLoopData = $sachmoi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               	<div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="images/<?php echo e($item->Hinh); ?>">
                        </div>
                        <div class="featured__item__text">
                            <a href="thongtin?id_Sach=<?php echo e($item->id); ?>"><h6><b><?php echo e($item->TenSach); ?></h6></b>
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
        </div>
    </section>
    <!-- Featured Section End -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quanlythuvien\resources\views/user/index.blade.php ENDPATH**/ ?>