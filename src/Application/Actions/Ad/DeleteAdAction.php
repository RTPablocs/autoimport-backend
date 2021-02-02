<?php

declare(strict_types=1);

namespace App\Application\Actions\Ad;

use Psr\Http\Message\ResponseInterface as Response;
use App\Application\Actions\Ad\AdAction;

class DeleteAdAction extends AdAction{
    protected function action(): Response{
        
        $adId = (int) $this->resolveArg('id');
        $this->adRepository->deleteOne($adId);
        
        $message = array(
                'statusCode' => 200,
                'message' => "Ad with id $adId was deleted." 
        );
        $this->logger->info("Ad with id $adId was deleted.");

        return $this->respondWithData($message)->withStatus(200);
    }

}