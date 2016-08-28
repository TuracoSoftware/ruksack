<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ScoutController extends Controller
{
    public function _construct() {
        $this->middleware('auth');
    }

    public function index() {

    }

    public function create() {
        //return a view that has a form with it
    }

    public function store(Request $request) {
        //stores all the data from the create form
    }

    public function edit($id) {
        //return a view with the id of the object the person wants to edit
    }

    public function update($id, Request $request) {
        //stores all the new information from the edit form
    }
}
