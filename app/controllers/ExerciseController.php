<?php
use Exercise;
/**
 * Created by PhpStorm.
 * User: bark
 * Date: 2014-10-14
 * Time: 20:01
 */

class ExerciseController extends BaseController {

    public function index() {

      //  $result =  $this->getClicksByDate();
        return Response::json("hej");
    }

    public function show($id) {
        return Response::json(Exercise::find($id));
    }
    public function store() {
        return Response::json("storing");
    }


}