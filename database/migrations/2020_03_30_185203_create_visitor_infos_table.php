<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitor_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('visitor_name');
            $table->text('address');
            $table->string('vehicle_no');
            $table->string('vehicle_type');
            $table->string('travel_route');
            $table->text('reason');
            $table->date('departure_date');
            $table->date('return_date');
            $table->text('visitors_detail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitor_infos');
    }
}
