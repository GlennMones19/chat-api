<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $messages = Message::all();
            return response()->json([
                'results' => $messages
            ], 200);
        } catch(\Exception $e) {
            return response()->json([
                'message' => "Not Found!"
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(MessageRequest $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MessageRequest $request)
    {
        try{
            Message::create([
                'name' =>  $request->name,
                'message_item' => $request->message_item,
                'status' => $request->status
            ]);

            return response()->json([
                'message' => "Message created."
            ], 200);
        } catch(\Exception $e) {
            return response()->json([
                'message' => "Not Found!"
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $message = Message::find($id);

            return response()->json([
                'message' => $message
            ], 200);
            
        } catch(\Exception $e) {
            return response()->json([
                'message' => "Not Found!"
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(MessageRequest $request, $id)
    {
        try{
            $messages = Message::find($id);
            $messages->name = $request->name;
            $messages->message_item = $request->message_item;
            $messages->status = $request->status;

            $messages->save();

            return response()->json([
                'message' => "Message updated."
            ], 200);
        } catch(\Exception $e) {
            return response()->json([
                'message' => "Not Found!"
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $message = Message::find($id);

            $message->delete();
            return response()->json([
                'message' => "Message deleted."
            ], 200);
        } catch(\Exception $e) {
            return response()->json([
                'message' => "Not Found!"
            ], 500);
        }


    }
}