<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Products::create([
	            'name' => 'Sleeveless Dress',
	            'reference_code' => 'P001',
	            'description' => 'Pink, SleevelessDress with Floral Designs',
	            'image' => '/assets/uploads/products/clothing-shop/dress1.jpg',
	            'suggested_retail_price' => '250.00',
	            'reseller_price' => '180.00',
	            'user_id' => '3'
	        ]);

        App\Products::create([
	            'name' => 'Blue Sheath Dress',
	            'reference_code' => 'P002',
	            'description' => 'Blue',
	            'image' => '/assets/uploads/products/clothing-shop/dress2.jpg',
	            'suggested_retail_price' => '250.00',
	            'reseller_price' => '180.00',
	            'user_id' => '3'
	        ]);

        App\Products::create([
	            'name' => 'Blue Polo',
	            'reference_code' => 'P003',
	            'description' => 'Blue, Polo Shirt',
	            'image' => '/assets/uploads/products/clothing-shop/dress3.jpg',
	            'suggested_retail_price' => '250.00',
	            'reseller_price' => '180.00',
	            'user_id' => '3'
	        ]);

        App\Products::create([
	            'name' => 'Red Dress',
	            'reference_code' => 'P004',
	            'description' => 'Red Dress with Ribbon',
	            'image' => '/assets/uploadsproducts/clothing-shop/dress4.jpg',
	            'suggested_retail_price' => '250.00',
	            'reseller_price' => '180.00',
	            'user_id' => '3'
	        ]);

        App\Products::create([
	            'name' => 'Red Boatneck Dress',
	            'reference_code' => 'P005',
	            'description' => 'Sleeveless Boatneck Dress',
	            'image' => '/assets/uploads/products/clothing-shop/dress5.jpg',
	            'suggested_retail_price' => '250.00',
	            'reseller_price' => '180.00',
	            'user_id' => '3'
	        ]);

        App\Products::create([
	            'name' => 'Backless Floral Dress',
	            'reference_code' => 'P006',
	            'description' => 'Backless, Floral, Dress',
	            'image' => '/assets/uploads/products/clothing-shop/dress6.jpg',
	            'suggested_retail_price' => '250.00',
	            'reseller_price' => '180.00',
	            'user_id' => '3'
	        ]);

        App\Products::create([
	            'name' => 'Sleeveless Dress',
	            'reference_code' => 'P007',
	            'description' => 'Sleeveless Floral Dress',
	            'image' => '/assets/uploads/products/clothing-shop/dress7.jpg',
	            'suggested_retail_price' => '250.00',
	            'reseller_price' => '180.00',
	            'user_id' => '3'
	        ]);

        App\Products::create([
	            'name' => 'Sleeveless Stripes Dress',
	            'reference_code' => 'P008',
	            'description' => 'Black n White',
	            'image' => '/assets/uploads/products/clothing-shop/dress8.jpg',
	            'suggested_retail_price' => '250.00',
	            'reseller_price' => '180.00',
	            'user_id' => '3'
	        ]);

        App\Products::create([
	            'name' => 'Pink Collar Shirt',
	            'reference_code' => 'P009',
	            'description' => 'Pink',
	            'image' => '/assets/uploads/products/clothing-shop/dress9.jpg',
	            'suggested_retail_price' => '250.00',
	            'reseller_price' => '180.00',
	            'user_id' => '3'
	        ]);

        App\Products::create([
	            'name' => 'Dark Blue FormalShirt',
	            'reference_code' => 'P0010',
	            'description' => 'Dark Blue',
	            'image' => '/assets/uploads/products/clothing-shop/dress10.jpg',
	            'suggested_retail_price' => '250.00',
	            'reseller_price' => '180.00',
	            'user_id' => '3'
	        ]);


        App\Products::create([
	            'name' => 'Men Casual Shoes',
	            'reference_code' => 'P0011',
	            'description' => 'Men Casual Shoes',
	            'image' => '/assets/uploads/products/cpoint/shoe1.jpg',
	            'suggested_retail_price' => '500.00',
	            'reseller_price' => '350.00',
	            'user_id' => '2'
	        ]);

        App\Products::create([
	            'name' => 'Women Casual Shoes',
	            'reference_code' => 'P0012',
	            'description' => 'Men Casual Shoes',
	            'image' => '/assets/uploads/products/cpoint/shoe2.jpg',
	            'suggested_retail_price' => '500.00',
	            'reseller_price' => '350.00',
	            'user_id' => '2'
	        ]);

        App\Products::create([
	            'name' => 'HighSchool Girl Black Shoes',
	            'reference_code' => 'P0013',
	            'description' => 'Men Casual Shoes',
	            'image' => '/assets/uploads/products/cpoint/shoe3.jpg',
	            'suggested_retail_price' => '500.00',
	            'reseller_price' => '350.00',
	            'user_id' => '2'
	        ]);

        App\Products::create([
	            'name' => 'Red Casual Shoes',
	            'reference_code' => 'P0014',
	            'description' => 'Red Casual Shoes, Women',
	            'image' => '/assets/uploads/products/cpoint/shoe4.jpg',
	            'suggested_retail_price' => '500.00',
	            'reseller_price' => '350.00',
	            'user_id' => '2'
	        ]);

        App\Products::create([
	            'name' => 'HighSchool Boy Black Shoes',
	            'reference_code' => 'P0015',
	            'description' => 'Men Black Shoes',
	            'image' => '/assets/uploads/products/cpoint/shoe5.jpg',
	            'suggested_retail_price' => '500.00',
	            'reseller_price' => '350.00',
	            'user_id' => '2'
	        ]);

        App\Products::create([
	            'name' => 'HighSchool Boy Black Shoes',
	            'reference_code' => 'P0016',
	            'description' => 'Men Black Shoes',
	            'image' => '/assets/uploads/products/cpoint/shoe6.jpg',
	            'suggested_retail_price' => '500.00',
	            'reseller_price' => '350.00',
	            'user_id' => '2'
	        ]);

        App\Products::create([
	            'name' => 'Casual Blue Shoes',
	            'reference_code' => 'P0017',
	            'description' => 'Casual Blue Shoes',
	            'image' => '/assets/uploads/products/cpoint/shoe7.jpg',
	            'suggested_retail_price' => '500.00',
	            'reseller_price' => '350.00',
	            'user_id' => '2'
	        ]);

        App\Products::create([
	            'name' => 'Pink Sandals',
	            'reference_code' => 'P0018',
	            'description' => 'Pink Sandals',
	            'image' => '/assets/uploads/products/cpoint/shoe8.jpg',
	            'suggested_retail_price' => '500.00',
	            'reseller_price' => '350.00',
	            'user_id' => '2'
	        ]);

        App\Products::create([
	            'name' => 'Brown Shoes',
	            'reference_code' => 'P0019',
	            'description' => 'Brown Shoes',
	            'image' => '/assets/uploads/products/cpoint/shoe9.jpg',
	            'suggested_retail_price' => '500.00',
	            'reseller_price' => '350.00',
	            'user_id' => '2'
	        ]);

        App\Products::create([
	            'name' => 'Brown Sandals',
	            'reference_code' => 'P0020',
	            'description' => 'Brown Sandals',
	            'image' => '/assets/uploads/products/cpoint/shoe10.jpg',
	            'suggested_retail_price' => '500.00',
	            'reseller_price' => '350.00',
	            'user_id' => '2'
	        ]);


        App\Products::create([
	            'name' => 'CALM',
	            'reference_code' => 'P0021',
	            'description' => 'Keep calm and do not worry',
	            'image' => '/assets/uploads/products/wearhisword/shirt1.jpg',
	            'suggested_retail_price' => '199.00',
	            'reseller_price' => '150.00',
	            'user_id' => '1'
	        ]);

        App\Products::create([
	            'name' => 'HOPE',
	            'reference_code' => 'P0022',
	            'description' => 'Faith Hope Love',
	            'image' => '/assets/uploads/products/wearhisword/shirt2.jpg',
	            'suggested_retail_price' => '199.00',
	            'reseller_price' => '150.00',
	            'user_id' => '1'
	        ]);

        App\Products::create([
	            'name' => 'STAND',
	            'reference_code' => 'P0023',
	            'description' => 'Stand upon the truth',
	            'image' => '/assets/uploads/products/wearhisword/shirt3.jpg',
	            'suggested_retail_price' => '199.00',
	            'reseller_price' => '150.00',
	            'user_id' => '1'
	        ]);

        App\Products::create([
	            'name' => 'TELLTHEWORLD',
	            'reference_code' => 'P0024',
	            'description' => 'Tell the world',
	            'image' => '/assets/uploads/products/wearhisword/shirt4.jpg',
	            'suggested_retail_price' => '199.00',
	            'reseller_price' => '150.00',
	            'user_id' => '1'
	        ]);

        App\Products::create([
	            'name' => 'TRANS',
	            'reference_code' => 'P0025',
	            'description' => 'Transformers',
	            'image' => '/assets/uploads/products/wearhisword/shirt5.jpg',
	            'suggested_retail_price' => '199.00',
	            'reseller_price' => '150.00',
	            'user_id' => '1'
	        ]);

        App\Products::create([
	            'name' => 'WOMEN',
	            'reference_code' => 'P0026',
	            'description' => 'Women',
	            'image' => '/assets/uploads/products/wearhisword/shirt6.jpg',
	            'suggested_retail_price' => '199.00',
	            'reseller_price' => '150.00',
	            'user_id' => '1'
	        ]);

        App\Products::create([
	            'name' => 'SAVIOUR',
	            'reference_code' => 'P0027',
	            'description' => 'Saviour',
	            'image' => '/assets/uploads/products/wearhisword/shirt7.jpg',
	            'suggested_retail_price' => '199.00',
	            'reseller_price' => '150.00',
	            'user_id' => '1'
	        ]);

        App\Products::create([
	            'name' => 'ICDAT',
	            'reference_code' => 'P0028',
	            'description' => 'I can do all things',
	            'image' => '/assets/uploads/products/wearhisword/shirt8.jpg',
	            'suggested_retail_price' => '199.00',
	            'reseller_price' => '150.00',
	            'user_id' => '1'
	        ]);

        App\Products::create([
	            'name' => 'JOHN',
	            'reference_code' => 'P0029',
	            'description' => 'John 3:16',
	            'image' => '/assets/uploads/products/wearhisword/shirt9.jpg',
	            'suggested_retail_price' => '199.00',
	            'reseller_price' => '150.00',
	            'user_id' => '1'
	        ]);

        App\Products::create([
	            'name' => 'LOVE',
	            'reference_code' => 'P0030',
	            'description' => 'Love',
	            'image' => '/assets/uploads/products/wearhisword/shirt10.jpg',
	            'suggested_retail_price' => '199.00',
	            'reseller_price' => '150.00',
	            'user_id' => '1'
	        ]);
    }
}
