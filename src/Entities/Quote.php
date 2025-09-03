<?php

namespace Spits\WeFactApi\Entities;

use Spits\WeFactApi\Exceptions\ApiException;
use Spits\WeFactApi\Traits\HasAttachments;

class Quote extends BaseEntity
{
    use HasAttachments;

    public string $controller = 'pricequote';

    /**
     * Add quote lines to quote.
     * @param array $quoteLines
     * @return $this
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonException
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     */
    public function addQuoteLine(array $quoteLines): self
    {
        $res = $this->request([
            'action' => 'add',
            'controller' => 'pricequoteline',
            'PriceQuoteCode' => $this->PriceQuoteCode,
            'PriceQuoteLines' => $quoteLines
        ]);

        if (!isset($res['pricequote']) || $res['status'] !== 'success') {
            throw new ApiException($res);
        }

        $this->set($res[$this->controller]);

        return $this;
    }

    /**
     * Remove quote lines from quote.
     * @param array $quoteLines
     * @return \Spits\WeFactApi\Entities\Quote
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonException
     * @throws \Spits\WeFactApi\Exceptions\ApiException
     */
    public function removeQuoteLine(array $quoteLines): Quote
    {
        $res = $this->request([
            'action' => 'delete',
            'controller' => 'pricequoteline',
            'PriceQuoteCode' => $this->PriceQuoteCode,
            'PriceQuoteLines' => $quoteLines
        ]);

        if (!isset($res['pricequote']) || $res['status'] !== 'success') {
            throw new ApiException($res);
        }

        $this->set($res[$this->controller]);

        return $this;
    }

    public function accept()
    {
        $res = $this->request([
            'controller' => $this->controller,
            'action' => 'accept',
            'PriceQuoteCode' => $this->PriceQuoteCode,
        ]);

        $this->set($res[$this->controller]);
        return $this;
    }

    public function decline()
    {
        $res = $this->request([
            'controller' => $this->controller,
            'action' => 'decline',
            'PriceQuoteCode' => $this->PriceQuoteCode,
        ]);

        $this->set($res[$this->controller]);
        return $this;
    }
}