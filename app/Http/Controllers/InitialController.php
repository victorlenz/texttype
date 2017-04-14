<?php

namespace App\Http\Controllers;

use App\Topics;
use App\User_profile;
use Illuminate\Http\Request;

class InitialController extends Controller
{
    /**
     * @param Request $request
     */

    const INTERESTED_IN = 'interested_in',
            PARTICIPATES_IN = 'participates_in';



    public function saveData(Request $request)
    {
        $topics =  new Topics();


        $getTopic = explode(',',$request['topics_interests']);
        

        foreach($getTopic as $topic)
        {
            if($id=topicExist($topic))
            {
                //create relation to user_profile table with interest
                $profile = new User_profile();
                $
                $profile->relation = self::PARTICIPATES_IN;
                
                
            }
            else
            {
                //insert topic in the topics table then create relation
            }
        }

    }
    //
    public function initialize()
    {
        return view('initialization');
    }

    /*
     * Function Definitions for not route usage

     */

    protected function topicExist($topic)
    {
        if(Topics::where('topic', $topic)->count() >0)
            return Topics::where('topic', $topic)->first()->pluck('id');
        else return false;
    }
}
