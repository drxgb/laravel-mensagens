<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\MessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$messages = Message::all()->sortByDesc('created_at');

        return view('app.message.index', [
			'messages' => $messages,
		]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MessageRequest $request)
    {
		Message::create([
			'title' => $request->title,
			'content' => $request->content
		]);

        return redirect()->route('message.index')->with([
			'success' => 'Sua mensagem foi enviada com sucesso!'
		]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        return view('app.message.show', [
			'message' => $message
		]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        return view('app.message.edit', [
			'message' => $message
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\MessageRequest  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(MessageRequest $request, Message $message)
    {
        Message::where('id', $message->id)
			->update([
				'title' => $request->title,
				'content' => $request->content
		]);

		return redirect()->route('message.index')->with([
			'success' => "A mensagem $request->title foi modificada com sucesso!",
		]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
