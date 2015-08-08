<?php

namespace App\Contracts;

use App\Contracts\BaseInterface;

interface UserInterface extends BaseInterface{

	public function allByType($type);
	public function getMyResellers($userid);
	public function getMySuppliers($userid);

}