<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Product.
 *
 * @package namespace App\Entities;
 */
class Product extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name','description'];
    protected $hidden =['pivot'];
    public $timestamps = false ;

    public function Categories(){
       return $this->belongsToMany('App\Entities\Category','product_category','product_id','category_id');
    }

}
