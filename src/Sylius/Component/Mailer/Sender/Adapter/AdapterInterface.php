<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Mailer\Sender\Adapter;

use Sylius\Component\Mailer\Renderer\RenderedEmail;

/**
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 * @author Jérémy Leherpeur <jeremy@leherpeur.net>
 */
interface AdapterInterface
{
    const EVENT_EMAIL_SENT = 'sylius.email_sent';

    /**
     * Send an e-mail.
     *
     * @param array  $recipients
     * @param string $senderAddress
     * @param string $senderName
     * @param RenderedEmail $email
     */
    public function send(array $recipients, $senderAddress, $senderName, RenderedEmail $email);
}
