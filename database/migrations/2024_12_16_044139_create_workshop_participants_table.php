<?php

// database/migrations/xxxx_xx_xx_create_workshop_participants_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkshopParticipantsTable extends Migration
{
    public function up()
    {
        Schema::create('workshop_participants', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peserta');
            $table->string('email');
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('workshop_participants');
    }
};
