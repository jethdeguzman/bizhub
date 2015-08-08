<?php

namespace App\Contracts;

use App\Contracts\BaseInterface;

interface UserInterface extends BaseInterface{

	public function allByType($type);
	public function getMyResellers($type, $userid);
	public function getMySuppliers($type, $userid);

}