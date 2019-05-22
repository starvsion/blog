<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContactMeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create('contact_me', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->longText('message');
            $table->dateTime('read_at')
                ->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down ()
    {
        Schema::dropIfExists('contact_me');
    }
}
