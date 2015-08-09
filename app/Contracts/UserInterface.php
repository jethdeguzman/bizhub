<?php

namespace App\Contracts;

use App\Contracts\BaseInterface;

interface UserInterface extends BaseInterface{

	public function suppliersByType($type);
	public function resellersByType($type);
	public function getMyResellers($userid);
	public function getMySuppliers($userid);

}