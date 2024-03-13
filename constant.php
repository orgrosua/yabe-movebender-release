<?php

/*
 * This file is part of the Yabe package.
 *
 * (c) Joshua Gugun Siagian <suabahasa@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare (strict_types=1);
namespace _YabeMovebender;

/**
 * Plugin constants.
 *
 * @since 1.0.0
 */
class MOVEBENDER
{
    /**
     * @var string
     */
    public const FILE = __DIR__ . '/yabe-movebender.php';
    /**
     * @var string
     */
    public const VERSION = '1.0.0-DEV';
    /**
     * @var int
     */
    public const VERSION_ID = 10000;
    /**
     * @var int
     */
    public const MAJOR_VERSION = 1;
    /**
     * @var int
     */
    public const MINOR_VERSION = 0;
    /**
     * @var int
     */
    public const RELEASE_VERSION = 0;
    /**
     * @var string
     */
    public const EXTRA_VERSION = 'DEV';
    /**
     * @var string
     */
    public const WP_OPTION = 'movebender';
    /**
     * @var string
     */
    public const DB_TABLE_PREFIX = 'movebender';
    /**
     * @var string
     */
    public const REST_NAMESPACE = 'yabe-movebender/v1';
}
/**
 * Plugin constants.
 *
 * @since 1.0.0
 */
\class_alias('_YabeMovebender\\MOVEBENDER', 'MOVEBENDER', \false);
