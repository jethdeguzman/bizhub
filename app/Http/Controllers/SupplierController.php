<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository as UserRepository;
use App\Repositories\SupplierResellerRepository as SupplierResellerRepository;
use Illuminate\Contracts\Auth\Guard;

class SupplierController extends Controller
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
     * Lists of my resellers
     *
     * @return Response
     */
    public function index()
    {
        $resellers = $this->user->getMyResellers($this->userid);
        return view('resellers.my-resellers', ['resellers' => $resellers]);  
    }

    /**
     * Lists of all available resellers
     *
     * @param
     * @return Response
     */
    public function all()
    {
        // Supplier type = 2
        $resellers = $this->user->allByType('2');
        return view('resellers.all', ['resellers' => $resellers]); 
    }

    public function hire($reseller_id)
    {
        $this->supplierReseller->store(array(
            'supplier_id' => $this->userid, 
            'reseller_id' => $reseller_id
            ));

        return redirect('/resellers');
    }

}
