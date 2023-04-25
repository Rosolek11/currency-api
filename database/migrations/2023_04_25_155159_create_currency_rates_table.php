<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrencyRatesTable extends Migration
{
    public function up()
    {
        Schema::create('currency_rates', function (Blueprint $table) {
            $table->id();
            $table->string('currency');
            $table->date('date');
            $table->decimal('amount', 8, 2);
            $table->timestamps();

            $table->unique(['currency', 'date']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('currency_rates');
    }
}
