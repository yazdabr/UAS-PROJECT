<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('workshops', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->date('tanggal');
        $table->string('instruktur');
        $table->decimal('biaya', 15, 2)->nullable();
        $table->text('deskripsi')->nullable();
        $table->timestamps();
    });
    Schema::table('workshops', function (Blueprint $table) {
        $table->unsignedBigInteger('instruktur'); // Menambahkan kolom instruktur sebagai FK
        $table->foreign('instruktur')->references('id')->on('workshop_instructors')->onDelete('cascade');
    });
    
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workshops');
    }
};
