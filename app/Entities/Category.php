<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Category.
 *
 * @package namespace App\Entities;
 */
class Category extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name'];
    protected $hidden =['pivot'];
    public $timestamps = false ;

    public function Products(){
       return $this->belongsToMany('App\Entities\Product','product_category','category_id','product_id');
    }


}
