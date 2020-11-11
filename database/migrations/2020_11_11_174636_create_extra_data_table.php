<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtraDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_data', function (Blueprint $table) {
            $table->id();
            $table->uuid("uuid");
            $table->string("show_name");
            $table->string("indo_title")->nullable();
            $table->string("eng_title")->nullable();
            $table->text("indo_body");
            $table->text("eng_body");
            $table->string("used_for");
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
        Schema::dropIfExists('extra_data');
    }
}
