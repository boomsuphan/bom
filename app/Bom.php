<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bom extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */

  /*ประกาศตาราง --Ohm*/
  protected $table = 'bom2';

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
  protected $fillable = ['module', 'bomsuccess_at', 'bom_status', 'project_id'];

   /**ประกาสฟังก์ชั่นความสัมพันธ์ m ต่อ 1 --Ohm*/
  public function Project()
  {
    return $this->belongsTo('App\Project', 'project_id');
  }
   /**ประกาสฟังก์ชั่นความสัมพันธ์ 1 ต่อ m --Ohm*/
  public function BomDetail()
  {
    return $this->hasMany('App\BomDetail', 'bom_id')->orderBy('supplier');
  }
}
