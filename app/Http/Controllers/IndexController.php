<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * redirect index page
     * @param  Request $request http request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function showIndex(Request $request)
    {
        //return redirect()->route('showSelectOrganiser');
        return redirect()->route('showEventPage',['event_id'=>1, 'event_slug'=>'free-one-week-web-application-development']);
    }
}
