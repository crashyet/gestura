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
    Schema::table('users', function (Blueprint $table) {
        $table->string('username')->unique()->nullable();
        $table->string('profile_image')->nullable();
        $table->string('role')->default('user'); // user / admin
        $table->text('bio')->nullable();
        $table->string('badge')->nullable(); // opsional
        $table->string('status')->default('aktif'); // aktif / nonaktif
        $table->integer('total_point')->default(0);
        $table->timestamp('last_login')->nullable();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
