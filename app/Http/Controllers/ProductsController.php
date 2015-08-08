<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\ProductsRepository as productRepository;
use App\Repositories\ProductResellerRepository as ProductReseller;
use App\Repositories\UserRepository as User;
use App\Repositories\SupplierResellerRepository as SupplierResellerRepository;
use Illuminate\Contracts\Auth\Guard;
use DB;
use App\Products as Product;
use Auth;


class ProductsController extends Controller
{
    protected $productRepository;
    protected $auth;

    public function __construct(productRepository $productRepository, Guard $auth, User $user, ProductReseller $productReseller)
    {
        $this->productRepository = $productRepository;
        $this->auth = $auth;
        $this->userid = $this->auth->id();
        $this->user = $user;
        $this->productReseller = $productReseller;

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
           $products= $this->productRepository->findBy('user_id', $this->userid);
        } else if ($this->user_type == 2) {
            // Reseller
           $products= $this->productReseller->getProducts($this->userid);
        }

        return view('products.reseller-add', ['products' => $products]);
           
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
    public function store(Request $request, SupplierResellerRepository $supplierResellerRepository)
    {
        if ($this->user_type == 1) {
            // Supplier
            return $this->productRepository->store(array(
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
            // Add products to the reseller
            /*$this->productReseller->store(array(
                'reseller_id' => $this->userid,
                'product_id' => $request->get('product_id')
                ));*/
            
            $suppliers = $this->productRepository->find($request->get('product_id'));
            $supplier_id = $suppliers->supplier_id;

            // Add the relationship if not yet exists
            if ($supplierResellerRepository->exists($supplier_id, $this->userid) < 1) {
                $supplierResellerRepository->store(array(
                        'supplier_id' => $supplier_id, 
                        'reseller_id' => $this->userid
                        ));
            }
            
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Product $product)
    {
        return view('products/supplier-show', ['product' => $product]);
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

    public function addProduct(Product $product){
        $reseller = Auth::user();

        $this->productReseller->store(array(
        'reseller_id' => $reseller->id,
        'product_id' => $product->id
        ));

        $this->supplierReseller->store([
                'reseller_id' => $reseller->id,
                'supplier_id' => $supplier->id,
        ]);


        return 'New Product has been added to your store items';


    }
}
