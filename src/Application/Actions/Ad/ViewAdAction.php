<?php

declare(strict_types=1);

namespace App\Application\Actions\Ad;

use App\Application\Actions\Ad\AdAction;
use Psr\Http\Message\ResponseInterface as Response;

class ViewAdAction extends AdAction {
    protected function action(): Response {

        $adId = $this->resolveArg('id');

        $ad = $this->adRepository->findOne($adId);
        $this->logger->info("Ad with $adId was viewed");
        return $this->respondWithData($ad);
    }
}
