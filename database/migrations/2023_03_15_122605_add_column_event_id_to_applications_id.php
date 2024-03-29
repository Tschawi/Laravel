<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->integer('event_id');
        });
    }

    
    public function down(): void
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->removeColumn('event_id');
        });
    }
};
