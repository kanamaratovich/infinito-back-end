 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('url_key')->nullable();
            $table->boolean('new')->nullable();
            $table->boolean('featured')->nullable();
            $table->boolean('status')->nullable();
            $table->string('thumbnail')->nullable();

            $table->decimal('price', 12, 4)->nullable();
            $table->decimal('cost', 12, 4)->nullable();
            $table->decimal('special_price', 12, 4)->nullable();
            $table->date('special_price_from')->nullable();
            $table->date('special_price_to')->nullable();

            $table->decimal('weight', 12, 4)->nullable();
            $table->integer('color')->nullable();
            $table->string('color_label')->nullable();
            $table->integer('size')->nullable();
            $table->integer('size_label')->nullable();

            $table->string('locale')->nullable();
            $table->string('channel')->nullable();


            $table->string('sku')->unique();
            $table->string('type');
            $table->timestamps();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('attribute_family_id')->nullable();
            $table->foreign('attribute_family_id')->references('id')->on('attribute_families')->onDelete('restrict');
            
        });
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('products')->onDelete('cascade');
        });
        Schema::create('product_relations', function (Blueprint $table) {
            $table->integer('parent_id')->unsigned();
            $table->integer('child_id')->unsigned();
            $table->foreign('parent_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('child_id')->references('id')->on('products')->onDelete('cascade');
        });

        Schema::create('product_super_attributes', function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->integer('attribute_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('product_relations');
        
        Schema::dropIfExists('product_super_attributes');

        Schema::dropIfExists('products');
    }
}
