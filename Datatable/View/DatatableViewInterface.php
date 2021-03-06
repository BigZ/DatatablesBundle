<?php

/**
 * This file is part of the SgDatatablesBundle package.
 *
 * (c) stwe <https://github.com/stwe/DatatablesBundle>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sg\DatatablesBundle\Datatable\View;

use Sg\DatatablesBundle\Datatable\Column\ColumnBuilder;

use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Twig_Error;
use Twig_Environment;

/**
 * Interface DatatableViewInterface
 *
 * @package Sg\DatatablesBundle\Datatable\View
 */
interface DatatableViewInterface
{
    /**
     * Builds the datatable view.
     *
     * @deprecated Deprecated since v0.7.1, to be removed in v0.8.
     *             Use {@link buildDatatable()} instead.
     */
    public function buildDatatableView();

    /**
     * Builds the datatable.
     *
     * @param null|string $locale
     */
    public function buildDatatable($locale = null);

    /**
     * Renders the datatable view.
     *
     * @param string $type
     *
     * @return mixed
     * @throws Exception
     * @throws Twig_Error
     */
    public function render($type = 'all');

    /**
     * Get the Twig_Environment service.
     *
     * @return Twig_Environment
     */
    public function getTwig();

    /**
     * Get entity manager.
     *
     * @return EntityManagerInterface
     */
    public function getEntityManager();

    /**
     * Get TopActions.
     *
     * @return TopActions
     */
    public function getTopActions();

    /**
     * Get Features.
     *
     * @return Features
     */
    public function getFeatures();

    /**
     * Get Options.
     *
     * @return Options
     */
    public function getOptions();

    /**
     * Get Callbacks.
     *
     * @return Callbacks
     */
    public function getCallbacks();

    /**
     * Get ColumnBuilder.
     *
     * @return ColumnBuilder
     */
    public function getColumnBuilder();

    /**
     * Get Ajax.
     *
     * @return Ajax
     */
    public function getAjax();

    /**
     * Returns a callable that could transform the data line
     *
     * @return callable
     */
    public function getLineFormatter();

    /**
     * Get custom qb.
     *
     * @return QueryBuilder
     */
    public function getQb();

    /**
     * Returns Entity.
     *
     * @return string
     */
    public function getEntity();

    /**
     * Returns the name of this datatable view.
     *
     * @return string
     */
    public function getName();
}
