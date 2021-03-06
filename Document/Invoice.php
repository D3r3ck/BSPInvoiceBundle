<?php

namespace BSP\InvoiceBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use BSP\InvoiceBundle\Model\Invoice as BaseInvoice;

/**
 * @MongoDB\Document(collection="invoices")
 */
class Invoice extends BaseInvoice
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Int
     */
    protected $status;

    /**
     * @MongoDB\EmbedMany(targetDocument="BSP\InvoiceBundle\Document\InvoiceLine")
     */
    protected $lines;

    /**
     * @MongoDB\Date
     */
    protected $updatedAt;

    /**
     * @MongoDB\Date
     */
    protected $createdAt;

    /**
     * @MongoDB\String
     */
    protected $number;

    /**
     * @MongoDB\EmbedOne(targetDocument="BSP\InvoiceBundle\Document\BillingInfo")
     */
    protected $customer;

    /**
     * @MongoDB\EmbedOne(targetDocument="BSP\InvoiceBundle\Document\BillingInfo")
     */
    protected $provider;

    /**
     * @MongoDB\String
     */
    protected $notes;

    /**
     * @MongoDB\Date
     */
    protected $date;

    /**
     * @MongoDB\Date
     */
    protected $sentAt;

    /**
     * @MongoDB\Date
     */
    protected $payedAt;

    /**
     * @MongoDB\String
     */
    protected $currency;

    /**
     * @MongoDB\Float
     */
    protected $subtotal;

    /**
     * @MongoDB\Float
     */
    protected $total;

    /**
     * @MongoDB\Float
     */
    protected $totalTax;

    public function getId()
    {
        return $this->id;
    }
}
