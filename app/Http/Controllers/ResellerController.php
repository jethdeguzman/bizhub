<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository as User;
use Illuminate\Contracts\Auth\Guard;
use App\Repositories\SupplierResellerRepository as SupplierReseller;

class ResellerController extends Controller
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
     * Listing of my suppliers
     * @return Response
     */
    public function index()
    {
        // Supplier type = 1
        $this->userid = 35;
        $suppliers = $this->user->getMySuppliers(1, $this->userid);
        dd($suppliers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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
