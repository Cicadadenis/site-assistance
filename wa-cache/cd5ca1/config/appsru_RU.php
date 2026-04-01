<?php
return array (
  'apiexplorer' => 
  array (
    'id' => 'apiexplorer',
    'name' => 'API Explorer',
    'description' => 'REST client for all API-enabled apps',
    'icon' => 
    array (
      48 => 'wa-apps/apiexplorer/img/apiexplorer.svg',
      24 => 'wa-apps/apiexplorer/img/apiexplorer.svg',
      16 => 'wa-apps/apiexplorer/img/apiexplorer.svg',
    ),
    'version' => '1.0.4',
    'vendor' => 'webasyst',
    'ui' => '2.0',
    'build' => 0,
    'img' => 'wa-apps/apiexplorer/img/apiexplorer.svg',
  ),
  'shop' => 
  array (
    'id' => 'shop',
    'ui' => '1.3',
    'name' => 'Магазин',
    'description' => 'Shop-Script is a robust shopping cart software that allows you to quickly establish your own online store and sell online.',
    'icon' => 
    array (
      16 => 'wa-apps/shop/img/shop16.png',
      24 => 'wa-apps/shop/img/shop24.png',
      48 => 'wa-apps/shop/img/shop48.png',
      96 => 'wa-apps/shop/img/shop96.png',
    ),
    'sash_color' => '#27bf52',
    'rights' => true,
    'frontend' => true,
    'auth' => true,
    'themes' => true,
    'plugins' => true,
    'pages' => true,
    'mobile' => true,
    'my_account' => true,
    'version' => '9.4.3',
    'critical' => '9.0.0',
    'vendor' => 'webasyst',
    'csrf' => true,
    'payment_plugins' => 
    array (
      'taxes' => true,
      'rights' => 'settings',
    ),
    'shipping_plugins' => 
    array (
      'desired_date' => true,
      'draft' => true,
      'ready' => true,
      'cancel' => true,
      'taxes' => true,
      'custom_fields' => true,
      'dimensions' => false,
      'sync' => true,
      'callback' => 
      array (
      ),
      'rights' => 'settings',
    ),
    'sms_plugins' => true,
    'license' => 'commercial',
    'routing_params' => 
    array (
      'checkout_version' => 2,
      'checkout_storefront_id' => 'bf787ee0a1efc4ceb09d9318e1d5fbe6',
    ),
    'build' => 0,
    'img' => 'wa-apps/shop/img/shop48.png',
  ),
  'blog' => 
  array (
    'id' => 'blog',
    'name' => 'Блог',
    'icon' => 
    array (
      16 => 'wa-apps/blog/img/blog16.png',
      24 => 'wa-apps/blog/img/blog24.png',
      48 => 'wa-apps/blog/img/blog.png',
      96 => 'wa-apps/blog/img/blog96.png',
    ),
    'sash_color' => '#f0b100',
    'rights' => true,
    'frontend' => true,
    'auth' => true,
    'themes' => true,
    'plugins' => true,
    'pages' => true,
    'mobile' => true,
    'version' => '1.4.9',
    'critical' => '1.4.2',
    'vendor' => 'webasyst',
    'csrf' => true,
    'my_account' => true,
    'routing_params' => 
    array (
      'blog_url_type' => 1,
    ),
    'build' => 0,
    'img' => 'wa-apps/blog/img/blog.png',
    'ui' => '1.3',
  ),
  'checklists' => 
  array (
    'id' => 'checklists',
    'name' => 'Списки дел',
    'img' => 'wa-apps/checklists/img/checklists.png',
    'rights' => true,
    'version' => '1.0.11',
    'critical' => '1.0.0',
    'vendor' => 'webasyst',
    'build' => 0,
    'icon' => 
    array (
      48 => 'wa-apps/checklists/img/checklists.png',
      24 => 'wa-apps/checklists/img/checklists.png',
      16 => 'wa-apps/checklists/img/checklists.png',
    ),
    'ui' => '1.3',
  ),
  'contacts' => 
  array (
    'id' => 'contacts',
    'name' => 'Контакты',
    'icon' => 
    array (
      48 => 'wa-apps/contacts/img/contacts.png',
      96 => 'wa-apps/contacts/img/contacts96.png',
      24 => 'wa-apps/contacts/img/contacts.png',
      16 => 'wa-apps/contacts/img/contacts.png',
    ),
    'rights' => true,
    'analytics' => true,
    'version' => '1.1.6',
    'critical' => '1.1.0',
    'vendor' => 'webasyst',
    'system' => false,
    'csrf' => true,
    'plugins' => true,
    'frontend' => true,
    'routing_params' => 
    array (
      'private' => true,
    ),
    'build' => 0,
    'img' => 'wa-apps/contacts/img/contacts.png',
    'ui' => '1.3',
  ),
  'developer' => 
  array (
    'id' => 'developer',
    'name' => 'Разработка',
    'img' => 'wa-apps/developer/img/developer.png',
    'vendor' => 'webasyst',
    'frontend' => false,
    'version' => '1.0.2',
    'csrf' => true,
    'build' => 0,
    'icon' => 
    array (
      48 => 'wa-apps/developer/img/developer.png',
      24 => 'wa-apps/developer/img/developer.png',
      16 => 'wa-apps/developer/img/developer.png',
    ),
    'ui' => '1.3',
  ),
  'dummy' => 
  array (
    'id' => 'dummy',
    'name' => 'Пустышка',
    'img' => 'wa-apps/dummy/img/dummy.png',
    'vendor' => 'webasyst',
    'version' => '0.1',
    'rights' => true,
    'frontend' => true,
    'build' => 0,
    'icon' => 
    array (
      48 => 'wa-apps/dummy/img/dummy.png',
      24 => 'wa-apps/dummy/img/dummy.png',
      16 => 'wa-apps/dummy/img/dummy.png',
    ),
    'ui' => '1.3',
  ),
  'guestbook' => 
  array (
    'id' => 'guestbook',
    'name' => 'Гостевая книга',
    'img' => 'wa-apps/guestbook/img/guestbook.png',
    'rights' => true,
    'frontend' => true,
    'version' => '1.0',
    'critical' => '1.0',
    'vendor' => 'webasyst',
    'build' => 0,
    'icon' => 
    array (
      48 => 'wa-apps/guestbook/img/guestbook.png',
      24 => 'wa-apps/guestbook/img/guestbook.png',
      16 => 'wa-apps/guestbook/img/guestbook.png',
    ),
    'ui' => '1.3',
  ),
  'guestbook2' => 
  array (
    'id' => 'guestbook2',
    'name' => 'Гостевая книга 2',
    'img' => 'wa-apps/guestbook2/img/guestbook2.png',
    'icon' => 
    array (
      16 => 'wa-apps/guestbook2/img/guestbook16.png',
      24 => 'wa-apps/guestbook2/img/guestbook24.png',
      48 => 'wa-apps/guestbook2/img/guestbook2.png',
    ),
    'rights' => true,
    'frontend' => true,
    'themes' => true,
    'auth' => true,
    'version' => '1.1',
    'critical' => '1.1',
    'vendor' => 'webasyst',
    'build' => 0,
    'ui' => '1.3',
  ),
  'installer' => 
  array (
    'id' => 'installer',
    'name' => 'Инсталлер',
    'description' => 'Install new apps from the Webasyst Store',
    'icon' => 
    array (
      48 => 'wa-apps/installer/img/installer.svg',
      24 => 'wa-apps/installer/img/installer.svg',
      16 => 'wa-apps/installer/img/installer.svg',
    ),
    'mobile' => false,
    'version' => '2.8.1',
    'critical' => '2.8.1',
    'system' => true,
    'vendor' => 'webasyst',
    'csrf' => true,
    'ui' => '1.3,2.0',
    'build' => 0,
    'img' => 'wa-apps/installer/img/installer.svg',
  ),
  'photos' => 
  array (
    'id' => 'photos',
    'name' => 'Фото',
    'icon' => 
    array (
      48 => 'wa-apps/photos/img/photos.svg',
      24 => 'wa-apps/photos/img/photos.svg',
      16 => 'wa-apps/photos/img/photos.svg',
    ),
    'rights' => true,
    'frontend' => true,
    'themes' => true,
    'auth' => true,
    'plugins' => true,
    'pages' => true,
    'mobile' => true,
    'version' => '2.1.2',
    'vendor' => 'webasyst',
    'my_account' => true,
    'sash_color' => '#af71b3',
    'ui' => '1.3,2.0',
    'build' => 0,
    'img' => 'wa-apps/photos/img/photos.svg',
  ),
  'site' => 
  array (
    'id' => 'site',
    'name' => 'Сайт',
    'icon' => 
    array (
      48 => 'wa-apps/site/img/site512.png',
      24 => 'wa-apps/site/img/site512.png',
      16 => 'wa-apps/site/img/site512.png',
    ),
    'sash_color' => '#49a2e0',
    'frontend' => true,
    'version' => '2.5.32',
    'critical' => '2.5.0',
    'vendor' => 'webasyst',
    'system' => true,
    'rights' => true,
    'plugins' => true,
    'themes' => true,
    'pages' => true,
    'auth' => true,
    'csrf' => true,
    'my_account' => true,
    'build' => 0,
    'img' => 'wa-apps/site/img/site512.png',
    'ui' => '1.3',
  ),
  'stickies' => 
  array (
    'id' => 'stickies',
    'name' => 'Стикеры',
    'prefix' => 'stickies',
    'icon' => 
    array (
      48 => 'wa-apps/stickies/img/stickies.png',
      96 => 'wa-apps/stickies/img/stickies96.png',
      24 => 'wa-apps/stickies/img/stickies.png',
      16 => 'wa-apps/stickies/img/stickies.png',
    ),
    'rights' => true,
    'mobile' => true,
    'version' => '1.1.1',
    'critical' => '1.1.1',
    'vendor' => 'webasyst',
    'build' => 0,
    'img' => 'wa-apps/stickies/img/stickies.png',
    'ui' => '1.3',
  ),
  'team' => 
  array (
    'id' => 'team',
    'name' => 'Команда',
    'icon' => 
    array (
      48 => 'wa-apps/team/img/team.svg',
      24 => 'wa-apps/team/img/team.svg',
      16 => 'wa-apps/team/img/team.svg',
    ),
    'version' => '2.2.0',
    'vendor' => 'webasyst',
    'sash_color' => '#f0dc03',
    'system' => true,
    'rights' => true,
    'plugins' => true,
    'csrf' => true,
    'ui' => '2.0',
    'forcible_ui' => '1.3',
    'build' => 0,
    'img' => 'wa-apps/team/img/team.svg',
  ),
  'ui' => 
  array (
    'id' => 'ui',
    'name' => 'UI',
    'icon' => 
    array (
      48 => 'wa-apps/ui/img/ui.svg',
      24 => 'wa-apps/ui/img/ui.svg',
      16 => 'wa-apps/ui/img/ui.svg',
    ),
    'version' => '2.8.0',
    'vendor' => 'Webasyst',
    'ui' => '1.3,2.0',
    'build' => 0,
    'img' => 'wa-apps/ui/img/ui.svg',
  ),
  'webasyst' => 
  array (
    'id' => 'webasyst',
    'name' => 'Вебасист',
    'prefix' => 'webasyst',
    'version' => '2.8.1',
    'critical' => '2.8.1',
    'vendor' => 'webasyst',
    'csrf' => true,
    'header_items' => 
    array (
      'settings' => 
      array (
        'icon' => 
        array (
          48 => 'wa-content/img/wa-settings/settings.svg',
        ),
        'name' => 'Настройки',
        'link' => 'settings',
        'rights' => 'backend',
        'img' => 'wa-content/img/wa-settings/settings.svg',
      ),
    ),
    'ui' => '1.3,2.0',
    'build' => 0,
    'icon' => 
    array (
    ),
  ),
);
