<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    
    public function index(){
        $tickets = Ticket::all();
        // return $tickets;
        return view('app.index', compact('tickets'));
    }
    public function create(){
        return view('app.create');
    }
    public function store(Request $request){
        $request->validate([
            'email' => 'required|max:255|string',
            'title' => 'required|max:255|string',
            'details' => 'required|max:255|string'
        ]);

        Ticket::create([
            'email' => $request->email,
            'title' => $request->title,
            'details' => $request->details,
        ]);

        return redirect('tickets/create')-> with('status','tickets Created');
    }

    public function edit(int $id){
       $tickets = Ticket::findOrFail($id);
    //    return $tickets;
       return view('app.edit', compact('tickets'));
    }
    public function update(Request $request, int $id){
       
        $request->validate([
            'email' => 'required|max:255|string',
            'title' => 'required|max:255|string',
            'details' => 'required|max:255|string'
        ]);

        Ticket::findOrFail($id)->update([
            'email' => $request->email,
            'title' => $request->title,
            'details' => $request->details,
        ]);

        return redirect()->back()->with('status','ticket Updated');
    }

    public function destroy(int $id){
      $category = Ticket::findOrFail($id);
      $category->delete();
      return redirect()->back()->with('status','ticket Deleted');
    }

}
