<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use App\Add;
use App\User;

class Add extends Model
{
	use Sortable;
	
    protected $fillable = [
		'post_date',
		'title',
		'description',
		'name_id'
		];
	
	public $sortable = [
		'id',
		'post_date',
		'title',
		'description',
		'name_id',
		'created_at',
		'updated_at'
		];
	
	
	protected $table = 'adds';
	
	public function username()
	{
		return $this->belongsTo(App\User);
//		return $this->belongsTo('App\User', 'name_id');
	}
}
