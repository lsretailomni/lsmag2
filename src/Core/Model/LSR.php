<?php

namespace Ls\Core\Model;

use \Ls\Core\Helper\Data;
use \Ls\Omni\Service\ServiceType;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Store\Api\Data\StoreInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\StoreManagerInterface;

/**
 * Class LSR
 * @package Ls\Core\Model
 */
class LSR
{
    // DEFAULT SHIPMENT ITEM ID
    const LSR_SHIPMENT_ITEM_ID = 66010;
    const LSR_INVALID_MESSAGE = '<strong>LS Retail Setup Incomplete</strong><br/>
Please define the LS Retail Service Base URL and Web Store to proceed.<br/>
Go to Stores > Configuration > LS Retail > General Configuration.';
    const APP_NAME = 'ls-mag';
    const APP_VERSION = '1.0.0';
    const EXTENSION_COMPOSER_PATH_VENDOR = "vendor/lsretail/lsmag-two/composer.json";
    const EXTENSION_COMPOSER_PATH_APP = "app/code/lsretail/lsmag-two/composer.json";
    const CRON_STATUS_PATH_PREFIX = 'ls_mag/replication/status_';
    const URL_PATH_EXECUTE = 'ls_repl/cron/grid';

    // DEFAULT IMAGE SIZE
    const DEFAULT_IMAGE_WIDTH = 500;
    const DEFAULT_IMAGE_HEIGHT = 500;

    // DEFAULT ITEM IMAGE SIZE
    const DEFAULT_ITEM_IMAGE_HEIGHT = 0;
    const DEFAULT_ITEM_IMAGE_WIDTH = 0;

    // CACHE PATHS
    const CACHE_OMNICLIENT_OPERATIONDATA_PREFIX = 'lsr-oc-od-{@1}';
    const CACHE_OMNISERVICEABSTRACT_OPTIONS_PREFIX = 'lsr-osa-o-{@1}';
    const CACHE_DOMAIN_ITEM_PREFIX = 'lsr-d-i-{@1}';
    const CACHE_PRODUCTGROUP_HASH_PREFIX = 'lsr-pg-h-{@1}';
    const CACHE_CONTACT_OFFERS_PREFIX = 'lsr-c-o-{@1}';
    const CACHE_CONTACT_COUPONS_PREFIX = 'lsr-c-c-{@1}';
    const CACHE_CONTACT_TRANSACTIONS_PREFIX = 'lsr-c-tx-{@1}';
    const CACHE_CONTACT_TRANSACTION_PREFIX = 'lsr-c-tnx-{@1}';
    const CACHE_CONTACT_ADVERTISEMENTS_PREFIX = 'lsr-adv-a-{@1}';
    const CACHE_CONTACT_CLUB_PREFIX = 'lsr-cl-id-{@1}';
    const CACHE_CONTACT_PROFILE_PREFIX = 'lsr-prf-id-{@1}';
    const CACHE_COREOBSERVER_WSDLCHANGE = 'lsr-co-wc';
    const CACHE_ADMINHTML_CONFIGURATIONWATCHER_PREFIX = 'lsr-ah-cw-{@1}';
    const CACHE_CONFIGDATA_WATCHES = 'lsr-cd-w';
    const CACHE_PROCESS_CHECK_PREFIX = 'lsr-p-c-{@1}';
    const CACHE_STORE_ENABLED_PREFIX = 'lsr-s-e-{@1}';
    const CACHE_NAV_PROFILE = 'lsr-n-p';
    const CACHE_CUSTOMER_SYNCHRONIZE_SESSID_PREFIX = 'lsr-c-s-sid-{@1}';
    const CACHE_OMNICLIENT_TOKENIZED_OPERATION_PREFIX = 'lsr-oc-t-o-{@1}';

    // STORE CONFIGURATION PATHS
    // SYSTEM CONFIG
    const SC_SYSTEM_SYMLINK = 'dev/template/allow_symlink';

    // SERVICE
    const SC_SERVICE_ENABLE = 'ls_mag/service/enabled';
    const SC_SERVICE_BASE_URL = 'ls_mag/service/base_url';
    const SC_SERVICE_LS_KEY = 'ls_mag/service/ls_key';
    const SC_SERVICE_STORE = 'ls_mag/service/selected_store';
    const SC_SERVICE_DEBUG = 'ls_mag/service/debug';
    const SC_SERVICE_TOKENIZED = 'ls_mag/service/tokenized_operations';
    const SC_SERVICE_TIMEOUT = 'ls_mag/service/timeout';
    const SC_SERVICE_VERSION = 'ls_mag/service/version';
    const SC_SERVICE_LS_CENTRAL_VERSION = 'ls_mag/service/ls_central_version';

    // REPLICATION
    const SC_REPLICATION_GETCATEGORIES = 'ls_mag/replication/replicate_category';
    const SC_REPLICATION_HIERARCHY_CODE = 'ls_mag/service/replicate_hierarchy_code';
    const SC_REPLICATION_CREATEATTRSET = 'ls_mag/replication/create_attribute_set';
    const SC_REPLICATION_CATEGORIZE = 'ls_mag/replication/categorize_products';
    const SC_REPLICATION_BATCHSIZE = 'ls_mag/replication/batch_size_configuration';
    const SC_REPLICATION_CRONEXPR = 'ls_mag/replication/cron_expr_configuration';
    const SC_REPLICATION_VARIANTMAP = 'ls_mag/replication/variant_map';
    const SC_REPLICATION_CATEGORYPATH = 'ls_mag/replication/category_path';
    const SC_REPLICATION_DEBUGONERROR = 'ls_mag/replication/debug_on_error';
    const SC_REPLICATION_CRONEXPR_PREFIX = 'ls_mag/replication/cron_expr_{@1}';
    const SC_REPLICATION_BATCHSIZE_PREFIX = 'ls_mag/replication/batch_size_{@1}';
    const SC_REPLICATION_DEFAULT_BATCHSIZE = 'ls_mag/replication/default_batch_size';
    const SC_REPLICATION_PRODUCT_BATCHSIZE = 'ls_mag/replication/product_batch_size';
    const SC_REPLICATION_PRODUCT_ATTRIBUTE_BATCH_SIZE = 'ls_mag/replication/product_attribute_batch_size';
    const SC_REPLICATION_DISCOUNT_BATCH_SIZE = 'ls_mag/replication/discount_batch_size';
    const SC_REPLICATION_PRODUCT_INVENTORY_BATCH_SIZE = 'ls_mag/replication/product_inventory_batch_size';
    const SC_REPLICATION_PRODUCT_PRICES_BATCH_SIZE = 'ls_mag/replication/product_prices_batch_size';
    const SC_REPLICATION_PRODUCT_IMAGES_BATCH_SIZE = 'ls_mag/replication/product_images_batch_size';
    const SC_REPLICATION_PRODUCT_BARCODE_BATCH_SIZE = 'ls_mag/replication/product_barcode_batch_size';
    const SC_REPLICATION_VARIANT_BATCH_SIZE = 'ls_mag/replication/variant_batch_size';
    const SC_REPLICATION_PRODUCT_ASSIGNMENT_TO_CATEGORY_BATCH_SIZE =
        'ls_mag/replication/product_assignment_to_category_batch_size';
    const SC_REPLICATION_ALL_STORES_ITEMS = 'ls_mag/replication/replicate_all_stores_items';
    const SC_REPLICATION_MANUAL_CRON_GRID_DEFAULT_STORE = 'ls_mag/replication/manual_cron_grid_default_store';

    // CRON CHECKING

    //check for Attribute
    const SC_SUCCESS_CRON_ATTRIBUTE = 'ls_mag/replication/success_repl_attribute';
    const SC_CRON_ATTRIBUTE_CONFIG_PATH_LAST_EXECUTE = 'ls_mag/replication/last_execute_repl_attributes';
    const ATTRIBUTE_OPTION_VALUE_SORT_ORDER = 10000;

    //check for Attribute Variant
    const SC_SUCCESS_CRON_ATTRIBUTE_VARIANT = 'ls_mag/replication/success_repl_attribute_variant';

    //check for Category
    const SC_SUCCESS_CRON_CATEGORY = 'ls_mag/replication/success_repl_category';
    const SC_CRON_CATEGORY_CONFIG_PATH_LAST_EXECUTE = 'ls_mag/replication/last_execute_repl_category';

    //check for Product
    const SC_SUCCESS_CRON_PRODUCT = 'ls_mag/replication/success_repl_product';
    const SC_CRON_PRODUCT_CONFIG_PATH_LAST_EXECUTE = 'ls_mag/replication/last_execute_repl_products';

    //check for Product Price
    const SC_SUCCESS_CRON_PRODUCT_PRICE = 'ls_mag/replication/success_sync_price';
    const SC_PRODUCT_PRICE_CONFIG_PATH_LAST_EXECUTE = 'ls_mag/replication/last_execute_repl_price_sync';

    //check for Product Inventory
    const SC_SUCCESS_CRON_PRODUCT_INVENTORY = 'ls_mag/replication/success_sync_inventory';
    const SC_PRODUCT_INVENTORY_CONFIG_PATH_LAST_EXECUTE = 'ls_mag/replication/last_execute_repl_inventory_sync';

    //check for Discount
    const SC_SUCCESS_CRON_DISCOUNT = 'ls_mag/replication/success_repl_discount';
    const SC_CRON_DISCOUNT_CONFIG_PATH_LAST_EXECUTE = 'ls_mag/replication/last_execute_repl_discount_create';

    //check for Product Assignment to Categories
    const SC_SUCCESS_CRON_ITEM_UPDATES = 'ls_mag/replication/success_sync_item_updates';
    const SC_ITEM_UPDATES_CONFIG_PATH_LAST_EXECUTE = 'ls_mag/replication/last_execute_repl_item_updates_sync';

    //check for Product Images
    const SC_SUCCESS_CRON_ITEM_IMAGES = 'ls_mag/replication/success_sync_item_images';
    const SC_ITEM_IMAGES_CONFIG_PATH_LAST_EXECUTE = 'ls_mag/replication/last_execute_repl_item_images_sync';

    //check for Product Attributes Value Sync
    const SC_SUCCESS_CRON_ATTRIBUTES_VALUE = 'ls_mag/replication/success_sync_attributes_value';

    // execute time for sync attributes value
    const LAST_EXECUTE_REPL_SYNC_ATTRIBUTES_VALUE = 'ls_mag/replication/last_execute_repl_attributes_value_sync';

    const SC_VERSION_CONFIG_PATH_LAST_EXECUTE = 'ls_mag/replication/last_execute_sync_version';

    // ENHANCEMENT
    const SC_ENHANCEMENT_CRONEXPR_PREFIX = 'ls_mag/replication/cron_expr_{@1}';
    const SC_ENHANCEMENT_STORE_UUID_PREFIX = 'ls_mag/cron_enhancement/requests_per_run';
    const SC_ENHANCEMENT_INVENTORY_ACTIVE_FROM = 'ls_mag/cron_enhancement/inventory_active_from';
    const SC_ENHANCEMENT_INVENTORY_ACTIVE_TO = 'ls_mag/cron_enhancement/inventory_active_to';
    const SC_ENHANCEMENT_STORE_INVENTORY_CALCULATION = 'ls_mag/cron_enhancement/invetory_per_store';
    const SC_ENHANCEMENT_STORE_UPDATE_INVENTORY_WHEN_ZERO = 'ls_mag/cron_enhancement/if_zero';

    // LOYALTY
    const SC_LOYALTY_ENABLE_LOYALTY_ELEMENTS = 'ls_mag/loyalty/enable_loyalty_elements';
    const SC_LOYALTY_SHOW_LOYALTY_OFFERS = 'ls_mag/loyalty/show_loyalty_offers';
    const SC_LOYALTY_OFFERS_USE_STATIC_BLOCK = 'ls_mag/loyalty/use_static_block';
    const SC_LOYALTY_OFFERS_STATIC_BLOCK = 'ls_mag/loyalty/offers_block';
    const SC_LOYALTY_SHOW_POINT_OFFERS = 'ls_mag/loyalty/show_point_offers';
    const SC_LOYALTY_SHOW_MEMBER_OFFERS = 'ls_mag/loyalty/show_member_offers';
    const SC_LOYALTY_SHOW_GENERAL_OFFERS = 'ls_mag/loyalty/show_general_offers';
    const SC_LOYALTY_SHOW_COUPON_OFFERS = 'ls_mag/loyalty/show_coupon_offers';
    const SC_LOYALTY_SHOW_NOTIFICATIONS = 'ls_mag/loyalty/show_notifications';
    const SC_LOYALTY_SHOW_NOTIFICATIONS_TOP = 'ls_mag/loyalty/show_notifications_top';
    const SC_LOYALTY_SHOW_NOTIFICATIONS_LEFT = 'ls_mag/loyalty/show_notifications_left';
    const SC_LOYALTY_PAGE_IMAGE_WIDTH = 'ls_mag/loyalty/set_image_size_width_for_loyalty_page';
    const SC_LOYALTY_PAGE_IMAGE_HEIGHT = 'ls_mag/loyalty/set_image_size_height_for_loyalty_page';
    const SC_LOYALTY_EXPIRY_DATE_FORMAT = 'ls_mag/loyalty/loyalty_expiry_date_format';

    // CART
    const SC_CART_CHECK_INVENTORY = 'ls_mag/one_list/availability_check';
    const SC_CART_PRODUCT_AVAILABILITY = 'ls_mag/one_list/product_availability';
    const SC_CART_DISPLAY_STORES = 'ls_mag/one_list/display_stores';
    const SC_CART_UPDATE_INVENTORY = 'ls_mag/one_list/update_inventory';
    const SC_CART_GUEST_CHECKOUT_EMAIL = 'ls_mag/one_list/guest_checkout_email';
    const SC_CART_GUEST_CHECKOUT_PASSWORD = 'ls_mag/one_list/guest_checkout_password';
    const SC_CART_SALES_ORDER_CREATE_METHOD = 'ls_mag/one_list/sales_order_create_method';
    const SC_CART_SPECIAL_ORDER_RETRIES = 'ls_mag/one_list/special_order_create_retries';
    const SC_CART_ORDER_RETRIES = 'ls_mag/one_list/sales_order_create_retries';
    const SC_CART_SHIPMENT_FEE = 'ls_mag/one_list/shipment_fee';

    // CLICK & COLLECT
    const SC_CLICKCOLLECT_ACTIVE = 'carriers/clickcollect/active';
    const SC_CLICKCOLLECT_MAP = 'carriers/clickcollect/map';
    const SC_CLICKCOLLECT_HERE_APP_ID = 'carriers/clickcollect/app_id';
    const SC_CLICKCOLLECT_HERE_APP_CODE = 'carriers/clickcollect/app_code';
    const SC_CLICKCOLLECT_STOCKLEVEL_STORES = 'ls_mag/clickcollectsetup/showstockforstores';
    const SC_CLICKCOLLECT_GOOGLE_API_KEY = 'omni_clickandcollect/general/maps_api_key';
    const SC_CLICKCOLLECT_DEFAULT_LATITUDE = 'omni_clickandcollect/general/default_latitude';
    const SC_CLICKCOLLECT_DEFAULT_LONGITUDE = 'omni_clickandcollect/general/default_longitude';
    const SC_CLICKCOLLECT_DEFAULT_ZOOM = 'omni_clickandcollect/general/default_zoom';
    const SC_PAYMENT_OPTION = 'carriers/clickandcollect/payment_option';

    // CUSTOM CONFIGURATION PATHS
    const CONFIG_REPLICATION_JOBS = 'ls_mag/replication/jobs';
    const CONFIG_CONFIGDATA_WATCHES = 'ls_mag/configdata/watches';

    // REGISTRY PATHS
    const REGISTRY_LOYALTY_LOGINRESULT = 'lsr-l-lr';
    const REGISTRY_LOYALTY_WATCHNEXTSAVE = 'lsr-l-cwns';
    const REGISTRY_LOYALTY_WATCHNEXTSAVE_ADDED = 'lsr-l-cwns-a';
    const REGISTRY_LOYALTY_WATCHNEXTSAVE_REMOVED = 'lsr-l-cwns-r';
    const REGISTRY_CURRENT_REPLICATION_RUN = 'lsr-c-r-r';
    const REGISTRY_CURRENT_ENHANCEMENT_RUN = 'lsr-c-e-r';
    const REGISTRY_CURRENT_STORE = 'lsr-c-s';
    const REGISTRY_WEBSITE = 'lsr-w';
    const REGISTRY_CURRENT_JSON_PAYLOAD = 'lsr-c-j-p';

    // SESSION KEYS
    const SESSION_CUSTOMER_SECURITYTOKEN = 'lsr-s-c-st';
    const SESSION_CUSTOMER_CARDID = 'lsr-s-c-cid';
    const SESSION_CUSTOMER_LSRID = 'lsr-s-c-lid';
    const SESSION_CHECKOUT_BASKET = 'lsr-s-l-b';
    const SESSION_CHECKOUT_BASKETCALCULATION = 'lsr-s-l-bc';
    const SESSION_CHECKOUT_AVAILABILITY = 'lsr-s-l-ba';
    const SESSION_CHECKOUT_COUPON = 'lsr-s-l-c';
    const SESSION_CART_ONELIST = 'lsr-s-c-onelist';
    const SESSION_CART_WISHLIST = 'lsr-s-c-wishlist';

    // WORKFLOW
    const W_TYPE = 'T';
    const W_PAYLOAD = 'P';
    const W_CURRENT = 'C';
    const W_STEPS = 'S';
    const W_WEBSITE = 'w';
    const W_STORE = 's';
    const W_STORES = 'ss';
    const W_JOB = 'j';
    const W_TIEDPAYLOAD_PREFIX = 'tp-{@1}';
    const W_BEFORE_DISPATCH = 'w-f-d';
    const W_STORE_REPLICATION_PREFIX = 'lsr_replication_store_{@1}';
    const W_STORE_ENHANCEMENT_PREFIX = 'lsr_enhancement_store_{@1}';
    const W_STORE_ENHANCEMENT_JOB_PREFIX = 'lsr_enhancement_store_{@1}_{@2}';

    // JOBS
    const JOB_CUSTOMER_SYNCHRONIZE = 'lsr_customer_synchronize';
    const JOB_SALESORDER_CREATE = 'lsr_order_create';
    const JOB_SALESORDER_CONSOLIDATOR = 'lsr_order_consolidate';
    const JOB_CLICKCOLLECT_CREATE = 'lsr_clickcollect_create';
    const JOB_HEARTBEAT = 'lsr_heartbeat';
    const JOB_SALES_ORDER_SYNCHRONIZE = 'lsr_sos';

    // CONFIGURATION WATCHER KEYS
    const CW_BEFORE = 'before';
    const CW_AFTER = 'after';
    const CW_PATH = 'path';
    const CW_WEBSITE = 'website';
    const CW_STORE = 'store';

    // SESSION MESSAGE SEVERITY
    const SEVERITY_NOTICE = 'notice';
    const SEVERITY_ERROR = 'error';
    const SEVERITY_WARNING = 'warning';
    const SEVERITY_SUCCESS = 'success';

    // ATTRIBUTE CODES
    const ATTRIBUTE_ORDER_STORE = 'store_id';
    const ATTRIBUTE_ORDER_NAVSTORE = 'lsr_clickcollect_navstore';
    const ATTRIBUTE_ORDER_SPECIALORDER_CREATED = 'lsr_specialorder_created';
    const ATTRIBUTE_ORDER_BLACKLIST = 'lsr_blacklist';
    const ATTRIBUTE_ORDER_ID = 'lsr_order_id';
    const ATTRIBUTE_ORDER_JSON = 'lsr_json';
    const ATTRIBUTE_ORDER_ERROR = 'lsr_error';
    const ATTRIBUTE_ORDER_HASH = 'lsr_hash';
    const ATTRIBUTE_ORDER_STATE = 'lsr_state';
    const ATTRIBUTE_PRODUCT_INVENTORY = 'lsr_inventory_check';
    const ATTRIBUTE_PRODUCT_DIVISION_CODE = 'lsr_division_code';
    const ATTRIBUTE_PRODUCT_ITEM_CATEGORY = 'lsr_item_category';
    const ATTRIBUTE_PRODUCT_PRODUCT_GROUP = 'lsr_product_group';
    const ATTRIBUTE_TAX = 'lsr_tax';
    const ATTRIBUTE_BASE_TAX = 'lsr_base_tax';
    const ATTRIBUTE_TAX_INVOICED = 'lsr_tax_invoiced';
    const ATTRIBUTE_BASE_TAX_INVOICED = 'lsr_base_tax_invoiced';
    const ATTRIBUTE_TAX_REFUNDED = 'lsr_tax_refunded';
    const ATTRIBUTE_BASE_TAX_REFUNDED = 'lsr_base_tax_refunded';
    const ATTRIBUTE_COUPON_CODE = 'lsr_coupon_code';

    // ORDER STATES
    const ORDER_STATE_NA = 'NOT_AVAILABLE';
    const ORDER_STATE_NC = 'NOT_CREATED';
    const ORDER_STATE_NEW = 'NEW';
    const ORDER_STATE_GONE = 'GONE';
    const ORDER_STATE_CREATED = 'CREATED';
    const ORDER_STATE_OPEN = 'OPEN';
    const ORDER_STATE_PAID = 'PAID';
    const ORDER_STATE_COMPLETE = 'COMPLETE';

    //Store Hours Format
    const STORE_HOURS_TIME_FORMAT_12HRS = 'h:i A';
    const STORE_HOURS_TIME_FORMAT_24HRS = 'H:i';
    //LS Recommendation
    const LS_RECOMMEND_ACTIVE = 'ls_mag/ls_recommend/active';
    const LS_RECOMMEND_SHOW_ON_PRODUCT = 'ls_mag/ls_recommend/product';
    const LS_RECOMMEND_SHOW_ON_CART = 'ls_mag/ls_recommend/cart';
    const LS_RECOMMEND_SHOW_ON_CHECKOUT = 'ls_mag/ls_recommend/checkout';
    const LS_RECOMMEND_SHOW_ON_HOME = 'ls_mag/ls_recommend/home';
    const LS_RECOMMEND_PRODUCT_COUNT = 'ls_mag/ls_recommend/productcount';

    //Coupons
    const LS_COUPONS_SHOW_ON_CART = 'ls_mag/ls_coupons/cart';
    const LS_COUPONS_SHOW_ON_CHECKOUT = 'ls_mag/ls_coupons/checkout';
    const LS_COUPON_RECOMMENDATIONS_SHOW_ON_CART_CHECKOUT = 'ls_mag/ls_coupons/coupon_recommendations';

    //LoyaltyPoints
    const LS_LOYALTYPOINTS_SHOW_ON_CART = 'ls_mag/ls_loyaltypoints/cart';
    const LS_LOYALTYPOINTS_SHOW_ON_CHECKOUT = 'ls_mag/ls_loyaltypoints/checkout';

    //GiftCard
    const LS_GIFTCARD_SHOW_ON_CART = 'ls_mag/ls_giftcard/cart';
    const LS_GIFTCARD_SHOW_ON_CHECKOUT = 'ls_mag/ls_giftcard/checkout';

    //Discount Management
    const LS_DISCOUNT_SHOW_ON_PRODUCT = 'ls_mag/ls_discounts/discount';
    const LS_DISCOUNT_MIXANDMATCH_LIMIT = 'ls_mag/ls_discounts/discount_mixandmatch_limit';

    //Coupon Code Message
    const LS_STORES_OPENING_HOURS_FORMAT = 'ls_mag/ls_stores/timeformat';

    //LS New account reset password default password
    const LS_RESETPASSWORD_DEFAULT = 'Admin123@';

    //LS reset password email of the current customer
    const REGISTRY_CURRENT_RESETPASSWORD_EMAIL = 'reset-password-email';

    //Cache
    const IMAGE_CACHE = 'LS_IMAGE_';
    const PRODUCT_RECOMMENDATION_BLOCK_CACHE = 'LS_PRODUCT_RECOMMENDATION_';
    const POINTRATE = 'LS_POINT_RATE_';
    const PROACTIVE_DISCOUNTS = 'LS_PROACTIVE_';
    const COUPONS = 'LS_COUPONS_';
    const STORE = 'LS_STORE_';

    // Date format to be used in fetching the data.
    const DATE_FORMAT = 'Y-m-d';

    //offer with no time limit for the discounts
    const NO_TIME_LIMIT = '1753-01-01T00:00:00';

    //Magento Order Number Prefix
    const LS_ORDER_NUMBER_PREFIX_PATH = 'ls_mag/ls_order_number/prefix';

    /**
     * @var ScopeConfigInterface
     */
    public $scopeConfig;

    /** @var StoreInterface[] */
    public $stores;

    /** @var array End Points */
    public $endpoints = [
        ServiceType::ECOMMERCE => 'UCService.svc'
    ];

    /**
     * @var StoreManagerInterface
     */
    public $storeManager;

    /**
     * @var Data
     */
    public $coreHelper;

    /**
     * @var null
     */
    public $validateBaseUrlResponse = null;

    /**
     * LSR constructor.
     * @param ScopeConfigInterface $scopeConfig
     * @param StoreManagerInterface $storeManager
     * @param Data $coreHelper
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        StoreManagerInterface $storeManager,
        Data $coreHelper
    ) {
        $this->scopeConfig  = $scopeConfig;
        $this->storeManager = $storeManager;
        $this->coreHelper   = $coreHelper;
    }

    /**
     * In case of notDefault we have to pass the StoreId
     * @param $path
     * @param bool $storeId
     * @return string
     */
    public function getStoreConfig($path, $storeId = false)
    {
        if ($storeId) {
            $sc = $this->scopeConfig->getValue($path, ScopeInterface::SCOPE_STORES, $storeId);
        } else {
            $sc = $this->scopeConfig->getValue($path);
        }
        return $sc;
    }

    /**
     * This needs to be used only for Websites Scope
     * @param $path
     * @param bool $website_id
     * @return mixed
     */
    public function getWebsiteConfig($path, $website_id = false)
    {
        if ($website_id) {
            $sc = $this->scopeConfig->getValue($path, ScopeInterface::SCOPE_WEBSITES, $website_id);
        } else {
            $sc = $this->scopeConfig->getValue($path);
        }
        return $sc;
    }

    /**
     * @param null $baseUrl
     * @return bool
     * @throws NoSuchEntityException
     */
    public function validateBaseUrl($baseUrl = null)
    {
        if ($baseUrl == null) {
            $baseUrl = $this->getStoreConfig(self::SC_SERVICE_BASE_URL);
        }
        if (empty($baseUrl)) {
            return false;
        }
        $url = implode('/', [$baseUrl, $this->endpoints[ServiceType::ECOMMERCE]]);
        return $this->coreHelper->isEndpointResponding($url);
    }

    /**
     * @param bool $store_id
     * @param bool $scope
     * @return bool
     * @throws NoSuchEntityException
     */
    public function isLSR($store_id = false, $scope = false)
    {
        if (isset($this->validateBaseUrlResponse)) {
            return $this->validateBaseUrlResponse;
        }

        if ($scope == 'website') {
            $baseUrl = $this->getWebsiteConfig(LSR::SC_SERVICE_BASE_URL, $store_id);
            $store   = $this->getWebsiteConfig(LSR::SC_SERVICE_STORE, $store_id);
        } else {
            $baseUrl = $this->getStoreConfig(LSR::SC_SERVICE_BASE_URL, $store_id);
            $store   = $this->getStoreConfig(LSR::SC_SERVICE_STORE, $store_id);
        }
        if (empty($baseUrl) || empty($store)) {
            $this->validateBaseUrlResponse = false;
        } else {
            $this->validateBaseUrlResponse = $this->validateBaseUrl($baseUrl);
        }

        return $this->validateBaseUrlResponse;
    }


    /**
     * @return string
     */
    public function getDefaultWebStore()
    {
        return $this->getStoreConfig(
            self::SC_SERVICE_STORE,
            ScopeConfigInterface::SCOPE_TYPE_DEFAULT
        );
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getActiveWebStore()
    {
        return $this->getStoreConfig(
            LSR::SC_SERVICE_STORE,
            $this->getCurrentStoreId()
        );
    }

    /**
     * @return string
     */
    public function getInvalidMessageContainer()
    {
        $message = '<div class="invalid-lsr">';
        $message .= '<strong>' . __('LS Retail Setup Incomplete') . '</strong>';
        $message .= '<br/>' . __('Please define the LS Retail Service Base URL and Web Store to proceed') . '<br/>';
        $message .= __('Go to Stores > Configuration > LS Retail > General Configuration.');
        $message .= '</div>';
        return $message;
    }

    /**
     * Get default google map api key from config
     * @return string
     */
    public function getGoogleMapsApiKey()
    {
        return $this->scopeConfig->getValue(
            self::SC_CLICKCOLLECT_GOOGLE_API_KEY,
            ScopeConfigInterface::
            SCOPE_TYPE_DEFAULT
        );
    }

    /**
     * Get default latitude from config
     * @return string
     */
    public function getDefaultLatitude()
    {
        return $this->scopeConfig->getValue(
            self::SC_CLICKCOLLECT_DEFAULT_LATITUDE,
            ScopeConfigInterface::
            SCOPE_TYPE_DEFAULT
        );
    }

    /**
     * Get default longitude from config
     * @return string
     */
    public function getDefaultLongitude()
    {
        return $this->scopeConfig->getValue(
            self::SC_CLICKCOLLECT_DEFAULT_LONGITUDE,
            ScopeConfigInterface::
            SCOPE_TYPE_DEFAULT
        );
    }

    /**
     * Get default default zoom from config
     * @return string
     */
    public function getDefaultZoom()
    {
        return $this->scopeConfig->getValue(
            self::SC_CLICKCOLLECT_DEFAULT_ZOOM,
            ScopeConfigInterface::
            SCOPE_TYPE_DEFAULT
        );
    }

    /**
     * check if inventory lookup is enabled
     * @return string
     */
    public function inventoryLookupBeforeAddToCartEnabled()
    {
        return $this->getStoreConfig(self::SC_CART_CHECK_INVENTORY);
    }

    /**
     * This can be used on all frontend areas to dynamically fetch the current storeId.
     * Try not to use it on backend.
     * @return int
     * @throws NoSuchEntityException
     */
    public function getCurrentStoreId()
    {
        return $this->storeManager->getStore()->getId();
    }

    /**
     * Return all the stores we have in Magento.
     * @return StoreInterface[]
     */
    public function getAllStores()
    {
        /** add it into the object in order to avoid loading multiple time within the same call. */
        if ($this->stores) {
            return $this->stores;
        }
        $this->stores = $this->storeManager->getStores();
        return $this->stores;
    }

    /**
     * Set Store ID in Magento Session
     * @param $storeId
     */
    public function setStoreId($storeId)
    {
        $this->storeManager->setCurrentStore($storeId);
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getOmniVersion()
    {
        return $this->getStoreConfig(self::SC_SERVICE_VERSION, $this->getCurrentStoreId());
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getOmniTimeout()
    {
        return $this->getStoreConfig(self::SC_SERVICE_TIMEOUT, $this->getCurrentStoreId());
    }
}
