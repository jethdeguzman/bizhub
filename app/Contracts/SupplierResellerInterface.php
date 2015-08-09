<?php

namespace App\Contracts;

use App\Contracts\BaseInterface;

interface SupplierResellerInterface extends BaseInterface{
	
	public function exists($supplier_id, $reseller_id);	
}