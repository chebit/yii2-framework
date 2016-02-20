<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\db\pgsql;

use yii\db\ColumnSchemaBuilder as AbstractColumnSchemaBuilder;


/**
 * ColumnSchemaBuilder is the schema builder for PostgreSQL databases.
 *
 * @author Alexander Makarov <sam@rmcreative.ru>
 * @since 2.0.7
 */
class ColumnSchemaBuilder extends AbstractColumnSchemaBuilder
{
    /**
     * @inheritdoc
     */
    protected function buildUnsignedString()
    {
        return '';
    }

    /**
     * @inheritdoc
     */
    protected function buildAfterString()
    {
        return '';
    }
}
