<?php
/**
 * Model genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Customer extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
   use Authenticatable, CanResetPassword;
    // use SoftDeletes;
    use EntrustUserTrait;
	
	protected $table = 'customers';

	protected $fillable = [ 
		'name','email','password',

	];
	
	protected $hidden = ['password',
        
    ];

	protected $guarded = [];

	protected $dates = ['deleted_at'];
}
