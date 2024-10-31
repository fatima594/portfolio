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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // اسم المهارة
            $table->integer('proficiency')->default(0); // مستوى الإتقان (مثلاً من 0 إلى 100)
            $table->text('description')->nullable(); // وصف المهارة
            $table->timestamps(); // تاريخ الإنشاء والتحديث
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
