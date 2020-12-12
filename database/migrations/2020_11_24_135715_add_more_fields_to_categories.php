<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreFieldsToCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
          $table->string('url')->after('name');
          $table->string('description')->after('url');
          $table->string('created_at_ip',45)->after('updated_at')->nullable();
          $table->string('updated_at_ip',45)->after('created_at_ip')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
        $table->dropColumn('url');
        $table->dropColumn('description');
        $table->dropColumn('created_at_ip');
        $table->dropColumn('updated_at_ip');
        });
    }
}
