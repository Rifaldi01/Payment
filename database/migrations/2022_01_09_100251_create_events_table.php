<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('client_id');
            $table->string('social_media_id');
            $table->date('started_date');
            $table->date('ended_date');
            $table->bigInteger('budget');
            $table->integer('max_post');
            $table->longText('description')->nullable();
            $table->text('hastag');
            $table->text('image')->nullable();
            $table->integer('office')->nullable();
            $table->timestamps();
        });

        $event = [
            [
                'name' => 'Lazada Murah',
                'client_id' => '1',
                'social_media_id' => '1',
                'started_date' => '2022-01-09 00:46:49',
                'ended_date' => '2022-01-09 01:46:49',
                'budget' => '100000000',
                'max_post' => '20',
                'description' => 'hallo',
                'hastag' => '#lazadamurah',
                'image' => null,
                'office' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ruang Guru Hebat',
                'client_id' => '2',
                'social_media_id' => '1',
                'started_date' => '2022-02-09 00:46:49',
                'ended_date' => '2022-02-09 01:46:49',
                'budget' => '50000000',
                'max_post' => '10',
                'description' => 'hallo',
                'hastag' => '#ruangguruaja',
                'image' => null,
                'office' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Lazada Juara',
                'client_id' => '1',
                'social_media_id' => '1',
                'started_date' => '2022-01-09 00:46:49',
                'ended_date' => '2022-01-09 01:46:49',
                'budget' => '70000000',
                'max_post' => '15',
                'description' => 'hallo',
                'hastag' => '#lazadajuara',
                'image' => null,
                'office' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],

        ];

        App\Models\event::insert($event);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
