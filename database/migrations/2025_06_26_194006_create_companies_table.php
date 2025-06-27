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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique(); // 'email' debería ser único
            $table->string('phone')->nullable(); // 'phone' podría ser opcional
            $table->string('address')->nullable(); // 'address' podría ser opcional
            $table->string('logo')->nullable(); // 'logo' podría ser opcional
            $table->string('website')->nullable(); // 'website' podría ser opcional
            $table->string('rut')->unique(); // 'rut' debería ser único
            $table->string('country', 2); // Código ISO 2 de país, ejemplo 'CL'
            $table->string('currency', 3); // Código ISO 3 de moneda, ejemplo 'CLP'
            $table->string('language', 2)->default('es'); // Código ISO 2 de idioma, con valor por defecto
            $table->string('timezone')->default('America/Santiago'); // Zona horaria, con valor por defecto
            $table->foreignId('commune_id')->constrained('communes')->onDelete('cascade'); // Clave foránea a la tabla 'communes'
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade'); // Clave foránea a la tabla 'cities'
            $table->foreignId('business_activity_id')->constrained('business_activities')->onDelete('cascade'); // Clave foránea a la tabla 'business_activities'
            $table->boolean('is_active')->default(true); // Booleano, con valor por defecto
            $table->string('legal_representation')->nullable(); // 'legal_representation' podría ser opcional
            $table->string('email_legal_representation')->nullable(); // 'email_legal_representation' podría ser opcional
            $table->string('email_dte')->nullable(); // 'email_dte' podría ser opcional
            $table->boolean('is_demo')->default(false); // Booleano, con valor por defecto
            $table->timestamps(); // Columnas 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
