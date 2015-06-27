<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'curso' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/curso/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'curso_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/curso',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'curso_reporte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::reporteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/curso/reporte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'curso_info' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/info',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/curso',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'curso_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/curso/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'curso_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/curso/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'curso_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/curso',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'curso_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/curso',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'curso_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/curso',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'curso_historial' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::historialAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/curso/historial',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'curso_aprobados' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoController::aprobadosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/curso/cursosAprobados',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'carrera' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CarreraController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/carrera/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'carrera_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CarreraController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/carrera',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'carrera_reporte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CarreraController::reporteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/carrera/reporte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'carrera_info' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CarreraController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/info',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/carrera',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'carrera_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CarreraController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/carrera/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'carrera_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CarreraController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/carrera/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'carrera_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CarreraController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/carrera',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'carrera_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CarreraController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/carrera',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'carrera_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CarreraController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/carrera',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'carrera_cursos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CarreraController::cursosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/carrera/cursos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cursoCorequisito' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoCorequisitoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cursoCorequisito/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cursoCorequisito_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoCorequisitoController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cursoCorequisito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cursoCorequisito_reporte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoCorequisitoController::reporteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cursoCorequisito/reporte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cursoCorequisito_info' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoCorequisitoController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/info',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cursoCorequisito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cursoCorequisito_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoCorequisitoController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cursoCorequisito/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cursoCorequisito_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoCorequisitoController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cursoCorequisito/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cursoCorequisito_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoCorequisitoController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cursoCorequisito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cursoCorequisito_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoCorequisitoController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cursoCorequisito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cursoCorequisito_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoCorequisitoController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cursoCorequisito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cursoRequisito' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoRequisitoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cursoRequisito/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cursoRequisito_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoRequisitoController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cursoRequisito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cursoRequisito_reporte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoRequisitoController::reporteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cursoRequisito/reporte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cursoRequisito_info' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoRequisitoController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/info',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cursoRequisito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cursoRequisito_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoRequisitoController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cursoRequisito/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cursoRequisito_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoRequisitoController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cursoRequisito/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cursoRequisito_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoRequisitoController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cursoRequisito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cursoRequisito_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoRequisitoController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cursoRequisito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cursoRequisito_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\CursoRequisitoController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cursoRequisito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'estudiantegrupo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/estudianteGrupo/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'estudiantegrupo_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/estudianteGrupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'estudiantegrupo_reporte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::reporteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/estudianteGrupo/reporte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'estudiantegrupo_info' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/info',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/estudianteGrupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'estudiantegrupo_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/estudianteGrupo/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'estudiantegrupo_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/estudianteGrupo/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'estudiantegrupo_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/estudianteGrupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'estudiantegrupo_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/estudianteGrupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'estudiantegrupo_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/estudianteGrupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'estudiantegrupo_matriculacurso' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::matriculaCursoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/estudianteGrupo/matriculaCurso',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'estudiantegrupo_matriculagrupo' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::matriculaGrupoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/matriculaGrupo',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/estudianteGrupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'estudiantegrupo_matricula' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::matriculaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/matricula',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/estudianteGrupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'estudiantegrupo_asignarnorasgrupo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::asignarNotasGrupoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/estudianteGrupo/asignarNotasGrupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'estudiantegrupo_asignarnoras' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\EstudianteGrupoController::asignarNotasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/asignarNotas',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/estudianteGrupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'grupo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\GrupoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/grupo/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'grupo_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\GrupoController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/grupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'grupo_reporte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\GrupoController::reporteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/grupo/reporte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'grupo_info' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\GrupoController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/info',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/grupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'grupo_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\GrupoController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/grupo/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'grupo_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\GrupoController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/grupo/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'grupo_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\GrupoController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/grupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'grupo_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\GrupoController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/grupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'grupo_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\GrupoController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/grupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\HorarioController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/horario/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horario_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\HorarioController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/horario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horario_reporte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\HorarioController::reporteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/horario/reporte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horario_info' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\HorarioController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/info',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/horario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horario_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\HorarioController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/horario/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horario_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\HorarioController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/horario/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horario_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\HorarioController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/horario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horario_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\HorarioController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/horario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horario_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\HorarioController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/horario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horariogrupo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\HorarioGrupoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/horarioGrupo/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horariogrupo_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\HorarioGrupoController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/horarioGrupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horariogrupo_reporte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\HorarioGrupoController::reporteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/horarioGrupo/reporte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horariogrupo_info' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\HorarioGrupoController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/info',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/horarioGrupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horariogrupo_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\HorarioGrupoController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/horarioGrupo/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horariogrupo_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\HorarioGrupoController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/horarioGrupo/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horariogrupo_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\HorarioGrupoController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/horarioGrupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horariogrupo_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\HorarioGrupoController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/horarioGrupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'horariogrupo_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\HorarioGrupoController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/horarioGrupo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_reporte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::reporteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/reporte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_info' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/info',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\UsuarioController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inicio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Matrix\\Bundle\\Controller\\InicioController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inicio',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
