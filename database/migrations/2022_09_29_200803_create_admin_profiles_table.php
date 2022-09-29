<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up() {
        Schema::create('admin_profiles', function (Blueprint $table) {
            $table->foreignId('admin_id')->constrained('admins')->cascadeOnDelete();
            $table->string('firstname', 100)->nullable();
            $table->string('lastname', 100)->nullable();
            $table->date('birthdate')->nullable();
            $table->enum('gender', ['male, female'])->nullable();
            $table->string('address')->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('postal_code', 150)->nullable();
            $table->char('country', 2);
            $table->char('localeCode', 2)->default(config('app.locale'));
            $table->primary(['admin_id']);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('admin_profiles');
    }
};
