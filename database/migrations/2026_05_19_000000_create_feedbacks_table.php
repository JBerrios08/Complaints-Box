<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            $table->enum('message_type', ['felicitacion', 'queja', 'comentario']);
            $table->string('branch')->nullable();
            $table->text('message');
            $table->string('customer_name')->nullable();
            $table->string('contact')->nullable();
            $table->enum('ticket_status', ['pendiente', 'revisado'])->default('pendiente');
            $table->timestamps();

            $table->index(['message_type', 'ticket_status']);
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('feedbacks');
    }
};
