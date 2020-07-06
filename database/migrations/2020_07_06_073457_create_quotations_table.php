<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->string('inquery_id');
            $table->string('customer_id');
            $table->dateTime('date');
            $table->string('created_by');
            $table->string('updated_by');
            $table->decimal('amount', 5, 2);
            $table->decimal('discount_amount', 5, 2);
            $table->decimal('net_amount', 5, 2);
            $table->string('status');
            $table->string('quotation_code');
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
        Schema::dropIfExists('quotations');
    }
}
