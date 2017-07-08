<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 6/4/2017
 * Time: 6:26 PM
 */

?>

<h1>Thank you for creating a quote <?php echo e($name); ?></h1>

<p>Please register here: <a href="<?php echo e(route('mail_callback',['author_name'=>$name])); ?>">link</a></p>
