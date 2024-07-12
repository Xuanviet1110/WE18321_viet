<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //  function showUser(){
    //     $users = [
    //         [
    //             'id'=> '1',
    //             'name' => 'John'
    //         ],
    //         [
    //             'id'=> '2',
    //             'name' => 'Joee'
    //         ]
    //         ];
    //         // echo '<pre>';
    //         // print_r($users);
    //         // die();
    //     return view('list-user')->with([
    //         'users' => $users
    //     ]);
    // }

    // Lấy danh sách toàn bộ user
    // $listUsers = DB::table('users')->get();
    // dd ($listUsers);

    // Lấy thông tin user có id = 4
    // $result = DB::table('users')->where('id','=','4')->first();
    // $result = DB::table('users')->find('4'); // Chỉ dùng với id
    // dd($result);

    // Lấy thuộc tính name của user có id = 16
    // $result = DB::table('users')->where('id', '=','16')->value('name');

    // Lấy danh sách idUser của phòng ban ' Ban giám hiệu'
    // $idPhongBan = DB::table('phongban')
    // ->where('ten_donvi', 'like','%Ban giám hiệu%')
    // ->pluck('id');
    // $result = DB::table('users')->where('phongban_id', $idPhongBan)->pluck('id');

    // Tìm user có độ tuổi lớn nhất trong công ty
    // $result = DB::table('users')
    // ->where('tuoi', DB::table('users')->min('tuoi'))
    // ->get();

    // Đếm xem phong ban Ban giám hiệu có bao nhiêu user
    // $idPhongBan = DB::table('phongban')
    // ->where('ten_donvi', 'like','%Ban giám hiệu%')
    // ->pluck('id');
    // $result = DB::table('users')
    // ->where('phongban_id', $idPhongBan)
    // ->count('id');

    // Lấy danh sách tuổi của user
    // $result = DB::table('users')->distinct()
    // ->pluck('tuoi');

    // Tìm danh sách user có tên 'Khải' hoặc có tên 'Thanh'
    // $result = DB::table('users')
    // ->where('name','like', '%Khải')
    // ->orWhere('name','like', '%Thanh')
    // ->get();

    // Lấy danh sách user ở phòng ban 'Ban đào tạo'
    // $idPhongBan = DB::table('phongban')
    // ->where('ten_donvi', 'like','%Ban đào tạo%')
    // ->value('id');
    // $result = DB::table('users')
    // ->where('phongban_id', $idPhongBan)
    // ->select('id', 'name','email')
    // ->get();

    // Lấy danh sách user có tuổi lớn hơn hoặc bằng 30, danh sách sắp xếp tăng dần
    // $result = DB::table('users')
    // ->where('tuoi', '>=', '30')
    // ->select('id', 'name','email')
    // ->orderBy('tuoi','asc')
    // ->get();

    //Lấy danh sách 10 user sắp xếp giảm dần độ tuổi, bỏ qua 5 user đầu tiên
    // $result = DB::table('users')
    // ->select('id', 'name','email')
    // ->orderBy('tuoi','desc')
    // ->offset(5)
    // ->limit(10)
    // ->get();

    // Thêm một user mới vào công ty
// $data = [
    //     'name' => 'Nguyễn Văn A',
    //     'email'=> 'abcd@gmail.com',
    //     'phongban_id' => '1',
    //     'songaynghi' => '0',
    //     'tuoi' => '18',
    //     'created_at' => Carbon::now(),
    //     'updated_at' => Carbon::now(),
    // ];
    // DB ::table('users')->insert($data);

    //Thêm chữ 'PĐT' sau tên tất cả user ở phòng ban 'Ban đào tạo'
//     $idPhongBan = DB::table('phongban')
//     ->where('ten_donvi', 'like','%Ban đào tạo%')
//     ->value('id');
//     $result = DB::table('users')
//     ->where('phongban_id', $idPhongBan)
//     ->select('id', 'name','email')
//     ->get();
//     foreach($result as $value) {
//             DB::table('users')->where('id', $value->id)->update([
//                 'name' => $value->name . 'PĐT'
//             ]);
//         }

//     // 
//     DB:: table('users')->where('songaynghi','>',15)->delete()  ;      
//     // dd($result);


//     function getUser($id, $name = ''){
//         echo $id; 
//         echo $name;
//     }

//     function updateUser(Request $request){
//         echo $request->id;
//     }
// }
public function listUsers(){
    $listUsers = DB::table('users')
    ->join('phongban','phongban.id','=','users.phongban_id')
    ->select('users.id','users.name','users.email','users.phongban_id','phongban.ten_donvi')
    ->get();
    return view('users/listUsers')->with([
        'listUsers' => $listUsers
    ]);
}

public function addUsers(){
    $phongban = DB::table('phongban')->select('id','ten_donvi')->get();
    return view('users/addUsers')->with([
        'phongban' => $phongban
    ]);
    
}
public function addPostUsers(request $req){
$data= [
    'name' =>$req->nameUser,
    'email' =>$req->emailUser,
    'phongban_id' =>$req->phongbanUser,
    'tuoi' =>$req->tuoiUser,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
];
      DB::table('users')->insert($data);
      return redirect()->route('users.listUsers');  
}
public function deteleUser($idUser) {
    
}
}