<?php

namespace Spits\WeFactApi;

use Spits\WeFactApi\Entities\CreditInvoice;
use Spits\WeFactApi\Entities\Creditor;
use Spits\WeFactApi\Entities\Debtor;
use Spits\WeFactApi\Entities\Group;
use Spits\WeFactApi\Entities\Invoice;
use Spits\WeFactApi\Entities\Product;
use Spits\WeFactApi\Entities\Quote;
use Spits\WeFactApi\Entities\Subscription;

class WeFact
{
    /**
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonException
     */
    public function createInvoice($Identifier = null): Invoice
    {
        return new CreditInvoice($Identifier);
    }

    /**
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonException
     */
    public static function creditor($Identifier = null): Creditor
    {
        return new Creditor($Identifier);
    }

    /**
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonException
     */
    public static function debtor($Identifier = null): Debtor
    {
        return new Debtor($Identifier);
    }

    /**
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonException
     */
    public function group($Identifier = null): Group
    {
        return new Group($Identifier);
    }

    /**
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonException
     */
    public function invoice($Identifier = null): Invoice
    {
        return new Invoice($Identifier);
    }

    /**
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonException
     */
    public function product($Identifier = null): Product
    {
        return new Product($Identifier);
    }

    /**
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonException
     */
    public function quote($Identifier = null): Quote
    {
        return new Quote($Identifier);
    }

    /**
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonException
     */
    public function subscription($Identifier = null): Subscription
    {
        return new Subscription($Identifier);
    }
}