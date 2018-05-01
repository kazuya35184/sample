<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Memo extends Model{

    use SoftDeletes;

    protected $table = 'memos';

    public $timestamps = false;

    protected $guarded = array('id');

    public static $rules = array('title' => 'required','memo' => 'required');

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */

    protected $dates = ['deleted_at'];

}
