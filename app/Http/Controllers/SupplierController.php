<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository as User;
use Illuminate\Contracts\Auth\Guard;
use App\Repositories\SupplierResellerRepository as SupplierReseller;

class SupplierController extends Controller
{

    protected $auth;
    protected $user;
    protected $supplierReseller;

    public function __construct(Guard $auth, User $user, SupplierReseller $supplierReseller)
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
        return view('suppliers.my-suppliers', ['resellers' => $resellers]);  
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
        return view('suppliers.all', ['resellers' => $resellers]); 
    }

    public function hire($reseller_id)
    {
        return $this->supplierReseller->store(array(
            'supplier_id' => $this->userid, 
            'reseller_id' => $reseller_id
            ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
