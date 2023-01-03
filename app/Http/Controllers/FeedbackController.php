<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Resources\Feedback\FeedbackCollection;
use App\Http\Resources\Feedback\FeedbackResource;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new FeedbackCollection(Feedback::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        return new FeedbackResource($feedback);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedback $feedback)
    {
        if ($feedback->update($request->all())) {
            return response()->json([
                'message' => 'Feedback updated successfully',
                'feedback' => $feedback
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
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
