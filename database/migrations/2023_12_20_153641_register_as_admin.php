<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('users')->insert([
            'cus_name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Abc-123456'),
            'created_at' => now(),
            'updated_at' => now(),
            'cus_dob' => '2023-11-29 00:00:00',
            'cus_gender' => 'men',
            'cus_phone' => '0123456789',
            'cus_point' => 0,
            'cus_type' => null,
            'cus_role' => 'admin',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
