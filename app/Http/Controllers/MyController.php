<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class MyController
 * @package App\Http\Controllers
 */
class MyController extends Controller
{

    /**
     * @param Request $request
     * @return ResponseFactory|Response
     */
    public function post(Request $request)
    {
        $input = $request->input();
        if (!in_array('calculus', $input)) {
            return response(['status'=>'error', 'errorMessage' => 'You must include calculus.'], 404);
        }

        //Not saving anything as its not in the scope of this question.

        return response(['status'=>'success'], 200);

    }
}
