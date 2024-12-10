<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryCurrenciesTable extends Migration
{
    public function up()
    {
        Schema::create('country_currencies', function (Blueprint $table) {
            $table->id();
            $table->string('country')->unique();
            $table->string('currency_name');
            $table->string('currency_code', 3);
            $table->string('currency_symbol', 10);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('country_currencies');
    }
}
