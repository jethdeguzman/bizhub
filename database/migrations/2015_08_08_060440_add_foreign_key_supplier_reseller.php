<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeySupplierReseller extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('supplier_reseller', function (Blueprint $table) {
            $table->foreign('supplier_id')->references('id')->on('users');
            $table->foreign('reseller_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('supplier_reseller', function (Blueprint $table) {
            $table->dropForeign('supplier_reseller_supplier_id_foreign');
            $table->dropForeign('supplier_reseller_reseller_id_foreign');
        });
    }
}
