<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80);
            $table->string('cpf', 12)->unique();
            $table->string('email', 60)->unique();
            $table->string('phone1', 13);
            $table->string('phone2', 13)->nullable();
            $table->string('cep', 9);
            $table->string('street', 60);
            $table->string('number', 10);
            $table->string('district', 60);
            $table->string('city', 60);
            $table->string('states', 2);
            $table->longText('reference_point')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
