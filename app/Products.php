<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Products extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];



    public function supplier()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function obtained()
    {
        $user = Auth::user();
        return (boolean) ProductReseller::where('reseller_id', $user->id)
                                            ->where('product_id', $this->id)
                                            ->count();
    }
}
