@extends('user.layout.index')

@section('content')
    @include('user.layout.hero2')
   

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="user/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Sách Đang Mượn</h2>
                        <div class="breadcrumb__option">
                            <a href="././">Trang chủ</a>
                            <span>Sách Đang Mượn</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Tên sách</th>
                                    <th>Thể Loại</th>
                                    <th>Ngày Mượn</th>
                                    <th>Ngày Trả</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($chitietmuonsach as $chitiet)
                                @if($chitiet->muonsach->TrangThai==0)
                                <tr>
                                    <td class="shoping__cart__item">
                                        <h5>
                                            {{$chitiet->sach->TenSach}}
                                        </h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{$chitiet->sach->theloai->Ten}}
                                    </td>
                                    <td class="shoping__cart__item__close" >
                                        {{$chitiet->muonsach->NgayMuon}}
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        {{$chitiet->muonsach->NgayTra}}
                                    </td>
                                </tr>
                                @else
                                Không có
                                @endif
                                @endforeach

                                <tr>
                                	<td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
@endsection