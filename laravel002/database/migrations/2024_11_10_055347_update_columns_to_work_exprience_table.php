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
        Schema::table('job_experiences', function (Blueprint $table) {
            $table->string('company_name',500)
            ->change();

            $table->renameColumn('company_name', 'company_names');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_experiences', function (Blueprint $table) {
            $table->string('company_names')
            ->change();

            $table->renameColumn('company_names','company_name');
        });
    }
};
