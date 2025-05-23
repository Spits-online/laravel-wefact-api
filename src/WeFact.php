<?php

namespace Spits\WeFactApi;

use Spits\WeFactApi\Entities\Creditor;
use Spits\WeFactApi\Entities\Debtor;
use Spits\WeFactApi\Entities\Group;
use Spits\WeFactApi\Entities\Invoice;
use Spits\WeFactApi\Entities\Product;
use Spits\WeFactApi\Entities\Quote;
use Spits\WeFactApi\Entities\Subscription;

class WeFact
{
    public static function creditor($Identifier = null): Creditor
    {
        return new Creditor($Identifier);
    }

    public static function debtor($Identifier = null): Debtor
    {
        return new Debtor($Identifier);
    }

    public function group($Identifier = null): Group
    {
        return new Group($Identifier);
    }

    public function invoice($Identifier = null): Invoice
    {
        return new Invoice($Identifier);
    }

    public function product($Identifier = null): Product
    {
        return new Product($Identifier);
    }

    public function Quote($Identifier = null): Quote
    {
        return new Quote($Identifier);
    }

    public function subscription($Identifier = null): Subscription
    {
        return new Subscription($Identifier);
    }
}