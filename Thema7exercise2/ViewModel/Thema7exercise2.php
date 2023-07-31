<?php
namespace Perspective\Thema7exercise2\ViewModel;

class Thema7exercise2 implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @var \Magento\Checkout\Model\Cart
     */
    private $_cart;

    /**
     * @var \Magento\Checkout\Model\Session
     */
    private $_checkoutSession;

    public function __construct(
        \Magento\Checkout\Model\Cart $cart,
        \Magento\Checkout\Model\Session $checkoutSession
    )
    {
        $this->_cart = $cart;
        $this->_checkoutSession = $checkoutSession;
        
    }

    public function getCart()
    {		
		return $this->_cart;
    }
	
    public function getCheckoutSession()
    {
		return $this->_checkoutSession;
    }

}
