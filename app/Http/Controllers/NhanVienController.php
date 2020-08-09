<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\MuonSach;
use App\ChiTietMuonSach;
use App\Sach;
use App\TraSach;
use App\ChiTietTraSach;
use Illuminate\Support\Facades\DB;

class NhanVienController extends Controller
{
    //
    public function getDangNhap(){
        return view('nhanvien.login');
    }

    public function postDangNhap(Request $request){
        $this->validate($request, 
        [
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Bạn chưa nhập email',
            'password.required' => 'Bạn chưa nhập mật khẩu'
        ]);
        
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            $user = Auth::user();
            if($user->Quyen == 1){
                return redirect('nhanvien/muonsach/danhsach');
            }
            else{
                return redirect('nhanvien/dangnhap');
            }
        }
        else{
            return redirect('nhanvien/dangnhap');
        }
    }

    public function getDangXuat(){
        Auth::logout();
        return redirect('nhanvien/dangnhap');
    }

    //Thong tin
    public function getDanhSach()
    {
        $nhanvien = User::where('Quyen', 0)->get();   
        return view('nhanvien.user.danhsach',['nhanvien'=>$nhanvien]);
    }

    public function getThem()
    {
        return view('nhanvien.user.them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
        [
            'txtEmail' => 'required|email|unique:users,email',           
            'txtPass' => 'required|min:6|max:40',
            'txtRePass' => 'required|same:txtPass',
            'txtName' => 'required|min:3|max:100',
            'txtDateBirdth' =>'max:100',
            'txtAddress' => 'required|max:250',
            'txtPhone' => 'required|max:250|min:9'
        ],[
            'txtName.required' => 'Bạn chưa nhập tên người dùng',
            'txtName.min' => 'Tên người dùng từ 3 kí tự đến 100 kí tự',
            'txtName.max' => 'Tên người dùng từ 3 kí tự đến 100 kí tự',
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Vui lòng nhập đúng email',
            'email.unique' => 'Email của bạn đã tồn tại',
            'txtPass.required' => 'Bạn chưa nhập password',
            'txtPass.min' => 'Mật khẩu ít nhất 6 kí tự ',
            'txtPass.max' => 'Mật khẩu tối đa 40 kí tự',
            'txtRePass.required' => 'Bạn chưa nhập lại mật khẩu',
            'txtRePass.same' => 'Nhập lại mật khẩu không chính xác',
            'txtDateBirdth.max' => 'Ngày sinh không đúng',
            'txtAddress.required' => 'Bạn chưa nhập địa chỉ',
            'txtAddress.max' => 'Địa chỉ không dài quá 250 kí tự',
            'txtPhone.required' => 'Bạn chưa nhập số điện thoại',
            'txtPhone.max' => 'Số điện thoại không đúng',
            'txtPhone.min' => 'Số điện thoại không đúng'
        ]);

        $nhanvien = new User;
        $nhanvien->HoTen = $request->txtName;
        $nhanvien->password = bcrypt($request->txtPass);
        $nhanvien->email = $request->txtEmail;
        $nhanvien->NgaySinh = $request->txtDateBirdth;
        $nhanvien->GioiTinh = $request->txtSex;
        $nhanvien->DiaChi = $request->txtAddress;
        $nhanvien->SoDT = $request->txtPhone;
        $nhanvien->Quyen = 0;
        $nhanvien->save();
        return redirect('nhanvien/user/them')->with('thongbao','Thêm thành công!');
    }

    public function getSua($id)
    {
        $nhanvien = User::find($id);
        if($nhanvien->Quyen == 1 || $nhanvien->Quyen == 2){
            return redirect('nhanvien/user/danhsach');
        }
        return view('nhanvien.user.sua', ['nhanvien'=>$nhanvien]);
    }

    public function postSua(Request $request, $id){
        $this->validate($request,
        [
            'txtName' => 'required|min:3|max:100',
            'txtDateBirdth' =>'max:100',
            'txtAddress' => 'required|max:250',
            'txtPhone' => 'required|max:250|min:9'
        ],[
            'txtName.required' => 'Bạn chưa nhập tên người dùng',
            'txtName.min' => 'Tên người dùng từ 3 kí tự đến 100 kí tự',
            'txtName.max' => 'Tên người dùng từ 3 kí tự đến 100 kí tự',
            'txtDateBirdth.max' => 'Ngày sinh không đúng',
            'txtAddress.required' => 'Bạn chưa nhập địa chỉ',
            'txtAddress.max' => 'Địa chỉ không dài quá 250 kí tự',
            'txtPhone.required' => 'Bạn chưa nhập số điện thoại',
            'txtPhone.max' => 'Số điện thoại không đúng',
            'txtPhone.min' => 'Số điện thoại không đúng'
        ]);

        $nhanvien = User::find($id);
        $nhanvien->HoTen = $request->txtName;
        if($request->changePassword == "on"){
            $this->validate($request,
            [
                'txtPass' => 'required|min:6|max:40',
                'txtRePass' => 'required|same:txtPass',
            ],[
                'txtPass.required' => 'Bạn chưa nhập password',
                'txtPass.min' => 'Mật khẩu ít nhất 6 kí tự ',
                'txtPass.max' => 'Mật khẩu tối đa 40 kí tự',
                'txtRePass.required' => 'Bạn chưa nhập lại mật khẩu',
                'txtRePass.same' => 'Nhập lại mật khẩu không chính xác',
            ]);
            $user->password = bcrypt($request->password);
        }
        $nhanvien->NgaySinh = $request->txtDateBirdth;
        $nhanvien->GioiTinh = $request->txtSex;
        $nhanvien->DiaChi = $request->txtAddress;
        $nhanvien->SoDT = $request->txtPhone;
        $nhanvien->Quyen = 0;
        $nhanvien->save();
        return redirect('nhanvien/user/sua/'.$id)->with('thongbao','Thêm thành công!');
    }

    public function getXoa($id){
        $user = User::find($id);
        if($user->Quyen == 0){
            $user->Quyen == -1;
            $user->email = '';
            $user->password = '';
            $user->save();
            return redirect('nhanvien/user/danhsach')->with('thongbao', 'Xóa người dùng thành công');
        }
        return redirect('nhanvien/user/danhsach');
    }

    public function postTraSach(Request $request, $id_MuonSach){
        
        $trasach = new TraSach;
        $trasach->id_user = $request->id_User;
        $trasach->NgayTra = date('Y-m-d');
        $datediff = strtotime($trasach->NgayTra) - strtotime($request->NgayTraDuDinh);
        $trasach->SoNgayTre = floor($datediff / (60*60*24)) >= 0 ? floor($datediff / (60*60*24)) : 0;
        
        $slsach = DB::table('chitietmuonsach')
                     ->select(DB::raw('count(*) as soluong'))
                     ->where('id_MuonSach', $id_MuonSach)
                     ->get();
        
        $trasach->TienTre = $trasach->SoNgayTre*1000*$slsach[0]->soluong;
        $trasach->TienThueSach = $slsach[0]->soluong*5000;
        
        $trasach->TienBoiThuong = 0;
        $id_Sach = ChiTietMuonSach::where('id_MuonSach', $id_MuonSach)->get();
        foreach($id_Sach as $item){
            if($request[$item->id_Sach] == 'on'){
                $sach = Sach::find($item->id_Sach);
                $sach->SoLuong+=1;
                $sach->save();
            }else{
                $sach = Sach::find($item->id_Sach);
                $trasach->TienBoiThuong += $sach->TriGia;
            }
        }
        $trasach->TongTien = $trasach->TienTre + $trasach->TienBoiThuong + $trasach->TienThueSach;
        $trasach->save();

        $muonsach = MuonSach::find($id_MuonSach);
        $muonsach->TrangThai = 1;
        $muonsach->save();
        
        foreach($id_Sach as $item){
            if($request[$item->id_Sach] == 'on'){
                $ctts = new ChiTietTraSach;
                $ctts->id_Sach = $item->id_Sach;
                $ctts->id_TraSach = $trasach->id;
                $ctts->save();
            }
        }
        $thongtintrasach = TraSach::find($trasach->id);
        return redirect()->back()->with('thongtin', $thongtintrasach);
    }

    public function getDSTraSach(){
        $trasach = TraSach::orderBy('id', 'DESC')->get();
        return view('nhanvien.trasach.danhsach', ['trasach'=>$trasach]);
    }
}
