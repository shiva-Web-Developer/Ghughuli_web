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
        Schema::create('sitecontents', function (Blueprint $table) {
            $table->id();
            $table->string('con_type');
            $table->string('heading');
            $table->string('image');
            $table->string('main_cat');
            $table->string('sub_cat');
            $table->string('child_cat');
            $table->string('content');
            $table->string('isDeleted');
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
        Schema::dropIfExists('sitecontents');
    }
};
