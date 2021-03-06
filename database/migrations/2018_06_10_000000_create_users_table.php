<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // https://developer.helpscout.com/help-desk-api/objects/user/
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('first_name');
                $table->string('last_name');
                $table->string('email', 191)->unique();
                $table->string('password');
                $table->string('role')->default('user'); // admin/user
                $table->string('timezone')->default('UTC');
                $table->string('photo_url')->nullable();
                $table->string('type')->default('user'); // team/user
                $table->unsignedTinyInteger('invite_state')->default(1); // 1 - not invited
                $table->string('emails', 100)->nullable();
                $table->string('job_title')->nullable();
                $table->string('phone', 60)->nullable();
                $table->unsignedTinyInteger('time_format')->default(2);
                $table->boolean('enable_kb_shortcuts')->default(true);
                //$table->boolean('is_user_workflow_related')->default(false);
                $table->boolean('locked')->default(false);
                $table->rememberToken();
                //$table->timestamps();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('modified_at')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
