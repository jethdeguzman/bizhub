<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use App\Repositories\UserRepository as UserRepository;
use App\Repositories\SupplierResellerRepository as SupplierResellerRepository;

class ResellerController extends Controller
{
    protected $auth;
    protected $user;
    protected $supplierReseller;

    public function __construct(Guard $auth, UserRepository $user, SupplierResellerRepository $supplierReseller)
    {
        $this->auth = $auth;
        $this->user = $user;
        $this->userid = $this->auth->id();
        $this->supplierReseller = $supplierReseller;
    }

    /**
     * Display a listing of the resource.
     * Listing of my suppliers
     * @return Response
     */
    public function index()
    {
        $suppliers = $this->user->getMySuppliers($this->userid);
        return view('suppliers.my-suppliers', ['suppliers' => $suppliers]);
    }

    public function all()
    {
        $suppliers = $this->user->allByType('1');
        return view('suppliers.all', ['suppliers' => $suppliers]); 
    }

    public function apply($supplier_id)
    {
        $this->supplierReseller->store(array(
            'supplier_id' => $supplier_id, 
            'reseller_id' => $this->userid
            ));
        return redirect('/suppliers');
    }

}
