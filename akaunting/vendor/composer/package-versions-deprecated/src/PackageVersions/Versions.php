<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'akaunting/akaunting';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'akaunting/laravel-firewall' => '1.3.2@258be5ff1a3ac86ea9d381fad6d8a88f1d4dca1e',
  'akaunting/laravel-language' => '1.0.18@19fc3e12ce8e5c052eda5ca6ecd3ae2b0f9952d3',
  'akaunting/laravel-menu' => '1.0.13@ec84125ddfa34f4c3c6872f56111554b19894838',
  'akaunting/laravel-module' => '2.0.11@3dd5184ddd28d62f4bce140baea0c318f0b72b83',
  'akaunting/laravel-money' => '1.2.3@e97cbb9735540fac995e5e0b17395ef4ba33ac38',
  'akaunting/laravel-setting' => '1.2.7@10186327e3b93fca56eaa9e4d8ee2ead189f0332',
  'akaunting/laravel-version' => '1.0.4@5d632c8ce54131bbe15f22ea135934efbf1fad85',
  'akaunting/module-bc21' => '2.0.0@4158c23c70aea22e6fb774a7a0d1d9e3d856fe8d',
  'akaunting/module-offline-payments' => '2.0.2@ad4dfc9f0cb19c695f7ace724e088262be889016',
  'akaunting/module-paypal-standard' => '2.0.1@49671f6f3c2c6319c7b319716292d31c2ad7db51',
  'asm89/stack-cors' => 'v2.0.3@9cb795bf30988e8c96dd3c40623c48a877bc6714',
  'aws/aws-crt-php' => 'v1.0.2@3942776a8c99209908ee0b287746263725685732',
  'aws/aws-sdk-php' => '3.198.1@79bf3298bd2893eb0b4614c2463e9f675d07118b',
  'balping/json-raw-encoder' => 'v1.0.1@e2b0ab888342b0716f1f0628e2fa13b345c5f276',
  'barryvdh/laravel-debugbar' => 'v3.6.2@70b89754913fd89fef16d0170a91dbc2a5cd633a',
  'barryvdh/laravel-dompdf' => 'v0.9.0@5b99e1f94157d74e450f4c97e8444fcaffa2144b',
  'barryvdh/laravel-ide-helper' => 'v2.10.0@73b1012b927633a1b4cd623c2e6b1678e6faef08',
  'barryvdh/reflection-docblock' => 'v2.0.6@6b69015d83d3daf9004a71a89f26e27d27ef6a16',
  'bkwld/cloner' => '3.9.2@825ad2cb237660bdef4d4aad3c539efb9a7db0a8',
  'brick/math' => '0.9.3@ca57d18f028f84f777b2168cd1911b0dee2343ae',
  'clue/stream-filter' => 'v1.5.0@aeb7d8ea49c7963d3b581378955dbf5bc49aa320',
  'composer/ca-bundle' => '1.2.11@0b072d51c5a9c6f3412f7ea3ab043d6603cb2582',
  'composer/composer' => '2.1.9@e558c88f28d102d497adec4852802c0dc14c7077',
  'composer/metadata-minifier' => '1.0.0@c549d23829536f0d0e984aaabbf02af91f443207',
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'composer/semver' => '3.2.5@31f3ea725711245195f62e54ffa402d8ef2fdba9',
  'composer/spdx-licenses' => '1.5.5@de30328a7af8680efdc03e396aad24befd513200',
  'composer/xdebug-handler' => '2.0.2@84674dd3a7575ba617f5a76d7e9e29a7d3891339',
  'consoletvs/charts' => '6.5.5@0005d14e4fe6715f4146a4dc3b56add768233001',
  'dingo/api' => 'v3.0.7@edd912c912d08de17a33aaf2c471d07575723513',
  'dingo/blueprint' => 'v0.4.3@e3a8f19ae10716670079c3c162540756dbd20a88',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/dbal' => '3.1.3@96b0053775a544b4a6ab47654dac0621be8b4cf8',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'dompdf/dompdf' => 'v1.0.2@8768448244967a46d6e67b891d30878e0e15d25c',
  'dragonmantank/cron-expression' => 'v3.1.0@7a8c6e56ab3ffcc538d05e8155bb42269abf1a0c',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'enlightn/enlightn' => 'v1.22.1@b4743d1abbcaf8340729a9cada2cceced33ff2c6',
  'enlightn/security-checker' => 'v1.9.0@dc5bce653fa4d9c792e9dcffa728c0642847c1e1',
  'ezyang/htmlpurifier' => 'v4.13.0@08e27c97e4c6ed02f37c5b2b20488046c8d90d75',
  'fideloper/proxy' => '4.4.1@c073b2bd04d1c90e04dc1b787662b558dd65ade0',
  'fruitcake/laravel-cors' => 'v2.0.4@a8ccedc7ca95189ead0e407c43b530dc17791d6a',
  'genealabs/laravel-model-caching' => '0.11.3@b8ffa347f6269f32dbd4b74ed7cb0bcd700e0793',
  'genealabs/laravel-pivot-events' => '8.0@aafc9d7f6a0b31e0d58bd2b31e38253fbd27c2a9',
  'graham-campbell/markdown' => 'v13.1.1@d25b873e5c5870edc4de7d980808f1a8e092a9c7',
  'graham-campbell/result-type' => 'v1.0.2@84afea85c6841deeea872f36249a206e878a5de0',
  'guzzlehttp/guzzle' => '7.3.0@7008573787b430c1c1f650e3722d9bba59967628',
  'guzzlehttp/promises' => '1.5.0@136a635e2b4a49b9d79e9c8fee267ffb257fdba0',
  'guzzlehttp/psr7' => '1.8.3@1afdd860a2566ed3c2b0b4a3de6e23434a79ec85',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'hoa/compiler' => '3.17.08.08@aa09caf0bf28adae6654ca6ee415ee2f522672de',
  'hoa/consistency' => '1.17.05.02@fd7d0adc82410507f332516faf655b6ed22e4c2f',
  'hoa/event' => '1.17.01.13@6c0060dced212ffa3af0e34bb46624f990b29c54',
  'hoa/exception' => '1.17.01.16@091727d46420a3d7468ef0595651488bfc3a458f',
  'hoa/file' => '1.17.07.11@35cb979b779bc54918d2f9a4e02ed6c7a1fa67ca',
  'hoa/iterator' => '2.17.01.10@d1120ba09cb4ccd049c86d10058ab94af245f0cc',
  'hoa/math' => '1.17.05.16@7150785d30f5d565704912116a462e9f5bc83a0c',
  'hoa/regex' => '1.17.01.13@7e263a61b6fb45c1d03d8e5ef77668518abd5bec',
  'hoa/stream' => '1.17.02.21@3293cfffca2de10525df51436adf88a559151d82',
  'hoa/ustring' => '4.17.01.16@e6326e2739178799b1fe3fdd92029f9517fa17a0',
  'hoa/visitor' => '2.17.01.16@c18fe1cbac98ae449e0d56e87469103ba08f224a',
  'hoa/zformat' => '1.17.01.10@522c381a2a075d4b9dbb42eb4592dd09520e4ac2',
  'intervention/image' => '2.5.1@abbf18d5ab8367f96b3205ca3c89fb2fa598c69e',
  'intervention/imagecache' => '2.5.1@e714f13298ecaf9b2d11cb7106a0415d5615cbe5',
  'jaybizzle/crawler-detect' => 'v1.2.106@78bf6792cbf9c569dc0bf2465481978fd2ed0de9',
  'jenssegers/agent' => 'v2.6.4@daa11c43729510b3700bc34d414664966b03bffe',
  'justinrainbow/json-schema' => '5.2.11@2ab6744b7296ded80f8cc4f9509abbff393399aa',
  'kkszymanowski/traitor' => '0.2.5@9770fc7de72ff585601dc9c42b31715d9fc40a24',
  'kyslik/column-sortable' => '6.4.1@44f9da98acd31b2e871d0074bd638998990888b1',
  'laracasts/flash' => '3.2@76c2e200498795bdbeda97b682536130316e8b97',
  'laravel/framework' => 'v8.63.0@8f3d280f36a427730c8c8fa34316c79eed38781e',
  'laravel/serializable-closure' => 'v1.0.3@6cfc678735f22ccedad761b8cae2bab14c3d8e5b',
  'laravel/slack-notification-channel' => 'v2.3.1@f428e76b8d0a0a2ff413ab225eeb829b9a8ffc20',
  'laravel/tinker' => 'v2.6.2@c808a7227f97ecfd9219fbf913bad842ea854ddc',
  'laravel/ui' => 'v3.3.0@07d725813350c695c779382cbd6dac0ab8665537',
  'laravelcollective/html' => 'v6.2.1@ae15b9c4bf918ec3a78f092b8555551dd693fde3',
  'league/commonmark' => '1.6.6@c4228d11e30d7493c6836d20872f9582d8ba6dcf',
  'league/flysystem' => '1.1.5@18634df356bfd4119fe3d6156bdb990c414c14ea',
  'league/flysystem-aws-s3-v3' => '1.0.29@4e25cc0582a36a786c31115e419c6e40498f6972',
  'league/fractal' => '0.19.2@06dc15f6ba38f2dde2f919d3095d13b571190a7c',
  'league/mime-type-detection' => '1.8.0@b38b25d7b372e9fddb00335400467b223349fd7e',
  'league/oauth2-client' => '2.6.0@badb01e62383430706433191b82506b6df24ad98',
  'league/omnipay' => 'v3.1.0@1ba7c8a3312cf2342458b99c9e5b86eaae44aed2',
  'livewire/livewire' => 'v2.3.18@c0c78f430e4151fb6902bbb88c75e782d2549e1a',
  'lorisleiva/laravel-search-string' => 'v1.1.3@366f5584f2ae13d6751644f05079f2c0d6634c0e',
  'maatwebsite/excel' => '3.1.33@b2de5ba92c5c1ad9415f0eb7c72838fb3eaaa5b8',
  'maennchen/zipstream-php' => '2.1.0@c4c5803cc1f93df3d2448478ef79394a5981cc58',
  'markbaker/complex' => '2.0.3@6f724d7e04606fd8adaa4e3bb381c3e9db09c946',
  'markbaker/matrix' => '2.1.3@174395a901b5ba0925f1d790fa91bab531074b61',
  'maximebf/debugbar' => 'v1.17.1@0a3532556be0145603f8a9de23e76dc28eed7054',
  'mnsami/composer-custom-directory-installer' => '2.0.0@85f66323978d0b1cb0e6acc7f69b3e7b912f82d9',
  'mobiledetect/mobiledetectlib' => '2.8.37@9841e3c46f5bd0739b53aed8ac677fa712943df7',
  'mockery/mockery' => '1.4.4@e01123a0e847d52d186c5eb4b9bf58b0c6d00346',
  'moneyphp/money' => 'v3.3.1@122664c2621a95180a13c1ac81fea1d2ef20781e',
  'monolog/monolog' => '2.3.5@fd4380d6fc37626e2f799f29d91195040137eba9',
  'monooso/unobserve' => 'v3.0.0@e7cc357d405ecf73b392604d49e65359cd471d24',
  'mtdowling/jmespath.php' => '2.6.1@9b87907a81b87bc76d19a7fb2d61e61486ee9edb',
  'myclabs/php-enum' => '1.8.3@b942d263c641ddb5190929ff840c68f78713e937',
  'nesbot/carbon' => '2.53.1@f4655858a784988f880c1b8c7feabbf02dfdf045',
  'nikic/php-parser' => 'v4.13.0@50953a2691a922aa1769461637869a0a2faa3f53',
  'nunomaduro/larastan' => 'v0.7.12@b2da312efe88d501aeeb867ba857e8c4198d43c0',
  'omnipay/common' => 'v3.1.2@5b16387ec5ab1b9ff86bdf0f20415088693b9948',
  'opis/closure' => '3.6.2@06e2ebd25f2869e54a306dda991f7db58066f7f6',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'phenx/php-font-lib' => '0.5.2@ca6ad461f032145fff5971b5985e5af9e7fa88d8',
  'phenx/php-svg-lib' => 'v0.3.3@5fa61b65e612ce1ae15f69b3d223cb14ecc60e32',
  'php-http/discovery' => '1.14.1@de90ab2b41d7d61609f504e031339776bc8c7223',
  'php-http/guzzle7-adapter' => '0.1.1@1967de656b9679a2a6a66d0e4e16fa99bbed1ad1',
  'php-http/httplug' => '2.2.0@191a0a1b41ed026b717421931f8d3bd2514ffbf9',
  'php-http/message' => '1.12.0@39eb7548be982a81085fe5a6e2a44268cd586291',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => '1.1.0@4c4c1f9b7289a2ec57cde7f1e9762a5789506f88',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.5.1@a12f7e301eb7258bb68acd89d4aefa05c2906cae',
  'phpoffice/phpspreadsheet' => '1.18.0@418cd304e8e6b417ea79c3b29126a25dc4b1170c',
  'phpoption/phpoption' => '1.8.0@5455cb38aed4523f99977c4a12ef19da4bfe2a28',
  'phpstan/phpstan' => '0.12.99@b4d40f1d759942f523be267a1bab6884f46ca3f7',
  'plank/laravel-mediable' => '5.2.0@c1efa74ceabe7ef978ddfb38fc1427903cb4c294',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.10.9@01281336c4ae557fe4a994544f30d3a1bc204375',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.2.2@cccc74ee5e328031b15640b51056ee8d3bb66c0a',
  'ramsey/uuid' => '4.2.3@fc9bb7fb5388691fd7373cd44dcb4d63bbcf24df',
  'react/promise' => 'v2.8.0@f3cff96a19736714524ca0dd1d4130de73dbbbc4',
  'riverskies/laravel-mobile-detect' => '1.3@0ddb27d31a4a1148875424426b9feda6598f2f14',
  'sabberworm/php-css-parser' => '8.3.1@d217848e1396ef962fb1997cf3e2421acba7f796',
  'sanmai/hoa-protocol' => '1.21@3cf1a72c12fed6aa0169433a10f0275face91362',
  'santigarcor/laratrust' => '6.3.2@9ab3bfdc06afe18b17f69b77cb77291c36dae9f6',
  'seld/jsonlint' => '1.8.3@9ad6ce79c342fbd44df10ea95511a1b24dee5b57',
  'seld/phar-utils' => '1.1.2@749042a2315705d2dfbbc59234dd9ceb22bf3ff0',
  'simshaun/recurr' => 'v4.0.5@08b0b46879f598cd11dd42b4c1a9c221a0562749',
  'staudenmeir/belongs-to-through' => 'v2.11.2@32d03527163a3edd7f88e4b74b03575e4bdb5db7',
  'staudenmeir/eloquent-has-many-deep' => 'v1.14.3@c44115684aa831b2b74fec8440f6e811602186ed',
  'swiftmailer/swiftmailer' => 'v6.2.7@15f7faf8508e04471f666633addacf54c0ab5933',
  'symfony/console' => 'v5.3.7@8b1008344647462ae6ec57559da166c2bfa5e16a',
  'symfony/css-selector' => 'v5.3.4@7fb120adc7f600a59027775b224c13a33530dd90',
  'symfony/debug' => 'v4.4.31@43ede438d4cb52cd589ae5dc070e9323866ba8e0',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/error-handler' => 'v5.3.7@3bc60d0fba00ae8d1eaa9eb5ab11a2bbdd1fc321',
  'symfony/event-dispatcher' => 'v5.3.7@ce7b20d69c66a20939d8952b617506a44d102130',
  'symfony/event-dispatcher-contracts' => 'v2.4.0@69fee1ad2332a7cbab3aca13591953da9cdb7a11',
  'symfony/filesystem' => 'v5.3.4@343f4fe324383ca46792cae728a3b6e2f708fb32',
  'symfony/finder' => 'v5.3.7@a10000ada1e600d109a6c7632e9ac42e8bf2fb93',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v5.3.7@e36c8e5502b4f3f0190c675f1c1f1248a64f04e5',
  'symfony/http-kernel' => 'v5.3.9@ceaf46a992f60e90645e7279825a830f733a17c5',
  'symfony/mime' => 'v5.3.8@a756033d0a7e53db389618653ae991eba5a19a11',
  'symfony/polyfill-ctype' => 'v1.23.0@46cd95797e9df938fdd2b03693b5fca5e64b01ce',
  'symfony/polyfill-iconv' => 'v1.23.0@63b5bb7db83e5673936d6e3b8b3e022ff6474933',
  'symfony/polyfill-intl-grapheme' => 'v1.23.1@16880ba9c5ebe3642d1995ab866db29270b36535',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php72' => 'v1.23.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/process' => 'v5.3.7@38f26c7d6ed535217ea393e05634cb0b244a1967',
  'symfony/routing' => 'v5.3.7@be865017746fe869007d94220ad3f5297951811b',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/string' => 'v5.3.7@8d224396e28d30f81969f083a58763b8b9ceb0a5',
  'symfony/translation' => 'v5.3.9@6e69f3551c1a3356cf6ea8d019bf039a0f8b6886',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/var-dumper' => 'v5.3.8@eaaea4098be1c90c8285543e1356a09c8aa5c8da',
  'symfony/yaml' => 'v5.3.6@4500fe63dc9c6ffc32d3b1cb0448c329f9c814b7',
  'tijsverkoyen/css-to-inline-styles' => '2.2.3@b43b05cf43c1b6d849478965062b6ef73e223bb5',
  'vlucas/phpdotenv' => 'v5.3.1@accaddf133651d4b5cf81a119f25296736ffc850',
  'voku/portable-ascii' => '1.5.6@80953678b19901e5165c56752d087fc11526017c',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'beyondcode/laravel-dump-server' => '1.7.0@e27c7b942ab62f6ac7168359393d328ec5215b89',
  'brianium/paratest' => 'v6.3.1@3d81e35876f6497467310b123583cca6bd4c38f2',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'facade/flare-client-php' => '1.9.1@b2adf1512755637d0cef4f7d1b54301325ac78ed',
  'facade/ignition' => '2.14.1@6d89c4c99537f487ad29f646d57ebf107ef714ed',
  'facade/ignition-contracts' => '1.0.2@3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
  'fakerphp/faker' => 'v1.16.0@271d384d216e5e5c468a6b28feedf95d49f83b35',
  'filp/whoops' => '2.14.4@f056f1fe935d9ed86e698905a957334029899895',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nunomaduro/collision' => 'v5.10.0@3004cfa49c022183395eabc6d0e5207dfe498d00',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpspec/prophecy' => '1.14.0@d86dfc2e2a3cd366cee475e52c6bb3bbc371aa0e',
  'phpunit/php-code-coverage' => '9.2.7@d4c798ed8d51506800b441f7a13ecb0f76f12218',
  'phpunit/php-file-iterator' => '3.0.5@aa4be8575f26070b100fccb67faabb28f21f66f8',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.10@c814a05837f2edb0d1471d6e3f4ab3501ca3899a',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.3@d89cc98761b8cb5a1a235a6b703ae50d34080e65',
  'sebastian/global-state' => '5.0.3@23bd5951f7ff26f12d4e3242864df3e08dec4e49',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.4@b8cd8a1c753c90bc1a0f5372170e3e489136f914',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'stefanzweifel/laravel-stats-phploc' => '7.1.0@9c96c5528c294c4ac7620b6ec9d6cee6de1477b1',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'wnx/laravel-stats' => 'v2.5.2@3bb622cb20a8c17d3d8fe9429e02df3f4d43ee81',
  'akaunting/akaunting' => 'dev-master@98d8723b9fded17ab3f14f55605ce581cfdc9425',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
