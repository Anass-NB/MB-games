<?php

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
    Schema::create('games', function (Blueprint $table) {
        $table->id();
        $table->string("title");
        $table->string("description");
<<<<<<< HEAD
        $table->bigInteger("category_id")->unsigned();
        $table->string("url");
        $table->string("image");
=======
        $table->string("url");
        $table->string("image");
        $table->bigInteger("category_id")->unsigned();
>>>>>>> ff8ce14b1ec74eb48a9206c24d29c983a9e2b1e6
        $table->foreign("category_id")->references("id")->on("categories");
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
      Schema::dropIfExists('games');
  }
};
