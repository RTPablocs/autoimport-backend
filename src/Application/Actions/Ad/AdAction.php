<?php
declare(strict_types=1);

namespace App\Application\Actions\Ad;

use App\Application\Actions\Action;
use App\Domain\Ad\AdRepository;
use Psr\Log\LoggerInterface;

abstract class AdAction extends Action {
    protected $adRepository;

    public function __construct(LoggerInterface $logger, AdRepository $adRepository) {
        parent::__construct($logger);
        $this->adRepository = $adRepository;
    }

}