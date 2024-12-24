<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('registration_publics', function (Blueprint $table) {
            $table->string('email')->unique()->after('name');
        });
    }

    public function down()
    {
        Schema::table('registration_publics', function (Blueprint $table) {
            $table->dropColumn('email');
        });
    }

};