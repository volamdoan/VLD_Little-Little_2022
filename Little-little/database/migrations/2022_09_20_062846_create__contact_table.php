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
    {        Schema::create('contact', function (Blueprint $table) {
            $table->increments('id');
            $table->string('m_name', 255);
            $table->string('m_phone', 15);
            $table->string('m_email', 255);
            $table->string('m_title', 255);
            $table->text('m_content')->nullable();
            $table->text('m_reply')->nullable();
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
        Schema::dropIfExists('contact');
    }
};
