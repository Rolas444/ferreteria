<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'usuario_login' => true,
       'usuario_login_check' => true,
       'usuario_logout' => true,
       'usuario_registro' => true,
       'usuario_create' => true,
       'ferreteria_proveedor_default_index' => true,
       'proveedor' => true,
       'proveedor_show' => true,
       'proveedor_new' => true,
       'proveedor_create' => true,
       'proveedor_edit' => true,
       'proveedor_update' => true,
       'proveedor_delete' => true,
       'representante' => true,
       'representante_show' => true,
       'representante_new' => true,
       'representante_create' => true,
       'representante_edit' => true,
       'representante_update' => true,
       'representante_delete' => true,
       'compra' => true,
       'compra_show' => true,
       'compra_new' => true,
       'compra_create' => true,
       'compra_edit' => true,
       'compra_update' => true,
       'compra_delete' => true,
       'compra_busca' => true,
       'compra_find' => true,
       'ferreteria_compra_default_index' => true,
       'pagocompra' => true,
       'pagocompra_show' => true,
       'pagocompra_new' => true,
       'pagocompra_create' => true,
       'pagocompra_edit' => true,
       'pagocompra_update' => true,
       'pagocompra_delete' => true,
       'ferreteria_pedido_default_index' => true,
       'pedido' => true,
       'pedido_show' => true,
       'pedido_new' => true,
       'pedido_create' => true,
       'pedido_edit' => true,
       'pedido_update' => true,
       'pedido_delete' => true,
       'pedido_busca' => true,
       'pedido_find' => true,
       'categoria' => true,
       'categoria_show' => true,
       'categoria_new' => true,
       'categoria_create' => true,
       'categoria_edit' => true,
       'categoria_update' => true,
       'categoria_delete' => true,
       'ferreteria_almacen_default_index' => true,
       'producto' => true,
       'producto_show' => true,
       'producto_new' => true,
       'producto_create' => true,
       'producto_edit' => true,
       'producto_update' => true,
       'producto_delete' => true,
       'unidadmedida' => true,
       'unidadmedida_show' => true,
       'unidadmedida_new' => true,
       'unidadmedida_create' => true,
       'unidadmedida_edit' => true,
       'unidadmedida_update' => true,
       'unidadmedida_delete' => true,
       'portada' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getusuario_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\UsuarioBundle\\Controller\\DefaultController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/usuario/login',  ),));
    }

    private function getusuario_login_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\UsuarioBundle\\Controller\\DefaultController::algo',), array (), array (  0 =>   array (    0 => 'text',    1 => '/usuario/login_check',  ),));
    }

    private function getusuario_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\UsuarioBundle\\Controller\\DefaultController::algo1',), array (), array (  0 =>   array (    0 => 'text',    1 => '/usuario/logout',  ),));
    }

    private function getusuario_registroRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\UsuarioBundle\\Controller\\DefaultController::registroAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/usuario/registro',  ),));
    }

    private function getusuario_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\UsuarioBundle\\Controller\\DefaultController::createaction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/usuario/create',  ),));
    }

    private function getferreteria_proveedor_default_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getproveedorRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\ProveedorController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/proveedor/',  ),));
    }

    private function getproveedor_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\ProveedorController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/proveedor',  ),));
    }

    private function getproveedor_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\ProveedorController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/proveedor/new',  ),));
    }

    private function getproveedor_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\ProveedorController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/proveedor/create',  ),));
    }

    private function getproveedor_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\ProveedorController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/proveedor',  ),));
    }

    private function getproveedor_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\ProveedorController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/proveedor',  ),));
    }

    private function getproveedor_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\ProveedorController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/proveedor',  ),));
    }

    private function getrepresentanteRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\RepresentanteController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/representante/',  ),));
    }

    private function getrepresentante_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\RepresentanteController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/representante',  ),));
    }

    private function getrepresentante_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\RepresentanteController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/representante/new',  ),));
    }

    private function getrepresentante_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\RepresentanteController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/representante/create',  ),));
    }

    private function getrepresentante_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\RepresentanteController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/representante',  ),));
    }

    private function getrepresentante_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\RepresentanteController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/representante',  ),));
    }

    private function getrepresentante_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\RepresentanteController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/representante',  ),));
    }

    private function getcompraRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\CompraController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/compra/',  ),));
    }

    private function getcompra_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\CompraController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/compra',  ),));
    }

    private function getcompra_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\CompraController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/compra/new',  ),));
    }

    private function getcompra_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\CompraController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/compra/create',  ),));
    }

    private function getcompra_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\CompraController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/compra',  ),));
    }

    private function getcompra_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\CompraController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/compra',  ),));
    }

    private function getcompra_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\CompraController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/compra',  ),));
    }

    private function getcompra_buscaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\CompraController::BuscaCompraAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/compra/buscaCompra',  ),));
    }

    private function getcompra_findRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\CompraController::EncuentraAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/compra/find',  ),));
    }

    private function getferreteria_compra_default_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getpagocompraRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\PagoCompraController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pagocompra/',  ),));
    }

    private function getpagocompra_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\PagoCompraController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pagocompra',  ),));
    }

    private function getpagocompra_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\PagoCompraController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pagocompra/new',  ),));
    }

    private function getpagocompra_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\PagoCompraController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/pagocompra/create',  ),));
    }

    private function getpagocompra_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\PagoCompraController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pagocompra',  ),));
    }

    private function getpagocompra_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\PagoCompraController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pagocompra',  ),));
    }

    private function getpagocompra_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\PagoCompraController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pagocompra',  ),));
    }

    private function getferreteria_pedido_default_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Ferreteria\\PedidoBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getpedidoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\PedidoBundle\\Controller\\PedidoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pedido/',  ),));
    }

    private function getpedido_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\PedidoBundle\\Controller\\PedidoController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pedido',  ),));
    }

    private function getpedido_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\PedidoBundle\\Controller\\PedidoController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pedido/new',  ),));
    }

    private function getpedido_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\PedidoBundle\\Controller\\PedidoController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/pedido/create',  ),));
    }

    private function getpedido_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\PedidoBundle\\Controller\\PedidoController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pedido',  ),));
    }

    private function getpedido_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\PedidoBundle\\Controller\\PedidoController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pedido',  ),));
    }

    private function getpedido_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\PedidoBundle\\Controller\\PedidoController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pedido',  ),));
    }

    private function getpedido_buscaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\PedidoBundle\\Controller\\PedidoController::BuscaAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pedido/busca',  ),));
    }

    private function getpedido_findRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\PedidoBundle\\Controller\\PedidoController::EncuentraAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/pedido/find',  ),));
    }

    private function getcategoriaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\CategoriaController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/categoria/',  ),));
    }

    private function getcategoria_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\CategoriaController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/categoria',  ),));
    }

    private function getcategoria_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\CategoriaController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/categoria/new',  ),));
    }

    private function getcategoria_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\CategoriaController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/categoria/create',  ),));
    }

    private function getcategoria_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\CategoriaController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/categoria',  ),));
    }

    private function getcategoria_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\CategoriaController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/categoria',  ),));
    }

    private function getcategoria_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\CategoriaController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/categoria',  ),));
    }

    private function getferreteria_almacen_default_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getproductoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\ProductoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/producto/',  ),));
    }

    private function getproducto_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\ProductoController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/producto',  ),));
    }

    private function getproducto_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\ProductoController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/producto/new',  ),));
    }

    private function getproducto_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\ProductoController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/producto/create',  ),));
    }

    private function getproducto_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\ProductoController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/producto',  ),));
    }

    private function getproducto_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\ProductoController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/producto',  ),));
    }

    private function getproducto_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\ProductoController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/producto',  ),));
    }

    private function getunidadmedidaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\UnidadMedidaController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/unidadmedida/',  ),));
    }

    private function getunidadmedida_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\UnidadMedidaController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/unidadmedida',  ),));
    }

    private function getunidadmedida_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\UnidadMedidaController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/unidadmedida/new',  ),));
    }

    private function getunidadmedida_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\UnidadMedidaController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/unidadmedida/create',  ),));
    }

    private function getunidadmedida_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\UnidadMedidaController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/unidadmedida',  ),));
    }

    private function getunidadmedida_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\UnidadMedidaController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/unidadmedida',  ),));
    }

    private function getunidadmedida_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\UnidadMedidaController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/unidadmedida',  ),));
    }

    private function getportadaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Ferreteria\\FrontBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }
}
