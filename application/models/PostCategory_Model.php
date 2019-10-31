<?php
/**
 * Created by IntelliJ IDEA.
 * User: serkan.erdinc
 * Date: 29.10.2019
 * Time: 20:04
 */

use \Illuminate\Database\Eloquent\Model as Eloquent;

class PostCategoryModel extends Eloquent {

    protected $table = "PostCategory";
    public $timestamps = false;
    public $appends = [];
    public $fillable = [];

}