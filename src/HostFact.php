<?php

namespace Spits\WeFactApi;

use Spits\WeFactApi\Entities\CreditInvoice;
use Spits\WeFactApi\Entities\Creditor;
use Spits\WeFactApi\Entities\Debtor;
use Spits\WeFactApi\Entities\DomainContact;
use Spits\WeFactApi\Entities\Group;
use Spits\WeFactApi\Entities\Hosting;
use Spits\WeFactApi\Entities\Invoice;
use Spits\WeFactApi\Entities\Product;
use Spits\WeFactApi\Entities\Quote;
use Spits\WeFactApi\Entities\Service;
use Spits\WeFactApi\Entities\Ssl;
use Spits\WeFactApi\Entities\Subscription;
use Spits\WeFactApi\Entities\Ticket;
use Spits\WeFactApi\Entities\Vps;

class HostFact
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \JsonException
     */
    public static function creditor(int $Identifier = null): Creditor
    {
        return new Creditor($Identifier);
    }

    /**
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonException
     */
    public static function creditInvoice(int $Identifier = null): CreditInvoice
    {
        return new CreditInvoice($Identifier);
    }

    /**
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonException
     */
    public static function debtor(int $Identifier = null): Debtor
    {
        return new Debtor($Identifier);
    }

    /**
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonException
     */
    public static function domainContact(int $Identifier = null): DomainContact
    {
        return new DomainContact($Identifier);
    }

    /**
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonException
     */
    public static function group(int $Identifier = null): Group
    {
        return new Group($Identifier);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \JsonException
     */
    public static function hosting(int $Identifier = null): Hosting
    {
        return new Hosting($Identifier);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \JsonException
     */
    public static function invoice(int $Identifier = null): Invoice
    {
        return new Invoice($Identifier);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \JsonException
     */
    public static function product(int $Identifier = null): Product
    {
        return new Product($Identifier);
    }

    /**
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonException
     */
    public static function quote(int $Identifier = null): Quote
    {
        return new Quote($Identifier);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \JsonException
     */
    public static function service(int $Identifier = null): Service
    {
        return new Service($Identifier);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \JsonException
     */
    public static function ssl(int $Identifier = null): Ssl
    {
        return new Ssl($Identifier);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \JsonException
     */
    public static function subscription(int $Identifier = null): Subscription
    {
        return new Subscription($Identifier);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \JsonException
     */
    public static function ticket(int $Identifier = null): Ticket
    {
        return new Ticket($Identifier);
    }

    /**
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonException
     */
    public static function vps(int $Identifier = null): Vps
    {
        return new Vps($Identifier);
    }
}