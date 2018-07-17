<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transaction_id');
            $table->string('session_id');
            $table->string('reference');
            $table->string('request_date');
            $table->string('bank_process_date');
            $table->boolean('on_test');
            $table->string('return_code');
            $table->string('trazability_code');
            $table->integer('transaction_cycle');
            $table->string('transaction_state');
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
        Schema::dropIfExists('transaction_informations');
    }
}
