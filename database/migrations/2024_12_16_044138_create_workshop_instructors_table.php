<?php

// database/migrations/xxxx_xx_xx_create_workshop_instructors_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkshopInstructorsTable extends Migration
{
    public function up()
    {
        Schema::create('workshop_instructors', function (Blueprint $table) {
            $table->id();
            $table->string('nama_instruktur');
            $table->text('bio')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('workshop_instructors');
    }
};
