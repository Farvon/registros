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
        //
        Schema::table('registros', function(Blueprint $table){
            $table->foreign('carrera')
            ->references('id')
            ->on('carreras')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        schema::table('registros',function(Blueprint $table){
            $table->dropForeign('registros_carreras_foreign');
        });
    }
};
