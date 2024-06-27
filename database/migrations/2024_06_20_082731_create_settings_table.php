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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string("logo");
            $table->string("logo_path");
            $table->string("site_name");
            $table->string("facebook");
            $table->string("instagram");
            $table->string("linkedin");
            $table->string("twitter");
            $table->string("site_info");
            $table->string("map");
            $table->string("address");
            $table->string("phone");
            $table->string("email");
            $table->string("contact_info");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
