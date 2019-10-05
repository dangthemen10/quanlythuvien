<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qltv_Docgia extends Model
{
    public $timestamps = false;
    protected $table        = 'qltv_docgia';
    protected $fillable     = ['madocgia', 'tendocgia', 'chucvu', 'gioitinh', 'namsinh', 'diachi', 'sdt', 'email', 'quequan', 'anh', 'nganh_id'];
    protected $guarded      = ['id'];
    protected $primaryKey   = 'id';
    //Tạo quan hệ vs nganh
    public function nganh(){
        return $this->belongsTo('App\Qltv_Nganh', 'nganh_id', 'id');
    }
    //Tạo liên kết vs muonsach
    public function muonsach(){
        return $this->hasMany('App\Qltv_Muonsach', 'docgia_id', 'id'); //Một đọc giả có thể muợn nhiều sách
    }
}
