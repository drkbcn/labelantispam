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

if (!defined('_PS_VERSION_')) {
    exit;
}

class Labelantispam extends Module
{
    public function __construct()
    {
        $this->name = 'labelantispam';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Labelgrup';
        $this->need_instance = 0;
        $this->displayName = $this->l('Labelgrup.com AntiSpam');
        $this->description = $this->l('Stop spammers from registering as customers with URL at name/lastname.');

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();
        
        // Compatibilidad PS
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        return parent::install();
    }

    public function uninstall()
    {
        return parent::uninstall();
    }
}
