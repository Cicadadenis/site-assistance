<?php
return array (
  'meta' => 
  array (
    'Project-Id-Version' => 'blog/plugins/gravatar',
    'POT-Creation-Date' => '2012-05-21 11:23+0400',
    'PO-Revision-Date' => '',
    'Last-Translator' => 'Vladimir V. Tuporshin <vofka@webasyst.net>',
    'Language-Team' => 'blog/plugins/gravatar',
    'MIME-Version' => '1.0',
    'Content-Type' => 'text/plain; charset=utf-8',
    'Content-Transfer-Encoding' => '8bit',
    'Plural-Forms' => 
    array (
      'nplurals' => '3',
      'plural' => 'return (((($n%10)==1)&&(($n%100)!=11))?(0):((((($n%10)>=2)&&(($n%10)<=4))&&((($n%100)<10)||(($n%100)>=20)))?(1):2));',
    ),
    'X-Poedit-Language' => 'ru_RU',
    'X-Poedit-SourceCharset' => 'utf-8',
    'X-Poedit-Basepath' => '.',
    'X-Poedit-SearchPath-0' => '.',
    'X-Poedit-SearchPath-1' => '.',
  ),
  'messages' => 
  array (
    'When you include a default image, Gravatar will automatically serve up that image if there is no image associated with the requested email hash.' => 'Плагин Gravatar возвращает юзерпик пользователя по его электронному адресу. Если юзерпик не загружен, то будет показана картинка согласно выбранному шаблону (список шаблонов предоставляется сервисом Gravatar).',
    'Use default Blog app userpic' => 'Использовать стандартный юзерпик пользователя Вебасиста',
    'Gravatar' => 'Gravatar',
    'Globally Recognized Avatars. All commentators userpics are replaced with gravatar.com’s userpic (frontend only)' => 'Globally Recognized Avatars. Юзерпики комментаторов будут заменены на юзерпики, которые возвращает сервис gravatar.com (только для комментариев во фронтенде)',
    'Default image type' => 'Если Gravatar вернул «пустой» юзерпик',
  ),
);
