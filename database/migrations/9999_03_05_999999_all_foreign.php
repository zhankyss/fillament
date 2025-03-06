<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('periodes', function (Blueprint $table) {
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('set null');
        });

        Schema::table('kelas', function (Blueprint $table) {
            $table->foreign('guru_id')->references('id')->on('teachers')->onDelete('set null');
        });

        Schema::table('home_rooms', function (Blueprint $table){
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('set null');
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('set null');
            $table->foreign('periode_id')->references('id')->on('periodes')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
