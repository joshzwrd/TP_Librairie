<?php

use App\Models\People;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeoplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peoples', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('telephone');
        });

        $newPeople = new People;
        $newPeople->name = 'Josh';
        $newPeople->telephone = '0782336598';
        $newPeople->save();

        $newPeople = new People;
        $newPeople->name = 'Ina';
        $newPeople->telephone = '0655669988';
        $newPeople->save();        
        
        $newPeople = new People;
        $newPeople->name = 'Jakarta';
        $newPeople->telephone = '0525734212';
        $newPeople->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peoples');
    }
}
