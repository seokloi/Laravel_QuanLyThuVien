<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\TheLoai;
use App\Sach;
use App\MuonSach;
use App\ChiTietMuonSach;
use Illuminate\Http\Request;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function TrangChu(){
		$theloai = TheLoai::all();
		// $TopSach = ChiTietMuonSach::groupBy('id_Sach')
		// 			->selectRaw('id_Sach, count(*) as TongMuon')
		// 			->orderByDesc('TongMuon')
		// 			->take(8)
		// 			->get();
		$TopSach = array();
		$flag = DB::table('chitietmuonsach')
                     ->select(DB::raw('id_Sach, count(id_Sach) as TongMuon '))
					 ->groupBy('id_Sach')
					 ->orderByDesc('TongMuon')
					 ->take(8)
					 ->get();
		foreach($flag as $ts){
			array_push($TopSach, Sach::find($ts->id_Sach));
		}
		$SachMoi = Sach::orderByDesc('created_at')->take(8)->get(); 
		$active = 'trangchu';
		return view('user.index', ['theloai'=>$theloai , 'topsach'=>$TopSach, 'sachmoi'=>$SachMoi, 'active'=>$active]);
	}
	public function ThuVien(){
		$theloai = TheLoai::all();
		$active = 'thuvien';
		
		if(isset($_REQUEST['id_TheLoai'])){
            $sach = Sach::where('id_TheLoai', $_REQUEST['id_TheLoai'])->paginate(12);
            return view('user.shop-grid', ['theloai'=>$theloai , 'sach'=>$sach , 'active'=>$active]);
        }else{
            $sach = Sach::paginate(12);
            return view('user.shop-grid', ['theloai'=>$theloai , 'sach'=>$sach , 'active'=>$active]);
        }
	}
	public function Contact(){
		$active = 'contact';
		return view('user.contact', ['active'=>$active]);
	}
	public function ThongTin(){
		$active = 'thuvien';
		
		if(isset($_REQUEST['id_Sach'])){
            $sach = Sach::find($_REQUEST['id_Sach']);
			$theloai = TheLoai::find($sach->id_TheLoai);
            return view('user.shop-details', ['theloai'=>$theloai , 'sach'=>$sach , 'active'=>$active]);
        }else return 0;
	}
	public function Search(){
		$theloai = TheLoai::all();
		$active = 'thuvien';
		if(isset($_GET['search'])){
            $sach = Sach::where('TenSach', 'like', '%' . $_GET['search'] . '%')->paginate(6);
            return view('user.search', ['theloai'=>$theloai , 'sach'=>$sach, 'active'=>$active]);
        }else{
            $sach = Sach::paginate(6);
            return view('user.search', ['theloai'=>$theloai , 'sach'=>$sach, 'active'=>$active]);
        }
	}
	public function Login(){
		return view('user.login', ['active'=>'']);
	}
	public function PostLogin(Request $request){
		$this->validate($request,
		[
			'txtEmail'=>'required',
			'txtPassword'=>'required'
		],[
			'txtEmail.required'=>'Vui lòng nhập Email',
			'txtPassword.required'=>'Vui lòng nhập Password'
		]);

		if(Auth::attempt (['email'=>$request->txtEmail,'password'=>$request->txtPassword])){
			$user = Auth::user();
			if($user->Quyen == 0){
				return redirect('/');
			}else{
				return redirect('login')->with('thongbao', 'Bạn không có quyền đăng nhập');
			}
		}
		return redirect('login')->with('thongbao','Email hoặc mật khẩu không đúng. Vui lòng đăng nhập lại!');
	}
	public function Logout(){
		Auth::logout();
		return redirect('/')->with('thongbao','Đăng xuất thành công');
	}
	public function MuonSach($id_user){
		$theloai=Sach::all();
		$sach=Sach::all();
		$active='';
		$muonsach=MuonSach::where('id_user',$id_user)->get();
		$chitietmuonsach=ChiTietMuonSach::where('id_MuonSach',$id_user)->get();
		return view('user.shoping-cart',['theloai'=>$theloai , 'sach'=>$sach,'muonsach'=>$muonsach,'chitietmuonsach'=>$chitietmuonsach,'active'=>$active,]);
	}
}
