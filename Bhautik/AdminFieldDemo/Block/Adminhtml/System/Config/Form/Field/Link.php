<?php
namespace Bhautik\AdminFieldDemo\Block\Adminhtml\System\Config\Form\Field;

class Link extends \Magento\Config\Block\System\Config\Form\Field
{
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $element->unsScope()->unsCanUseWebsiteValue()->unsCanUseDefaultValue();
        return parent::render($element);
    }

    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        return sprintf(
            '<a href ="%s">%s</a>',
            rtrim($this->_urlBuilder->getUrl('sales/order/index'), '/'), //You need to change this link (Use your grid link like 'sales/order/index' will redirect you on order grid page.)
            __('sales/order/index')
        );
    }
}
