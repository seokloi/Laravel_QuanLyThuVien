	<!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li>Chào mừng đến với Librona</li>
                                <li>Thư viện với hàng ngàn cuốn sách thú vị</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="https://www.facebook.com/Yogarona-110133750721813/" title="Chúng tôi"><i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="header__top__right__auth">
                                <a 
                                <?php if(!isset($thongtindangnhap)): ?>
                                    href="login"
                                <?php endif; ?>
                                ><i class="fa fa-user"></i>
                                    <?php if(isset($thongtindangnhap)): ?>
                                        <?php echo e($thongtindangnhap->HoTen); ?>

                                        <div><a href='logout'>Đăng xuất</a></div>
                                    <?php else: ?>
                                        Đăng nhập
                                    <?php endif; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="././"><img src="user/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li <?php if($active == 'trangchu'): ?> class="active" <?php endif; ?>><a href="././">Trang chủ</a></li>
                            <li <?php if($active == 'thuvien'): ?> class="active" <?php endif; ?> ><a href="thuvien">Thư viện</a></li>
                            <li <?php if($active == 'contact'): ?> class="active" <?php endif; ?>><a href="contact">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <?php if(isset($thongtindangnhap)): ?>
                        <div class="header__cart__price btn btn-outline-success"><a href="muonsach/<?php echo e($thongtindangnhap->id); ?>">Sách đang mượn</a></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End --><?php /**PATH E:\xampp\htdocs\quanlythuvien\resources\views/user/layout/header.blade.php ENDPATH**/ ?>