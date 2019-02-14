<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class googleApi extends Controller
{
    public function getSearchVolume()
    {
    	$selector = new TargetingIdeaSelector();
        $selector->setRequestType(RequestType::IDEAS);
        $data     = $selector->setIdeaType(IdeaType::KEYWORD);

        print_r($data); exit;
    }
}
