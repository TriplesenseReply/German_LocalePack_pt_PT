<?php
/**
 * @category  German
 * @package   German_LocalePack
 * @authors   MaWoScha <mawoscha@siempro.co, http://www.siempro.co/>
 * @developer MaWoScha <mawoscha@siempro.co, http://www.siempro.co/>
 * @version   0.1.0
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class German_LocalePackPt_Block_System_Config_Form_Fieldset_Instructions
    extends Mage_Adminhtml_Block_System_Config_Form_Fieldset
{
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $helper = Mage::helper("localepackpt");

        $html  = $this->_getHeaderHtml($element);
        $html .= "<p style='font-weight:bold;'>";
        $html .= $helper->__("The <span style='color:red'>%s</span> language pack in version <span style='color:red'>%s</span> has been successfully installed.",
        		(string)Mage::app()->getConfig()->getNode('modules/German_LocalePackPt/locale'),
        		(string)Mage::app()->getConfig()->getNode('modules/German_LocalePackPt/version') );
        $html .= "</p>";
        $html .= "<p style='margin-top:20pt;'>";
		$html .= $helper->__("On the <a href='%s'>Magento Connect page of the Portuguese language pack</a>, you can find more information on the latest versions.",
				(string)Mage::app()->getConfig()->getNode('modules/German_LocalePackPt/link_mage') );
        $html .= "</p>";
        $html .= "<p style='margin-top:20pt;'>";
		$html .= $helper->__("For those interested there is a <a href='%s'>GitHub repository</a>. It is provided for the following purposes:",
				(string)Mage::app()->getConfig()->getNode('modules/German_LocalePackPt/link_git') );
        $html .= "</p>";

		$html .= "<ul style='list-style-position: outside; list-style-type: disc; margin-left:18px;'>";
		$html .= "<li>".$helper->__("Development of current language pack versions")."</li>";
		$html .= "<li>".$helper->__("Report an error / send in patches, also happy for both published releases")."</li>";
		$html .= "<li>".$helper->__("Alternative Downloads (regardless of official sources)")."</li>";
		$html .= "<li>".$helper->__("Copy / forks for their own purposes")."</li>";
		$html .= "<li>".$helper->__("Active participation in the language pack")."</li>";
		$html .= "<li>".$helper->__("View Preview versions & test")."</li>";
		$html .= '</ul>';

        $html .= "<p style='margin-top:20pt;'>";
		$html .= $helper->__("Note for detailed information, the README file on the GitHub page.");
        $html .= "</p>";
        $html .= "<p style='font-weight:bold;'>";
		$html .= $helper->__("In order to ensure the translation Magento coverage, please see the information in the lower paragraphs!");
        $html .= "</p>";
        $html .= "<p style='text-align:right;'>";
		$html .= $helper->__("powered by <a>Me</a>");
        $html .= "</p>";
        $html .= $this->_getFooterHtml($element);

        return $html;
    }
}