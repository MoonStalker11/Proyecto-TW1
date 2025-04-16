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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();

            $table->dateTime('codigo',50);
            $table->decimal('nombre',80);
            $table->decimal('stock')->unsigned()->default(0);
            $table->foreignId('descripcion',255)->nullable();
            $table->foreignId('fecha_vencimiento')->nullable();
            $table->foreignId('img_path',255)->nullable();
            $table->tinyInteger('estado')->default(1);
            $table->foreignId('marca_id')->constrained('marcas')->onDelete('cascade');
            $table->foreignId('presentacione_id')->constrained('presentaciones')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
