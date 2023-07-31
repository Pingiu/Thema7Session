<?php
namespace Perspective\Thema7exercise1\ViewModel;

class Thema7exercise1 implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @var \Magento\Checkout\Model\Session 
     */
    private $_checkoutSession;

    public function __construct(
        \Magento\Checkout\Model\Session  $checkoutSession
    )
    {
        $this->_checkoutSession = $checkoutSession;
        
    }
    public function getLastRealOrder()
    {
        return $this->_checkoutSession->getLastRealOrder();
    }
    

}
