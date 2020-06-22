<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfilToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
			$table->string('alamat')->nullable();
            $table->date('tanggal_lahir')->nullable();
			$table->string('experience')->nullable();
			$table->string('jenis_kelamin')->nullable();
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
			$table->dropColumn('alamat');
            $table->dropColumn('tanggal_lahir');
			$table->dropColumn('experience');
			$table->dropColumn('jenis_kelamin');
        });
    }
}
