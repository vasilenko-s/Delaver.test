<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFormToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            //from form
            $table->string('nickname')->default('defaultNickname');
            $table->string('name')->default('defaultUser');
            $table->string('surname')->default('defaultSurname');
            $table->string('phone')->nullable();
            $table->string('sex')->nullable();
            $table->string('showPhone')->default('off');
            $table->string('pathToAvatar')->nullable();

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
            $table->dropColumn('nickname');
            $table->dropColumn('name');
            $table->dropColumn('surname');
            $table->dropColumn('phone');
            $table->dropColumn('sex');
            $table->dropColumn('showPhone');
            $table->dropColumn('pathToAvatar');
        });
    }
}
