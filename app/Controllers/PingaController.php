<?php

declare(strict_types=1);

namespace App\Controllers;

use Contributte\ApiRouter\ApiRoute;
use Nette\Application\Request;
use Nette\Application\Response;
use Nette\Application\Responses\TextResponse;

final class PingaController extends AbstractController
{

	public function run(Request $request): Response
	{
		return new TextResponse('pong A');
	}
}
