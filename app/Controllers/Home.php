<?php

namespace App\Controllers;

use App\Models\User;
use Config\Services;

class Home extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('kewarganegaraan');
        $query['data'] = $builder->get()->getResult();
        return view('user', $query);
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
