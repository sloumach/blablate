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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            // Colonnes supplémentaires
            $table->string('phone')->nullable();
            $table->boolean('verified')->default(false); // Indique si l'utilisateur est vérifié
            $table->enum('group', ['user', 'subscriber'])->default('user'); // Groupe (user ou subscriber)
            $table->string('status')->default('active'); // Statut de l'utilisateur
            $table->string('address')->nullable(); // Adresse de l'utilisateur
            $table->string('city')->nullable(); // Ville
            $table->string('country')->nullable(); // Pays
            $table->string('postal_code')->nullable(); // Code postal
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
