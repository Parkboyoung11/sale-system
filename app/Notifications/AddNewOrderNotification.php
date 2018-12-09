<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class AddNewOrderNotification extends Notification
{
	use Queueable;

	protected $order;
	protected $user;
	protected $orderDetail;
	/**
	 * Create a new notification instance.
	 *
	 * @return void
	 */

	public function __construct($order, $user, $orderDetail)
	{
		//
		$this->order = $order;
		$this->user = $user;
		$this->orderDetail = $orderDetail;
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
			->from('quanghoang4334@gmail.com')
			->bcc('leconghau.hit@gmail.com')
			->view('user.mail.accept-order', [
				'order' => $this->order,
				'user' => $this->user,
				'orderDetail' => $this->orderDetail,
			]);
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
