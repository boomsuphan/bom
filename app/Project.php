<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
     /*ประกาศตาราง --Ohm*/
        protected $table = 'project';

    /**
     * The database primary key value.
     *
     * @var string
     */
    /*ประกาศคีย์ --Ohm*/
        protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
     /**ประกาสคอลัม */
        protected $fillable = ['project_name', 'create_at', 'success_at', 'number_of_machines', 'support', 'Customer', 'sale', 'project_status'];

     /**ประกาสฟังก์ชั่นความสัมพันธ์ 1 ต่อ m --Ohm*/
        public function Bom()
        {
            return $this->hasMany('App\Bom', 'project_id');
        }

     /**ประกาสฟังก์ชั่นความสัมพันธ์ 1 ต่อ m --Ohm*/
        public function user()
        {
            return $this->belongsTo('App\users', 'support');
        }

     /**ประกาสฟังก์ชั่น SQL ให้เพิ่มข้อมูล BOM ใหม่จากข้อมูลเดิม ใช้วิธีจากการเลือก project_id และ เพิ่มข้อมูลการตัวล่าสุดคือ $last --Ohm*/
        public static function clone_project($project_id,$last)
        {	
            $sql = "INSERT INTO bom2  (module,project_id)
            SELECT module,$last FROM bom2
            WHERE project_id=$project_id";
            return DB::select($sql , []);
        }

    /**ประกาสฟังก์ชั่น SQL ให้เพิ่มข้อมูล BomDetail โดยเลือกแค่ Vision --Ohm*/
        public static function clone_bomDetail($project_id,$boms)
        {	
            $sql = "INSERT INTO bomdetail  (supplier,part_no,description,qty,in_stock,user_id,bom_id,part_id,pirce,bom_name)
                    SELECT supplier,part_no,description,qty,in_stock,user_id,$boms,part_id,pirce,bom_name FROM bomdetail
                    INNER JOIN bom2 ON bomdetail.bom_id=bom2.id
                    WHERE bom2.project_id = $project_id AND bomdetail.bom_name = 'Vision' ";
            return DB::select($sql , []);
        }
    /**ประกาสฟังก์ชั่น SQL ให้เพิ่มข้อมูล BomDetail โดยเลือกแค่ Vision --Ohm*/
        public static function clone_bomDetailMechanical($project_id,$boms)
        {	
            $sql = "INSERT INTO bomdetail  (supplier,part_no,description,qty,in_stock,user_id,bom_id,part_id,pirce,bom_name)
                    SELECT supplier,part_no,description,qty,in_stock,user_id,$boms,part_id,pirce,bom_name FROM bomdetail
                    INNER JOIN bom2 ON bomdetail.bom_id=bom2.id
                    WHERE bom2.project_id = $project_id AND bomdetail.bom_name = 'Mechanical' ";
            return DB::select($sql , []);
        }
    /**ประกาสฟังก์ชั่น SQL ให้เพิ่มข้อมูล BomDetail โดยเลือกแค่ Vision --Ohm*/
        public static function clone_bomDetailElectrical($project_id,$boms)
        {	
            $sql = "INSERT INTO bomdetail  (supplier,part_no,description,qty,in_stock,user_id,bom_id,part_id,pirce,bom_name)
                    SELECT supplier,part_no,description,qty,in_stock,user_id,$boms,part_id,pirce,bom_name FROM bomdetail
                    INNER JOIN bom2 ON bomdetail.bom_id=bom2.id
                    WHERE bom2.project_id = $project_id AND bomdetail.bom_name = 'Electrical' ";
            return DB::select($sql , []);
        }
}
 