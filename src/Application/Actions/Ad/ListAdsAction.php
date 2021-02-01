<?php


namespace App\Application\Actions\Ad;


use App\Domain\DomainException\DomainRecordNotFoundException;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Exception\HttpBadRequestException;
use App\Application\Actions\Ad\AdAction;

class ListAdsAction extends AdAction {

    /**
     * @inheritDoc
     */
    protected function action(): Response {
        $ads = $this->adRepository->findAll();
        $this->logger->info("Ad List was Viewed");

        return $this->respondWithData($ads);
    }
}