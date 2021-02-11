<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class BomDetail extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  /*ประกาศตาราง --Ohm*/
  protected $table = 'bomdetail';

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
  protected $fillable = ['qty', 'remark', 'in_stock', 'user_id', 'bom_id', 'part_id', 'pirce','bom_name','supplier','part_no','description'];

  /**ประกาสฟังก์ชั่นความสัมพันธ์ m ต่อ 1 --Ohm*/
  public function Bom()
  {
    return $this->belongsTo('App\Bom', 'bom_id')->orderBy('supplier');
  }
  
  /**ประกาสฟังก์ชั่นความสัมพันธ์ m ต่อ 1 --Ohm*/
  public function Part()
  {
    return $this->belongsTo('App\Part', 'part_id');
  }
  
  /**ประกาสฟังก์ชั่นความสัมพันธ์ m ต่อ 1 --Ohm*/
  public function users()
  {
    return $this->belongsTo('App\users', 'user_id');
  }
 
}
