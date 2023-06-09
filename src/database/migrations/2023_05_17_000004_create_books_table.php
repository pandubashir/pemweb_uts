<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('teachername');
            $table->string('author');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
