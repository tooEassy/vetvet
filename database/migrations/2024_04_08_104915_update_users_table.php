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
        Schema::table('users', function (Blueprint $table) {
            $table->string('country')->nullable();
            $table->string('telegram')->nullable();
            $table->string('phone')->nullable();
            $table->string('photo')->nullable();
            $table->string('bot_id')->nullable();
            $table->string('folders_set_id')->nullable();
            $table->string('filters_set_id')->nullable();
            $table->string('is_roles')->nullable();
            $table->string('active_subscription')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
