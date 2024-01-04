<?php

namespace App\Http\Controllers;

use App\Models\ClientModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\support\Facades\Hash;

class ClientController extends Controller
{
    //MENAMBAH DATA
    public function addClient(Request $req){
        $validator = Validator::make($req->all(),[
            'nama'=>'required',
            'telp'=>'required'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson());
        }

        $save = ClientModel::create([
            'nama' => $req->get('nama'),
            'telp' => $req->get('telp')
        ]);
        if($save){
            return response()->json(['status'=>true, 'message'=>'Suskes menambah data']);
        }else{
            return response()->json(['status'=>false, 'message'=>'Gagal menambah data']);
        }
    }

    //MENGUBAH DATA
    public function updateClient(Request $req, $id){
        $validator = Validator::make($req->all(),[
            'nama'=>'required',
            'telp'=>'required'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson());
        }

        $ubah=ClientModel::where('id',$id)->update([
            'nama' => $req->get('nama'),
            'telp' => $req->get('telp')
        ]);
        if($ubah){
            return response()->json(['status'=>true, 'message'=>'Suskes mengubah data']);
        }else{
            return response()->json(['status'=>false, 'message'=>'Gagal mengubah data']);
        }
    }

    //MENGHAPUS DATA
    public function deleteClient($id){
        $hapus=siswaModel::where('id',$id)->delete();
        if($hapus){
            return response()->json(['status'=>true, 'message'=>'Suskes menghapus data']);
        }else{
            return response()->json(['status'=>true, 'message'=>'Gagal menghapus data']);
        }
    }

    //MENAMPILKAN DATA
    public function getClient(){
        $dt_client=ClientModel::get();
        return response()->json($dt_client);
    }
}
