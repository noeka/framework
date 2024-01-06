<?php return array(
    'root' => array(
        'name' => 'noeka/framework',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'noeka/application' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '0a0dd50fce5433918e24d126fb1dd8c6f93daee0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../noeka/application',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'noeka/di' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '0aeb435e600e517b75485104616748cd705995c8',
            'type' => 'library',
            'install_path' => __DIR__ . '/../noeka/di',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'noeka/framework' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/container' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '707984727bd5b2b670e59559d3ed2500240cf875',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/container',
            'aliases' => array(
                0 => '2.0.x-dev',
            ),
            'dev_requirement' => false,
        ),
    ),
);
