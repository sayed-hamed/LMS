<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CareerTest extends Notification
{
    use Queueable;
    private $EnrollmentData;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($EnrollmentData)
    {
        $this->EnrollmentData=$EnrollmentData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line($this->EnrollmentData['body'])
            ->action($this->EnrollmentData['EnrollmentText'], $this->EnrollmentData['url'])
            ->line($this->EnrollmentData['thank you']);
    }
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
