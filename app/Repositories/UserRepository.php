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


    public function getMyResellers($userid)
    {
    	$instance = $this->getNewInstance();
        return DB::table('users')
        			->where('type', 2)
        			->join('supplier_reseller', function($join) use ($userid)
				        {
				            $join->on('supplier_reseller.reseller_id', '=', 'users.id')
				                 ->where('supplier_reseller.supplier_id', '=', $userid);
				        })
        			->get();
    }

    public function getMySuppliers($userid)
    {
    	$instance = $this->getNewInstance();
        return DB::table('users')
        			->where('type', 1)
        			->join('supplier_reseller', function($join) use ($userid)
				        {
				            $join->on('supplier_reseller.supplier_id', '=', 'users.id')
				                 ->where('supplier_reseller.reseller_id', '=', $userid);
				        })
        			->get();
    }

}