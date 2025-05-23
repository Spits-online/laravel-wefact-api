<?php

namespace Spits\WeFactApi\Entities;

use Spits\WeFactApi\Traits\HasAttachments;

class Creditor extends BaseEntity
{
    use HasAttachments;

    public string $controller = 'creditor';
}