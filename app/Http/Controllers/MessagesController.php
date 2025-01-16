<?php

namespace App\Http\Controllers;
use App\Providers\Services\MessagesStorageService;
use Illuminate\Http\Request;
use App\Models\Message;

class MessagesController extends Controller
{

    protected $messageService;
    /**
     * Display a listing of the resource.
     */

    public function __construct(MessagesStorageService $messageService)
    {
        $this->messageService = $messageService;
    }

    public function index()
    {
        $messages = Message::all();
        return view('index', compact('messages'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $message = Message::create([
        //     'content' => 'hello',
        //     'sender_id' => 1,
        //     'recipient_id' => 1
        // ]);
        return view('message/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required|string',
            'recipient' => 'required|exists:users,id',
        ]);

        // Добавляем ID отправителя
        // $data['sender_id'] = auth()->id();

        // Сохраняем сообщение через сервис
        $this->messageService->storeMessage($data);

        return redirect()->back()->with('success', 'Сообщение успешно отправлено!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message = Message::findOrFail($id);
        return view('message/index', compact('message'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
