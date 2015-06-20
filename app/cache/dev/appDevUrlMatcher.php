<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
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
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/curso')) {
                // curso
                if (rtrim($pathinfo, '/') === '/curso') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'curso');
                    }

                    return array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::indexAction',  '_route' => 'curso',);
                }

                // curso_show
                if (preg_match('#^/curso/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_show')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::showAction',));
                }

                // curso_reporte
                if ($pathinfo === '/curso/reporte') {
                    return array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::reporteAction',  '_route' => 'curso_reporte',);
                }

                // curso_info
                if (preg_match('#^/curso/(?P<id>[^/]++)/info$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_info')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::infoAction',));
                }

                // curso_new
                if ($pathinfo === '/curso/new') {
                    return array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::newAction',  '_route' => 'curso_new',);
                }

                // curso_create
                if ($pathinfo === '/curso/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_curso_create;
                    }

                    return array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::createAction',  '_route' => 'curso_create',);
                }
                not_curso_create:

                // curso_edit
                if (preg_match('#^/curso/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_edit')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::editAction',));
                }

                // curso_update
                if (preg_match('#^/curso/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_curso_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_update')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::updateAction',));
                }
                not_curso_update:

                // curso_delete
                if (preg_match('#^/curso/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_curso_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_delete')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::deleteAction',));
                }
                not_curso_delete:

                // curso_historial
                if ($pathinfo === '/curso/historial') {
                    return array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::historialAction',  '_route' => 'curso_historial',);
                }

                // curso_aprobados
                if ($pathinfo === '/curso/cursosAprobados') {
                    return array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::aprobadosAction',  '_route' => 'curso_aprobados',);
                }

            }

            if (0 === strpos($pathinfo, '/carrera')) {
                // carrera
                if (rtrim($pathinfo, '/') === '/carrera') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'carrera');
                    }

                    return array (  '_controller' => 'Matrix\\Bundle\\Controller\\CarreraController::indexAction',  '_route' => 'carrera',);
                }

                // carrera_show
                if (preg_match('#^/carrera/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'carrera_show')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\CarreraController::showAction',));
                }

                // carrera_reporte
                if ($pathinfo === '/carrera/reporte') {
                    return array (  '_controller' => 'Matrix\\Bundle\\Controller\\CarreraController::reporteAction',  '_route' => 'carrera_reporte',);
                }

                // carrera_info
                if (preg_match('#^/carrera/(?P<id>[^/]++)/info$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'carrera_info')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\CarreraController::infoAction',));
                }

                // carrera_new
                if ($pathinfo === '/carrera/new') {
                    return array (  '_controller' => 'Matrix\\Bundle\\Controller\\CarreraController::newAction',  '_route' => 'carrera_new',);
                }

                // carrera_create
                if ($pathinfo === '/carrera/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_carrera_create;
                    }

                    return array (  '_controller' => 'Matrix\\Bundle\\Controller\\CarreraController::createAction',  '_route' => 'carrera_create',);
                }
                not_carrera_create:

                // carrera_edit
                if (preg_match('#^/carrera/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'carrera_edit')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\CarreraController::editAction',));
                }

                // carrera_update
                if (preg_match('#^/carrera/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_carrera_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'carrera_update')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\CarreraController::updateAction',));
                }
                not_carrera_update:

                // carrera_delete
                if (preg_match('#^/carrera/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_carrera_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'carrera_delete')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\CarreraController::deleteAction',));
                }
                not_carrera_delete:

            }

            if (0 === strpos($pathinfo, '/curso')) {
                if (0 === strpos($pathinfo, '/cursoCorequisito')) {
                    // cursoCorequisito
                    if (rtrim($pathinfo, '/') === '/cursoCorequisito') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'cursoCorequisito');
                        }

                        return array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoCorequisitoController::indexAction',  '_route' => 'cursoCorequisito',);
                    }

                    // cursoCorequisito_show
                    if (preg_match('#^/cursoCorequisito/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursoCorequisito_show')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoCorequisitoController::showAction',));
                    }

                    // cursoCorequisito_reporte
                    if ($pathinfo === '/cursoCorequisito/reporte') {
                        return array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoCorequisitoController::reporteAction',  '_route' => 'cursoCorequisito_reporte',);
                    }

                    // cursoCorequisito_info
                    if (preg_match('#^/cursoCorequisito/(?P<id>[^/]++)/info$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursoCorequisito_info')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoCorequisitoController::infoAction',));
                    }

                    // cursoCorequisito_new
                    if ($pathinfo === '/cursoCorequisito/new') {
                        return array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoCorequisitoController::newAction',  '_route' => 'cursoCorequisito_new',);
                    }

                    // cursoCorequisito_create
                    if ($pathinfo === '/cursoCorequisito/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_cursoCorequisito_create;
                        }

                        return array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoCorequisitoController::createAction',  '_route' => 'cursoCorequisito_create',);
                    }
                    not_cursoCorequisito_create:

                    // cursoCorequisito_edit
                    if (preg_match('#^/cursoCorequisito/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursoCorequisito_edit')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoCorequisitoController::editAction',));
                    }

                    // cursoCorequisito_update
                    if (preg_match('#^/cursoCorequisito/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_cursoCorequisito_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursoCorequisito_update')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoCorequisitoController::updateAction',));
                    }
                    not_cursoCorequisito_update:

                    // cursoCorequisito_delete
                    if (preg_match('#^/cursoCorequisito/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_cursoCorequisito_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursoCorequisito_delete')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoCorequisitoController::deleteAction',));
                    }
                    not_cursoCorequisito_delete:

                }

                if (0 === strpos($pathinfo, '/cursoRequisito')) {
                    // cursoRequisito
                    if (rtrim($pathinfo, '/') === '/cursoRequisito') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'cursoRequisito');
                        }

                        return array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoRequisitoController::indexAction',  '_route' => 'cursoRequisito',);
                    }

                    // cursoRequisito_show
                    if (preg_match('#^/cursoRequisito/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursoRequisito_show')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoRequisitoController::showAction',));
                    }

                    // cursoRequisito_reporte
                    if ($pathinfo === '/cursoRequisito/reporte') {
                        return array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoRequisitoController::reporteAction',  '_route' => 'cursoRequisito_reporte',);
                    }

                    // cursoRequisito_info
                    if (preg_match('#^/cursoRequisito/(?P<id>[^/]++)/info$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursoRequisito_info')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoRequisitoController::infoAction',));
                    }

                    // cursoRequisito_new
                    if ($pathinfo === '/cursoRequisito/new') {
                        return array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoRequisitoController::newAction',  '_route' => 'cursoRequisito_new',);
                    }

                    // cursoRequisito_create
                    if ($pathinfo === '/cursoRequisito/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_cursoRequisito_create;
                        }

                        return array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoRequisitoController::createAction',  '_route' => 'cursoRequisito_create',);
                    }
                    not_cursoRequisito_create:

                    // cursoRequisito_edit
                    if (preg_match('#^/cursoRequisito/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursoRequisito_edit')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoRequisitoController::editAction',));
                    }

                    // cursoRequisito_update
                    if (preg_match('#^/cursoRequisito/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_cursoRequisito_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursoRequisito_update')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoRequisitoController::updateAction',));
                    }
                    not_cursoRequisito_update:

                    // cursoRequisito_delete
                    if (preg_match('#^/cursoRequisito/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_cursoRequisito_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cursoRequisito_delete')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\CursoRequisitoController::deleteAction',));
                    }
                    not_cursoRequisito_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/estudianteGrupo')) {
            // estudiantegrupo
            if (rtrim($pathinfo, '/') === '/estudianteGrupo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'estudiantegrupo');
                }

                return array (  '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::indexAction',  '_route' => 'estudiantegrupo',);
            }

            // estudiantegrupo_show
            if (preg_match('#^/estudianteGrupo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estudiantegrupo_show')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::showAction',));
            }

            // estudiantegrupo_reporte
            if ($pathinfo === '/estudianteGrupo/reporte') {
                return array (  '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::reporteAction',  '_route' => 'estudiantegrupo_reporte',);
            }

            // estudiantegrupo_info
            if (preg_match('#^/estudianteGrupo/(?P<id>[^/]++)/info$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estudiantegrupo_info')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::infoAction',));
            }

            // estudiantegrupo_new
            if ($pathinfo === '/estudianteGrupo/new') {
                return array (  '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::newAction',  '_route' => 'estudiantegrupo_new',);
            }

            // estudiantegrupo_create
            if ($pathinfo === '/estudianteGrupo/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_estudiantegrupo_create;
                }

                return array (  '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::createAction',  '_route' => 'estudiantegrupo_create',);
            }
            not_estudiantegrupo_create:

            // estudiantegrupo_edit
            if (preg_match('#^/estudianteGrupo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estudiantegrupo_edit')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::editAction',));
            }

            // estudiantegrupo_update
            if (preg_match('#^/estudianteGrupo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_estudiantegrupo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estudiantegrupo_update')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::updateAction',));
            }
            not_estudiantegrupo_update:

            // estudiantegrupo_delete
            if (preg_match('#^/estudianteGrupo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_estudiantegrupo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estudiantegrupo_delete')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::deleteAction',));
            }
            not_estudiantegrupo_delete:

            // estudiantegrupo_matriculacurso
            if ($pathinfo === '/estudianteGrupo/matriculaCurso') {
                return array (  '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::matriculaCursoAction',  '_route' => 'estudiantegrupo_matriculacurso',);
            }

            // estudiantegrupo_matriculagrupo
            if (preg_match('#^/estudianteGrupo/(?P<id>[^/]++)/matriculaGrupo$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estudiantegrupo_matriculagrupo')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::matriculaGrupoAction',));
            }

            // estudiantegrupo_matricula
            if (preg_match('#^/estudianteGrupo/(?P<id>[^/]++)/matricula$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estudiantegrupo_matricula')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::matriculaAction',));
            }

            // estudiantegrupo_asignarnorasgrupo
            if ($pathinfo === '/estudianteGrupo/asignarNotasGrupo') {
                return array (  '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::asignarNotasGrupoAction',  '_route' => 'estudiantegrupo_asignarnorasgrupo',);
            }

            // estudiantegrupo_asignarnoras
            if (preg_match('#^/estudianteGrupo/(?P<id>[^/]++)/asignarNotas$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estudiantegrupo_asignarnoras')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::asignarNotasAction',));
            }

        }

        if (0 === strpos($pathinfo, '/grupo')) {
            // grupo
            if (rtrim($pathinfo, '/') === '/grupo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'grupo');
                }

                return array (  '_controller' => 'Matrix\\Bundle\\Controller\\GrupoController::indexAction',  '_route' => 'grupo',);
            }

            // grupo_show
            if (preg_match('#^/grupo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grupo_show')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\GrupoController::showAction',));
            }

            // grupo_reporte
            if ($pathinfo === '/grupo/reporte') {
                return array (  '_controller' => 'Matrix\\Bundle\\Controller\\GrupoController::reporteAction',  '_route' => 'grupo_reporte',);
            }

            // grupo_info
            if (preg_match('#^/grupo/(?P<id>[^/]++)/info$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grupo_info')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\GrupoController::infoAction',));
            }

            // grupo_new
            if ($pathinfo === '/grupo/new') {
                return array (  '_controller' => 'Matrix\\Bundle\\Controller\\GrupoController::newAction',  '_route' => 'grupo_new',);
            }

            // grupo_create
            if ($pathinfo === '/grupo/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_grupo_create;
                }

                return array (  '_controller' => 'Matrix\\Bundle\\Controller\\GrupoController::createAction',  '_route' => 'grupo_create',);
            }
            not_grupo_create:

            // grupo_edit
            if (preg_match('#^/grupo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grupo_edit')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\GrupoController::editAction',));
            }

            // grupo_update
            if (preg_match('#^/grupo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_grupo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grupo_update')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\GrupoController::updateAction',));
            }
            not_grupo_update:

            // grupo_delete
            if (preg_match('#^/grupo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_grupo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grupo_delete')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\GrupoController::deleteAction',));
            }
            not_grupo_delete:

        }

        if (0 === strpos($pathinfo, '/horario')) {
            // horario
            if (rtrim($pathinfo, '/') === '/horario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'horario');
                }

                return array (  '_controller' => 'Matrix\\Bundle\\Controller\\HorarioController::indexAction',  '_route' => 'horario',);
            }

            // horario_show
            if (preg_match('#^/horario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'horario_show')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\HorarioController::showAction',));
            }

            // horario_reporte
            if ($pathinfo === '/horario/reporte') {
                return array (  '_controller' => 'Matrix\\Bundle\\Controller\\HorarioController::reporteAction',  '_route' => 'horario_reporte',);
            }

            // horario_info
            if (preg_match('#^/horario/(?P<id>[^/]++)/info$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'horario_info')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\HorarioController::infoAction',));
            }

            // horario_new
            if ($pathinfo === '/horario/new') {
                return array (  '_controller' => 'Matrix\\Bundle\\Controller\\HorarioController::newAction',  '_route' => 'horario_new',);
            }

            // horario_create
            if ($pathinfo === '/horario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_horario_create;
                }

                return array (  '_controller' => 'Matrix\\Bundle\\Controller\\HorarioController::createAction',  '_route' => 'horario_create',);
            }
            not_horario_create:

            // horario_edit
            if (preg_match('#^/horario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'horario_edit')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\HorarioController::editAction',));
            }

            // horario_update
            if (preg_match('#^/horario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_horario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'horario_update')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\HorarioController::updateAction',));
            }
            not_horario_update:

            // horario_delete
            if (preg_match('#^/horario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_horario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'horario_delete')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\HorarioController::deleteAction',));
            }
            not_horario_delete:

            if (0 === strpos($pathinfo, '/horarioGrupo')) {
                // horariogrupo
                if (rtrim($pathinfo, '/') === '/horarioGrupo') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'horariogrupo');
                    }

                    return array (  '_controller' => 'Matrix\\Bundle\\Controller\\HorarioGrupoController::indexAction',  '_route' => 'horariogrupo',);
                }

                // horariogrupo_show
                if (preg_match('#^/horarioGrupo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'horariogrupo_show')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\HorarioGrupoController::showAction',));
                }

                // horariogrupo_reporte
                if ($pathinfo === '/horarioGrupo/reporte') {
                    return array (  '_controller' => 'Matrix\\Bundle\\Controller\\HorarioGrupoController::reporteAction',  '_route' => 'horariogrupo_reporte',);
                }

                // horariogrupo_info
                if (preg_match('#^/horarioGrupo/(?P<id>[^/]++)/info$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'horariogrupo_info')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\HorarioGrupoController::infoAction',));
                }

                // horariogrupo_new
                if ($pathinfo === '/horarioGrupo/new') {
                    return array (  '_controller' => 'Matrix\\Bundle\\Controller\\HorarioGrupoController::newAction',  '_route' => 'horariogrupo_new',);
                }

                // horariogrupo_create
                if ($pathinfo === '/horarioGrupo/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_horariogrupo_create;
                    }

                    return array (  '_controller' => 'Matrix\\Bundle\\Controller\\HorarioGrupoController::createAction',  '_route' => 'horariogrupo_create',);
                }
                not_horariogrupo_create:

                // horariogrupo_edit
                if (preg_match('#^/horarioGrupo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'horariogrupo_edit')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\HorarioGrupoController::editAction',));
                }

                // horariogrupo_update
                if (preg_match('#^/horarioGrupo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_horariogrupo_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'horariogrupo_update')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\HorarioGrupoController::updateAction',));
                }
                not_horariogrupo_update:

                // horariogrupo_delete
                if (preg_match('#^/horarioGrupo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_horariogrupo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'horariogrupo_delete')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\HorarioGrupoController::deleteAction',));
                }
                not_horariogrupo_delete:

            }

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario
            if (rtrim($pathinfo, '/') === '/usuario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario');
                }

                return array (  '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario',);
            }

            // usuario_show
            if (preg_match('#^/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::showAction',));
            }

            // usuario_reporte
            if ($pathinfo === '/usuario/reporte') {
                return array (  '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::reporteAction',  '_route' => 'usuario_reporte',);
            }

            // usuario_info
            if (preg_match('#^/usuario/(?P<id>[^/]++)/info$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_info')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::infoAction',));
            }

            // usuario_new
            if ($pathinfo === '/usuario/new') {
                return array (  '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
            }

            // usuario_create
            if ($pathinfo === '/usuario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuario_create;
                }

                return array (  '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::createAction',  '_route' => 'usuario_create',);
            }
            not_usuario_create:

            // usuario_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::editAction',));
            }

            // usuario_update
            if (preg_match('#^/usuario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_usuario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_update')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::updateAction',));
            }
            not_usuario_update:

            // usuario_delete
            if (preg_match('#^/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_usuario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::deleteAction',));
            }
            not_usuario_delete:

            if (0 === strpos($pathinfo, '/usuario/log')) {
                // usuario_login
                if ($pathinfo === '/usuario/login') {
                    return array (  '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::loginAction',  '_route' => 'usuario_login',);
                }

                // usuario_logout
                if ($pathinfo === '/usuario/logout') {
                    return array (  '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::logoutAction',  '_route' => 'usuario_logout',);
                }

            }

        }

        // inicio
        if ($pathinfo === '/inicio') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_inicio;
            }

            return array (  '_controller' => 'Matrix\\Bundle\\Controller\\InicioController::indexAction',  '_route' => 'inicio',);
        }
        not_inicio:

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
