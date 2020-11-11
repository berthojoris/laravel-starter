<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageTabContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_tab_contents', function (Blueprint $table) {
            $table->id();
            $table->integer("page_content_id");
            $table->uuid("tab_uuid");
            $table->string("indo_tab_title");
            $table->string("eng_tab_title");
            $table->text("indo_tab_desc")->nullable();
            $table->text("eng_tab_desc")->nullable();
            $table->integer("tab_level")->default(1);
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
        Schema::dropIfExists('page_tab_contents');
    }
}
