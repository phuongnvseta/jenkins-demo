<?php
/**
 * Demo create push a message to pusher event
 *
 * PHP version 7.2
 *
 * @category PHP
 * @package  Znavi
 * @author   phuongnv6231 <phuongnv6231@co-well.com.vn>
 * @license  https://co-well.asia.com.vn
 * @link     http://backlog
 */
namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

/**
 * Hello pusher
 *
 * @category PHP
 * @package  Znavi
 * @author   phuongnv6231 <phuongnv6231@co-well.com.vn>
 * @license  https://co-well.asia.com.vn
 * @link     http://backlog
 */
class HelloPusherEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    
    public $message;
    
    /**
     * Set alias for event
     *
     * @return string alias of event
     */
    public function broadcastAs()
    {
        return 'hellopusher';
    }
    
    /**
     * Construct a object with a message
     *
     * @param string $message Message is use to push to pusher
     */
    public function __construct($message)
    {
        //
        $this->message=$message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('orders');
    }
}
