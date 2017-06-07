<?php namespace App\Http\Controllers;

class ContactController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        //load view
        return view('main/contact/create');
    }

}
