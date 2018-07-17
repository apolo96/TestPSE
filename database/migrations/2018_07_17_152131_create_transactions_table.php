<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('return_code');
            $table->string('bank_url');
            $table->string('trazability_code');
            $table->integer('transaction_cycle');
            $table->integer('transaction_id')->unique();
            $table->string('session_id');
            $table->string('bank_currency');
            $table->float('bank_factor');
            $table->integer('response_code');
            $table->string('response_reason_code');
            $table->string('response_reason_text');
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
        Schema::dropIfExists('transactions');
    }
}
