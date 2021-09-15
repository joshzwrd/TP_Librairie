<?php

use App\Models\Book;
use App\Models\People;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->unsignedBigInteger('people_id');
            $table->foreign('people_id')
                ->references('id')
                ->on('peoples')
                ->onDelete('cascade');
        });

        $newBook = new Book;
        $newBook->title = 'Programmation OO';
        $newBook->people_id = People::inRandomOrder()->get()[0]->id;
        $newBook->save();

        $newBook = new Book;
        $newBook->title = 'Laravel 8';
        $newBook->people_id = People::inRandomOrder()->get()[0]->id;
        $newBook->save();

        $newBook = new Book;
        $newBook->title = 'Angular';
        $newBook->people_id = People::inRandomOrder()->get()[0]->id;
        $newBook->save();

        $newBook = new Book;
        $newBook->title = 'Les bases du web';
        $newBook->people_id = People::inRandomOrder()->get()[0]->id;
        $newBook->save();

        $newBook = new Book;
        $newBook->title = 'HTML/CSS';
        $newBook->people_id = People::inRandomOrder()->get()[0]->id;
        $newBook->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
