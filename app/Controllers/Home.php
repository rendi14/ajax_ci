<?php

namespace App\Controllers;

use App\Models\User;
use Config\Services;
use Config\Database;
use Hermawan\DataTables\DataTable;

class Home extends BaseController
{
    protected $db;
    function __construct()
    {
        $this->db = Database::connect();
    }

    public function index()
    {
        if($this->request->isAJAX()) {
            return $this->loadAjax();
        }

        return view('users');
    }

    protected function loadAjax()
    {
        $users = $this->db->table('master_user')
                 ->select('master_user.id, nama, nik, alamat, master_user.status, kewarganegaraan, code_negara, nama_negara')
                 ->join('kewarganegaraan', 'kewarganegaraan.id_kewarganegaraan = master_user.kewarganegaraan', 'left')
                 ->orderBy('kewarganegaraan');

        return DataTable::of($users)
                ->filter(function ($builder, $request) {
                    if($request->search['value']) {
                        $builder->orWhere('nama_negara', $request->search['value']);
                    }
                })
               ->addNumbering('nomor')
               ->edit('status', function($user) {
                    return ($user->status == 1) ? '<span class="text-success">Active</span>' : '<span class="text-danger">In Active</span>';
               })->add('grouped', function($user) {
                    return $user->code_negara .' '. $user->nama_negara;
               })->add('action', function($user) {
                    return '<button class="btn btn-primary">Edit</button>';
               })->toJson(true);
    }

    // public function ajax_list()
    // {
    //     if ($this->request->isAJAX()) {
    //         $request = Services::request();
    //         $User = new User($request);

    //         if ($request->getMethod(true) == 'POST') {
    //             $lists = $User->get_datatables();
    //             $data = [];
    //             $no = $request->getPost("start");
    //             foreach ($lists as $list) {
    //                 $tomboledit = "<button type=\"button\" class=\"btn btn-primary\" onclick=\"editData(" . $list['id'] . ")\"><i class=\"bx bx-edit\"></i>Edit</button>";
    //                 $no++;
    //                 $row = [];
    //                 $row[] = $no;
    //                 $row[] = $list['nama'];
    //                 $row[] = $list['nik'];
    //                 $row[] = $list['alamat'];
    //                 $row[] = '<span style="color: ' . ($list['status'] == 'active' ? 'green' : ($list['status'] == 'inactive' ? 'red' : ($list['status'] == 3 ? 'yellow' : 'black'))) . ';">' . $list['status'] . '</span>';
    //                 $row[] = $list['nama_negara'];
    //                 $row[] = $tomboledit;
    //                 $data[] = $row;
    //             }
    //             $output = [
    //                 "draw" => $request->getPost('draw'),
    //                 "recordsTotal" => $User->count_all(),
    //                 "recordsFiltered" => $User->count_filtered(),
    //                 "data" => $data
    //             ];
    //             echo json_encode($output);
    //         }
    //     } else {
    //         throw new \CodeIgniter\Exceptions\PageNotFoundException();
    //     }
    // }

    // public function list()
    // {
    //     $db      = \Config\Database::connect();
    //     $builder = $db->table('kewarganegaraan');
    //     $query = $builder->get()->getResult();
    //     $array = array();
    //     foreach($query as $que)
    //     {
    //         $cols =  $db->table('master_user')->where('kewarganegaraan =', $que->id_kewarganegaraan);
    //         $querys = $cols->get()->getResult();
    //         // $arraya = array();
    //         foreach($querys as $q){
    //             $colss =
    //                 '<td>'. $q->nama .'</td>'.
    //                 '<td>'. $q->nik .'</td>';

    //             $arraya[] = $colss;    
    //         }

    //         $tr = 
    //         '<tr>'. 
    //         '<td colspan='. '7'.' style='. 'text-align:left;background-color:#80808036' .'>'. $que->code_negara. ' ' . $que->nama_negara .'<td>' .
    //         '<tr>'.
    //            json_encode($arraya).
    //         '</tr>'.
    //         '</tr>'; 
    //         $array[] = $tr;
    //     }
    //     echo json_encode($array);
    // }
}
