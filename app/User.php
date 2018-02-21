<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Kyslik\ColumnSortable\Sortable;
use App\Add;

class User extends Authenticatable
{
    use Notifiable;
	use Sortable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
	public $sortable = [
		'id',
        'name',
        'created_at',
        'updated_at'
	];
	
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function adds()
	{
		return $this->hasMany(Add::class);
//		return $this->hasMany('App\Add');
	}
}
