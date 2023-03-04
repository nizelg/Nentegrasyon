<?php
if (!defined('_PS_VERSION_')) {
    exit;
}
class FL_Shipping_Manager extends Module {
    public function __construct() {
        $this->name = 'nentegrasyon';
        $this->tab = 'AdminParentOrders';
        $this->version = 0.1;
        $this->author = "Nizel Shirogane Lynee aka NizelG";
        $this->need_instance = 0; //Çoklu mağaza uyumsuz
        
        parent::__construct();

        $this->displayName = $this->l('NenTegrasyon');
        $this->description = $this->l('Nentegrasyon, Türk pazaryerleri Trendyol, Hepsiburada, N11 ve Çiçek Sepetindeki ürünleri ve siparişleri tek bir yerden yönetmenizi sağlar. Bu modül, stok, fiyat ve sipariş senkronizasyonu gibi temel özellikleri sunarak, mağazanızın performansını arttırırken müşteri memnuniyetini de sağlar');
        
        $this->confirmUninstall = $this->l('Sonsuza kadar hatırlanacak bir uygulama olmayacak olsam da,
         seninle geçirdiğimiz zamanı asla unutmayacağım. Seni seviyorum ve sana başarılar dilerim...');
        
         public function install()
         {
             $sql = array();
            
            $sql[] = 'CREATE TABLE IF NOT EXISTS ' . _DB_PREFIX_ . 'nen_config (
                id_config INT UNSIGNED NOT NULL AUTO_INCREMENT,
                name VARCHAR(50) NOT NULL,
                value VARCHAR(50) NOT NULL,
                PRIMARY KEY (id_config)
            ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';
            $sql[] = 'INSERT INTO ' . _DB_PREFIX_ . 'nen_config (name, value) VALUES ("trendyol_api_key", "")';
             $sql[] = 'CREATE TABLE IF NOT EXISTS ' . _DB_PREFIX_ . 'nen_trendyol_products (
                 id_trendyol_product INT UNSIGNED NOT NULL AUTO_INCREMENT,
                 trendyol_id VARCHAR(50) NOT NULL,
                 local_id INT UNSIGNED,
                 images_urls TEXT,
                 title varchar(255),
                 PRIMARY KEY (id_trendyol_product)
             ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';
         
             foreach ($sql as $query) {
                 if (!Db::getInstance()->execute($query)) {
                     return false;
                 }
             }
         
             return true;
         }
         
    }
    
    public function uninstall()
    {
        $sql = array();
        $sql[] = 'DROP TABLE IF EXISTS ' . _DB_PREFIX_ . 'nen_trendyol_products';
        foreach ($sql as $query) {
            if (!Db::getInstance()->execute($query)) {
                return false;
            }
        }
        return parent::uninstall();
    }

    public function getContent()
    {
        return $this->display(__FILE__, 'view/config.tpl');
    }

}