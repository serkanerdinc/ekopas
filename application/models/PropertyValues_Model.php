<?php
/**
 * Created by IntelliJ IDEA.
 * User: serkan.erdinc
 * Date: 29.10.2019
 * Time: 20:04
 */

use \Illuminate\Database\Eloquent\Model as Eloquent;

class PropertyValuesModel extends Eloquent {

    protected $table = "PropertyValues";
    public $timestamps = false;
    public $appends = [];
    public $fillable = [];

}