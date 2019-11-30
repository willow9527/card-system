<?php
use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateCardsTable extends Migration { public function up() { Schema::create('cards', function (Blueprint $sp8b9ab3) { $sp8b9ab3->increments('id'); $sp8b9ab3->integer('user_id')->index(); $sp8b9ab3->integer('product_id')->index(); $sp8b9ab3->text('card'); $sp8b9ab3->integer('type'); $sp8b9ab3->integer('status')->default(\App\Card::STATUS_NORMAL); $sp8b9ab3->integer('count_sold')->default(0); $sp8b9ab3->integer('count_all')->default(1); $sp8b9ab3->timestamps(); $sp8b9ab3->softDeletes(); }); DB::unprepared('ALTER TABLE `cards` CHANGE COLUMN `created_at` `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP;'); } public function down() { Schema::dropIfExists('cards'); try { DB::unprepared('DROP PROCEDURE `add_cards`;'); } catch (\Exception $sped8699) { } } }