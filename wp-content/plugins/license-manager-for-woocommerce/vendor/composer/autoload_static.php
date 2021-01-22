<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit396285416ffb51e451101a8d476aff8d
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LicenseManagerForWooCommerce\\Settings\\' => 38,
            'LicenseManagerForWooCommerce\\Repositories\\Resources\\' => 52,
            'LicenseManagerForWooCommerce\\Repositories\\' => 42,
            'LicenseManagerForWooCommerce\\Models\\Resources\\' => 46,
            'LicenseManagerForWooCommerce\\Models\\' => 36,
            'LicenseManagerForWooCommerce\\Lists\\' => 35,
            'LicenseManagerForWooCommerce\\Interfaces\\' => 40,
            'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\Emails\\' => 61,
            'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\' => 54,
            'LicenseManagerForWooCommerce\\Integrations\\' => 42,
            'LicenseManagerForWooCommerce\\Enums\\' => 35,
            'LicenseManagerForWooCommerce\\Controllers\\' => 41,
            'LicenseManagerForWooCommerce\\Abstracts\\' => 39,
            'LicenseManagerForWooCommerce\\API\\v2\\' => 36,
            'LicenseManagerForWooCommerce\\API\\v1\\' => 36,
            'LicenseManagerForWooCommerce\\API\\' => 33,
            'LicenseManagerForWooCommerce\\' => 29,
        ),
        'D' => 
        array (
            'Defuse\\Crypto\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LicenseManagerForWooCommerce\\Settings\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/settings',
        ),
        'LicenseManagerForWooCommerce\\Repositories\\Resources\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/repositories/resources',
        ),
        'LicenseManagerForWooCommerce\\Repositories\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/repositories',
        ),
        'LicenseManagerForWooCommerce\\Models\\Resources\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/models/resources',
        ),
        'LicenseManagerForWooCommerce\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/models',
        ),
        'LicenseManagerForWooCommerce\\Lists\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/lists',
        ),
        'LicenseManagerForWooCommerce\\Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/interfaces',
        ),
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\Emails\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/integrations/woocommerce/emails',
        ),
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/integrations/woocommerce',
        ),
        'LicenseManagerForWooCommerce\\Integrations\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/integrations',
        ),
        'LicenseManagerForWooCommerce\\Enums\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/enums',
        ),
        'LicenseManagerForWooCommerce\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/controllers',
        ),
        'LicenseManagerForWooCommerce\\Abstracts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/abstracts',
        ),
        'LicenseManagerForWooCommerce\\API\\v2\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/api/v2',
        ),
        'LicenseManagerForWooCommerce\\API\\v1\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/api/v1',
        ),
        'LicenseManagerForWooCommerce\\API\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/api',
        ),
        'LicenseManagerForWooCommerce\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Defuse\\Crypto\\' => 
        array (
            0 => __DIR__ . '/..' . '/defuse/php-encryption/src',
        ),
    );

    public static $classMap = array (
        'Defuse\\Crypto\\Core' => __DIR__ . '/..' . '/defuse/php-encryption/src/Core.php',
        'Defuse\\Crypto\\Crypto' => __DIR__ . '/..' . '/defuse/php-encryption/src/Crypto.php',
        'Defuse\\Crypto\\DerivedKeys' => __DIR__ . '/..' . '/defuse/php-encryption/src/DerivedKeys.php',
        'Defuse\\Crypto\\Encoding' => __DIR__ . '/..' . '/defuse/php-encryption/src/Encoding.php',
        'Defuse\\Crypto\\Exception\\BadFormatException' => __DIR__ . '/..' . '/defuse/php-encryption/src/Exception/BadFormatException.php',
        'Defuse\\Crypto\\Exception\\CryptoException' => __DIR__ . '/..' . '/defuse/php-encryption/src/Exception/CryptoException.php',
        'Defuse\\Crypto\\Exception\\EnvironmentIsBrokenException' => __DIR__ . '/..' . '/defuse/php-encryption/src/Exception/EnvironmentIsBrokenException.php',
        'Defuse\\Crypto\\Exception\\IOException' => __DIR__ . '/..' . '/defuse/php-encryption/src/Exception/IOException.php',
        'Defuse\\Crypto\\Exception\\WrongKeyOrModifiedCiphertextException' => __DIR__ . '/..' . '/defuse/php-encryption/src/Exception/WrongKeyOrModifiedCiphertextException.php',
        'Defuse\\Crypto\\File' => __DIR__ . '/..' . '/defuse/php-encryption/src/File.php',
        'Defuse\\Crypto\\Key' => __DIR__ . '/..' . '/defuse/php-encryption/src/Key.php',
        'Defuse\\Crypto\\KeyOrPassword' => __DIR__ . '/..' . '/defuse/php-encryption/src/KeyOrPassword.php',
        'Defuse\\Crypto\\KeyProtectedByPassword' => __DIR__ . '/..' . '/defuse/php-encryption/src/KeyProtectedByPassword.php',
        'Defuse\\Crypto\\RuntimeTests' => __DIR__ . '/..' . '/defuse/php-encryption/src/RuntimeTests.php',
        'FPDF' => __DIR__ . '/..' . '/setasign/fpdf/fpdf.php',
        'LicenseManagerForWooCommerce\\API\\Authentication' => __DIR__ . '/../..' . '/includes/api/Authentication.php',
        'LicenseManagerForWooCommerce\\API\\Setup' => __DIR__ . '/../..' . '/includes/api/Setup.php',
        'LicenseManagerForWooCommerce\\API\\v2\\Generators' => __DIR__ . '/../..' . '/includes/api/v2/Generators.php',
        'LicenseManagerForWooCommerce\\API\\v2\\Licenses' => __DIR__ . '/../..' . '/includes/api/v2/Licenses.php',
        'LicenseManagerForWooCommerce\\Abstracts\\IntegrationController' => __DIR__ . '/../..' . '/includes/abstracts/IntegrationController.php',
        'LicenseManagerForWooCommerce\\Abstracts\\ResourceModel' => __DIR__ . '/../..' . '/includes/abstracts/ResourceModel.php',
        'LicenseManagerForWooCommerce\\Abstracts\\ResourceRepository' => __DIR__ . '/../..' . '/includes/abstracts/ResourceRepository.php',
        'LicenseManagerForWooCommerce\\Abstracts\\RestController' => __DIR__ . '/../..' . '/includes/abstracts/RestController.php',
        'LicenseManagerForWooCommerce\\Abstracts\\Singleton' => __DIR__ . '/../..' . '/includes/abstracts/Singleton.php',
        'LicenseManagerForWooCommerce\\AdminMenus' => __DIR__ . '/../..' . '/includes/AdminMenus.php',
        'LicenseManagerForWooCommerce\\AdminNotice' => __DIR__ . '/../..' . '/includes/AdminNotice.php',
        'LicenseManagerForWooCommerce\\Controllers\\ApiKey' => __DIR__ . '/../..' . '/includes/controllers/ApiKey.php',
        'LicenseManagerForWooCommerce\\Controllers\\Generator' => __DIR__ . '/../..' . '/includes/controllers/Generator.php',
        'LicenseManagerForWooCommerce\\Controllers\\License' => __DIR__ . '/../..' . '/includes/controllers/License.php',
        'LicenseManagerForWooCommerce\\Crypto' => __DIR__ . '/../..' . '/includes/Crypto.php',
        'LicenseManagerForWooCommerce\\Enums\\ColumnType' => __DIR__ . '/../..' . '/includes/enums/ColumnType.php',
        'LicenseManagerForWooCommerce\\Enums\\LicenseSource' => __DIR__ . '/../..' . '/includes/enums/LicenseSource.php',
        'LicenseManagerForWooCommerce\\Enums\\LicenseStatus' => __DIR__ . '/../..' . '/includes/enums/LicenseStatus.php',
        'LicenseManagerForWooCommerce\\Export' => __DIR__ . '/../..' . '/includes/Export.php',
        'LicenseManagerForWooCommerce\\Generator' => __DIR__ . '/../..' . '/includes/Generator.php',
        'LicenseManagerForWooCommerce\\Import' => __DIR__ . '/../..' . '/includes/Import.php',
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\Controller' => __DIR__ . '/../..' . '/includes/integrations/woocommerce/Controller.php',
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\Email' => __DIR__ . '/../..' . '/includes/integrations/woocommerce/Email.php',
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\Emails\\CustomerDeliverLicenseKeys' => __DIR__ . '/../..' . '/includes/integrations/woocommerce/emails/CustomerDeliverLicenseKeys.php',
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\Emails\\CustomerPreorderComplete' => __DIR__ . '/../..' . '/includes/integrations/woocommerce/emails/CustomerPreorderComplete.php',
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\Emails\\Templates' => __DIR__ . '/../..' . '/includes/integrations/woocommerce/emails/Templates.php',
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\MyAccount' => __DIR__ . '/../..' . '/includes/integrations/woocommerce/MyAccount.php',
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\Order' => __DIR__ . '/../..' . '/includes/integrations/woocommerce/Order.php',
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\ProductData' => __DIR__ . '/../..' . '/includes/integrations/woocommerce/ProductData.php',
        'LicenseManagerForWooCommerce\\Integrations\\WooCommerce\\Stock' => __DIR__ . '/../..' . '/includes/integrations/woocommerce/Stock.php',
        'LicenseManagerForWooCommerce\\Interfaces\\IntegrationController' => __DIR__ . '/../..' . '/includes/interfaces/IntegrationController.php',
        'LicenseManagerForWooCommerce\\Interfaces\\Model' => __DIR__ . '/../..' . '/includes/interfaces/Model.php',
        'LicenseManagerForWooCommerce\\Interfaces\\ResourceRepository' => __DIR__ . '/../..' . '/includes/interfaces/ResourceRepository.php',
        'LicenseManagerForWooCommerce\\Lists\\APIKeyList' => __DIR__ . '/../..' . '/includes/lists/APIKeyList.php',
        'LicenseManagerForWooCommerce\\Lists\\GeneratorsList' => __DIR__ . '/../..' . '/includes/lists/GeneratorsList.php',
        'LicenseManagerForWooCommerce\\Lists\\LicensesList' => __DIR__ . '/../..' . '/includes/lists/LicensesList.php',
        'LicenseManagerForWooCommerce\\Logger' => __DIR__ . '/../..' . '/includes/Logger.php',
        'LicenseManagerForWooCommerce\\Main' => __DIR__ . '/../..' . '/includes/Main.php',
        'LicenseManagerForWooCommerce\\Migration' => __DIR__ . '/../..' . '/includes/Migration.php',
        'LicenseManagerForWooCommerce\\Models\\Resources\\ApiKey' => __DIR__ . '/../..' . '/includes/models/resources/ApiKey.php',
        'LicenseManagerForWooCommerce\\Models\\Resources\\Generator' => __DIR__ . '/../..' . '/includes/models/resources/Generator.php',
        'LicenseManagerForWooCommerce\\Models\\Resources\\License' => __DIR__ . '/../..' . '/includes/models/resources/License.php',
        'LicenseManagerForWooCommerce\\Models\\Resources\\LicenseMeta' => __DIR__ . '/../..' . '/includes/models/resources/LicenseMeta.php',
        'LicenseManagerForWooCommerce\\Repositories\\PostMeta' => __DIR__ . '/../..' . '/includes/repositories/PostMeta.php',
        'LicenseManagerForWooCommerce\\Repositories\\Resources\\ApiKey' => __DIR__ . '/../..' . '/includes/repositories/resources/ApiKey.php',
        'LicenseManagerForWooCommerce\\Repositories\\Resources\\Generator' => __DIR__ . '/../..' . '/includes/repositories/resources/Generator.php',
        'LicenseManagerForWooCommerce\\Repositories\\Resources\\License' => __DIR__ . '/../..' . '/includes/repositories/resources/License.php',
        'LicenseManagerForWooCommerce\\Repositories\\Resources\\LicenseMeta' => __DIR__ . '/../..' . '/includes/repositories/resources/LicenseMeta.php',
        'LicenseManagerForWooCommerce\\Repositories\\Users' => __DIR__ . '/../..' . '/includes/repositories/Users.php',
        'LicenseManagerForWooCommerce\\Settings' => __DIR__ . '/../..' . '/includes/Settings.php',
        'LicenseManagerForWooCommerce\\Settings\\General' => __DIR__ . '/../..' . '/includes/settings/General.php',
        'LicenseManagerForWooCommerce\\Settings\\OrderStatus' => __DIR__ . '/../..' . '/includes/settings/OrderStatus.php',
        'LicenseManagerForWooCommerce\\Settings\\Tools' => __DIR__ . '/../..' . '/includes/settings/Tools.php',
        'LicenseManagerForWooCommerce\\Setup' => __DIR__ . '/../..' . '/includes/Setup.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit396285416ffb51e451101a8d476aff8d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit396285416ffb51e451101a8d476aff8d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit396285416ffb51e451101a8d476aff8d::$classMap;

        }, null, ClassLoader::class);
    }
}
