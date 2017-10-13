<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.10.2017
 * Time: 15:22
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="transaction")
 */
class Transaction
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $amount;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string")
     */
    private $my_offset;

    /**
     * @ORM\Column(type="string")
     */
    private $my_limit;

    /**
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="transactions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $customer;

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getMyOffset()
    {
        return $this->my_offset;
    }

    /**
     * @param mixed $my_offset
     */
    public function setMyOffset($my_offset)
    {
        $this->my_offset = $my_offset;
    }

    /**
     * @return mixed
     */
    public function getMyLimit()
    {
        return $this->my_limit;
    }

    /**
     * @param mixed $my_limit
     */
    public function setMyLimit($my_limit)
    {
        $this->my_limit = $my_limit;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }
}