<?php

/**
 * Postmark PHP class
 * 
 * Copyright 2010, Markus Hedlund, Mimmin AB, www.mimmin.com
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @author Markus Hedlund (markus@mimmin.com) at mimmin (www.mimmin.com)
 * @copyright Copyright 2009 - 2010, Markus Hedlund, Mimmin AB, www.mimmin.com
 * @version 0.4.4
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 * 
 * Usage:
 * Mail_Postmark::compose()
 *      ->addTo('address@example.com', 'Name')
 *      ->subject('Subject')
 *      ->messagePlain('Plaintext message')
 *	    ->tag('Test tag')
 *      ->send();
 * 
 * or:
 * 
 * $email = new Mail_Postmark();
 * $email->addTo('address@example.com', 'Name')
 *      ->subject('Subject')
 *      ->messagePlain('Plaintext message')
 *	    ->tag('Test tag')
 *      ->send();
 */
 
class sfPostMark extends PluginsfPostMark
{
}