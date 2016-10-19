<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFildsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('second_name');
            $table->string('third_name');
            $table->integer('id_user_type')->unsigned();
            $table->foreign('id_user_type')->references('id')->on('user_types')->onDelete('cascade');  
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
                    $table->dropforeign('id_user_type');  
                   $table->dropColumn(['second_name', 'third_name', 'id_user_type']);
});
        //
    }
}
