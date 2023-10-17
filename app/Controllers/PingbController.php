<?php

declare(strict_types=1);

namespace App\Controllers;

use Contributte\ApiRouter\ApiRoute;
use Nette\Application\Request;
use Nette\Application\Response;
use Nette\Application\Responses\TextResponse;

final class PingbController extends AbstractController
{

	public function run(Request $request): Response
	{
		return new TextResponse('pong B');
	}
}
