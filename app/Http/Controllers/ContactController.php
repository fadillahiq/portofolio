<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(5);

        return view('contacts.index',['messages' => $contacts])
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // public function delete($id)
    // {
    //     DB::table('contacts')->where('id', $id)->delete();
    //     return view('contacts.index');
    // }
}
