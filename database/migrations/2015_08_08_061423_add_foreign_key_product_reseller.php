<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyProductReseller extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_reseller', function (Blueprint $table) {
            $table->foreign('reseller_id')->references('id')->on('users');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_reseller', function (Blueprint $table) {
            $table->dropForeign('product_reseller_reseller_id_foreign');
            $table->dropForeign('product_reseller_product_id_foreign');
        });
    }
}
