<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnProductsABCDE extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->integer('coffee_a_large')->unsigned()->after('day_of_the_week');
            $table->integer('coffee_a_small')->unsigned();
            $table->integer('coffee_b_large')->unsigned();
            $table->integer('coffee_b_small')->unsigned();
            $table->integer('coffee_c_large')->unsigned();
            $table->integer('coffee_c_small')->unsigned();
            $table->integer('chocolate_a')->unsigned();
            $table->integer('chocolate_b')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn('coffee_a_large');
            $table->dropColumn('coffee_a_small');
            $table->dropColumn('coffee_b_large');
            $table->dropColumn('coffee_b_small');
            $table->dropColumn('coffee_c_large');
            $table->dropColumn('coffee_c_small');
            $table->dropColumn('chocolate_a');
            $table->dropColumn('chocolate_b');
        });
    }
}
