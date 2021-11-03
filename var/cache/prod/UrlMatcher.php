<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/quantrihethong/login' => [[['_route' => 'admin_login', '_controller' => 'Eccube\\Controller\\Admin\\AdminController::login'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong' => [[['_route' => 'admin_homepage', '_controller' => 'Eccube\\Controller\\Admin\\AdminController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], true, false, null]],
        '/quantrihethong/sale_chart' => [[['_route' => 'admin_homepage_sale', '_controller' => 'Eccube\\Controller\\Admin\\AdminController::sale'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/change_password' => [[['_route' => 'admin_change_password', '_controller' => 'Eccube\\Controller\\Admin\\AdminController::changePassword'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/search_nonstock' => [[['_route' => 'admin_homepage_nonstock', '_controller' => 'Eccube\\Controller\\Admin\\AdminController::searchNonStockProducts'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/search_customer' => [[['_route' => 'admin_homepage_customer', '_controller' => 'Eccube\\Controller\\Admin\\AdminController::searchCustomer'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/content/block' => [[['_route' => 'admin_content_block', '_controller' => 'Eccube\\Controller\\Admin\\Content\\BlockController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/content/block/new' => [[['_route' => 'admin_content_block_new', '_controller' => 'Eccube\\Controller\\Admin\\Content\\BlockController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/content/cache' => [[['_route' => 'admin_content_cache', '_controller' => 'Eccube\\Controller\\Admin\\Content\\CacheController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/content/css' => [[['_route' => 'admin_content_css', '_controller' => 'Eccube\\Controller\\Admin\\Content\\CssController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/content/file_manager' => [[['_route' => 'admin_content_file', '_controller' => 'Eccube\\Controller\\Admin\\Content\\FileController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/content/file_view' => [[['_route' => 'admin_content_file_view', '_controller' => 'Eccube\\Controller\\Admin\\Content\\FileController::view'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/content/file_delete' => [[['_route' => 'admin_content_file_delete', '_controller' => 'Eccube\\Controller\\Admin\\Content\\FileController::delete'], null, ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/content/file_download' => [[['_route' => 'admin_content_file_download', '_controller' => 'Eccube\\Controller\\Admin\\Content\\FileController::download'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/content/js' => [[['_route' => 'admin_content_js', '_controller' => 'Eccube\\Controller\\Admin\\Content\\JsController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/content/layout' => [[['_route' => 'admin_content_layout', '_controller' => 'Eccube\\Controller\\Admin\\Content\\LayoutController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/content/layout/new' => [[['_route' => 'admin_content_layout_new', '_controller' => 'Eccube\\Controller\\Admin\\Content\\LayoutController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/content/layout/view_block' => [[['_route' => 'admin_content_layout_view_block', '_controller' => 'Eccube\\Controller\\Admin\\Content\\LayoutController::viewBlock'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/content/maintenance' => [[['_route' => 'admin_content_maintenance', '_controller' => 'Eccube\\Controller\\Admin\\Content\\MaintenanceController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/content/news' => [[['_route' => 'admin_content_news', '_controller' => 'Eccube\\Controller\\Admin\\Content\\NewsController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/content/news/new' => [[['_route' => 'admin_content_news_new', '_controller' => 'Eccube\\Controller\\Admin\\Content\\NewsController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/content/page' => [[['_route' => 'admin_content_page', '_controller' => 'Eccube\\Controller\\Admin\\Content\\PageController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/content/page/new' => [[['_route' => 'admin_content_page_new', '_controller' => 'Eccube\\Controller\\Admin\\Content\\PageController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/customer' => [[['_route' => 'admin_customer', '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/customer/export' => [[['_route' => 'admin_customer_export', '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerController::export'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/customer/new' => [[['_route' => 'admin_customer_new', '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerEditController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/order/shipping_csv_upload' => [[['_route' => 'admin_shipping_csv_import', '_controller' => 'Eccube\\Controller\\Admin\\Order\\CsvImportController::csvShipping'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/order/csv_template' => [[['_route' => 'admin_shipping_csv_template', '_controller' => 'Eccube\\Controller\\Admin\\Order\\CsvImportController::csvTemplate'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/order/new' => [[['_route' => 'admin_order_new', '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/order/search/customer/html' => [[['_route' => 'admin_order_search_customer_html', '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::searchCustomerHtml'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/order/search/customer/id' => [[['_route' => 'admin_order_search_customer_by_id', '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::searchCustomerById'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/order/search/product' => [[['_route' => 'admin_order_search_product', '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::searchProduct'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/order/search/order_item_type' => [[['_route' => 'admin_order_search_order_item_type', '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::searchOrderItemType'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/order/mail/view' => [[['_route' => 'admin_order_mail_view', '_controller' => 'Eccube\\Controller\\Admin\\Order\\MailController::view'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/order' => [[['_route' => 'admin_order', '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/order/bulk_delete' => [[['_route' => 'admin_order_bulk_delete', '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::bulkDelete'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/order/export/order' => [[['_route' => 'admin_order_export_order', '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::exportOrder'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/order/export/shipping' => [[['_route' => 'admin_order_export_shipping', '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::exportShipping'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/order/export/pdf' => [[['_route' => 'admin_order_export_pdf', '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::exportPdf'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/order/export/pdf/download' => [[['_route' => 'admin_order_pdf_download', '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::exportPdfDownload'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/product/category' => [[['_route' => 'admin_product_category', '_controller' => 'Eccube\\Controller\\Admin\\Product\\CategoryController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/product/category/sort_no/move' => [[['_route' => 'admin_product_category_sort_no_move', '_controller' => 'Eccube\\Controller\\Admin\\Product\\CategoryController::moveSortNo'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/product/category/export' => [[['_route' => 'admin_product_category_export', '_controller' => 'Eccube\\Controller\\Admin\\Product\\CategoryController::export'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/product/class_category/sort_no/move' => [[['_route' => 'admin_product_class_category_sort_no_move', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassCategoryController::moveSortNo'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/product/class_name' => [[['_route' => 'admin_product_class_name', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassNameController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/product/class_name/sort_no/move' => [[['_route' => 'admin_product_class_name_sort_no_move', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassNameController::moveSortNo'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/product/product_csv_upload' => [[['_route' => 'admin_product_csv_import', '_controller' => 'Eccube\\Controller\\Admin\\Product\\CsvImportController::csvProduct'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/product/category_csv_upload' => [[['_route' => 'admin_product_category_csv_import', '_controller' => 'Eccube\\Controller\\Admin\\Product\\CsvImportController::csvCategory'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/product/csv_split' => [[['_route' => 'admin_product_csv_split', '_controller' => 'Eccube\\Controller\\Admin\\Product\\CsvImportController::splitCsv'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/product/csv_split_import' => [[['_route' => 'admin_product_csv_split_import', '_controller' => 'Eccube\\Controller\\Admin\\Product\\CsvImportController::importCsv'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/product/csv_split_cleanup' => [[['_route' => 'admin_product_csv_split_cleanup', '_controller' => 'Eccube\\Controller\\Admin\\Product\\CsvImportController::cleanupSplitCsv'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/product' => [[['_route' => 'admin_product', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/product/product/image/add' => [[['_route' => 'admin_product_image_add', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::addImage'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/product/product/new' => [[['_route' => 'admin_product_product_new', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/product/export' => [[['_route' => 'admin_product_export', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::export'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/product/tag' => [[['_route' => 'admin_product_tag', '_controller' => 'Eccube\\Controller\\Admin\\Product\\TagController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/product/tag/sort_no/move' => [[['_route' => 'admin_product_tag_sort_no_move', '_controller' => 'Eccube\\Controller\\Admin\\Product\\TagController::moveSortNo'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/shop/delivery' => [[['_route' => 'admin_setting_shop_delivery', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/shop/delivery/new' => [[['_route' => 'admin_setting_shop_delivery_new', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/shop/delivery/sort_no/move' => [[['_route' => 'admin_setting_shop_delivery_sort_no_move', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController::moveSortNo'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/shop/mail' => [[['_route' => 'admin_setting_shop_mail', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\MailController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/shop/mail/preview' => [[['_route' => 'admin_setting_shop_mail_preview', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\MailController::preview'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/shop/order_status' => [[['_route' => 'admin_setting_shop_order_status', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\OrderStatusController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/shop/payment' => [[['_route' => 'admin_setting_shop_payment', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/shop/payment/new' => [[['_route' => 'admin_setting_shop_payment_new', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/shop/payment/image/add' => [[['_route' => 'admin_payment_image_add', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::imageAdd'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/shop/payment/sort_no/move' => [[['_route' => 'admin_setting_shop_payment_sort_no_move', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::moveSortNo'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/shop' => [[['_route' => 'admin_setting_shop', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\ShopController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/shop/tax' => [[['_route' => 'admin_setting_shop_tax', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\TaxRuleController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/shop/tax/new' => [[['_route' => 'admin_setting_shop_tax_new', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\TaxRuleController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/system/authority' => [[['_route' => 'admin_setting_system_authority', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\AuthorityController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/system/log' => [[['_route' => 'admin_setting_system_log', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\LogController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/system/login_history' => [[['_route' => 'admin_setting_system_login_history', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\LoginHistoryController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/system/masterdata' => [[['_route' => 'admin_setting_system_masterdata', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MasterdataController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/system/masterdata/edit' => [[['_route' => 'admin_setting_system_masterdata_edit', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MasterdataController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/system/member' => [[['_route' => 'admin_setting_system_member', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MemberController::index'], null, ['GET' => 0, 'PUT' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/system/member/new' => [[['_route' => 'admin_setting_system_member_new', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MemberController::create'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/system/security' => [[['_route' => 'admin_setting_system_security', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\SecurityController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/system/system' => [[['_route' => 'admin_setting_system_system', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\SystemController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/system/system/phpinfo' => [[['_route' => 'admin_setting_system_system_phpinfo', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\SystemController::phpinfo'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/two_factor_auth/auth' => [[['_route' => 'admin_two_factor_auth', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\TwoFactorAuthController::auth'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/two_factor_auth/set' => [[['_route' => 'admin_two_factor_auth_set', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\TwoFactorAuthController::set'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/setting/system/two_factor_auth/edit' => [[['_route' => 'admin_setting_system_two_factor_auth_edit', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\TwoFactorAuthController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/store/plugin/api/search' => [[['_route' => 'admin_store_plugin_owners_search', '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::search'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/store/plugin/api/install' => [[['_route' => 'admin_store_plugin_api_install', '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::apiInstall'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/store/plugin/api/upgrade' => [[['_route' => 'admin_store_plugin_api_upgrade', '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::apiUpgrade'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/store/plugin/api/schema_update' => [[['_route' => 'admin_store_plugin_api_schema_update', '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::apiSchemaUpdate'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/store/plugin/api/update' => [[['_route' => 'admin_store_plugin_api_update', '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::apiUpdate'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/store/plugin' => [[['_route' => 'admin_store_plugin', '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/store/plugin/install' => [[['_route' => 'admin_store_plugin_install', '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::install'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/store/plugin/authentication_setting' => [[['_route' => 'admin_store_authentication_setting', '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::authenticationSetting'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/store/template' => [[['_route' => 'admin_store_template', '_controller' => 'Eccube\\Controller\\Admin\\Store\\TemplateController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/store/template/install' => [[['_route' => 'admin_store_template_install', '_controller' => 'Eccube\\Controller\\Admin\\Store\\TemplateController::install'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/block/cart' => [[['_route' => 'block_cart', '_controller' => 'Eccube\\Controller\\Block\\CartController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/block/cart_sp' => [[['_route' => 'block_cart_sp', '_controller' => 'Eccube\\Controller\\Block\\CartController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/block/search_product' => [[['_route' => 'block_search_product', '_controller' => 'Eccube\\Controller\\Block\\SearchProductController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/block/search_product_sp' => [[['_route' => 'block_search_product_sp', '_controller' => 'Eccube\\Controller\\Block\\SearchProductController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'Eccube\\Controller\\CartController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/contact' => [
            [['_route' => 'contact', '_controller' => 'Eccube\\Controller\\ContactController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null],
            [['_route' => 'contact_confirm', '_controller' => 'Eccube\\Controller\\ContactController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null],
        ],
        '/contact/complete' => [[['_route' => 'contact_complete', '_controller' => 'Eccube\\Controller\\ContactController::complete'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/entry' => [
            [['_route' => 'entry', '_controller' => 'Eccube\\Controller\\EntryController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null],
            [['_route' => 'entry_confirm', '_controller' => 'Eccube\\Controller\\EntryController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null],
        ],
        '/entry/complete' => [[['_route' => 'entry_complete', '_controller' => 'Eccube\\Controller\\EntryController::complete'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/forgot' => [[['_route' => 'forgot', '_controller' => 'Eccube\\Controller\\ForgotController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/forgot/complete' => [[['_route' => 'forgot_complete', '_controller' => 'Eccube\\Controller\\ForgotController::complete'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/help/tradelaw' => [[['_route' => 'help_tradelaw', '_controller' => 'Eccube\\Controller\\HelpController::tradelaw'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/guide' => [[['_route' => 'help_guide', '_controller' => 'Eccube\\Controller\\HelpController::guide'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/help/about' => [[['_route' => 'help_about', '_controller' => 'Eccube\\Controller\\HelpController::about'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/help/privacy' => [[['_route' => 'help_privacy', '_controller' => 'Eccube\\Controller\\HelpController::privacy'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/help/agreement' => [[['_route' => 'help_agreement', '_controller' => 'Eccube\\Controller\\HelpController::agreement'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/install/plugins' => [[['_route' => 'install_plugins', '_controller' => 'Eccube\\Controller\\InstallPluginController::plugins'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/install/plugin/redirect' => [[['_route' => 'install_plugin_redirect', '_controller' => 'Eccube\\Controller\\InstallPluginController::redirectAdmin'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/install' => [[['_route' => 'install', '_controller' => 'Eccube\\Controller\\Install\\InstallController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/install/step1' => [[['_route' => 'install_step1', '_controller' => 'Eccube\\Controller\\Install\\InstallController::step1'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/install/step2' => [[['_route' => 'install_step2', '_controller' => 'Eccube\\Controller\\Install\\InstallController::step2'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/install/step3' => [[['_route' => 'install_step3', '_controller' => 'Eccube\\Controller\\Install\\InstallController::step3'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/install/step4' => [[['_route' => 'install_step4', '_controller' => 'Eccube\\Controller\\Install\\InstallController::step4'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/install/step5' => [[['_route' => 'install_step5', '_controller' => 'Eccube\\Controller\\Install\\InstallController::step5'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/install/complete' => [[['_route' => 'install_complete', '_controller' => 'Eccube\\Controller\\Install\\InstallController::complete'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/mypage/change' => [[['_route' => 'mypage_change', '_controller' => 'Eccube\\Controller\\Mypage\\ChangeController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/mypage/change_complete' => [[['_route' => 'mypage_change_complete', '_controller' => 'Eccube\\Controller\\Mypage\\ChangeController::complete'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/mypage/delivery' => [[['_route' => 'mypage_delivery', '_controller' => 'Eccube\\Controller\\Mypage\\DeliveryController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/mypage/delivery/new' => [[['_route' => 'mypage_delivery_new', '_controller' => 'Eccube\\Controller\\Mypage\\DeliveryController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/mypage/login' => [[['_route' => 'mypage_login', '_controller' => 'Eccube\\Controller\\Mypage\\MypageController::login'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/mypage' => [[['_route' => 'mypage', '_controller' => 'Eccube\\Controller\\Mypage\\MypageController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], true, false, null]],
        '/mypage/favorite' => [[['_route' => 'mypage_favorite', '_controller' => 'Eccube\\Controller\\Mypage\\MypageController::favorite'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/mypage/withdraw' => [
            [['_route' => 'mypage_withdraw', '_controller' => 'Eccube\\Controller\\Mypage\\WithdrawController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null],
            [['_route' => 'mypage_withdraw_confirm', '_controller' => 'Eccube\\Controller\\Mypage\\WithdrawController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null],
        ],
        '/mypage/withdraw_complete' => [[['_route' => 'mypage_withdraw_complete', '_controller' => 'Eccube\\Controller\\Mypage\\WithdrawController::complete'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping/nonmember' => [[['_route' => 'shopping_nonmember', '_controller' => 'Eccube\\Controller\\NonMemberShoppingController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping/customer' => [[['_route' => 'shopping_customer', '_controller' => 'Eccube\\Controller\\NonMemberShoppingController::customer'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/products/list' => [[['_route' => 'product_list', '_controller' => 'Eccube\\Controller\\ProductController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping/shipping_multiple' => [[['_route' => 'shopping_shipping_multiple', '_controller' => 'Eccube\\Controller\\ShippingMultipleController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping/shipping_multiple_edit' => [[['_route' => 'shopping_shipping_multiple_edit', '_controller' => 'Eccube\\Controller\\ShippingMultipleController::shippingMultipleEdit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping' => [[['_route' => 'shopping', '_controller' => 'Eccube\\Controller\\ShoppingController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping/redirect_to' => [[['_route' => 'shopping_redirect_to', '_controller' => 'Eccube\\Controller\\ShoppingController::redirectTo'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping/confirm' => [[['_route' => 'shopping_confirm', '_controller' => 'Eccube\\Controller\\ShoppingController::confirm'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping/checkout' => [[['_route' => 'shopping_checkout', '_controller' => 'Eccube\\Controller\\ShoppingController::checkout'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping/complete' => [[['_route' => 'shopping_complete', '_controller' => 'Eccube\\Controller\\ShoppingController::complete'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping/login' => [[['_route' => 'shopping_login', '_controller' => 'Eccube\\Controller\\ShoppingController::login'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/shopping/error' => [[['_route' => 'shopping_error', '_controller' => 'Eccube\\Controller\\ShoppingController::error'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/sitemap.xml' => [[['_route' => 'sitemap_xml', '_controller' => 'Eccube\\Controller\\SitemapController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/sitemap_category.xml' => [[['_route' => 'sitemap_category_xml', '_controller' => 'Eccube\\Controller\\SitemapController::category'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/sitemap_page.xml' => [[['_route' => 'sitemap_page_xml', '_controller' => 'Eccube\\Controller\\SitemapController::page'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'Eccube\\Controller\\TopController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/logout' => [[['_route' => 'admin_logout'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/graphiql' => [[['_route' => 'admin_api_graphiql', '_controller' => 'Plugin\\Api\\Controller\\Admin\\GraphiQLController::graphiql'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/graphiql/api' => [[['_route' => 'admin_api_graphiql_api', '_controller' => 'Plugin\\Api\\Controller\\Admin\\GraphiQLController::index'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/api/config' => [[['_route' => 'admin_api_config', '_controller' => 'Plugin\\Api\\Controller\\Admin\\OAuthController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/api/oauth' => [[['_route' => 'admin_api_oauth', '_controller' => 'Plugin\\Api\\Controller\\Admin\\OAuthController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/api/oauth/new' => [[['_route' => 'admin_api_oauth_new', '_controller' => 'Plugin\\Api\\Controller\\Admin\\OAuthController::create'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/api/oauth/clear_expired_tokens' => [[['_route' => 'admin_api_oauth_clear_expired_tokens', '_controller' => 'Plugin\\Api\\Controller\\Admin\\OAuthController::clearExpiredTokens'], null, ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/api/webhook' => [[['_route' => 'admin_api_webhook', '_controller' => 'Plugin\\Api\\Controller\\Admin\\WebHookController::index'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/api/webhook/new' => [[['_route' => 'admin_api_webhook_new', '_controller' => 'Plugin\\Api\\Controller\\Admin\\WebHookController::edit'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'Plugin\\Api\\Controller\\ApiController::index'], null, ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/authorize' => [[['_route' => 'oauth2_authorize', '_controller' => 'Trikoder\\Bundle\\OAuth2Bundle\\Controller\\AuthorizationController::indexAction'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/token' => [[['_route' => 'oauth2_token', '_controller' => 'Trikoder\\Bundle\\OAuth2Bundle\\Controller\\TokenController::indexAction'], null, ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/site_kit/config' => [[['_route' => 'site_kit_admin_config', '_controller' => 'Plugin\\SiteKit\\Controller\\Admin\\ConfigController::index'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/cube_kit/analytics_callback' => [[['_route' => 'site_kit_analytics_callback', '_controller' => 'Plugin\\SiteKit\\Controller\\Admin\\ConfigController::analyticsCallback'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/cube_kit/action_callback' => [[['_route' => 'site_kit_action_callback', '_controller' => 'Plugin\\SiteKit\\Controller\\Admin\\ConfigController::actionCallback'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/cube_kit/action_callback' => [[['_route' => 'plugin_sitekit_admin_config_actioncallback', '_controller' => 'Plugin\\SiteKit\\Controller\\Admin\\ConfigController::actionCallback'], null, ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/cube_kit/callback' => [[['_route' => 'site_kit_callback', '_controller' => 'Plugin\\SiteKit\\Controller\\Admin\\ConfigController::callback'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
        '/quantrihethong/site_kit/dashboard' => [[['_route' => 'site_kit_dashboard', '_controller' => 'Plugin\\SiteKit\\Controller\\Admin\\DashboardController::showGoogleSearchData'], null, null, ['https' => 0, 'http' => 1], false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/quantrihethong/(?'
                    .'|c(?'
                        .'|ontent/(?'
                            .'|block/(?'
                                .'|(\\d+)/edit(*:59)'
                                .'|(\\d+)/delete(*:78)'
                            .')'
                            .'|layout/(?'
                                .'|(\\d+)/delete(*:108)'
                                .'|(\\d+)/edit(*:126)'
                                .'|(\\d+)/preview(*:147)'
                            .')'
                            .'|news/(?'
                                .'|page(?:/(\\d+))?(*:179)'
                                .'|(\\d+)/edit(*:197)'
                                .'|(\\d+)/delete(*:217)'
                            .')'
                            .'|page/(?'
                                .'|(\\d+)/edit(*:244)'
                                .'|(\\d+)/delete(*:264)'
                            .')'
                        .')'
                        .'|ustomer/(?'
                            .'|page(?:/(\\d+))?(*:300)'
                            .'|(\\d+)/resend(*:320)'
                            .'|(\\d+)/delete(*:340)'
                            .'|(\\d+)/delivery/new(*:366)'
                            .'|(\\d+)/delivery/(\\d+)/edit(*:399)'
                            .'|(\\d+)/delivery/(\\d+)/delete(*:434)'
                            .'|(\\d+)/edit(*:452)'
                        .')'
                    .')'
                    .'|disable_maintenance/(manual|auto_maintenance|auto_maintenance_update)(*:531)'
                    .'|order/(?'
                        .'|(\\d+)/edit(*:558)'
                        .'|search/(?'
                            .'|customer/html/page(?:/(\\d+))?(*:605)'
                            .'|product/page(?:/(\\d+))?(*:636)'
                        .')'
                        .'|(\\d+)/mail(*:655)'
                        .'|page(?:/(\\d+))?(*:678)'
                    .')'
                    .'|s(?'
                        .'|hipping/(?'
                            .'|(\\d+)/order_status(*:720)'
                            .'|(\\d+)/tracking_number(*:749)'
                            .'|(\\d+)/edit(*:767)'
                            .'|preview_notify_mail/(\\d+)(*:800)'
                            .'|notify_mail/(\\d+)(*:825)'
                        .')'
                        .'|etting/s(?'
                            .'|hop/(?'
                                .'|csv(?:/(\\d+))?(*:866)'
                                .'|delivery/(?'
                                    .'|(\\d+)/edit(*:896)'
                                    .'|(\\d+)/delete(*:916)'
                                    .'|(\\d+)/visibility(*:940)'
                                .')'
                                .'|mail/(\\d+)(*:959)'
                                .'|payment/(?'
                                    .'|(\\d+)/edit(*:988)'
                                    .'|(\\d+)/delete(*:1008)'
                                    .'|(\\d+)/visible(*:1030)'
                                .')'
                                .'|tax/(\\d+)/delete(*:1056)'
                            .')'
                            .'|ystem/(?'
                                .'|login_history(?:/(\\d+))?(*:1099)'
                                .'|m(?'
                                    .'|asterdata/([^/]++)/edit(*:1135)'
                                    .'|ember/(?'
                                        .'|(\\d+)/edit(*:1163)'
                                        .'|(\\d+)/up(*:1180)'
                                        .'|(\\d+)/down(*:1199)'
                                        .'|(\\d+)/delete(*:1220)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|tore/(?'
                            .'|plugin/(?'
                                .'|api/(?'
                                    .'|search/page(?:/(\\d+))?(*:1280)'
                                    .'|install/(\\d+)/confirm(*:1310)'
                                    .'|delete/(\\d+)/uninstall(*:1341)'
                                    .'|upgrade/(\\d+)/confirm(*:1371)'
                                .')'
                                .'|(\\d+)/update(*:1393)'
                                .'|(\\d+)/enable(*:1414)'
                                .'|(\\d+)/disable(*:1436)'
                                .'|(\\d+)/uninstall(*:1460)'
                            .')'
                            .'|template/(?'
                                .'|(\\d+)/download(*:1496)'
                                .'|(\\d+)/delete(*:1517)'
                            .')'
                        .')'
                    .')'
                    .'|product/(?'
                        .'|c(?'
                            .'|ategory(?'
                                .'|(?:/(\\d+))?(*:1565)'
                                .'|/(?'
                                    .'|(\\d+)/edit(*:1588)'
                                    .'|(\\d+)/delete(*:1609)'
                                .')'
                            .')'
                            .'|lass(?'
                                .'|_(?'
                                    .'|category/(?'
                                        .'|(\\d+)(*:1648)'
                                        .'|(\\d+)/(\\d+)/edit(*:1673)'
                                        .'|(\\d+)/(\\d+)/delete(*:1700)'
                                        .'|(\\d+)/(\\d+)/visibility(*:1731)'
                                    .')'
                                    .'|name/(?'
                                        .'|(\\d+)/edit(*:1759)'
                                        .'|(\\d+)/delete(*:1780)'
                                    .')'
                                .')'
                                .'|es/(\\d+)/load(*:1804)'
                            .')'
                            .'|sv_template/(\\w+)(*:1831)'
                        .')'
                        .'|p(?'
                            .'|roduct/(?'
                                .'|class/(?'
                                    .'|(\\d+)(*:1869)'
                                    .'|(\\d+)/clear(*:1889)'
                                .')'
                                .'|(\\d+)/edit(*:1909)'
                                .'|(\\d+)/delete(*:1930)'
                                .'|(\\d+)/copy(*:1949)'
                            .')'
                            .'|age(?:/(\\d+))?(*:1973)'
                        .')'
                        .'|bulk/product\\-status/(\\d+)(*:2009)'
                        .'|tag/(\\d+)/delete(*:2034)'
                    .')'
                    .'|api/(?'
                        .'|oauth/delete/(\\w+)(*:2069)'
                        .'|webhook/(?'
                            .'|edit/(\\d+)(*:2099)'
                            .'|delete/(\\d+)(*:2120)'
                        .')'
                    .')'
                .')'
                .'|/cart/(?'
                    .'|(up|down|remove)/(\\d+)(*:2163)'
                    .'|buystep/([a-zA-Z0-9]+[_][\\x20-\\x7E]+)(*:2209)'
                .')'
                .'|/entry/activate/([^/]++)(?:/([^/]++))?(*:2257)'
                .'|/forgot/reset/([^/]++)(*:2288)'
                .'|/install/plugin/(\\w+)/enable(*:2325)'
                .'|/mypage/(?'
                    .'|delivery/(?'
                        .'|(\\d+)/edit(*:2367)'
                        .'|([^/]++)/delete(*:2391)'
                    .')'
                    .'|history/([^/]++)(*:2417)'
                    .'|order/([^/]++)(*:2440)'
                    .'|favorite/(\\d+)/delete(*:2470)'
                .')'
                .'|/products/(?'
                    .'|detail/(\\d+)(*:2505)'
                    .'|add_(?'
                        .'|favorite/(\\d+)(*:2535)'
                        .'|cart/(\\d+)(*:2554)'
                    .')'
                .')'
                .'|/s(?'
                    .'|hopping/shipping(?'
                        .'|/(\\d+)(*:2595)'
                        .'|_edit/(\\d+)(*:2615)'
                    .')'
                    .'|itemap_product_(\\d+)\\.xml(*:2650)'
                .')'
                .'|/user_data/((?:[0-9a-zA-Z_\\-]+\\/?)+(?<!\\/))(*:2703)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        59 => [[['_route' => 'admin_content_block_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Content\\BlockController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        78 => [[['_route' => 'admin_content_block_delete', '_controller' => 'Eccube\\Controller\\Admin\\Content\\BlockController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        108 => [[['_route' => 'admin_content_layout_delete', '_controller' => 'Eccube\\Controller\\Admin\\Content\\LayoutController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        126 => [[['_route' => 'admin_content_layout_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Content\\LayoutController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        147 => [[['_route' => 'admin_content_layout_preview', '_controller' => 'Eccube\\Controller\\Admin\\Content\\LayoutController::preview'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        179 => [[['_route' => 'admin_content_news_page', 'page_no' => 1, '_controller' => 'Eccube\\Controller\\Admin\\Content\\NewsController::index'], ['page_no'], ['GET' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        197 => [[['_route' => 'admin_content_news_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Content\\NewsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        217 => [[['_route' => 'admin_content_news_delete', '_controller' => 'Eccube\\Controller\\Admin\\Content\\NewsController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        244 => [[['_route' => 'admin_content_page_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Content\\PageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        264 => [[['_route' => 'admin_content_page_delete', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Content\\PageController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        300 => [[['_route' => 'admin_customer_page', 'page_no' => null, '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerController::index'], ['page_no'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        320 => [[['_route' => 'admin_customer_resend', '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerController::resend'], ['id'], ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        340 => [[['_route' => 'admin_customer_delete', '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        366 => [[['_route' => 'admin_customer_delivery_new', '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerDeliveryEditController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        399 => [[['_route' => 'admin_customer_delivery_edit', 'did' => null, '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerDeliveryEditController::edit'], ['id', 'did'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        434 => [[['_route' => 'admin_customer_delivery_delete', '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerDeliveryEditController::delete'], ['id', 'did'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        452 => [[['_route' => 'admin_customer_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Customer\\CustomerEditController::index'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        531 => [[['_route' => 'admin_disable_maintenance', '_controller' => 'Eccube\\Controller\\Admin\\Content\\MaintenanceController::disableMaintenance'], ['mode'], ['POST' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        558 => [[['_route' => 'admin_order_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::index'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        605 => [[['_route' => 'admin_order_search_customer_html_page', 'page_no' => null, '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::searchCustomerHtml'], ['page_no'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        636 => [[['_route' => 'admin_order_search_product_page', 'page_no' => null, '_controller' => 'Eccube\\Controller\\Admin\\Order\\EditController::searchProduct'], ['page_no'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        655 => [[['_route' => 'admin_order_mail', '_controller' => 'Eccube\\Controller\\Admin\\Order\\MailController::index'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        678 => [[['_route' => 'admin_order_page', 'page_no' => null, '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::index'], ['page_no'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        720 => [[['_route' => 'admin_shipping_update_order_status', '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::updateOrderStatus'], ['id'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        749 => [[['_route' => 'admin_shipping_update_tracking_number', '_controller' => 'Eccube\\Controller\\Admin\\Order\\OrderController::updateTrackingNumber'], ['id'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        767 => [[['_route' => 'admin_shipping_edit', '_controller' => 'Eccube\\Controller\\Admin\\Order\\ShippingController::index'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        800 => [[['_route' => 'admin_shipping_preview_notify_mail', '_controller' => 'Eccube\\Controller\\Admin\\Order\\ShippingController::previewShippingNotifyMail'], ['id'], ['GET' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        825 => [[['_route' => 'admin_shipping_notify_mail', '_controller' => 'Eccube\\Controller\\Admin\\Order\\ShippingController::notifyMail'], ['id'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        866 => [[['_route' => 'admin_setting_shop_csv', 'id' => 3, '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\CsvController::index'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        896 => [[['_route' => 'admin_setting_shop_delivery_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        916 => [[['_route' => 'admin_setting_shop_delivery_delete', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        940 => [[['_route' => 'admin_setting_shop_delivery_visibility', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\DeliveryController::visibility'], ['id'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        959 => [[['_route' => 'admin_setting_shop_mail_edit', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\MailController::index'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        988 => [[['_route' => 'admin_setting_shop_payment_edit', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        1008 => [[['_route' => 'admin_setting_shop_payment_delete', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1030 => [[['_route' => 'admin_setting_shop_payment_visible', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\PaymentController::visible'], ['id'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1056 => [[['_route' => 'admin_setting_shop_tax_delete', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\Shop\\TaxRuleController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1099 => [[['_route' => 'admin_setting_system_login_history_page', 'page_no' => null, '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\LoginHistoryController::index'], ['page_no'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        1135 => [[['_route' => 'admin_setting_system_masterdata_view', 'entity' => null, '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MasterdataController::index'], ['entity'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        1163 => [[['_route' => 'admin_setting_system_member_edit', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MemberController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        1180 => [[['_route' => 'admin_setting_system_member_up', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MemberController::up'], ['id'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1199 => [[['_route' => 'admin_setting_system_member_down', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MemberController::down'], ['id'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1220 => [[['_route' => 'admin_setting_system_member_delete', '_controller' => 'Eccube\\Controller\\Admin\\Setting\\System\\MemberController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1280 => [[['_route' => 'admin_store_plugin_owners_search_page', 'page_no' => null, '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::search'], ['page_no'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        1310 => [[['_route' => 'admin_store_plugin_install_confirm', '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::doConfirm'], ['id'], ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1341 => [[['_route' => 'admin_store_plugin_api_uninstall', '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::apiUninstall'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1371 => [[['_route' => 'admin_store_plugin_update_confirm', '_controller' => 'Eccube\\Controller\\Admin\\Store\\OwnerStoreController::doUpdateConfirm'], ['id'], ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1393 => [[['_route' => 'admin_store_plugin_update', '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::update'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1414 => [[['_route' => 'admin_store_plugin_enable', '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::enable'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1436 => [[['_route' => 'admin_store_plugin_disable', '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::disable'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1460 => [[['_route' => 'admin_store_plugin_uninstall', '_controller' => 'Eccube\\Controller\\Admin\\Store\\PluginController::uninstall'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1496 => [[['_route' => 'admin_store_template_download', '_controller' => 'Eccube\\Controller\\Admin\\Store\\TemplateController::download'], ['id'], ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1517 => [[['_route' => 'admin_store_template_delete', '_controller' => 'Eccube\\Controller\\Admin\\Store\\TemplateController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1565 => [[['_route' => 'admin_product_category_show', 'parent_id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Product\\CategoryController::index'], ['parent_id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        1588 => [[['_route' => 'admin_product_category_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Product\\CategoryController::index'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        1609 => [[['_route' => 'admin_product_category_delete', '_controller' => 'Eccube\\Controller\\Admin\\Product\\CategoryController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1648 => [[['_route' => 'admin_product_class_category', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassCategoryController::index'], ['class_name_id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        1673 => [[['_route' => 'admin_product_class_category_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassCategoryController::index'], ['class_name_id', 'id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        1700 => [[['_route' => 'admin_product_class_category_delete', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassCategoryController::delete'], ['class_name_id', 'id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1731 => [[['_route' => 'admin_product_class_category_visibility', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassCategoryController::visibility'], ['class_name_id', 'id'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1759 => [[['_route' => 'admin_product_class_name_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassNameController::index'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        1780 => [[['_route' => 'admin_product_class_name_delete', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ClassNameController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1804 => [[['_route' => 'admin_product_classes_load', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::loadProductClasses'], ['id'], ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1831 => [[['_route' => 'admin_product_csv_template', '_controller' => 'Eccube\\Controller\\Admin\\Product\\CsvImportController::csvTemplate'], ['type'], ['GET' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        1869 => [[['_route' => 'admin_product_product_class', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductClassController::index'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        1889 => [[['_route' => 'admin_product_product_class_clear', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductClassController::clearProductClasses'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1909 => [[['_route' => 'admin_product_product_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        1930 => [[['_route' => 'admin_product_product_delete', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1949 => [[['_route' => 'admin_product_product_copy', 'id' => null, '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::copy'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        1973 => [[['_route' => 'admin_product_page', 'page_no' => null, '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::index'], ['page_no'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        2009 => [[['_route' => 'admin_product_bulk_product_status', '_controller' => 'Eccube\\Controller\\Admin\\Product\\ProductController::bulkProductStatus'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        2034 => [[['_route' => 'admin_product_tag_delete', '_controller' => 'Eccube\\Controller\\Admin\\Product\\TagController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        2069 => [[['_route' => 'admin_api_oauth_delete', '_controller' => 'Plugin\\Api\\Controller\\Admin\\OAuthController::delete'], ['identifier'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        2099 => [[['_route' => 'admin_api_webhook_edit', '_controller' => 'Plugin\\Api\\Controller\\Admin\\WebHookController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        2120 => [[['_route' => 'admin_api_webhook_delete', '_controller' => 'Plugin\\Api\\Controller\\Admin\\WebHookController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        2163 => [[['_route' => 'cart_handle_item', '_controller' => 'Eccube\\Controller\\CartController::handleCartItem'], ['operation', 'productClassId'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        2209 => [[['_route' => 'cart_buystep', '_controller' => 'Eccube\\Controller\\CartController::buystep'], ['cart_key'], ['GET' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        2257 => [[['_route' => 'entry_activate', 'qtyInCart' => null, '_controller' => 'Eccube\\Controller\\EntryController::activate'], ['secret_key', 'qtyInCart'], ['GET' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        2288 => [[['_route' => 'forgot_reset', '_controller' => 'Eccube\\Controller\\ForgotController::reset'], ['reset_key'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        2325 => [[['_route' => 'install_plugin_enable', '_controller' => 'Eccube\\Controller\\InstallPluginController::pluginEnable'], ['code'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        2367 => [[['_route' => 'mypage_delivery_edit', 'id' => null, '_controller' => 'Eccube\\Controller\\Mypage\\DeliveryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, false, null]],
        2391 => [[['_route' => 'mypage_delivery_delete', '_controller' => 'Eccube\\Controller\\Mypage\\DeliveryController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        2417 => [[['_route' => 'mypage_history', '_controller' => 'Eccube\\Controller\\Mypage\\MypageController::history'], ['order_no'], ['GET' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        2440 => [[['_route' => 'mypage_order', '_controller' => 'Eccube\\Controller\\Mypage\\MypageController::order'], ['order_no'], ['PUT' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        2470 => [[['_route' => 'mypage_favorite_delete', '_controller' => 'Eccube\\Controller\\Mypage\\MypageController::delete'], ['id'], ['DELETE' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        2505 => [[['_route' => 'product_detail', '_controller' => 'Eccube\\Controller\\ProductController::detail'], ['id'], ['GET' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        2535 => [[['_route' => 'product_add_favorite', '_controller' => 'Eccube\\Controller\\ProductController::addFavorite'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        2554 => [[['_route' => 'product_add_cart', '_controller' => 'Eccube\\Controller\\ProductController::addCart'], ['id'], ['POST' => 0], ['https' => 0, 'http' => 1], false, true, null]],
        2595 => [[['_route' => 'shopping_shipping', '_controller' => 'Eccube\\Controller\\ShoppingController::shipping'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        2615 => [[['_route' => 'shopping_shipping_edit', '_controller' => 'Eccube\\Controller\\ShoppingController::shippingEdit'], ['id'], ['GET' => 0, 'POST' => 1], ['https' => 0, 'http' => 1], false, true, null]],
        2650 => [[['_route' => 'sitemap_product_xml', '_controller' => 'Eccube\\Controller\\SitemapController::product'], ['page'], ['GET' => 0], ['https' => 0, 'http' => 1], false, false, null]],
        2703 => [
            [['_route' => 'user_data', '_controller' => 'Eccube\\Controller\\UserDataController::index'], ['route'], ['GET' => 0], ['https' => 0, 'http' => 1], false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
