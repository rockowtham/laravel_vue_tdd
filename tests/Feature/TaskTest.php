<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TasksTest extends TestCase
{
    use DatabaseMigrations;

    /**  @test */
    public function a_user_can_read_all_tasks(){


        // Given We have Tasks in the data base
        $task = factory('App\Task')->create();

        //When User visits the task page
        $response = $this->get('/tasks');

        //he should be able read the tasks
        $response->assertSee($task->title);

    }

    /** @test */
public function a_user_can_read_single_task()
{
    //Given we have task in the database
    $task = factory('App\Task')->create();
    //When user visit the task's URI
    $response = $this->get('/tasks/'.$task->id);
    //He can see the task details
    $response->assertSee($task->title)
        ->assertSee($task->description);
}
}