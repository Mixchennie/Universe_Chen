<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('name', 255);
            $table->string('thumbnail', 255)->nullable()->default("https://placehold.co/500x600/png");
            $table->text('description')->nullable();
            $table->unsignedDouble('price',12,2)->default(0.0);
            $table->unsignedInteger('rating')->default(0);
            $table->unsignedInteger('favorites')->default(0);
            $table->unsignedInteger('quantity')->default(0);
            $table->unsignedInteger('quantity_sold')->default(0);
            $table->string('size', 50);
            $table->string('color', 50);
            $table->unsignedDouble('discount_price',4,2)->nullable()->default(0.0);
            $table->dateTime("start_date")->nullable()->default(null);
            $table->dateTime("end_date")->nullable()->default(null);
            $table->unsignedTinyInteger('category_id')->nullable()->default(null);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('set null')
                    ->onUpdate('CASCADE');
 /// Hoặc 'CASCADE' tùy thuộc vào yêu cầu của bạn
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
