<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Contracts\ProductResellerInterface;
use DB;

class ProductResellerRepository extends BaseRepository implements ProductResellerInterface
{
    protected $modelName = 'App\ProductReseller';
}