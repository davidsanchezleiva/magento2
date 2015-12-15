<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Vault\Api;

use Magento\Sales\Api\Data\OrderPaymentInterface;
use Magento\Vault\Api\Data\PaymentTokenInterface;

/**
 * Gateway vault payment token repository interface.
 *
 * @api
 */
interface PaymentTokenManagementInterface
{
    /**
     * Lists payment tokens that match specified search criteria.
     *
     * @param int $customerId Customer ID.
     * @return \Magento\Vault\Api\Data\PaymentTokenSearchResultsInterface Payment token search result interface.
     */
    public function getListByCustomerId($customerId);

    /**
     * Get payment token by token Id.
     *
     * @param int $paymentId The gateway payment token ID.
     * @return \Magento\Vault\Api\Data\PaymentTokenInterface Payment token interface.
     */
    public function getByPaymentId($paymentId);

    /**
     * Get payment token by gateway token.
     *
     * @param string $token The gateway token.
     * @param string $paymentMethodCode
     * @param int $customerId Customer ID.
     * @return PaymentTokenInterface|null Payment token interface.
     */
    public function getByGatewayToken($token, $paymentMethodCode, $customerId);

    /**
     * @param PaymentTokenInterface $token
     * @param OrderPaymentInterface $payment
     * @return bool
     */
    public function saveTokenWithPaymentLink(PaymentTokenInterface $token, OrderPaymentInterface $payment);
}
