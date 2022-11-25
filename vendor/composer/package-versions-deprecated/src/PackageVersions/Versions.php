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
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'doctrine/annotations' => '1.13.3@648b0343343565c4a056bfc8392201385e8d89f0',
  'doctrine/cache' => '2.2.0@1ca8f21980e770095a31456042471a57bc4c68fb',
  'doctrine/collections' => '1.8.0@2b44dd4cbca8b5744327de78bafef5945c7e7b5e',
  'doctrine/common' => '3.4.3@8b5e5650391f851ed58910b3e3d48a71062eeced',
  'doctrine/dbal' => '3.5.1@f38ee8aaca2d58ee88653cb34a6a3880c23f38a5',
  'doctrine/deprecations' => 'v1.0.0@0e2a4f1f8cdfc7a92ec3b01c9334898c806b30de',
  'doctrine/doctrine-bundle' => '2.7.1@a2dcad48741c9d12fd6040398cf075025030096e',
  'doctrine/doctrine-migrations-bundle' => '3.2.2@3393f411ba25ade21969c33f2053220044854d01',
  'doctrine/event-manager' => '1.2.0@95aa4cb529f1e96576f3fda9f5705ada4056a520',
  'doctrine/inflector' => '2.0.6@d9d313a36c872fd6ee06d9a6cbcf713eaa40f024',
  'doctrine/instantiator' => '1.4.1@10dcfce151b967d20fde1b34ae6640712c3891bc',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'doctrine/migrations' => '3.5.2@61c6ef3a10b7df43c3b6388a184754f26e58700a',
  'doctrine/orm' => '2.13.4@a5a6cc6630ce497290396d5f206887227820a634',
  'doctrine/persistence' => '3.1.0@2a9c70a5e21f8968c5a46b79f819ea52f322080b',
  'doctrine/sql-formatter' => '1.1.3@25a06c7bf4c6b8218f47928654252863ffc890a5',
  'egulias/email-validator' => '3.2.1@f88dcf4b14af14a98ad96b14b2b317969eab6715',
  'friendsofphp/proxy-manager-lts' => 'v1.0.13@88354616f4cf4f6620910fd035e282173ba453e8',
  'laminas/laminas-code' => '4.7.1@91aabc066d5620428120800c0eafc0411e441a62',
  'monolog/monolog' => '2.8.0@720488632c590286b88b80e62aa3d3d551ad4a50',
  'paragonie/constant_time_encoding' => 'v2.6.3@58c3f47f650c94ec05a151692652a868995d2938',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.6.2@48f445a408c131e38cab1c235aa6d2bb7a0bb20d',
  'phpseclib/bcmath_compat' => '1.0.4@f805922db4b3d8c1e174dafb74ac7374264e8880',
  'phpseclib/phpseclib' => '3.0.17@dbc2307d5c69aeb22db136c52e91130d7f2ca761',
  'phpstan/phpdoc-parser' => '1.13.1@aac44118344d197e6d5f7c6cee91885f0a89acdd',
  'psr/cache' => '3.0.0@aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
  'psr/container' => '2.0.2@c71ecc56dfe541dbd90c5360474fbc405f8d5963',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '2.0.1@84b159194ecfd7eaa472280213976e96415433f7',
  'psr/log' => '3.0.0@fe5ea303b0887d5caefd3d431c3e61ad47037001',
  'sensio/framework-extra-bundle' => 'v6.2.9@dcfac94d6bdcf95c126e8ccac2104917c7c8f135',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/asset' => 'v6.0.13@77b6b2273185bae723c38b40c6b6990a09616327',
  'symfony/cache' => 'v6.0.15@370ca602748b77f63a474da397afc2fb66e37319',
  'symfony/cache-contracts' => 'v3.1.1@2eab7fa459af6d75c6463e63e633b667a9b761d3',
  'symfony/config' => 'v6.0.11@956d4ec5df274dda91a4cedfccc2bfd063f6f649',
  'symfony/console' => 'v6.0.15@b0b910724a0a0326b4481e4f8a30abb2dd442efb',
  'symfony/dependency-injection' => 'v6.0.13@6339881a2970b9f6bf6f4d2b07a540b4e3740f98',
  'symfony/deprecation-contracts' => 'v3.1.1@07f1b9cc2ffee6aaafcf4b710fbc38ff736bd918',
  'symfony/doctrine-bridge' => 'v6.0.15@338fa35c3afa0cd76395449935094c59d45e334b',
  'symfony/dotenv' => 'v6.0.5@1c2288fdfd0787288cd04b9868f879f2212159c4',
  'symfony/error-handler' => 'v6.0.15@f000c166cb3ee32c4c822831a79260a135cd59b5',
  'symfony/event-dispatcher' => 'v6.0.9@5c85b58422865d42c6eb46f7693339056db098a8',
  'symfony/event-dispatcher-contracts' => 'v3.1.1@02ff5eea2f453731cfbc6bc215e456b781480448',
  'symfony/expression-language' => 'v6.0.14@80fc98c72206ee7caa3c427e91467d6bf48862c6',
  'symfony/filesystem' => 'v6.0.13@3adca49133bd055ebe6011ed1e012be3c908af79',
  'symfony/finder' => 'v6.0.11@09cb683ba5720385ea6966e5e06be2a34f2568b1',
  'symfony/flex' => 'v2.2.3@0763da1bdcce1d48c06778d48249905c26d34a72',
  'symfony/form' => 'v6.0.15@a3662b210f7e9d3de23273c755d704ad6d8836cb',
  'symfony/framework-bundle' => 'v6.0.15@fac20dc3eb266c7227cef31670f090e65442129f',
  'symfony/http-client' => 'v6.0.15@af84893895ce7637a4b60fd3de87fe9e44286a21',
  'symfony/http-client-contracts' => 'v3.1.1@fd038f08c623ab5d22b26e9ba35afe8c79071800',
  'symfony/http-foundation' => 'v6.0.15@a93829f4043fdcddebabd8433bdb46c2dcaefe06',
  'symfony/http-kernel' => 'v6.0.15@22c820abe601e7328b56cec86626617139266f48',
  'symfony/intl' => 'v6.0.15@3377841a596c69da08086c50e09a37f2b5b1b598',
  'symfony/mailer' => 'v6.0.15@5eaa3f1404cafa842e953ae16c35757b7356fb32',
  'symfony/mime' => 'v6.0.14@c01b88b63418131daf2edd0bdc17fc8a6d1c939a',
  'symfony/monolog-bridge' => 'v6.0.10@5bdad92051f71996191d91c3bc77fc2f512d08fd',
  'symfony/monolog-bundle' => 'v3.8.0@a41bbcdc1105603b6d73a7d9a43a3788f8e0fb7d',
  'symfony/notifier' => 'v6.0.8@1b81b376728538cdacbe3be6f750501f8c974451',
  'symfony/options-resolver' => 'v6.0.3@51f7006670febe4cbcbae177cbffe93ff833250d',
  'symfony/password-hasher' => 'v6.0.11@7ff6706266cbe55310d029b42299eb6e2bebe849',
  'symfony/polyfill-intl-grapheme' => 'v1.27.0@511a08c03c1960e08a883f4cffcacd219b758354',
  'symfony/polyfill-intl-icu' => 'v1.27.0@a3d9148e2c363588e05abbdd4ee4f971f0a5330c',
  'symfony/polyfill-intl-idn' => 'v1.27.0@639084e360537a19f9ee352433b84ce831f3d2da',
  'symfony/polyfill-intl-normalizer' => 'v1.27.0@19bd1e4fcd5b91116f14d8533c57831ed00571b6',
  'symfony/polyfill-php81' => 'v1.27.0@707403074c8ea6e2edaf8794b0157a0bfa52157a',
  'symfony/process' => 'v6.0.11@44270a08ccb664143dede554ff1c00aaa2247a43',
  'symfony/property-access' => 'v6.0.15@bdcd636b962c10eb3575dac41cf60a704da42c89',
  'symfony/property-info' => 'v6.0.15@5f9f1e51e79c6e4968c711557c1589bae2907863',
  'symfony/proxy-manager-bridge' => 'v6.0.6@aa68a86bc7df5ee9ff39107f122ebf1931d98ff8',
  'symfony/routing' => 'v6.0.15@3b7384fad32c6d0e1919b5bd18a69fbcfc383508',
  'symfony/runtime' => 'v6.0.11@88813c1735d9ce6e1a7cccf63d6f2b6faca79018',
  'symfony/security-bundle' => 'v6.0.11@ba07e865bbcd9c23a2cb165947becb92f450b3bc',
  'symfony/security-core' => 'v6.0.15@0bd4ad13f0686f055b5e6a23dd1001344cf50853',
  'symfony/security-csrf' => 'v6.0.9@5a48bfb3ba3a4e139d8184ca1005c00d8b8e4dc0',
  'symfony/security-http' => 'v6.0.15@a91feca5d9dab65f2f585f6b82155f1122c4c998',
  'symfony/serializer' => 'v6.0.14@d3bea0f239aca9589224a84150066da5495e9e11',
  'symfony/service-contracts' => 'v3.1.1@925e713fe8fcacf6bc05e936edd8dd5441a21239',
  'symfony/stopwatch' => 'v6.0.13@7554fde6848af5ef1178f8ccbdbdb8ae1092c70a',
  'symfony/string' => 'v6.0.15@51ac0fa0ccf132a00519b87c97e8f775fa14e771',
  'symfony/translation' => 'v6.0.14@6f99eb179aee4652c0a7cd7c11f2a870d904330c',
  'symfony/translation-contracts' => 'v3.1.1@606be0f48e05116baef052f7f3abdb345c8e02cc',
  'symfony/twig-bridge' => 'v6.0.14@dd131baf98fe52faf9ca159d9cd1ed3e1babbba1',
  'symfony/twig-bundle' => 'v6.0.8@0c5bb02150d08fa3174d8cd7600496a51702360a',
  'symfony/validator' => 'v6.0.15@241c97afb56b08c084f8017105f8638c74faaf46',
  'symfony/var-dumper' => 'v6.0.14@72af925ddd41ca0372d166d004bc38a00c4608cc',
  'symfony/var-exporter' => 'v6.0.10@e3df004a8d0fb572c420a6915cd23db9254c8366',
  'symfony/web-link' => 'v6.0.3@52d6af6c4476c8ebdef968cb39030826253eb5e4',
  'symfony/yaml' => 'v6.0.14@e65020d137ad54beb85a67ffe6435e980f35ccf3',
  'twig/extra-bundle' => 'v3.4.0@2e58256b0e9fe52f30149347c0547e4633304765',
  'twig/twig' => 'v3.4.3@c38fd6b0b7f370c198db91ffd02e23b517426b58',
  'webmozart/assert' => '1.11.0@11cb2199493b2f8a3b53e7f19068fc6aac760991',
  'myclabs/deep-copy' => '1.11.0@14daed4296fae74d9e3201d2c4925d1acb7aa614',
  'nikic/php-parser' => 'v4.15.2@f59bbe44bf7d96f24f3e2b4ddc21cd52c1d2adbc',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'phpunit/php-code-coverage' => '9.2.19@c77b56b63e3d2031bd8997fcec43c1925ae46559',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.26@851867efcbb6a1b992ec515c71cdcf20d895e9d2',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.8@fa0f136dd2334583309d32b62544682ee972b51a',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.4@1b5dff7bb151a4db11d49d90e5408e4e938270f7',
  'sebastian/exporter' => '4.0.5@ac230ed27f0f98f597c8a2b6eb7ac563af5e5b9d',
  'sebastian/global-state' => '5.0.5@0ca8db5a5fc9c8646244e629625ac486fa286bf2',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '3.2.0@fb3fe09c5f0bae6bc27ef3ce933a1e0ed9464b6e',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'symfony/browser-kit' => 'v6.0.11@92e4b59bf2ef0f7a01d2620c4c87108e5c143d36',
  'symfony/css-selector' => 'v6.0.11@ab2746acddc4f03a7234c8441822ac5d5c63efe9',
  'symfony/debug-bundle' => 'v6.0.11@78426ad77ab9d2429e20354bf7dc56c966205848',
  'symfony/dom-crawler' => 'v6.0.15@b659bb16afdeb784699ee08736b22bc6cc352536',
  'symfony/maker-bundle' => 'v1.48.0@2e428e8432e9879187672fe08f1cc335e2a31dd6',
  'symfony/phpunit-bridge' => 'v6.1.6@07cf788ac9ae83b59d46599bb5098c3add88c68b',
  'symfony/web-profiler-bundle' => 'v6.0.14@1cb5000dd0eb125aa465f757b5d09201e556fa87',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'symfony/polyfill-ctype' => '*@61005848f4e14024cec1c550ab6ef3428bb4e2ff',
  'symfony/polyfill-iconv' => '*@61005848f4e14024cec1c550ab6ef3428bb4e2ff',
  'symfony/polyfill-php72' => '*@61005848f4e14024cec1c550ab6ef3428bb4e2ff',
  'symfony/polyfill-php73' => '*@61005848f4e14024cec1c550ab6ef3428bb4e2ff',
  'symfony/polyfill-php74' => '*@61005848f4e14024cec1c550ab6ef3428bb4e2ff',
  'symfony/polyfill-php80' => '*@61005848f4e14024cec1c550ab6ef3428bb4e2ff',
  'symfony/polyfill-mbstring' => '*@61005848f4e14024cec1c550ab6ef3428bb4e2ff',
  '__root__' => 'dev-master@61005848f4e14024cec1c550ab6ef3428bb4e2ff',
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