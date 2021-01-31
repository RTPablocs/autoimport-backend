<?php
declare(strict_types=1);

namespace App\Domain\Ad;
use App\Domain\DomainException\DomainRecordNotFoundException;

class AdNotFoundException extends DomainRecordNotFoundException {
    public $notFound = 'The ad does not exist';

}