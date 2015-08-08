<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Contracts\SupplierResellerInterface;
use DB;

class SupplierResellerRepository extends BaseRepository implements SupplierResellerInterface
{
    protected $modelName = 'App\SupplierReseller';
}