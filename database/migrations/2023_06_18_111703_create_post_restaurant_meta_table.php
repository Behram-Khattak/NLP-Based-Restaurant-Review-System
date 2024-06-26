<?php

use App\Models\Admin\PostRestaurant;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_restaurant_meta', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(PostRestaurant::class)
            ->constrained()->cascadeOnDelete();

            $table->string('meta_key');
            $table->string('meta_value', 500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_restaurant_meta');
    }
};
