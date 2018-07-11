<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5ab38aac85efaProductProductTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('product_product_tag')) {
            Schema::create('product_product_tag', function (Blueprint $table) {
                $table->integer('product_id')->unsigned()->nullable();
                $table->foreign('product_id', 'fk_p_134272_134271_produc_5ab38aac86031')->references('id')->on('products')->onDelete('cascade');
                $table->integer('product_tag_id')->unsigned()->nullable();
                $table->foreign('product_tag_id', 'fk_p_134271_134272_produc_5ab38aac860c8')->references('id')->on('product_tags')->onDelete('cascade');
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_product_tag');
    }
}
