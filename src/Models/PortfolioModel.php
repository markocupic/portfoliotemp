<?php

/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace EuF\PortfolioBundle\Models;

/**
 * Reads and writes portfolio items.
 */
class PortfolioModel extends \Model
{
    /**
     * Table name
     * @var string
     */
    protected static $strTable = 'tl_portfolio';
}
