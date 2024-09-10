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
        Schema::create('call_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('caller_id')->constrained('users')->onDelete('cascade'); // Appelant (user qui initie l'appel)
            $table->foreignId('receiver_id')->constrained('users')->onDelete('cascade'); // Destinataire (user qui reçoit l'appel)
            $table->enum('call_type', ['audio', 'video']); // Type d'appel (audio ou vidéo)
            $table->timestamp('started_at')->nullable(); // Heure de début de l'appel
            $table->timestamp('ended_at')->nullable(); // Heure de fin de l'appel
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('call_logs');
    }
};
