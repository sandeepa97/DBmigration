<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicePaymentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_payment_details', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_id');
            $table->dateTime('date');
            $table->decimal('amount', 5, 2);
            $table->string('receipt_id');
            $table->string('is_sent_email');
            $table->string('email_body');
            $table->string('created_by');
            $table->string('updated_by');
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
        Schema::dropIfExists('invoice_payment_details');
    }
}
