<?php
use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class AddNameToOrders extends Migration { public function up() { if (!Schema::hasColumn('orders', 'product_name')) { Schema::table('orders', function (Blueprint $sp8b9ab3) { $sp8b9ab3->string('product_name')->nullable()->after('product_id'); }); } } public function down() { } }