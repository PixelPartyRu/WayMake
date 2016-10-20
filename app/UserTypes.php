<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTypes extends Model
{


	protected $table = 'user_types';
	protected $fillable = ['id','user_type'];

		public static function User(){

			return $this->hasMany('app\User');
		}

    
}
