<?php
/**
 *
 * @category
 * @package
 * @author Mike Bijnsdorp <m.bijnsdorp@youwe.nl>
 */

namespace Faker\Provider;

class Product extends \Faker\Provider\Base
{

    protected static $_name = array(
        'Steel bar',
        'Iron bar',
        'PVC',
        'Watch',
        'Football',
        'Basketball',
        'Baseball',
        'Shorts',
        'T-shirt',
        'Blouse'
    );

    protected static $_categoryErpId = array(
        'M20510',
        'M33291',
        'M13891',
        'M31792',
        'M47981',
        'M15347',
        '92313447545',
        '91324456355',
        '94454574577',
        'MBH-001',
        'MBH-002',
        'MBH-009',
        'MBH-099',
    );

    protected static $_price = array(
        '10',
        '20',
        '25.55',
        '99.99',
        '100.01'
    );

    protected static $_specialPrice = array(
        '2',
        '5',
        '9.99',
        '49.95',
        '999'
    );

    protected static $_currency = array(
        'EUR'
    );

    protected static $_qty = array(
        0,
        4,
        5,
        9,
        12,
        99,
        100,
        150,
        200,
        1000
    );

    protected static $_enabled = array(
        1,
        2
    );

    protected static $_attributeSet = array(
        'Default'
    );

    protected static $_visibility = array(
        1, 2, 3, 4
    );

    public function name()
    {
        return static::randomElement(static::$_name);
    }

    public function categoryErpId()
    {
        return static::randomElement(static::$_categoryErpId);
    }

    /**
     * @todo not implemented yet, has to be unique for all sku's generated in a single file
     */
    public function sku()
    {

//        return $this->unique()->;
    }

    public function price()
    {
        return static::randomElement(static::$_price);
    }

    public function specialPrice()
    {
        return static::randomElement(static::$_price);
    }

    public function currency()
    {
        return static::randomElement(static::$_currency);
    }

    public function qty()
    {
        return static::randomElement(static::$_qty);
    }

    public function enabled()
    {
        return static::randomElement(static::$_enabled);
    }

    public function attributeSet()
    {
        return static::randomElement(static::$_attributeSet);
    }

    /**
     * Generates a random text
     *
     * @see Lorem::text
     *
     * @return string
     */
    public function description()
    {
        $textLength = $this->generator->numberBetween(40, 200);
        return $this->generator->text($textLength);
    }

    /**
     * Generates a random text
     *
     * @see Lorem::text
     *
     * @return string
     */
    public function shortDescription()
    {
        $textLength = $this->generator->numberBetween(20, 50);
        return $this->generator->text($textLength);
    }

    public function visibility()
    {
        return static::randomElement(static::$_visibility);
    }
}
