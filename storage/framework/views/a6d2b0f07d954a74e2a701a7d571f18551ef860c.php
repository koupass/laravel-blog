<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/19/2017
 * Time: 1:03 PM
 */
?>


<h1>A new contact message was sent!</h1>
<p>Thank you, we will respond as soon as possible.</p>
<h3>Information about your message</h3>
<p>Subject:<?php echo e($contact_message->subject); ?></p>
<p>Message:<?php echo e($contact_message->body); ?></p>