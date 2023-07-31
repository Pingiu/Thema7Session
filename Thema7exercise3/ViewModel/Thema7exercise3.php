<?php
namespace Perspective\Thema7exercise3\ViewModel;

class Thema7exercise3 implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @var \Magento\Checkout\Model\Session 
     */
    private $_checkoutSession;

    /**
     * @var \Magento\Wishlist\Model\Wishlist
     */
    private $_wishlist;

    public function __construct(
        \Magento\Customer\Model\Session  $checkoutSession,
        \Magento\Wishlist\Model\Wishlist $wishlist
    )
    {
        $this->_checkoutSession = $checkoutSession;
        $this->_wishlist = $wishlist;
        
    }
    public function getSession()
    {

        return $this->_checkoutSession->getCustomerId();
    }

    public function getWishlistByCustomerId($customerId)
    {
        $wishlist = $this->_wishlist->loadByCustomerId($customerId)->getItemCollection();
        return $wishlist;
    }    
}
