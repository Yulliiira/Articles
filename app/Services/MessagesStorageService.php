<?php

namespace App\Providers\Services;
use App\Providers;
use App\Models\Message;

class MessagesStorageService
{
    // Метод для сохранения сообщений
    public function storeMessage(array $data)
    {
       $message = Message::create([
            'content' =>$data['content'],
            'sender_id' =>$data['sender_id'],
            'recipient_id' =>$data['recipient_id'],
       ]);

       return $message;
    }

    // Метод для получения сообщений
    public function getMessagesByUserId($userId)
    {
        // Здесь будет логика получения сообщений пользователя
        $messages = Message::where('sender_id', $userId)
            ->orWhere('recipient_id', $userId)
            ->get();

    }
}
