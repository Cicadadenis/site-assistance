<?php
return array (
  'plugins' => 
  array (
    'shop' => 
    array (
      'brands' => 
      array (
        'name' => 'Бренды',
        'description' => 'Фильтрация товаров по бренду (производителю) на витрине магазина',
        'vendor' => 'webasyst',
        'version' => '1.3.1',
        'img' => 'wa-apps/shop/plugins/brands/img/brands.png',
        'shop_settings' => true,
        'frontend' => true,
        'icons' => 
        array (
          16 => 'img/brands.png',
        ),
        'handlers' => 
        array (
          'frontend_nav' => 'frontendNav',
          'sitemap' => 'sitemap',
          'routing' => 'routing',
        ),
        'id' => 'brands',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'chestnyznak' => 
      array (
        'name' => 'Честный ЗНАК',
        'img' => 'wa-apps/shop/plugins/chestnyznak/img/chestnyznak.png',
        'version' => '1.3.2',
        'vendor' => 'webasyst',
        'handlers' => 
        array (
          'order_action_form.editcode' => 'orderActionForm',
          'reset_complete' => 'installSettingsPlugin',
          'backend_menu' => 'installSettingsPlugin',
          'plugin.enable' => 'installSettingsPlugin',
        ),
        'id' => 'chestnyznak',
        'app_id' => 'shop',
      ),
      'cml1c' => 
      array (
        'name' => '1С (CommerceML)',
        'description' => 'Обмен данными с системами товарного учета («1С», «МойСклад», «Бизнес.ру» и подобные).',
        'img' => 'wa-apps/shop/plugins/cml1c/img/1c.png',
        'vendor' => 'webasyst',
        'version' => '2.5.20',
        'importexport' => true,
        'frontend' => true,
        'handlers' => 
        array (
          'backend_product' => 'productHandler',
          'backend_product_sku_settings' => 'skuHandler',
          'backend_prod_content' => 'prodHandler',
          'backend_prod_sku_fields' => 'prodSkuFieldsHandler',
          'routing' => 'routing',
        ),
        'locale' => 
        array (
          0 => 'ru_RU',
        ),
        'id' => 'cml1c',
        'app_id' => 'shop',
      ),
      'debug' => 
      array (
        'name' => 'debug',
        'title' => 'Debug',
        'description' => 'Debug plugins interaction',
        'vendor' => 'webasyst',
        'version' => '0.0.1',
        'handlers' => 
        array (
          'backend_menu' => 'backendMenu',
          'backend_orders' => 'backendOrders',
          'product_delete' => 'productDeleteHandler',
          'product_save' => 'productSaveHandler',
          'product_custom_fields' => 'productCustomFieldsHandler',
          'backend_product_sku_settings' => 'backendProductSkuSettings',
          'order_calculate_discount' => 'orderCalculateDiscount',
          'frontend_products' => 'frontendProducts',
        ),
        'id' => 'debug',
        'app_id' => 'shop',
      ),
      'favoriteproducts' => 
      array (
        'name' => 'Избранные товары',
        'description' => 'Возможность быстрого доступа к избранным товарам',
        'vendor' => 'webasyst',
        'version' => '1.0.0',
        'img' => 'wa-apps/shop/plugins/favoriteproducts/img/star.png',
        'icons' => 
        array (
          16 => 'img/star.png',
        ),
        'handlers' => 
        array (
          'products_collection' => 'productsCollection',
          'backend_products' => 'backendProducts',
          'backend_product' => 'backendProduct',
          'product_delete' => 'productDelete',
          'reset' => 'reset',
        ),
        'id' => 'favoriteproducts',
        'app_id' => 'shop',
      ),
      'migrate' => 
      array (
        'name' => 'Переход на Shop-Script',
        'description' => 'Перенос данных в Shop-Script из других CMS для интернет-магазинов',
        'img' => 'wa-apps/shop/plugins/migrate/img/migrate.png',
        'vendor' => 'webasyst',
        'version' => '2.1.4',
        'importexport' => true,
        'handlers' => 
        array (
          'backend_welcome' => 'backendWelcomeHandler',
        ),
        'id' => 'migrate',
        'app_id' => 'shop',
      ),
      'redirect' => 
      array (
        'name' => '301 Редирект',
        'description' => 'Помогает перейти на Shop-Script с других CMS и обновить адреса страниц интернет-магазина, сохранив их индексацию поисковыми системами.',
        'vendor' => 'webasyst',
        'version' => '1.1',
        'img' => 'wa-apps/shop/plugins/redirect/img/redirect.png',
        'icons' => 
        array (
          16 => 'img/redirect.png',
        ),
        'shop_settings' => true,
        'handlers' => 
        array (
          'frontend_error' => 'frontendError',
          'frontend_search' => 'frontendSearch',
        ),
        'id' => 'redirect',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'watermark' => 
      array (
        'name' => 'Водяной знак',
        'description' => 'Накладывает водяной знак в виде изображения или текста на загружаемые фотографии',
        'img' => 'wa-apps/shop/plugins/watermark/img/watermark.png',
        'vendor' => 'webasyst',
        'version' => '2.0.0',
        'rights' => false,
        'handlers' => 
        array (
          'image_upload' => 'imageUpload',
          'image_thumb' => 'imageThumb',
        ),
        'id' => 'watermark',
        'app_id' => 'shop',
      ),
      'yandexmarket' => 
      array (
        'name' => 'Яндекс.Маркет',
        'description' => 'Экспорт каталога товаров в формате YML',
        'img' => 'wa-apps/shop/plugins/yandexmarket/img/yandexmarket.png',
        'vendor' => 'webasyst',
        'version' => '2.4.11',
        'importexport' => 'profiles',
        'export_profile' => true,
        'custom_settings' => true,
        'frontend' => true,
        'handlers' => 
        array (
          'backend_products' => 'backendProductsEvent',
          'backend_reports' => 'backendReportsEvent',
          'backend_reports_channels' => 'backendReportsChannelsEvent',
          'backend_category_dialog' => 'backendCategoryDialog',
          'backend_order' => 'backendOrderEvent',
          'category_save' => 'categorySaveHandler',
          'currency_delete' => 'currencyDeleteHandler',
          'routing' => 'routing',
        ),
        'id' => 'yandexmarket',
        'app_id' => 'shop',
      ),
    ),
    'blog' => 
    array (
      'akismet' => 
      array (
        'name' => 'Akismet',
        'description' => 'Антиспам-фильтрация комментариев по данным сервера Akismet.com',
        'vendor' => 'webasyst',
        'version' => '1.1',
        'img' => 'wa-apps/blog/plugins/akismet/img/akismet.png',
        'rights' => false,
        'handlers' => 
        array (
          'comment_validate' => 'commentValidate',
          'backend_post' => 'addControls',
          'backend_comments' => 'addControls',
        ),
        'id' => 'akismet',
        'app_id' => 'blog',
      ),
      'category' => 
      array (
        'name' => 'Категории',
        'description' => 'Фильтрация записей по категориям',
        'vendor' => 'webasyst',
        'version' => '1.2',
        'img' => 'wa-apps/blog/plugins/category/img/category.png',
        'frontend' => true,
        'handlers' => 
        array (
          'search_posts_frontend' => 'postSearch',
          'search_posts_backend' => 'postSearch',
          'post_save' => 'postUpdate',
          'post_publish' => 'postUpdate',
          'post_shedule' => 'postUpdate',
          'post_delete' => 'postDelete',
          'backend_sidebar' => 'backendSidebar',
          'backend_post_edit' => 'backendPostEdit',
          'frontend_action_default' => 'frontendSidebar',
          'frontend_action_post' => 'frontendSidebar',
          'frontend_action_page' => 'frontendSidebar',
          'routing' => 'routing',
        ),
        'custom_settings' => true,
        'id' => 'category',
        'app_id' => 'blog',
      ),
      'emailsubscription' => 
      array (
        'name' => 'Подписка по почте',
        'description' => 'Позволяет пользователям бекенда получать email-уведомления о новых записях в блогах',
        'img' => 'wa-apps/blog/plugins/emailsubscription/img/emailsubscription.png',
        'version' => '1.1.2',
        'custom_settings' => true,
        'vendor' => 'webasyst',
        'handlers' => 
        array (
          'post_publish' => 'postPublishAction',
          'cron_action' => 'cronAction',
          'backend_stream' => 'blogAction',
          'backend_blog_edit' => 'settingsAction',
          'contacts_delete' => 'contactsDelete',
        ),
        'id' => 'emailsubscription',
        'app_id' => 'blog',
      ),
      'favorite' => 
      array (
        'name' => 'Избранное',
        'description' => 'Бекенд-фильтр по избранным записям',
        'vendor' => 'webasyst',
        'version' => '1.1',
        'img' => 'wa-apps/blog/plugins/favorite/img/star.png',
        'icons' => 
        array (
          16 => 'img/star.png',
        ),
        'handlers' => 
        array (
          'search_posts_backend' => 'postSearch',
          'backend_sidebar' => 'backendSidebar',
          'prepare_posts_backend' => 'postsPrepareView',
          'post_delete' => 'postDelete',
        ),
        'id' => 'favorite',
        'app_id' => 'blog',
      ),
      'gravatar' => 
      array (
        'name' => 'Gravatar',
        'description' => 'Globally Recognized Avatars. Юзерпики комментаторов будут заменены на юзерпики, которые возвращает сервис gravatar.com (только для комментариев во фронтенде)',
        'vendor' => 'webasyst',
        'version' => '1.1',
        'img' => 'wa-apps/blog/plugins/gravatar/img/gravatar.png',
        'handlers' => 
        array (
          'prepare_comments_frontend' => 'commentsPrepare',
          'prepare_comments_backend' => 'commentsPrepare',
        ),
        'id' => 'gravatar',
        'app_id' => 'blog',
      ),
      'markdown' => 
      array (
        'name' => 'Markdown',
        'description' => 'Позволяет редактировать записи блога в синтаксисе Markdown',
        'vendor' => 'webasyst',
        'version' => '1.5.0',
        'img' => 'wa-apps/blog/plugins/markdown/img/markdown.png',
        'handlers' => 
        array (
          'backend_post_edit' => 'backendPostEdit',
          'backend_assets' => 'backendAssets',
          'post_save' => 'postSave',
          'post_publish' => 'postPublish',
          'post_shedule' => 'postSchedule',
        ),
        'id' => 'markdown',
        'app_id' => 'blog',
      ),
      'myposts' => 
      array (
        'name' => 'Мои записи',
        'description' => 'Бекенд-фильтр для просмотра своих записей',
        'img' => 'wa-apps/blog/plugins/myposts//img/myposts.png',
        'vendor' => 'webasyst',
        'version' => '1.1',
        'handlers' => 
        array (
          'search_posts_backend' => 'postSearch',
          'backend_sidebar' => 'backendSidebar',
        ),
        'id' => 'myposts',
        'app_id' => 'blog',
      ),
      'tag' => 
      array (
        'name' => 'Теги',
        'description' => 'Фильтрация записей по тегам',
        'vendor' => 'webasyst',
        'version' => '1.1',
        'img' => 'wa-apps/blog/plugins/tag/img/tags.png',
        'frontend' => true,
        'handlers' => 
        array (
          'search_posts_backend' => 'postSearch',
          'search_posts_frontend' => 'postSearch',
          'backend_sidebar' => 'backendSidebar',
          'prepare_posts_backend' => 'prepareBackendView',
          'prepare_posts_frontend' => 'prepareFrontendView',
          'backend_post_edit' => 'backendPostEdit',
          'post_save' => 'postSave',
          'post_publish' => 'postSave',
          'post_shedule' => 'postSave',
          'post_delete' => 'postDelete',
          'frontend_action_default' => 'frontendSidebar',
          'frontend_action_post' => 'frontendSidebar',
          'frontend_action_page' => 'frontendSidebar',
          'routing' => 'routing',
        ),
        'id' => 'tag',
        'app_id' => 'blog',
      ),
      'troll' => 
      array (
        'name' => 'Тролль',
        'description' => 'Выделение выбранных комментаторов троллфейсом (trollface)',
        'vendor' => 'webasyst',
        'version' => '1.1',
        'img' => 'wa-apps/blog/plugins/troll/img/troll.png',
        'handlers' => 
        array (
          'backend_comments' => 'addControls',
          'backend_post' => 'addControls',
          'prepare_comments_backend' => 'prepareView',
          'prepare_comments_frontend' => 'prepareView',
          'frontend_action_post' => 'postView',
        ),
        'id' => 'troll',
        'app_id' => 'blog',
      ),
    ),
    'photos' => 
    array (
      'comments' => 
      array (
        'name' => 'Комментарии',
        'description' => 'Позволяет посетителям фронтенда оставлять комментарии к фотографиям',
        'img' => 'wa-apps/photos/plugins/comments/img/comments.png',
        'vendor' => 'webasyst',
        'version' => '1.1.0',
        'frontend' => true,
        'handlers' => 
        array (
          'backend_photo' => 'backendPhoto',
          'backend_sidebar' => 'backendSidebar',
          'backend_assets' => 'backendAssets',
          'prepare_photos_backend' => 'preparePhotosBackend',
          'prepare_photos_frontend' => 'preparePhotosFrontend',
          'frontend_assets' => 'frontendAssets',
          'frontend_photo' => 'frontendPhoto',
          'make_stack' => 'backendMakeStack',
          'unmake_stack' => 'backendUnmakeStack',
          'photo_delete' => 'backendPhotoDelete',
          'contacts_links' => 'contactsLinks',
          'contacts_delete' => 'contactsDelete',
          'routing' => 'routing',
        ),
        'id' => 'comments',
        'app_id' => 'photos',
      ),
      'imageeffects' => 
      array (
        'name' => 'Эффекты',
        'description' => 'Черно-белый, сепия и другие фильтры обработки изображений',
        'img' => 'wa-apps/photos/plugins/imageeffects/img/imageeffects.png',
        'vendor' => 'webasyst',
        'version' => '1.0.0',
        'handlers' => 
        array (
          'backend_photo_toolbar' => 'photoToolbar',
        ),
        'id' => 'imageeffects',
        'app_id' => 'photos',
      ),
      'publicgallery' => 
      array (
        'name' => 'Фотогалерея',
        'description' => 'Включает возможность загрузки фотографий в фронтенде и коллективного голосования за фотографии',
        'img' => 'wa-apps/photos/plugins/publicgallery/img/publicgallery.png',
        'version' => '1.1.1',
        'vendor' => 'webasyst',
        'rights' => false,
        'frontend' => true,
        'handlers' => 
        array (
          'backend_assets' => 'backendAssets',
          'backend_sidebar' => 'backendSidebar',
          'backend_photo' => 'backendPhoto',
          'frontend_photo' => 'frontendPhoto',
          'frontend_sidebar' => 'frontendSidebar',
          'frontend_assets' => 'frontendAssets',
          'extra_prepare_collection' => 'extraPrepareCollection',
          'prepare_photos_backend' => 'preparePhotosBackend',
          'prepare_photos_frontend' => 'preparePhotosFrontend',
          'backend_photo_toolbar' => 'backendPhotoToolbar',
          'collection' => 'prepareCollection',
          'front_controller' => 'frontendController',
          'before_save_field' => 'beforeSaveField',
          'search_frontend_link' => 'searchFrontendLink',
          'routing' => 'routing',
        ),
        'id' => 'publicgallery',
        'app_id' => 'photos',
      ),
      'watermark' => 
      array (
        'name' => 'Водяной знак',
        'description' => 'Накладывает водяной знак в виде изображения или текста на загружаемые фотографии',
        'img' => 'wa-apps/photos/plugins/watermark/img/watermark.png',
        'vendor' => 'webasyst',
        'version' => '1.0.0',
        'rights' => false,
        'handlers' => 
        array (
          'photo_upload' => 'photoUpload',
        ),
        'id' => 'watermark',
        'app_id' => 'photos',
      ),
    ),
    'site' => 
    array (
      'rublesign' => 
      array (
        'name' => 'Символ рубля',
        'img' => 'wa-apps/site/plugins/rublesign/img/rublesign.png',
        'version' => '1.0.0',
        'vendor' => 'webasyst',
        'site_settings' => true,
        'handlers' => 
        array (
          '*' => 
          array (
            0 => 
            array (
              'event_app_id' => 'webasyst',
              'event' => 'backend_header',
              'class' => 'siteRublesignPlugin',
              'method' => 'backendHeader',
            ),
            1 => 
            array (
              'event_app_id' => 'shop',
              'event' => 'frontend_head',
              'class' => 'siteRublesignPlugin',
              'method' => 'frontendHead',
            ),
            2 => 
            array (
              'event_app_id' => 'site',
              'event' => 'frontend_page',
              'class' => 'siteRublesignPlugin',
              'method' => 'frontendPage',
            ),
          ),
        ),
        'id' => 'rublesign',
        'app_id' => 'site',
        'custom_settings' => true,
      ),
    ),
    'team' => 
    array (
      'ics' => 
      array (
        'name' => 'iCalendar',
        'description' => 'Поддержка стандарта iCalendar (RFC 5545) для импорта календарей через подписку на WebCal-ресурсы, а также из файлов .ics',
        'icon' => 'img/ics16.png',
        'img' => 'wa-apps/team/plugins/ics/img/ics16.png',
        'version' => '1.1.0',
        'vendor' => 'webasyst',
        'frontend' => false,
        'external_calendar' => true,
        'integration_level' => 'subscription',
        'handlers' => 
        array (
          'backend_schedule_settings' => 'backendScheduleSettings',
          'backend_assets' => 'backendAssets',
        ),
        'id' => 'ics',
        'app_id' => 'team',
      ),
    ),
  ),
  'handlers' => 
  array (
    'webasyst' => 
    array (
      'backend_push' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/backend_push/',
          'file' => 'webasyst.backend_push.handler.php',
          'class' => 'shopWebasystBackend_pushHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'backend_header' => 
      array (
        0 => 
        array (
          'app_id' => 'installer',
          'regex' => '/backend_header/',
          'file' => 'webasyst.backend_header.handler.php',
          'class' => 'installerWebasystBackend_headerHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'site',
          'plugin_id' => 'rublesign',
          'regex' => '/backend_header/',
          'class' => 'siteRublesignPlugin',
          'method' => 
          array (
            0 => 'backendHeader',
          ),
        ),
      ),
      'waid_auth' => 
      array (
        0 => 
        array (
          'app_id' => 'installer',
          'regex' => '/waid_auth/',
          'file' => 'webasyst.waid_auth.handler.php',
          'class' => 'installerWebasystWaid_authHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'backend_dispatch_miss' => 
      array (
        0 => 
        array (
          'app_id' => 'team',
          'regex' => '/backend_dispatch_miss/',
          'file' => 'webasyst.backend_dispatch_miss.handler.php',
          'class' => 'teamWebasystBackend_dispatch_missHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'backend_personal_profile' => 
      array (
        0 => 
        array (
          'app_id' => 'team',
          'regex' => '/backend_personal_profile/',
          'file' => 'webasyst.backend_personal_profile.handler.php',
          'class' => 'teamWebasystBackend_personal_profileHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
    'contacts' => 
    array (
      'merge' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/merge/',
          'file' => 'contacts.merge.handler.php',
          'class' => 'shopContactsMergeHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'regex' => '/merge/',
          'file' => 'contacts.merge.handler.php',
          'class' => 'blogContactsMergeHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'profile.tab' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/profile\\.tab/',
          'file' => 'contacts.profile.tab.handler.php',
          'class' => 'shopContactsProfileTabHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'team',
          'regex' => '/profile\\.tab/',
          'file' => 'contacts.profile.tab.handler.php',
          'class' => 'teamContactsProfileTabHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'contacts_collection' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/contacts_collection/',
          'file' => 'contacts.contacts_collection.handler.php',
          'class' => 'shopContactsContacts_collectionHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'contacts',
          'regex' => '/contacts_collection/',
          'file' => 'contacts.contacts_collection.handler.php',
          'class' => 'contactsContactsContacts_collectionHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        2 => 
        array (
          'app_id' => 'team',
          'regex' => '/contacts_collection/',
          'file' => 'contacts.contacts_collection.handler.php',
          'class' => 'teamContactsContacts_collectionHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'links' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/links/',
          'file' => 'contacts.links.handler.php',
          'class' => 'shopContactsLinksHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'regex' => '/links/',
          'file' => 'contacts.links.handler.php',
          'class' => 'blogContactsLinksHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        2 => 
        array (
          'app_id' => 'photos',
          'regex' => '/links/',
          'file' => 'contacts.links.handler.php',
          'class' => 'photosContactsLinksHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'explore' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/explore/',
          'file' => 'contacts.explore.handler.php',
          'class' => 'shopContactsExploreHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'delete' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'shopContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'blogContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        2 => 
        array (
          'app_id' => 'contacts',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'contactsContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        3 => 
        array (
          'app_id' => 'guestbook2',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'guestbook2ContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        4 => 
        array (
          'app_id' => 'photos',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'photosContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        5 => 
        array (
          'app_id' => 'team',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'teamContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        6 => 
        array (
          'app_id' => 'webasyst',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'webasystContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
    'site' => 
    array (
      'route_save.after' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/route_save\\.after/',
          'file' => 'site.route_save.after.handler.php',
          'class' => 'shopSiteRoute_saveAfterHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'route_delete.after' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/route_delete\\.after/',
          'file' => 'site.route_delete.after.handler.php',
          'class' => 'shopSiteRoute_deleteAfterHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'update.route' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/update\\.route/',
          'file' => 'site.update.route.handler.php',
          'class' => 'shopSiteUpdateRouteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'route_save.before' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/route_save\\.before/',
          'file' => 'site.route_save.before.handler.php',
          'class' => 'shopSiteRoute_saveBeforeHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'frontend_page' => 
      array (
        0 => 
        array (
          'app_id' => 'site',
          'plugin_id' => 'rublesign',
          'regex' => '/frontend_page/',
          'class' => 'siteRublesignPlugin',
          'method' => 
          array (
            0 => 'frontendPage',
          ),
        ),
      ),
    ),
    'installer' => 
    array (
      'end_installation' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/end_installation/',
          'file' => 'installer.end_installation.handler.php',
          'class' => 'shopInstallerEnd_installationHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
    'shop' => 
    array (
      'backend_customers_list' => 
      array (
        0 => 
        array (
          'app_id' => 'contacts',
          'regex' => '/backend_customers_list/',
          'file' => 'shop.backend_customers_list.handler.php',
          'class' => 'contactsShopBackend_customers_listHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'backend_menu' => 
      array (
        0 => 
        array (
          'app_id' => 'installer',
          'regex' => '/backend_menu/',
          'file' => 'shop.backend_menu.handler.php',
          'class' => 'installerShopBackend_menuHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'chestnyznak',
          'regex' => '/backend_menu/',
          'class' => 'shopChestnyznakPlugin',
          'method' => 
          array (
            0 => 'installSettingsPlugin',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'debug',
          'regex' => '/backend_menu/',
          'class' => 'shopDebugPlugin',
          'method' => 
          array (
            0 => 'backendMenu',
          ),
        ),
      ),
      'frontend_nav' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'brands',
          'regex' => '/frontend_nav/',
          'class' => 'shopBrandsPlugin',
          'method' => 
          array (
            0 => 'frontendNav',
          ),
        ),
      ),
      'sitemap' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'brands',
          'regex' => '/sitemap/',
          'class' => 'shopBrandsPlugin',
          'method' => 
          array (
            0 => 'sitemap',
          ),
        ),
      ),
      'routing' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'brands',
          'regex' => '/routing/',
          'class' => 'shopBrandsPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'cml1c',
          'regex' => '/routing/',
          'class' => 'shopCml1cPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'yandexmarket',
          'regex' => '/routing/',
          'class' => 'shopYandexmarketPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
      ),
      'order_action_form.editcode' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'chestnyznak',
          'regex' => '/order_action_form\\.editcode/',
          'class' => 'shopChestnyznakPlugin',
          'method' => 
          array (
            0 => 'orderActionForm',
          ),
        ),
      ),
      'reset_complete' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'chestnyznak',
          'regex' => '/reset_complete/',
          'class' => 'shopChestnyznakPlugin',
          'method' => 
          array (
            0 => 'installSettingsPlugin',
          ),
        ),
      ),
      'plugin.enable' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'chestnyznak',
          'regex' => '/plugin\\.enable/',
          'class' => 'shopChestnyznakPlugin',
          'method' => 
          array (
            0 => 'installSettingsPlugin',
          ),
        ),
      ),
      'backend_product' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'cml1c',
          'regex' => '/backend_product/',
          'class' => 'shopCml1cPlugin',
          'method' => 
          array (
            0 => 'productHandler',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'favoriteproducts',
          'regex' => '/backend_product/',
          'class' => 'shopFavoriteproductsPlugin',
          'method' => 
          array (
            0 => 'backendProduct',
          ),
        ),
      ),
      'backend_product_sku_settings' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'cml1c',
          'regex' => '/backend_product_sku_settings/',
          'class' => 'shopCml1cPlugin',
          'method' => 
          array (
            0 => 'skuHandler',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'debug',
          'regex' => '/backend_product_sku_settings/',
          'class' => 'shopDebugPlugin',
          'method' => 
          array (
            0 => 'backendProductSkuSettings',
          ),
        ),
      ),
      'backend_prod_content' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'cml1c',
          'regex' => '/backend_prod_content/',
          'class' => 'shopCml1cPlugin',
          'method' => 
          array (
            0 => 'prodHandler',
          ),
        ),
      ),
      'backend_prod_sku_fields' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'cml1c',
          'regex' => '/backend_prod_sku_fields/',
          'class' => 'shopCml1cPlugin',
          'method' => 
          array (
            0 => 'prodSkuFieldsHandler',
          ),
        ),
      ),
      'backend_orders' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'debug',
          'regex' => '/backend_orders/',
          'class' => 'shopDebugPlugin',
          'method' => 
          array (
            0 => 'backendOrders',
          ),
        ),
      ),
      'product_delete' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'debug',
          'regex' => '/product_delete/',
          'class' => 'shopDebugPlugin',
          'method' => 
          array (
            0 => 'productDeleteHandler',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'favoriteproducts',
          'regex' => '/product_delete/',
          'class' => 'shopFavoriteproductsPlugin',
          'method' => 
          array (
            0 => 'productDelete',
          ),
        ),
      ),
      'product_save' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'debug',
          'regex' => '/product_save/',
          'class' => 'shopDebugPlugin',
          'method' => 
          array (
            0 => 'productSaveHandler',
          ),
        ),
      ),
      'product_custom_fields' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'debug',
          'regex' => '/product_custom_fields/',
          'class' => 'shopDebugPlugin',
          'method' => 
          array (
            0 => 'productCustomFieldsHandler',
          ),
        ),
      ),
      'order_calculate_discount' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'debug',
          'regex' => '/order_calculate_discount/',
          'class' => 'shopDebugPlugin',
          'method' => 
          array (
            0 => 'orderCalculateDiscount',
          ),
        ),
      ),
      'frontend_products' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'debug',
          'regex' => '/frontend_products/',
          'class' => 'shopDebugPlugin',
          'method' => 
          array (
            0 => 'frontendProducts',
          ),
        ),
      ),
      'products_collection' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'favoriteproducts',
          'regex' => '/products_collection/',
          'class' => 'shopFavoriteproductsPlugin',
          'method' => 
          array (
            0 => 'productsCollection',
          ),
        ),
      ),
      'backend_products' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'favoriteproducts',
          'regex' => '/backend_products/',
          'class' => 'shopFavoriteproductsPlugin',
          'method' => 
          array (
            0 => 'backendProducts',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'yandexmarket',
          'regex' => '/backend_products/',
          'class' => 'shopYandexmarketPlugin',
          'method' => 
          array (
            0 => 'backendProductsEvent',
          ),
        ),
      ),
      'reset' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'favoriteproducts',
          'regex' => '/reset/',
          'class' => 'shopFavoriteproductsPlugin',
          'method' => 
          array (
            0 => 'reset',
          ),
        ),
      ),
      'backend_welcome' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'migrate',
          'regex' => '/backend_welcome/',
          'class' => 'shopMigratePlugin',
          'method' => 
          array (
            0 => 'backendWelcomeHandler',
          ),
        ),
      ),
      'frontend_error' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'redirect',
          'regex' => '/frontend_error/',
          'class' => 'shopRedirectPlugin',
          'method' => 
          array (
            0 => 'frontendError',
          ),
        ),
      ),
      'frontend_search' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'redirect',
          'regex' => '/frontend_search/',
          'class' => 'shopRedirectPlugin',
          'method' => 
          array (
            0 => 'frontendSearch',
          ),
        ),
      ),
      'image_upload' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'watermark',
          'regex' => '/image_upload/',
          'class' => 'shopWatermarkPlugin',
          'method' => 
          array (
            0 => 'imageUpload',
          ),
        ),
      ),
      'image_thumb' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'watermark',
          'regex' => '/image_thumb/',
          'class' => 'shopWatermarkPlugin',
          'method' => 
          array (
            0 => 'imageThumb',
          ),
        ),
      ),
      'backend_reports' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'yandexmarket',
          'regex' => '/backend_reports/',
          'class' => 'shopYandexmarketPlugin',
          'method' => 
          array (
            0 => 'backendReportsEvent',
          ),
        ),
      ),
      'backend_reports_channels' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'yandexmarket',
          'regex' => '/backend_reports_channels/',
          'class' => 'shopYandexmarketPlugin',
          'method' => 
          array (
            0 => 'backendReportsChannelsEvent',
          ),
        ),
      ),
      'backend_category_dialog' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'yandexmarket',
          'regex' => '/backend_category_dialog/',
          'class' => 'shopYandexmarketPlugin',
          'method' => 
          array (
            0 => 'backendCategoryDialog',
          ),
        ),
      ),
      'backend_order' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'yandexmarket',
          'regex' => '/backend_order/',
          'class' => 'shopYandexmarketPlugin',
          'method' => 
          array (
            0 => 'backendOrderEvent',
          ),
        ),
      ),
      'category_save' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'yandexmarket',
          'regex' => '/category_save/',
          'class' => 'shopYandexmarketPlugin',
          'method' => 
          array (
            0 => 'categorySaveHandler',
          ),
        ),
      ),
      'currency_delete' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'yandexmarket',
          'regex' => '/currency_delete/',
          'class' => 'shopYandexmarketPlugin',
          'method' => 
          array (
            0 => 'currencyDeleteHandler',
          ),
        ),
      ),
      'frontend_head' => 
      array (
        0 => 
        array (
          'app_id' => 'site',
          'plugin_id' => 'rublesign',
          'regex' => '/frontend_head/',
          'class' => 'siteRublesignPlugin',
          'method' => 
          array (
            0 => 'frontendHead',
          ),
        ),
      ),
    ),
    'mailer' => 
    array (
      'recipients.form' => 
      array (
        0 => 
        array (
          'app_id' => 'contacts',
          'regex' => '/recipients\\.form/',
          'file' => 'mailer.recipients.form.handler.php',
          'class' => 'contactsMailerRecipientsFormHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
    'blog' => 
    array (
      'comment_validate' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'akismet',
          'regex' => '/comment_validate/',
          'class' => 'blogAkismetPlugin',
          'method' => 
          array (
            0 => 'commentValidate',
          ),
        ),
      ),
      'backend_post' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'akismet',
          'regex' => '/backend_post/',
          'class' => 'blogAkismetPlugin',
          'method' => 
          array (
            0 => 'addControls',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'troll',
          'regex' => '/backend_post/',
          'class' => 'blogTrollPlugin',
          'method' => 
          array (
            0 => 'addControls',
          ),
        ),
      ),
      'backend_comments' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'akismet',
          'regex' => '/backend_comments/',
          'class' => 'blogAkismetPlugin',
          'method' => 
          array (
            0 => 'addControls',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'troll',
          'regex' => '/backend_comments/',
          'class' => 'blogTrollPlugin',
          'method' => 
          array (
            0 => 'addControls',
          ),
        ),
      ),
      'search_posts_frontend' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'category',
          'regex' => '/search_posts_frontend/',
          'class' => 'blogCategoryPlugin',
          'method' => 
          array (
            0 => 'postSearch',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'tag',
          'regex' => '/search_posts_frontend/',
          'class' => 'blogTagPlugin',
          'method' => 
          array (
            0 => 'postSearch',
          ),
        ),
      ),
      'search_posts_backend' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'category',
          'regex' => '/search_posts_backend/',
          'class' => 'blogCategoryPlugin',
          'method' => 
          array (
            0 => 'postSearch',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'favorite',
          'regex' => '/search_posts_backend/',
          'class' => 'blogFavoritePlugin',
          'method' => 
          array (
            0 => 'postSearch',
          ),
        ),
        2 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'myposts',
          'regex' => '/search_posts_backend/',
          'class' => 'blogMypostsPlugin',
          'method' => 
          array (
            0 => 'postSearch',
          ),
        ),
        3 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'tag',
          'regex' => '/search_posts_backend/',
          'class' => 'blogTagPlugin',
          'method' => 
          array (
            0 => 'postSearch',
          ),
        ),
      ),
      'post_save' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'category',
          'regex' => '/post_save/',
          'class' => 'blogCategoryPlugin',
          'method' => 
          array (
            0 => 'postUpdate',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'markdown',
          'regex' => '/post_save/',
          'class' => 'blogMarkdownPlugin',
          'method' => 
          array (
            0 => 'postSave',
          ),
        ),
        2 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'tag',
          'regex' => '/post_save/',
          'class' => 'blogTagPlugin',
          'method' => 
          array (
            0 => 'postSave',
          ),
        ),
      ),
      'post_publish' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'category',
          'regex' => '/post_publish/',
          'class' => 'blogCategoryPlugin',
          'method' => 
          array (
            0 => 'postUpdate',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'emailsubscription',
          'regex' => '/post_publish/',
          'class' => 'blogEmailsubscriptionPlugin',
          'method' => 
          array (
            0 => 'postPublishAction',
          ),
        ),
        2 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'markdown',
          'regex' => '/post_publish/',
          'class' => 'blogMarkdownPlugin',
          'method' => 
          array (
            0 => 'postPublish',
          ),
        ),
        3 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'tag',
          'regex' => '/post_publish/',
          'class' => 'blogTagPlugin',
          'method' => 
          array (
            0 => 'postSave',
          ),
        ),
      ),
      'post_shedule' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'category',
          'regex' => '/post_shedule/',
          'class' => 'blogCategoryPlugin',
          'method' => 
          array (
            0 => 'postUpdate',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'markdown',
          'regex' => '/post_shedule/',
          'class' => 'blogMarkdownPlugin',
          'method' => 
          array (
            0 => 'postSchedule',
          ),
        ),
        2 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'tag',
          'regex' => '/post_shedule/',
          'class' => 'blogTagPlugin',
          'method' => 
          array (
            0 => 'postSave',
          ),
        ),
      ),
      'post_delete' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'category',
          'regex' => '/post_delete/',
          'class' => 'blogCategoryPlugin',
          'method' => 
          array (
            0 => 'postDelete',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'favorite',
          'regex' => '/post_delete/',
          'class' => 'blogFavoritePlugin',
          'method' => 
          array (
            0 => 'postDelete',
          ),
        ),
        2 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'tag',
          'regex' => '/post_delete/',
          'class' => 'blogTagPlugin',
          'method' => 
          array (
            0 => 'postDelete',
          ),
        ),
      ),
      'backend_sidebar' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'category',
          'regex' => '/backend_sidebar/',
          'class' => 'blogCategoryPlugin',
          'method' => 
          array (
            0 => 'backendSidebar',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'favorite',
          'regex' => '/backend_sidebar/',
          'class' => 'blogFavoritePlugin',
          'method' => 
          array (
            0 => 'backendSidebar',
          ),
        ),
        2 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'myposts',
          'regex' => '/backend_sidebar/',
          'class' => 'blogMypostsPlugin',
          'method' => 
          array (
            0 => 'backendSidebar',
          ),
        ),
        3 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'tag',
          'regex' => '/backend_sidebar/',
          'class' => 'blogTagPlugin',
          'method' => 
          array (
            0 => 'backendSidebar',
          ),
        ),
      ),
      'backend_post_edit' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'category',
          'regex' => '/backend_post_edit/',
          'class' => 'blogCategoryPlugin',
          'method' => 
          array (
            0 => 'backendPostEdit',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'markdown',
          'regex' => '/backend_post_edit/',
          'class' => 'blogMarkdownPlugin',
          'method' => 
          array (
            0 => 'backendPostEdit',
          ),
        ),
        2 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'tag',
          'regex' => '/backend_post_edit/',
          'class' => 'blogTagPlugin',
          'method' => 
          array (
            0 => 'backendPostEdit',
          ),
        ),
      ),
      'frontend_action_default' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'category',
          'regex' => '/frontend_action_default/',
          'class' => 'blogCategoryPlugin',
          'method' => 
          array (
            0 => 'frontendSidebar',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'tag',
          'regex' => '/frontend_action_default/',
          'class' => 'blogTagPlugin',
          'method' => 
          array (
            0 => 'frontendSidebar',
          ),
        ),
      ),
      'frontend_action_post' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'category',
          'regex' => '/frontend_action_post/',
          'class' => 'blogCategoryPlugin',
          'method' => 
          array (
            0 => 'frontendSidebar',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'tag',
          'regex' => '/frontend_action_post/',
          'class' => 'blogTagPlugin',
          'method' => 
          array (
            0 => 'frontendSidebar',
          ),
        ),
        2 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'troll',
          'regex' => '/frontend_action_post/',
          'class' => 'blogTrollPlugin',
          'method' => 
          array (
            0 => 'postView',
          ),
        ),
      ),
      'frontend_action_page' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'category',
          'regex' => '/frontend_action_page/',
          'class' => 'blogCategoryPlugin',
          'method' => 
          array (
            0 => 'frontendSidebar',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'tag',
          'regex' => '/frontend_action_page/',
          'class' => 'blogTagPlugin',
          'method' => 
          array (
            0 => 'frontendSidebar',
          ),
        ),
      ),
      'routing' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'category',
          'regex' => '/routing/',
          'class' => 'blogCategoryPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'tag',
          'regex' => '/routing/',
          'class' => 'blogTagPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
      ),
      'cron_action' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'emailsubscription',
          'regex' => '/cron_action/',
          'class' => 'blogEmailsubscriptionPlugin',
          'method' => 
          array (
            0 => 'cronAction',
          ),
        ),
      ),
      'backend_stream' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'emailsubscription',
          'regex' => '/backend_stream/',
          'class' => 'blogEmailsubscriptionPlugin',
          'method' => 
          array (
            0 => 'blogAction',
          ),
        ),
      ),
      'backend_blog_edit' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'emailsubscription',
          'regex' => '/backend_blog_edit/',
          'class' => 'blogEmailsubscriptionPlugin',
          'method' => 
          array (
            0 => 'settingsAction',
          ),
        ),
      ),
      'contacts_delete' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'emailsubscription',
          'regex' => '/contacts_delete/',
          'class' => 'blogEmailsubscriptionPlugin',
          'method' => 
          array (
            0 => 'contactsDelete',
          ),
        ),
      ),
      'prepare_posts_backend' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'favorite',
          'regex' => '/prepare_posts_backend/',
          'class' => 'blogFavoritePlugin',
          'method' => 
          array (
            0 => 'postsPrepareView',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'tag',
          'regex' => '/prepare_posts_backend/',
          'class' => 'blogTagPlugin',
          'method' => 
          array (
            0 => 'prepareBackendView',
          ),
        ),
      ),
      'prepare_comments_frontend' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'gravatar',
          'regex' => '/prepare_comments_frontend/',
          'class' => 'blogGravatarPlugin',
          'method' => 
          array (
            0 => 'commentsPrepare',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'troll',
          'regex' => '/prepare_comments_frontend/',
          'class' => 'blogTrollPlugin',
          'method' => 
          array (
            0 => 'prepareView',
          ),
        ),
      ),
      'prepare_comments_backend' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'gravatar',
          'regex' => '/prepare_comments_backend/',
          'class' => 'blogGravatarPlugin',
          'method' => 
          array (
            0 => 'commentsPrepare',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'troll',
          'regex' => '/prepare_comments_backend/',
          'class' => 'blogTrollPlugin',
          'method' => 
          array (
            0 => 'prepareView',
          ),
        ),
      ),
      'backend_assets' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'markdown',
          'regex' => '/backend_assets/',
          'class' => 'blogMarkdownPlugin',
          'method' => 
          array (
            0 => 'backendAssets',
          ),
        ),
      ),
      'prepare_posts_frontend' => 
      array (
        0 => 
        array (
          'app_id' => 'blog',
          'plugin_id' => 'tag',
          'regex' => '/prepare_posts_frontend/',
          'class' => 'blogTagPlugin',
          'method' => 
          array (
            0 => 'prepareFrontendView',
          ),
        ),
      ),
    ),
    'photos' => 
    array (
      'backend_photo' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'comments',
          'regex' => '/backend_photo/',
          'class' => 'photosCommentsPlugin',
          'method' => 
          array (
            0 => 'backendPhoto',
          ),
        ),
        1 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'publicgallery',
          'regex' => '/backend_photo/',
          'class' => 'photosPublicgalleryPlugin',
          'method' => 
          array (
            0 => 'backendPhoto',
          ),
        ),
      ),
      'backend_sidebar' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'comments',
          'regex' => '/backend_sidebar/',
          'class' => 'photosCommentsPlugin',
          'method' => 
          array (
            0 => 'backendSidebar',
          ),
        ),
        1 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'publicgallery',
          'regex' => '/backend_sidebar/',
          'class' => 'photosPublicgalleryPlugin',
          'method' => 
          array (
            0 => 'backendSidebar',
          ),
        ),
      ),
      'backend_assets' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'comments',
          'regex' => '/backend_assets/',
          'class' => 'photosCommentsPlugin',
          'method' => 
          array (
            0 => 'backendAssets',
          ),
        ),
        1 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'publicgallery',
          'regex' => '/backend_assets/',
          'class' => 'photosPublicgalleryPlugin',
          'method' => 
          array (
            0 => 'backendAssets',
          ),
        ),
      ),
      'prepare_photos_backend' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'comments',
          'regex' => '/prepare_photos_backend/',
          'class' => 'photosCommentsPlugin',
          'method' => 
          array (
            0 => 'preparePhotosBackend',
          ),
        ),
        1 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'publicgallery',
          'regex' => '/prepare_photos_backend/',
          'class' => 'photosPublicgalleryPlugin',
          'method' => 
          array (
            0 => 'preparePhotosBackend',
          ),
        ),
      ),
      'prepare_photos_frontend' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'comments',
          'regex' => '/prepare_photos_frontend/',
          'class' => 'photosCommentsPlugin',
          'method' => 
          array (
            0 => 'preparePhotosFrontend',
          ),
        ),
        1 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'publicgallery',
          'regex' => '/prepare_photos_frontend/',
          'class' => 'photosPublicgalleryPlugin',
          'method' => 
          array (
            0 => 'preparePhotosFrontend',
          ),
        ),
      ),
      'frontend_assets' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'comments',
          'regex' => '/frontend_assets/',
          'class' => 'photosCommentsPlugin',
          'method' => 
          array (
            0 => 'frontendAssets',
          ),
        ),
        1 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'publicgallery',
          'regex' => '/frontend_assets/',
          'class' => 'photosPublicgalleryPlugin',
          'method' => 
          array (
            0 => 'frontendAssets',
          ),
        ),
      ),
      'frontend_photo' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'comments',
          'regex' => '/frontend_photo/',
          'class' => 'photosCommentsPlugin',
          'method' => 
          array (
            0 => 'frontendPhoto',
          ),
        ),
        1 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'publicgallery',
          'regex' => '/frontend_photo/',
          'class' => 'photosPublicgalleryPlugin',
          'method' => 
          array (
            0 => 'frontendPhoto',
          ),
        ),
      ),
      'make_stack' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'comments',
          'regex' => '/make_stack/',
          'class' => 'photosCommentsPlugin',
          'method' => 
          array (
            0 => 'backendMakeStack',
          ),
        ),
      ),
      'unmake_stack' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'comments',
          'regex' => '/unmake_stack/',
          'class' => 'photosCommentsPlugin',
          'method' => 
          array (
            0 => 'backendUnmakeStack',
          ),
        ),
      ),
      'photo_delete' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'comments',
          'regex' => '/photo_delete/',
          'class' => 'photosCommentsPlugin',
          'method' => 
          array (
            0 => 'backendPhotoDelete',
          ),
        ),
      ),
      'contacts_links' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'comments',
          'regex' => '/contacts_links/',
          'class' => 'photosCommentsPlugin',
          'method' => 
          array (
            0 => 'contactsLinks',
          ),
        ),
      ),
      'contacts_delete' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'comments',
          'regex' => '/contacts_delete/',
          'class' => 'photosCommentsPlugin',
          'method' => 
          array (
            0 => 'contactsDelete',
          ),
        ),
      ),
      'routing' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'comments',
          'regex' => '/routing/',
          'class' => 'photosCommentsPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
        1 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'publicgallery',
          'regex' => '/routing/',
          'class' => 'photosPublicgalleryPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
      ),
      'backend_photo_toolbar' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'imageeffects',
          'regex' => '/backend_photo_toolbar/',
          'class' => 'photosImageeffectsPlugin',
          'method' => 
          array (
            0 => 'photoToolbar',
          ),
        ),
        1 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'publicgallery',
          'regex' => '/backend_photo_toolbar/',
          'class' => 'photosPublicgalleryPlugin',
          'method' => 
          array (
            0 => 'backendPhotoToolbar',
          ),
        ),
      ),
      'frontend_sidebar' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'publicgallery',
          'regex' => '/frontend_sidebar/',
          'class' => 'photosPublicgalleryPlugin',
          'method' => 
          array (
            0 => 'frontendSidebar',
          ),
        ),
      ),
      'extra_prepare_collection' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'publicgallery',
          'regex' => '/extra_prepare_collection/',
          'class' => 'photosPublicgalleryPlugin',
          'method' => 
          array (
            0 => 'extraPrepareCollection',
          ),
        ),
      ),
      'collection' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'publicgallery',
          'regex' => '/collection/',
          'class' => 'photosPublicgalleryPlugin',
          'method' => 
          array (
            0 => 'prepareCollection',
          ),
        ),
      ),
      'front_controller' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'publicgallery',
          'regex' => '/front_controller/',
          'class' => 'photosPublicgalleryPlugin',
          'method' => 
          array (
            0 => 'frontendController',
          ),
        ),
      ),
      'before_save_field' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'publicgallery',
          'regex' => '/before_save_field/',
          'class' => 'photosPublicgalleryPlugin',
          'method' => 
          array (
            0 => 'beforeSaveField',
          ),
        ),
      ),
      'search_frontend_link' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'publicgallery',
          'regex' => '/search_frontend_link/',
          'class' => 'photosPublicgalleryPlugin',
          'method' => 
          array (
            0 => 'searchFrontendLink',
          ),
        ),
      ),
      'photo_upload' => 
      array (
        0 => 
        array (
          'app_id' => 'photos',
          'plugin_id' => 'watermark',
          'regex' => '/photo_upload/',
          'class' => 'photosWatermarkPlugin',
          'method' => 
          array (
            0 => 'photoUpload',
          ),
        ),
      ),
    ),
    'team' => 
    array (
      'backend_schedule_settings' => 
      array (
        0 => 
        array (
          'app_id' => 'team',
          'plugin_id' => 'ics',
          'regex' => '/backend_schedule_settings/',
          'class' => 'teamIcsPlugin',
          'method' => 
          array (
            0 => 'backendScheduleSettings',
          ),
        ),
      ),
      'backend_assets' => 
      array (
        0 => 
        array (
          'app_id' => 'team',
          'plugin_id' => 'ics',
          'regex' => '/backend_assets/',
          'class' => 'teamIcsPlugin',
          'method' => 
          array (
            0 => 'backendAssets',
          ),
        ),
      ),
    ),
  ),
);
