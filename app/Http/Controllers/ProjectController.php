<?php namespace App\Http\Controllers;

class ProjectController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function work()
    {
        //load view
        return view('main/projects/work');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function octopus()
    {
        //load view
        return view('main/projects/octopus');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function privacy()
    {
        //load view
        return view('main/projects/work');
    }
}
