<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use DB;
class Task extends Eloquent  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tasks';



	protected $fillable = array('task');
    protected $guarded = array('primaryKey');
    public $timestamps = array('created');


	public static function geteAllTasks(){
        $tasksRaw = Task::all();
        $tasks = [];
        foreach ($tasksRaw as $task){

            $tasks[] = $task->original['task'];
        }
        return $tasks;

    }

}
