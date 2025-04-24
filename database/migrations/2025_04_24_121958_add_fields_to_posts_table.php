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
        Schema::table('posts', function (Blueprint $table) {
            $table->string('intro')->nullable();
            $table->json('what_you_will_learn')->nullable();
            $table->json('key_takeaways')->nullable();
            $table->string('summary')->nullable();

            // call action
            $table->json('call_action')->nullable();

            // other links
            $table->json('other_resources')->nullable();
            $table->json('references')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('intro');
            $table->dropColumn('what_you_will_learn');
            $table->dropColumn('key_takeaways');
            $table->dropColumn('summary');
            $table->dropColumn('call_action');
            $table->dropColumn('other_resources');
            $table->dropColumn('references');
        });
    }
};
