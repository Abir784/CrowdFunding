<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotifyInvestors extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct($investor_details)
    {
        $this->investor_details=$investor_details;
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
            ->subject('Congratulations! You have a new investment!')
            ->greeting('Hello!')
            ->line($this->investor_details['name'].' has invested an amount of '.'**'.'TK. '.$this->investor_details['amount'].'**'.' for the campaign named '.$this->investor_details['title'])
            ->action('Click Here', url('/'))
            ->line('Thank you for using CrowdFunding!');
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
