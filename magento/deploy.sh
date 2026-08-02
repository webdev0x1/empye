rm -rf var/view_preprocessed/* var/sessions/* generated/code/* pub/static/frontend/* pub/static/adminhtml/* var/cache/* var/page_cache/*
php bin/magento setup:upgrade && php bin/magento setup:di:compile
php bin/magento s:s:d
php bin/magento c:f
