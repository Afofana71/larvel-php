<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUpdatedCreatedAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('address', function (Blueprint $table) {
          $table->dateTime('updated_at')->nullable();
          $table->dateTime('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('address', function (Blueprint $table) {
          $table->dropColumn('updated_at');
          $table->dropColumn('created_at');
        });
    }
}
