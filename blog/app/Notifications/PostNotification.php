<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PostNotification extends Notification
{
    use Queueable;

    private $post;

    /**
     * Create a new notification instance.
     */
    public function __construct($post)
    {
        $this->post = $post;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('test')
            ->greeting('hello')
            ->line('The introduction to the notification.')
            ->action('Notification Action', url(route('posts.show', $this->post->id)))
            ->line('Thank you for using our application!')
            ->attachMany([
                ''
            ])
            // ->attach('http://localhost:8000/storage/avatar/uFOY8HE7hBXkEHae6aieXOZvtAevDMA0HShwNLNY.jpg')
            ->attach('http://localhost:8000/storage/avatar/uFOY8HE7hBXkEHae6aieXOZvtAevDMA0HShwNLNY.jpg');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
