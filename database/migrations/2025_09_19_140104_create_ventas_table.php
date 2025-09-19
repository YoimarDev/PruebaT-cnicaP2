<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto_id')->constrained('productos')->onDelete('cascade');
            $table->unsignedInteger('cantidad');
            $table->decimal('total', 14, 2); // monto: cantidad * precio_unitario
            $table->timestamp('vendido_en')->useCurrent();
            $table->timestamps();

            $table->index('producto_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
