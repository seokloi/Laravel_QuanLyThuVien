

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('user.layout.hero2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="user/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?php echo e($sach->TenSach); ?></h2>
                        <div class="breadcrumb__option">
                            <a href="././">Trang chủ </a>
                            <a href="./thuvien">Thư viện </a>
                            <span> <?php echo e($sach->TenSach); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="images/<?php echo e($sach->Hinh); ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?php echo e($sach->TenSach); ?> </h3>
                        <div class="product__details__rating">
                            <span>(Số lượng: <?php if($sach->SoLuong == 0): ?> Hết sách <?php else: ?> <?php echo e($sach->SoLuong); ?> <?php endif; ?>)</span>
                        </div>
                        <table class="table">
                            <tbody>
                              <tr>
                                <th class="product__details__price" scope="row">Trị giá</th>
                                <td><?php echo e($sach->TriGia); ?> VNĐ</td>
                              </tr>
                              <tr>
                                <th scope="row">Tác giả</th>
                                <td><?php echo e($sach->TacGia); ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Thể loại</th>
                                <td><?php echo e($theloai->Ten); ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Nhà xuất bản</th>
                                <td><?php echo e($sach->NhaXuatBan); ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Năm xuất bản</th>
                                <td><?php echo e($sach->NamXuatBan); ?></td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quanlythuvien\resources\views/user/shop-details.blade.php ENDPATH**/ ?>