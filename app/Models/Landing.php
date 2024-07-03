<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class State
 *
 * @property $id
 * @property $url_dashboardå
 * @property $url_instalador
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Landing extends Model
{

	protected $perPage = 20;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = ['url_dashboard', 'url_instalador'];
}
