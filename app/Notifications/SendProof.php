<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendProof extends Notification
{
    use Queueable;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function via($notifiable)
    {
        return ['mail'];
//        return ['mail','broadcast'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(env('APP_NAME')." Transaction Alert [Credit : $".$this->data['amount'] ."]")
            ->greeting("Dear ".strtoupper($this->data['name']) )
            ->line('<strong>'.env('APP_NAME'). " Electronic Notification Service </strong>")
            ->line('<br />')
            ->line("We wish to inform you that your withdrawal of $".$this->data['amount']. " has been sent to your wallet ID => [".$this->data['wallet']. ']' )
            ->line('<br />')
            ->line( '<strong>Thanks for choosing '.env('APP_NAME') . '</strong>')
            ->line('<br />')
            ->line( '<strong>Wallet ID : </strong>'.'['.$this->data['wallet']. ']' )
            ->line('<br />')
            ->line( '<strong>Transaction Batch : </strong>' .'['.$this->data['batch']. ']' );
    }

    public function toArray($notifiable)
    {
        return [
//            "message"      =>  " Your account opening process has been completed, Account number = ".$this->account->account_number,
//            "title"      =>  " Account Opening Process Completed",
//            "invitationTime"   =>  Carbon::now()
        ];
    }
}
