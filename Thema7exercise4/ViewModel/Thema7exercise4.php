<?php
namespace Perspective\Thema7exercise4\ViewModel;

class Thema7exercise4 implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @var \Magento\Backend\Model\Session\Quote
     */
    private $_quote;

    public function __construct(
        \Magento\Backend\Model\Session\Quote $quote
    )
    {
        $this->_quote = $quote;
        
    }
    public function getBackendQuote(){
        $quote = $this->_quote->getQuote();
        return $quote;
    }
}
