<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // usuario_login
        if ($pathinfo === '/usuario/login') {
            return array (  '_controller' => 'Ferreteria\\UsuarioBundle\\Controller\\DefaultController::loginAction',  '_route' => 'usuario_login',);
        }

        // usuario_login_check
        if ($pathinfo === '/usuario/login_check') {
            return array (  '_controller' => 'Ferreteria\\UsuarioBundle\\Controller\\DefaultController::algo',  '_route' => 'usuario_login_check',);
        }

        // usuario_logout
        if ($pathinfo === '/usuario/logout') {
            return array (  '_controller' => 'Ferreteria\\UsuarioBundle\\Controller\\DefaultController::algo1',  '_route' => 'usuario_logout',);
        }

        // usuario_registro
        if ($pathinfo === '/usuario/registro') {
            return array (  '_controller' => 'Ferreteria\\UsuarioBundle\\Controller\\DefaultController::registroAction',  '_route' => 'usuario_registro',);
        }

        // usuario_create
        if ($pathinfo === '/usuario/create') {
            return array (  '_controller' => 'Ferreteria\\UsuarioBundle\\Controller\\DefaultController::createaction',  '_route' => 'usuario_create',);
        }

        // ferreteria_proveedor_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'ferreteria_proveedor_default_index'));
        }

        // proveedor
        if (rtrim($pathinfo, '/') === '/proveedor') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'proveedor');
            }
            return array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\ProveedorController::indexAction',  '_route' => 'proveedor',);
        }

        // proveedor_show
        if (0 === strpos($pathinfo, '/proveedor') && preg_match('#^/proveedor/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\ProveedorController::showAction',)), array('_route' => 'proveedor_show'));
        }

        // proveedor_new
        if ($pathinfo === '/proveedor/new') {
            return array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\ProveedorController::newAction',  '_route' => 'proveedor_new',);
        }

        // proveedor_create
        if ($pathinfo === '/proveedor/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_proveedor_create;
            }
            return array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\ProveedorController::createAction',  '_route' => 'proveedor_create',);
        }
        not_proveedor_create:

        // proveedor_edit
        if (0 === strpos($pathinfo, '/proveedor') && preg_match('#^/proveedor/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\ProveedorController::editAction',)), array('_route' => 'proveedor_edit'));
        }

        // proveedor_update
        if (0 === strpos($pathinfo, '/proveedor') && preg_match('#^/proveedor/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_proveedor_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\ProveedorController::updateAction',)), array('_route' => 'proveedor_update'));
        }
        not_proveedor_update:

        // proveedor_delete
        if (0 === strpos($pathinfo, '/proveedor') && preg_match('#^/proveedor/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_proveedor_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\ProveedorController::deleteAction',)), array('_route' => 'proveedor_delete'));
        }
        not_proveedor_delete:

        // representante
        if (rtrim($pathinfo, '/') === '/representante') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'representante');
            }
            return array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\RepresentanteController::indexAction',  '_route' => 'representante',);
        }

        // representante_show
        if (0 === strpos($pathinfo, '/representante') && preg_match('#^/representante/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\RepresentanteController::showAction',)), array('_route' => 'representante_show'));
        }

        // representante_new
        if ($pathinfo === '/representante/new') {
            return array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\RepresentanteController::newAction',  '_route' => 'representante_new',);
        }

        // representante_create
        if ($pathinfo === '/representante/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_representante_create;
            }
            return array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\RepresentanteController::createAction',  '_route' => 'representante_create',);
        }
        not_representante_create:

        // representante_edit
        if (0 === strpos($pathinfo, '/representante') && preg_match('#^/representante/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\RepresentanteController::editAction',)), array('_route' => 'representante_edit'));
        }

        // representante_update
        if (0 === strpos($pathinfo, '/representante') && preg_match('#^/representante/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_representante_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\RepresentanteController::updateAction',)), array('_route' => 'representante_update'));
        }
        not_representante_update:

        // representante_delete
        if (0 === strpos($pathinfo, '/representante') && preg_match('#^/representante/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_representante_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\ProveedorBundle\\Controller\\RepresentanteController::deleteAction',)), array('_route' => 'representante_delete'));
        }
        not_representante_delete:

        // compra
        if (rtrim($pathinfo, '/') === '/compra') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'compra');
            }
            return array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\CompraController::indexAction',  '_route' => 'compra',);
        }

        // compra_show
        if (0 === strpos($pathinfo, '/compra') && preg_match('#^/compra/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\CompraController::showAction',)), array('_route' => 'compra_show'));
        }

        // compra_new
        if ($pathinfo === '/compra/new') {
            return array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\CompraController::newAction',  '_route' => 'compra_new',);
        }

        // compra_create
        if ($pathinfo === '/compra/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_compra_create;
            }
            return array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\CompraController::createAction',  '_route' => 'compra_create',);
        }
        not_compra_create:

        // compra_edit
        if (0 === strpos($pathinfo, '/compra') && preg_match('#^/compra/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\CompraController::editAction',)), array('_route' => 'compra_edit'));
        }

        // compra_update
        if (0 === strpos($pathinfo, '/compra') && preg_match('#^/compra/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_compra_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\CompraController::updateAction',)), array('_route' => 'compra_update'));
        }
        not_compra_update:

        // compra_delete
        if (0 === strpos($pathinfo, '/compra') && preg_match('#^/compra/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_compra_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\CompraController::deleteAction',)), array('_route' => 'compra_delete'));
        }
        not_compra_delete:

        // compra_busca
        if ($pathinfo === '/compra/buscaCompra') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_compra_busca;
            }
            return array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\CompraController::BuscaCompraAction',  '_route' => 'compra_busca',);
        }
        not_compra_busca:

        // compra_find
        if ($pathinfo === '/compra/find') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_compra_find;
            }
            return array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\CompraController::EncuentraAction',  '_route' => 'compra_find',);
        }
        not_compra_find:

        // ferreteria_compra_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'ferreteria_compra_default_index'));
        }

        // pagocompra
        if (rtrim($pathinfo, '/') === '/pagocompra') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pagocompra');
            }
            return array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\PagoCompraController::indexAction',  '_route' => 'pagocompra',);
        }

        // pagocompra_show
        if (0 === strpos($pathinfo, '/pagocompra') && preg_match('#^/pagocompra/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\PagoCompraController::showAction',)), array('_route' => 'pagocompra_show'));
        }

        // pagocompra_new
        if ($pathinfo === '/pagocompra/new') {
            return array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\PagoCompraController::newAction',  '_route' => 'pagocompra_new',);
        }

        // pagocompra_create
        if ($pathinfo === '/pagocompra/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pagocompra_create;
            }
            return array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\PagoCompraController::createAction',  '_route' => 'pagocompra_create',);
        }
        not_pagocompra_create:

        // pagocompra_edit
        if (0 === strpos($pathinfo, '/pagocompra') && preg_match('#^/pagocompra/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\PagoCompraController::editAction',)), array('_route' => 'pagocompra_edit'));
        }

        // pagocompra_update
        if (0 === strpos($pathinfo, '/pagocompra') && preg_match('#^/pagocompra/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pagocompra_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\PagoCompraController::updateAction',)), array('_route' => 'pagocompra_update'));
        }
        not_pagocompra_update:

        // pagocompra_delete
        if (0 === strpos($pathinfo, '/pagocompra') && preg_match('#^/pagocompra/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pagocompra_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\CompraBundle\\Controller\\PagoCompraController::deleteAction',)), array('_route' => 'pagocompra_delete'));
        }
        not_pagocompra_delete:

        // ferreteria_pedido_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\PedidoBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'ferreteria_pedido_default_index'));
        }

        // pedido
        if (rtrim($pathinfo, '/') === '/pedido') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pedido');
            }
            return array (  '_controller' => 'Ferreteria\\PedidoBundle\\Controller\\PedidoController::indexAction',  '_route' => 'pedido',);
        }

        // pedido_show
        if (0 === strpos($pathinfo, '/pedido') && preg_match('#^/pedido/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\PedidoBundle\\Controller\\PedidoController::showAction',)), array('_route' => 'pedido_show'));
        }

        // pedido_new
        if ($pathinfo === '/pedido/new') {
            return array (  '_controller' => 'Ferreteria\\PedidoBundle\\Controller\\PedidoController::newAction',  '_route' => 'pedido_new',);
        }

        // pedido_create
        if ($pathinfo === '/pedido/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pedido_create;
            }
            return array (  '_controller' => 'Ferreteria\\PedidoBundle\\Controller\\PedidoController::createAction',  '_route' => 'pedido_create',);
        }
        not_pedido_create:

        // pedido_edit
        if (0 === strpos($pathinfo, '/pedido') && preg_match('#^/pedido/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\PedidoBundle\\Controller\\PedidoController::editAction',)), array('_route' => 'pedido_edit'));
        }

        // pedido_update
        if (0 === strpos($pathinfo, '/pedido') && preg_match('#^/pedido/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pedido_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\PedidoBundle\\Controller\\PedidoController::updateAction',)), array('_route' => 'pedido_update'));
        }
        not_pedido_update:

        // pedido_delete
        if (0 === strpos($pathinfo, '/pedido') && preg_match('#^/pedido/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pedido_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\PedidoBundle\\Controller\\PedidoController::deleteAction',)), array('_route' => 'pedido_delete'));
        }
        not_pedido_delete:

        // pedido_busca
        if ($pathinfo === '/pedido/busca') {
            return array (  '_controller' => 'Ferreteria\\PedidoBundle\\Controller\\PedidoController::BuscaAction',  '_route' => 'pedido_busca',);
        }

        // pedido_find
        if ($pathinfo === '/pedido/find') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pedido_find;
            }
            return array (  '_controller' => 'Ferreteria\\PedidoBundle\\Controller\\PedidoController::EncuentraAction',  '_route' => 'pedido_find',);
        }
        not_pedido_find:

        // categoria
        if (rtrim($pathinfo, '/') === '/categoria') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'categoria');
            }
            return array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\CategoriaController::indexAction',  '_route' => 'categoria',);
        }

        // categoria_show
        if (0 === strpos($pathinfo, '/categoria') && preg_match('#^/categoria/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\CategoriaController::showAction',)), array('_route' => 'categoria_show'));
        }

        // categoria_new
        if ($pathinfo === '/categoria/new') {
            return array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\CategoriaController::newAction',  '_route' => 'categoria_new',);
        }

        // categoria_create
        if ($pathinfo === '/categoria/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_categoria_create;
            }
            return array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\CategoriaController::createAction',  '_route' => 'categoria_create',);
        }
        not_categoria_create:

        // categoria_edit
        if (0 === strpos($pathinfo, '/categoria') && preg_match('#^/categoria/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\CategoriaController::editAction',)), array('_route' => 'categoria_edit'));
        }

        // categoria_update
        if (0 === strpos($pathinfo, '/categoria') && preg_match('#^/categoria/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_categoria_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\CategoriaController::updateAction',)), array('_route' => 'categoria_update'));
        }
        not_categoria_update:

        // categoria_delete
        if (0 === strpos($pathinfo, '/categoria') && preg_match('#^/categoria/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_categoria_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\CategoriaController::deleteAction',)), array('_route' => 'categoria_delete'));
        }
        not_categoria_delete:

        // ferreteria_almacen_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'ferreteria_almacen_default_index'));
        }

        // producto
        if (rtrim($pathinfo, '/') === '/producto') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'producto');
            }
            return array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\ProductoController::indexAction',  '_route' => 'producto',);
        }

        // producto_show
        if (0 === strpos($pathinfo, '/producto') && preg_match('#^/producto/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\ProductoController::showAction',)), array('_route' => 'producto_show'));
        }

        // producto_new
        if ($pathinfo === '/producto/new') {
            return array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\ProductoController::newAction',  '_route' => 'producto_new',);
        }

        // producto_create
        if ($pathinfo === '/producto/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_producto_create;
            }
            return array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\ProductoController::createAction',  '_route' => 'producto_create',);
        }
        not_producto_create:

        // producto_edit
        if (0 === strpos($pathinfo, '/producto') && preg_match('#^/producto/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\ProductoController::editAction',)), array('_route' => 'producto_edit'));
        }

        // producto_update
        if (0 === strpos($pathinfo, '/producto') && preg_match('#^/producto/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_producto_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\ProductoController::updateAction',)), array('_route' => 'producto_update'));
        }
        not_producto_update:

        // producto_delete
        if (0 === strpos($pathinfo, '/producto') && preg_match('#^/producto/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_producto_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\ProductoController::deleteAction',)), array('_route' => 'producto_delete'));
        }
        not_producto_delete:

        // unidadmedida
        if (rtrim($pathinfo, '/') === '/unidadmedida') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'unidadmedida');
            }
            return array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\UnidadMedidaController::indexAction',  '_route' => 'unidadmedida',);
        }

        // unidadmedida_show
        if (0 === strpos($pathinfo, '/unidadmedida') && preg_match('#^/unidadmedida/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\UnidadMedidaController::showAction',)), array('_route' => 'unidadmedida_show'));
        }

        // unidadmedida_new
        if ($pathinfo === '/unidadmedida/new') {
            return array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\UnidadMedidaController::newAction',  '_route' => 'unidadmedida_new',);
        }

        // unidadmedida_create
        if ($pathinfo === '/unidadmedida/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_unidadmedida_create;
            }
            return array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\UnidadMedidaController::createAction',  '_route' => 'unidadmedida_create',);
        }
        not_unidadmedida_create:

        // unidadmedida_edit
        if (0 === strpos($pathinfo, '/unidadmedida') && preg_match('#^/unidadmedida/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\UnidadMedidaController::editAction',)), array('_route' => 'unidadmedida_edit'));
        }

        // unidadmedida_update
        if (0 === strpos($pathinfo, '/unidadmedida') && preg_match('#^/unidadmedida/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_unidadmedida_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\UnidadMedidaController::updateAction',)), array('_route' => 'unidadmedida_update'));
        }
        not_unidadmedida_update:

        // unidadmedida_delete
        if (0 === strpos($pathinfo, '/unidadmedida') && preg_match('#^/unidadmedida/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_unidadmedida_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ferreteria\\AlmacenBundle\\Controller\\UnidadMedidaController::deleteAction',)), array('_route' => 'unidadmedida_delete'));
        }
        not_unidadmedida_delete:

        // portada
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'portada');
            }
            return array (  '_controller' => 'Ferreteria\\FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'portada',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
