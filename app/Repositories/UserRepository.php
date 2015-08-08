<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Contracts\UserInterface;
use DB;

class UserRepository extends BaseRepository implements UserInterface
{
    protected $modelName = 'App\User';

    /**
     * Get users by type
     *
     * @param int | supplier reseller
     */

    public function allByType($type)
    {
        $instance = $this->getNewInstance();
        return $instance->whereType($type)->get();
    }


    public function myResellers($type, $userid)
    {
    	$instance = $this->getNewInstance();
        return DB::table('users')
        			->where('type', $type)
        			->join('supplier_reseller', function($join) use ($userid)
				        {
				            $join->on('supplier_reseller.reseller_id', '=', 'users.id')
				                 ->where('supplier_reseller.supplier_id', '=', $userid);
				        })
        			->get();
    }

    public function mySuppliers($type, $userid)
    {
    	$instance = $this->getNewInstance();
        return DB::table('users')
        			->where('type', $type)
        			->join('supplier_reseller', function($join) use ($userid)
				        {
				            $join->on('supplier_reseller.supplier_id', '=', 'users.id')
				                 ->where('supplier_reseller.reseller_id', '=', $userid);
				        })
        			->get();
    }

}