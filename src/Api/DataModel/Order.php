<?php

namespace ConnectID\Api\DataModel;

class Order {

  /**
   * @var string
   */
  protected $externalOrderId;

  /**
   * @var \DateTimeImmutable
   */
  protected $orderDate;

  /**
   * @var string
   */
  protected $paymentMethod;

  /**
   * @var float
   */
  protected $orderAmount;

  /**
   * @var string
   */
  protected $currency;

  /**
   * @var string
   */
  protected $marketingCouponCode;

  /**
   * @var int
   */
  protected $marketingCouponNumber;

  /**
   * @var string
   */
  protected $companyCode;

  /**
   * @var string
   */
  protected $customerReference;

  /**
   * @var \ConnectID\Api\DataModel\Address
   */
  protected $payer;

  /**
   * @var \ConnectID\Api\DataModel\OrderLineList
   */
  protected $orderLines;

  /**
   * @var bool
   */
  protected $prepaid;

  /**
   * @var \ConnectID\Api\DataModel\PaymentIndo
   */
  protected $paymentInfo;

  /**
   * @return string
   */
  public function getExternalOrderId(): string {
    return $this->externalOrderId;
  }

  /**
   * @param string $externalOrderId
   *
   * @return Order
   */
  public function withExternalOrderId(string $externalOrderId): Order {
    $this->externalOrderId = $externalOrderId;
    return $this;
  }

  /**
   * @return \DateTimeImmutable
   */
  public function getOrderDate(): \DateTimeImmutable {
    return $this->orderDate;
  }

  /**
   * @param \DateTimeImmutable $orderDate
   *
   * @return Order
   */
  public function withOrderDate(\DateTimeImmutable $orderDate): Order {
    $this->orderDate = $orderDate;
    return $this;
  }

  /**
   * @return string
   */
  public function getPaymentMethod(): string {
    return $this->paymentMethod;
  }

  /**
   * @param string $paymentMethod
   *
   * @return Order
   */
  public function withPaymentMethod(string $paymentMethod): Order {
    $this->paymentMethod = $paymentMethod;
    return $this;
  }

  /**
   * @return float
   */
  public function getOrderAmount(): float {
    return $this->orderAmount;
  }

  /**
   * @param float $orderAmount
   *
   * @return Order
   */
  public function withOrderAmount(float $orderAmount): Order {
    $this->orderAmount = $orderAmount;
    return $this;
  }

  /**
   * @return string
   */
  public function getCurrency(): string {
    return $this->currency;
  }

  /**
   * @param string $currency
   *
   * @return Order
   */
  public function withCurrency(string $currency): Order {
    $this->currency = $currency;
    return $this;
  }

  /**
   * @return string
   */
  public function getMarketingCouponCode(): string {
    return $this->marketingCouponCode;
  }

  /**
   * @param string $marketingCouponCode
   *
   * @return Order
   */
  public function withMarketingCouponCode(string $marketingCouponCode): Order {
    $this->marketingCouponCode = $marketingCouponCode;
    return $this;
  }

  /**
   * @return int
   */
  public function getMarketingCouponNumber(): int {
    return $this->marketingCouponNumber;
  }

  /**
   * @param int $marketingCouponNumber
   *
   * @return Order
   */
  public function withMarketingCouponNumber(int $marketingCouponNumber): Order {
    $this->marketingCouponNumber = $marketingCouponNumber;
    return $this;
  }

  /**
   * @return string
   */
  public function getCompanyCode(): string {
    return $this->companyCode;
  }

  /**
   * @param string $companyCode
   *
   * @return Order
   */
  public function withCompanyCode(string $companyCode): Order {
    $this->companyCode = $companyCode;
    return $this;
  }

  /**
   * @return string
   */
  public function getCustomerReference(): string {
    return $this->customerReference;
  }

  /**
   * @param string $customerReference
   *
   * @return Order
   */
  public function withCustomerReference(string $customerReference): Order {
    $this->customerReference = $customerReference;
    return $this;
  }

  /**
   * @return \ConnectID\Api\DataModel\Address
   */
  public function getPayer(): \ConnectID\Api\DataModel\Address {
    return $this->payer;
  }

  /**
   * @param \ConnectID\Api\DataModel\Address $payer
   *
   * @return Order
   */
  public function withPayer(\ConnectID\Api\DataModel\Address $payer): Order {
    $this->payer = $payer;
    return $this;
  }

  /**
   * @return \ConnectID\Api\DataModel\OrderLineList
   */
  public function getOrderLines(): \ConnectID\Api\DataModel\OrderLineList {
    return $this->orderLines;
  }


  /**
   * @param \ConnectID\Api\DataModel\OrderLineList $orderLines
   *
   * @return Order
   */
  public function withOrderLine(\ConnectID\Api\DataModel\OrderLine $orderLine): Order {
    if (empty($this->orderLines)) {
      $this->orderLines = new OrderLineList();
    }
    $this->orderLines->append($orderLine);
    return $this;
  }

  /**
   * @param \ConnectID\Api\DataModel\OrderLineList $orderLines
   *
   * @return Order
   */
  public function withOrderLines(\ConnectID\Api\DataModel\OrderLineList $orderLines): Order {
    $this->orderLines = $orderLines;
    return $this;
  }

  /**
   * @return bool
   */
  public function isPrepaid(): bool {
    return $this->prepaid;
  }

  /**
   * @param bool $prepaid
   *
   * @return Order
   */
  public function withPrepaid(bool $prepaid): Order {
    $this->prepaid = $prepaid;
    return $this;
  }

  /**
   * @return \ConnectID\Api\DataModel\PaymentIndo
   */
  public function getPaymentInfo(): \ConnectID\Api\DataModel\PaymentIndo {
    return $this->paymentInfo;
  }

  /**
   * @param \ConnectID\Api\DataModel\PaymentIndo $paymentInfo
   *
   * @return Order
   */
  public function withPaymentInfo(\ConnectID\Api\DataModel\PaymentIndo $paymentInfo): Order {
    $this->paymentInfo = $paymentInfo;
    return $this;
  }
}