<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DataTables;

class AvRegistrations extends Model
{
    use HasFactory;
    protected $table = "av_registrations";
    protected $primary_key="id";
    protected $fillable=['created_at', 'updated_at', 'name', 'dob', 'tob', 'mobile', 'email', 'address', 'photo', 'fingerprint', 'name2', 'dob2', 'tob2', 'mobile2', 'email2', 'address2', 'name3', 'dob3', 'tob3', 'mobile3', 'email3', 'address3', 'name4', 'dob4', 'tob4', 'mobile4', 'email4', 'address4'];

    public static function getListData(){
        $data = AvRegistrations::select(['id','created_at', 'updated_at', 'name', 'dob', 'tob', 'mobile', 'email', 'address', 'photo', 'fingerprint'])->orderBy('id','desc');
       
        return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="'.url('getPdf/'.$row->id).'" class="edit btn btn-primary btn-sm">View</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
    }
}
