<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Resources\Feedback\FeedbackCollection;
use App\Http\Resources\Feedback\FeedbackResource;

class FeedbackController extends Controller
{

    public function index()
    {
        return new FeedbackCollection(Feedback::all());
    }


    public function store(Request $request)
    {
        $feedback = new Bid();
        $feedback->id = $request->id;
        $feedback->feedback = $request->feedback;
        $feedback->auction_id = $request->auction_id;
        $feedback->feedback_type_id = $request->feedback_type_id;
        $feedback->left_by_user_id = $request->left_by_user_id;
        $feedback->save();

        return response()->json([
            'message' => 'Feedback created successfully',
            'bid' => $feedback
        ], 201);
    }

 
    public function show(Feedback $feedback)
    {
        return new FeedbackResource($feedback);
    }

   
    public function update(Request $request, Feedback $feedback)
    {
        if ($feedback->update($request->all())) {
            return response()->json([
                'message' => 'Feedback updated successfully',
                'feedback' => $feedback
            ], 200);
        }
    }

 
    public function destroy(Feedback $feedback)
    {
        if ($feedback->delete()) {
            return response()->json([
                'message' => 'Bid deleted successfully',
                'feedback' => $feedback
            ], 200);
        }
    }
}
