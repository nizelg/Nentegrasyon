    <div class="bootstrap">
        <div class="page-head custom-tab">
            <div class="page-head-tabs" id="head_tabs">
                <ul class="nav">
                    <li class="active">
                        <a href="#general" data-toggle="tab">
                            <i class="icon-cogs"></i> {l s='API Bilgileri' mod='nentegrasyon'}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="bootstrap" id="nentegrasyon_configuration">
        <div id="modulecontent" class="clearfix">
            <div class="tab-content row">
                <div class="tab-pane active" id="general">
                    <div class="tab_cap_listing">
                        <form action="">
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="ordersync">
                                    <label class="custom-control-label" for="ordersync">{l s='Sipariş Senkronizasyonu' mod='nentegrasyon'}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="productstocksync">
                                    <label class="custom-control-label" for="productstocksync">{l s='Ürün Stok Senkronizasyonu' mod='nentegrasyon'}</label>
                                </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane" id="tyapi">
                    <div class="tab_cap_listing">
                        {include file="./tabs/tyapi.tpl"}
                    </div>
                </div>
            </div>
        </div>
    </div>
    