<?php
namespace Zwo3\NewsletterSubscribe\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class Spambot implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        if ($request->getAttribute('frontend.typoscript')->getSetupArray()['plugin.']['tx_newslettersubscribe.']['settings.']['useSimpleSpamPrevention'] ?? null) 
        {
            $iAmNotASpamBot = $request->getParsedBody()['iAmNotASpamBot'] ?? null;
            if ($iAmNotASpamBot !== null && $iAmNotASpamBot != $GLOBALS['TSFE']->fe_user->getKey('ses', 'i_am_not_a_robot')) 
            {
                $request = $request->withAttribute('spambotFailed', true);
            }
        }

        return $handler->handle($request);
    }
}
