<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

/*
Naming Conventions -  

index - shows all content
show - shows single  entity
create - show form to create new listing
store - Store new listing/submit
edit show form to edit listing
update - update data
destroy- delete data

*/
class ListingController extends Controller
{
    // To show all listings
    public function index(){
        return view('listings.index',[
            'job_listings'=>Listing::all()
        ]);
    }

    // To get a specific listing
    public function getSpecificJobListing(Listing $listing){
        return view('listings.show', [
            'job_listing'=>$listing
        ]);
    }
}
