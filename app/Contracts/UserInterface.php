<?php

namespace App\Contracts;

use App\Contracts\BaseInterface;

interface UserInterface extends BaseInterface{

	public function allByType($type);
	public function myResellers($type, $userid);
	public function mySuppliers($type, $userid);

}