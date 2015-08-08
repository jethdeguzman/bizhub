<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Contracts\ProductsInterface;

class ProductsRepository extends BaseRepository implements ProductsInterface
{
   protected $modelName = 'App\Products';
}