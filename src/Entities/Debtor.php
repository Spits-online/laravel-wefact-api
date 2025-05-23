<?php

namespace Spits\WeFactApi\Entities;

use Spits\WeFactApi\Traits\HasAttachments;

class Debtor extends BaseEntity
{
    use HasAttachments;

    public string $controller = 'debtor';


}