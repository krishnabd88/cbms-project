<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('full_name', 255)->nullable();
            $table->string('business_name', 255)->nullable();
            $table->string('vat_no', 255)->nullable();
            $table->string('tax_no', 255)->nullable();
            $table->string('national_id', 255)->nullable();
            $table->string('mobile', 255)->nullable();
            $table->string('business_number', 255)->nullable();
            $table->string('tel', 255)->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable();
            $table->string('country', 255)->nullable();
            $table->string('state', 255)->nullable();
            $table->string('city', 255)->nullable();
            $table->string('zip_postal_code', 255)->nullable();
            $table->string('road', 255)->nullable();
            $table->string('area', 255)->nullable();
            $table->string('house_flat', 255)->nullable();
            $table->text('categories')->nullable();
            $table->text('request_product')->nullable();
            $table->string('whatsapp', 255)->nullable();
            $table->string('viber', 255)->nullable();
            $table->string('imo', 255)->nullable();
            $table->string('skype', 255)->nullable();
            $table->string('other_chat', 255)->nullable();
            $table->string('website', 255)->nullable();
            $table->text('notes')->nullable();
            $table->text('admin_notes')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'full_name', 
                'business_name', 
                'vat_no', 
                'tax_no', 
                'national_id', 
                'mobile', 
                'business_number', 
                'tel', 
                'gender', 
                'country', 
                'state', 
                'city', 
                'zip_postal_code', 
                'road', 
                'area', 
                'house_flat', 
                'categories', 
                'request_product', 
                'whatsapp', 
                'viber', 
                'imo', 
                'skype', 
                'other_chat', 
                'website', 
                'notes', 
                'admin_notes'
            ]);
        });
    }
}
