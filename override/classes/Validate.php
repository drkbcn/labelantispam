<?php
/**
* 2019 Labelgrup
*
* NOTICE OF LICENSE
*
* READ ATTACHED LICENSE.TXT
*
*  @author    Manel Alonso <malonso@labelgrup.com>
*  @copyright 2019 Labelgrup
*  @license   LICENSE.TXT
*/

class Validate extends ValidateCore
{
    /**
     * Check for name validity
     *
     * @param string $name Name to validate
     * @return bool Validity is ok or not
     */
    public static function isCustomerName($name)
    {
        if (preg_match(Tools::cleanNonUnicodeSupport('/www|http/ui'), $name)) {
            return false;
        }

        return preg_match(Tools::cleanNonUnicodeSupport('/^[^0-9!\[\]<>,;?=+()@#"°{}_$%:\/\\\*\^]*$/u'), $name);
    }
}
