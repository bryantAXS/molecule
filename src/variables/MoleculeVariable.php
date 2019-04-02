<?php
/**
 * Molecule plugin for Craft CMS 3.x
 *
 * Grab Twig components from outside the primary template folder
 *
 * @link      https://trendyminds.com
 * @copyright Copyright (c) 2018 TrendyMinds
 */

namespace trendyminds\molecule\variables;

use trendyminds\molecule\Molecule;

use Craft;

/**
 * @author    TrendyMinds
 * @package   Molecule
 * @since     1.0.0
 */
class MoleculeVariable
{
    public function get(string $componentName, array $componentVariables = [], array $componentOptions = [])
    {
        return Molecule::$plugin->moleculeService->getComponent($componentName, $componentVariables, $componentOptions);
    }

    public function icon(string $iconName, array $iconVariables = [])
    {
        return Molecule::$plugin->moleculeService->getIcon($iconName, $iconVariables);
    }
}
