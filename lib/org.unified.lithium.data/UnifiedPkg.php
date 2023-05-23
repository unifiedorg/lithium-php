<?php namespace Unified\Lithium\Data;

declare(strict_types=1);

class UnifiedPkg {
    /***
     * Name of the package.
     */
    public const NAME = 'Data';

    /***
     * Description of the package.
     */
    public const DESCRIPTION = '
    Handles files used to store data, XML and INI are supported.

    For YAML you can use the composer package made by symphony
    https://github.com/symfony/yaml
    ';

    /***
     * Author of the package.
     */
    public const AUTHOR = 'Unified';

    /***
     * Version of the package.
     */
    public const VERSION = '1.0.0';
}
