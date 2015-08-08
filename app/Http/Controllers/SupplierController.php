<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository as User;
use Illuminate\Contracts\Auth\Guard;

class SupplierController extends Controller
{

    protected $auth;
    protected $user;

    public function __construct(Guard $auth, User $user)
    {
        $this->auth = $auth;
        $this->user = $user;
    }

     /**
     * Display a listing of the resource.
     * Lists of my resellers
     *
     * @return Response
     */
    public function index()
    {
        $id = $this->auth->id();
        // Supplier type = 2
        $resellers = $this->user->myResellers('2', $id);
        dd($resellers);
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
        dd($resellers);
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
