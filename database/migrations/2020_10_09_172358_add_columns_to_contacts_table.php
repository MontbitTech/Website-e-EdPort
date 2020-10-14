<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
          $table->string('requestType')->nullable();
          $table->string('qualification')->nullable()->after('requestType');
          $table->string('certificate')->nullable()->after('qualification');
          $table->string('child_age')->nullable()->after('certificate');
          $table->string('stream')->nullable()->after('child_age');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('requestType');
            $table->dropColumn('qualification');
            $table->dropColumn('certificate');
            $table->dropColumn('child_age');
            $table->dropColumn('stream');
        });
    }
}
