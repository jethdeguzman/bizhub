<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\ProductsRepository as Products;
use App\Repositories\UserRepository as User;
use Illuminate\Contracts\Auth\Guard;
use DB;

class ProductsController extends Controller
{
    protected $products;
    protected $auth;

    public function __construct(Products $products, Guard $auth, User $user)
    {
        $this->products = $products;
        $this->auth = $auth;
        $this->userid = $this->auth->id();
        $this->user = $user;

        $user = $this->user->find($this->userid);
        $this->user_type = $user->type;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if ($this->user_type == 1) {
            // Supplier
            $products = $this->products->findBy('user_id', $this->userid);
        } else if ($this->user_type == 2) {
            // Reseller
            // later
        }

        dd($products);
           
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
        if ($this->user_type == 1) {
            // Supplier
            return $this->products->store(array(
                'name' => $request->get('name'),
                'reference_code' => $request->get('reference_code'),
                'description' => $request->get('description'),
                'image' => $request->get('image'),
                'suggested_retail_price' => $request->get('suggested_retail_price'),
                'reseller_price' => $request->get('reseller_price'),
                'user_id' => $this->userid
                ));

        } else if ($this->user_type == 2) {
            // Reseller
            
        }
        
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
