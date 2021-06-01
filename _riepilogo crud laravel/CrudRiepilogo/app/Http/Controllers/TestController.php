<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MyMatch;

class TestController extends Controller {

    private function getRules() {

        return [
            'team1' => 'required',
            'team2' => 'required',
            'score1' => 'required',
            'score2' => 'required',
            'result' => 'required',

        ];
    }
    // HOME
    public function home() {   

        $MyMatch = MyMatch::all();
        return view('pages.home', compact('MyMatch'));
    }
    // MATCH PICK ID
    public function match($id) {

        $MyMatch = MyMatch::findOrFail($id);
        return view('pages.match', compact('MyMatch'));
    }
    // MATCH EDIT
    public function edit($id) {

        $MyMatch = MyMatch::findOrFail($id);
        return view('pages.edit', compact('MyMatch'));
    }
    // UPDATE MATCH
    public function update(Request $request, $id) {

        $validate = $request -> validate($this -> getRules());
        $MyMatch = MyMatch::findOrFail($id);
        $MyMatch -> update($validate);
        return redirect() -> route('$MyMatch', $MyMatch -> id);
    }
    // DELETE A MATCH
    public function destroy($id) {

        $MyMatch = MyMatch::findOrFail($id);
        $MyMatch -> delete();
        return redirect()->route('home');
    }
    // CREATE NEW MATCH
    public function newMatch() {
        return view('pages.new-match');
    }
    // STORE
    public function store(Request $request) {

        $validate = $request -> validate($this -> getRules());
        $MyMatch = MyMatch::create($validate);
        return redirect() -> route('$MyMatch', $MyMatch -> id);
    }
}