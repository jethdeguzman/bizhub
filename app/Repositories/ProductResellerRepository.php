<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Contracts\ProductResellerInterface;
use DB;

class ProductResellerRepository extends BaseRepository implements ProductResellerInterface
{
    protected $modelName = 'App\ProductReseller';

    public function getProducts($userid){

    	$instance = $this->getNewInstance();
        return $instance->where('reseller_id', $userid)
        				->join('products', 'products.id', '=', 'product_reseller.product_id')
        				->get();
    }
}