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
    {Schema::create("products",function(Blueprint $table)
        {$table->id();
            $table->unsignedBigInteger("category_id");
            $table->string("name");
            $table->integer("price");
            $table->string("slug");
            $table->foreign("category_id")->references("id") ->on("category")->onDelete("cascade");
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
        Schema::dropIfExists("products");
    }
};
