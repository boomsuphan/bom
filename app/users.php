<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */


  /*ประกาศตาราง --Ohm*/
  protected $table = 'admin';
  
  
  
  /**
   * The database primary key value.
   *
   * @var string
   */

  /*ประกาศคีย์ --Ohm*/
  protected $primaryKey = 'id_user';
  


  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */

   /**ประกาสคอลัม --Ohm*/
  protected $fillable = ['Firstname', 'Lastname', 'Userlevel',];
  

  /**ประกาสฟังก์ชั่นความสัมพันธ์ 1 ต่อ m --Ohm*/
  public function BomDetail()
  {
    return $this->hasMany('App\BomDetail', 'user_id');
  }
  
  /**ประกาสฟังก์ชั่นความสัมพันธ์ 1 ต่อ m --Ohm*/
  public function Project()
  {
    return $this->hasMany('App\Project', 'support');
  }
}
