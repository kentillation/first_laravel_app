<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

class UsersController extends Controller
{

    //READING ALL RECORDS OF USERS
    public function users_list () {
        $users = UsersModel::all();
        return view('pages/Reports/users',['tbl_users'=>$users]);
    }

    public function print_users_list () {
        $users = UsersModel::all();
        return view('pages/Print/print-users_list',['tbl_users'=>$users]);
    }

    //EDITING SPECIFIC RECORD OF USER
    public function edit_user(Request $request, $id) {
        $users = UsersModel::find($id);
        $response = [
            'tbl_users' => $users
        ];
        return view('pages/Editables/user_update', $response);
    }

    //UPDATING SPECIFIC RECORD OF USER
    public function user_update (Request $request, $id) {
        $data = [
            'name' => $request->input()['name'],
            'fb_name' => $request->input()['fb_name'],
            'age' => $request->input()['age'],
            'address' => $request->input()['address'],
            'contact' => $request->input()['contact'],
            'email' => $request->input()['email'],
            'username' => $request->input()['username'],
            'password' => $request->input()['password']
        ];
        $updated_user = UsersModel::where('id', $id)->update($data);
        return redirect(route('users_list'))->with("success", "The information of (blank) has been updated successfully.");
    }

    //DELETING SPECIFIC RECORD OF USER
    public function remove_user($id) {
        $users = UsersModel::find($id);
        $users->delete();
        return redirect(route('users_list'))->with("success", "A user has been remove.");
    }

    public function live_search(Request $request)
    {/*
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '') {
                $data = DB::table('tbl_users')
                    ->where('name', 'like', '%'.$query.'%')
                    ->orWhere('fb_name', 'like', '%'.$query.'%')
                    ->orderBy('id', 'desc')
                    ->get();
                    
            } else {
                $data = DB::table('tbl_users')
                    ->orderBy('id', 'desc')
                    ->get();
            }
             
            $total_row = $data->count();
            if($total_row > 0){
                foreach($data as $row)
                {
                    $output .= '
                    <tr>
                        <td>'.$row->name.'</td>
                        <td>'.$row->address.'</td>
                        <td>'.$row->contact.'</td>
                        <td>'.$row->email.'</td>
                    </tr>
                    ';
                }
            } else {
                $output = '
                <tr>
                    <td align="center" colspan="5">No Record Found</td>
                </tr>
                ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );
            echo json_encode($data);
        }
    */}
}
