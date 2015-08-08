<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Contracts\SupplierResellerInterface;
use DB;

class SupplierResellerRepository extends BaseRepository implements SupplierResellerInterface
{
    protected $modelName = 'App\SupplierReseller';

    public function exists($supplier_id, $reseller_id)
    {
        $instance = $this->getNewInstance();
        return $instance->where('supplier_id', $supplier_id)
                        ->where('reseller_id', $reseller_id)
                        ->count();
    }
}