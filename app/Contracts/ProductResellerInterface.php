<?php

namespace App\Contracts;

use App\Contracts\BaseInterface;

interface ProductResellerInterface extends BaseInterface{
	
	public function getProducts($userid);
}