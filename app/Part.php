<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{


  /**โมเดลนี้ไม้ได้ใช้แล้ว */

  
   /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'part';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['supplier', 'part_no', 'description', 'pirce', 'position'];

    public function BomDetail(){
      return $this->hasMany('App\BomDetail','part_id');
  }
}
