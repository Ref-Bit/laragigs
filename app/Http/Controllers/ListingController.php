<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    public function home()
    {
        return view('pages.index', [
            'listings' => Listing::latest()->take(4)->get()
        ]);
    }

    public function index()
    {
        return view('pages.listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(8)
        ]);
    }

    public function create()
    {
        return view('pages.listings.create', ['listing' => new Listing()]);
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'logo' => 'file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,xlsx,xls,txt,pdf,zip|max:1024',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required|url',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/listings')->with('message', 'Job is posted successfully!');
    }

    public function show(Listing $listing)
    {
        return view('pages.listings.show', ['listing' => $listing]);
    }

    public function edit(Listing $listing)
    {
        return view('pages.listings.edit', ['listing' => $listing]);
    }

    public function update(Request $request, Listing $listing)
    {
        if ($listing->user_id != auth()->id) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'logo' => 'file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,xlsx,xls,txt,pdf,zip|max:1024',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required|url',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Job is updated successfully!');
    }

    public function destroy(Listing $listing)
    {
        if ($listing->user_id != auth()->id) {
            abort(403, 'Unauthorized Action');
        }
        
        $listing->delete();
        return redirect('/listings')->with('message', 'Job is deleted successfully!');
    }

    public function manage()
    {
        return view('pages.listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
}
