<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUrlToPagesTable extends Migration
{
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('url')->nullable()->unique();
        });
    }
    
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn('url');
        });
    }
}
