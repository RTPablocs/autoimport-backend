<?php

namespace App\Application\Actions\Ad;

use App\Application\Actions\ActionPayload;
use Psr\Http\Message\ResponseInterface as Response;
use App\Application\Actions\Ad\AdAction;

class CreateAdAction extends AdAction{
  

  protected function action(): Response{  

    $payload = new ActionPayload(215, 'Ad Created');
    $json = $this->request->getBody();
    $data = json_decode($json, true);
    
    $this->adRepository->createOne($data);

    $this->logger->info('Ad Created ');
    return $this->respond($payload);
  }
}

