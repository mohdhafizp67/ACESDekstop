<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsAdminIntoUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function (Blueprint $table) {
        $table->string('ic_number')->unique();
        $table->string('phone')->nullable();
        $table->string('address')->nullable();
        $table->string('postcode')->nullable();
        $table->string('state')->nullable();
        $table->boolean('is_admin')->default(false);
        $table->boolean('is_active')->default(true);
        $table->boolean('is_student')->default(false);
        $table->boolean('is_ecerdb_personnel')->default(false);

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('ic_number');
        $table->dropColumn('phone');
        $table->dropColumn('address');
        $table->dropColumn('postcode');
        $table->dropColumn('state');
        $table->dropColumn('is_admin');
        $table->dropColumn('is_active');
        $table->dropColumn('is_student');
        $table->dropColumn('is_ecerdb_personnel');
      });
    }
}
