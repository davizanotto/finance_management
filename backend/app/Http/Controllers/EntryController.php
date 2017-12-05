<?php
namespace App\Http\Controllers;

use App\Entry;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntryController extends Controller {

    public function index() {
        $Entries = Entry::all();
        return response()->json($Entries);
    }
    public function getEntry($id) {
        $Entry = Entry::find($id);
        return response()->json($Entry);
    }
    public function createEntry(Request $request) {
        $Entry = Entry::create($request->all());
        return response()->json($Entry);
    }
    public function deleteEntry($id) {
        $Entry = Entry::find($id);
        $Entry->delete();

        return response()->json('deleted');
    }
    public function updateEntry(Request $request, $id) {
        $Entry = Entry::find($id);
        $Entry->description = $request->input('description');
        $Entry->save();

        return response()->json($Entry);
    }
}