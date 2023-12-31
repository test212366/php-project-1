<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    public function index(Request $request) {


		
		return view('listings.index', [
			// 'heading' => 'Latest Listings',
			'listings' => Listing::latest()->filter(
				request(['tag', 'search'])
			)->paginate(4),
		 ]);
	 }

	 public function show(Listing $listing) {
		return view('listings.show', [
			'listing' => $listing
		]);
	 }


	 public function create() {
		return view('listings.create');
	 }

	 public function store(Request $request) {




		$formFields = $request -> validate([
			// 'title' => 'required',
			'company' => ['required', Rule::unique('listings',
			'company')],
			'location' => 'required',
			'website' => 'required',
			'email' => ['required', 'email'],
			'tags' => 'required',
			'description' => 'required'

		]);

		if($request->hasFile('logo')) {
			$formFields['logo'] = $request->file('logo')->store('logos', 
			'public');
		}


		$formFields['user_id'] = auth()->id();



		Listing::create($formFields);


		// Session::flash('')


		return redirect('/')->with('message', 'listing crated success!');
	 }


	 public function edit(Listing $listing) {
		return view('listings.edit', ['listing' => $listing]);
	 }

	 public function update(Request $request, Listing $listing) {




		$formFields = $request -> validate([
			// 'title' => 'required',
			'company' => ['required', Rule::unique('listings',
			'company')],
			'location' => 'required',
			'website' => 'required',
			'email' => ['required', 'email'],
			'tags' => 'required',
			'description' => 'required'

		]);

		if($request->hasFile('logo')) {
			$formFields['logo'] = $request->file('logo')->store('logos', 
			'public');
		}


		$listing -> update($formFields);


		// Session::flash('')


		return back()->with('message', 'listing updated success!');
	 }

	 public function destroy(Listing $listing) {
		$listing->delete();
		return redirect('/')->with('message', 'listing deleted succss');
		
	 }


	 public function manage() {
		return view('listings.manage', ['listings' => auth() -> user()
		->listings() -> get()]);

	 }



}
