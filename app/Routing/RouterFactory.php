<?php

declare(strict_types=1);

namespace App\Routing;

use Contributte\ApiRouter\ApiRoute;
use Nette\Application\Routers\RouteList;

final class RouterFactory
{

	public function create(): RouteList
	{
		$routerList = new RouteList();
		$routerList[] = new ApiRoute("/api1/ping", 'Pinga', ['methods' => ['GET' => 'default']]);
		$routerList[] = new ApiRoute("/api2/ping", 'Pingb', ['methods' => ['GET' => 'default']]);
		return $routerList;
	}
}
