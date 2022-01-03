<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/api')) {
            // api_homepage
            if ('/api' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'ApiBundle\\Controller\\DefaultController::indexAction',  '_route' => 'api_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_api_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_homepage'));
                }

                return $ret;
            }
            not_api_homepage:

            // api_backlog_index
            if ('/api/ProjectBacklog/index' === $pathinfo) {
                return array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::IndexProjectBacklogApiAction',  '_route' => 'api_backlog_index',);
            }

            if (0 === strpos($pathinfo, '/api/ProjectBacklog/view')) {
                // api_view_ProjectBacklog_tasks
                if (preg_match('#^/api/ProjectBacklog/view/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_view_ProjectBacklog_tasks']), array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::view_ProjectBacklogApiAction',));
                }

                // api_view_BacklogTask
                if (preg_match('#^/api/ProjectBacklog/view/(?P<id_b>[^/]++)/task/view/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_view_BacklogTask']), array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::ViewBacklogTaskApiAction',));
                }

                // api_delete_BacklogTask
                if (preg_match('#^/api/ProjectBacklog/view/(?P<id_b>[^/]++)/task/remove/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_delete_BacklogTask']), array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::RemoveBacklogTaskApiAction',));
                }

                // api_add_BacklogTask
                if (preg_match('#^/api/ProjectBacklog/view/(?P<id_b>[^/]++)/task/add/(?P<title>[^/]++)/(?P<story_points>[^/]++)/(?P<state>[^/]++)/(?P<priority>[^/]++)/(?P<desc_f>[^/]++)/(?P<sprint_id>[^/]++)/(?P<finished_date>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_add_BacklogTask']), array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::AddBacklogTaskApiAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/api/Team')) {
                // api_afficher_Team
                if ('/api/Team/afficher' === $pathinfo) {
                    return array (  '_controller' => 'TeamBundle\\Controller\\teamController::afficherMegAction',  '_route' => 'api_afficher_Team',);
                }

                // api_ajouter_Team
                if ('/api/Team/ajouter' === $pathinfo) {
                    return array (  '_controller' => 'TeamBundle\\Controller\\teamController::ajouterMegAction',  '_route' => 'api_ajouter_Team',);
                }

                // api_delete_Team
                if (0 === strpos($pathinfo, '/api/Team/delete') && preg_match('#^/api/Team/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_delete_Team']), array (  '_controller' => 'TeamBundle\\Controller\\teamController::deleteMegAction',));
                }

                // api_modifier_Team
                if (0 === strpos($pathinfo, '/api/Team/update') && preg_match('#^/api/Team/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_modifier_Team']), array (  '_controller' => 'TeamBundle\\Controller\\teamController::modifierMegAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/api/Meeting')) {
                // api_afficher_Meeting
                if ('/api/Meeting/afficher' === $pathinfo) {
                    return array (  '_controller' => 'MeetingBundle\\Controller\\MeetingController::afficherMegAction',  '_route' => 'api_afficher_Meeting',);
                }

                // api_ajouter_Meeting
                if ('/api/Meeting/ajouter' === $pathinfo) {
                    return array (  '_controller' => 'MeetingBundle\\Controller\\MeetingController::ajouterMegAction',  '_route' => 'api_ajouter_Meeting',);
                }

                // api_delete_Meeting
                if (0 === strpos($pathinfo, '/api/Meeting/delete') && preg_match('#^/api/Meeting/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_delete_Meeting']), array (  '_controller' => 'MeetingBundle\\Controller\\MeetingController::deleteMegAction',));
                }

                // api_modifier_Meeting
                if (0 === strpos($pathinfo, '/api/Meeting/update') && preg_match('#^/api/Meeting/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'api_modifier_Meeting']), array (  '_controller' => 'MeetingBundle\\Controller\\MeetingController::updateMegAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/entreprise')) {
            // entreprise_homepage
            if ('/entreprise' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'EntrepriseBundle\\Controller\\DefaultController::indexAction',  '_route' => 'entreprise_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_entreprise_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'entreprise_homepage'));
                }

                return $ret;
            }
            not_entreprise_homepage:

            // create
            if ('/entreprise/create' === $pathinfo) {
                return array (  '_controller' => 'EntrepriseBundle\\Controller\\EntrepriseController::createAction',  '_route' => 'create',);
            }

            // read
            if ('/entreprise/read' === $pathinfo) {
                return array (  '_controller' => 'EntrepriseBundle\\Controller\\EntrepriseController::readAction',  '_route' => 'read',);
            }

            // update
            if (0 === strpos($pathinfo, '/entreprise/update') && preg_match('#^/entreprise/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'update']), array (  '_controller' => 'EntrepriseBundle\\Controller\\EntrepriseController::updateAction',));
            }

            // delete
            if (0 === strpos($pathinfo, '/entreprise/delete') && preg_match('#^/entreprise/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete']), array (  '_controller' => 'EntrepriseBundle\\Controller\\EntrepriseController::deleteAction',));
            }

            // scarra
            if ('/entreprise/scarra' === $pathinfo) {
                return array (  '_controller' => 'EntrepriseBundle\\Controller\\EntrepriseController::scarraAction',  '_route' => 'scarra',);
            }

            // xhem
            if ('/entreprise/xhem' === $pathinfo) {
                return array (  '_controller' => 'EntrepriseBundle\\Controller\\EntrepriseController::xhemAction',  '_route' => 'xhem',);
            }

        }

        elseif (0 === strpos($pathinfo, '/event')) {
            // event_homepage
            if ('/event' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'EventBundle\\Controller\\DefaultController::indexAction',  '_route' => 'event_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_event_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'event_homepage'));
                }

                return $ret;
            }
            not_event_homepage:

            if (0 === strpos($pathinfo, '/event/P')) {
                // addp
                if ('/event/P/Addp' === $pathinfo) {
                    return array (  '_controller' => 'EventBundle\\Controller\\ParticipantController::AddpAction',  '_route' => 'addp',);
                }

                // _updatevent
                if (0 === strpos($pathinfo, '/event/P/Updatevent') && preg_match('#^/event/P/Updatevent/(?P<nomp>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_updatevent']), array (  '_controller' => 'EventBundle\\Controller\\ParticipantController::UpdateventAction',));
                }

                // _readevent
                if ('/event/P/Readevent' === $pathinfo) {
                    return array (  '_controller' => 'EventBundle\\Controller\\ParticipantController::ReadeventAction',  '_route' => '_readevent',);
                }

                // _deletevent
                if (0 === strpos($pathinfo, '/event/P/Deletevent') && preg_match('#^/event/P/Deletevent/(?P<nomp>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_deletevent']), array (  '_controller' => 'EventBundle\\Controller\\ParticipantController::DeleteventAction',));
                }

                // searchp
                if ('/event/P/Searchp' === $pathinfo) {
                    return array (  '_controller' => 'EventBundle\\Controller\\ParticipantController::SearchpAction',  '_route' => 'searchp',);
                }

                // viewparticipant
                if ('/event/P/view' === $pathinfo) {
                    return array (  '_controller' => 'EventBundle\\Controller\\EventAdminController::ViewparticipantAction',  '_route' => 'viewparticipant',);
                }

                // triep
                if ('/event/P/Triep' === $pathinfo) {
                    return array (  '_controller' => 'EventBundle\\Controller\\ParticipantController::TriepAction',  '_route' => 'triep',);
                }

                // loginp
                if ('/event/P/Loginp' === $pathinfo) {
                    return array (  '_controller' => 'EventBundle\\Controller\\ParticipantController::LoginpAction',  '_route' => 'loginp',);
                }

            }

            elseif (0 === strpos($pathinfo, '/event/a')) {
                // addevent
                if ('/event/addeventA' === $pathinfo) {
                    return array (  '_controller' => 'EventBundle\\Controller\\EventAdminController::addeventAction',  '_route' => 'addevent',);
                }

                // addcertif
                if ('/event/addcertif' === $pathinfo) {
                    return array (  '_controller' => 'EventBundle\\Controller\\CertifController::addcertifAction',  '_route' => 'addcertif',);
                }

                // afficherevent
                if ('/event/afficherevent' === $pathinfo) {
                    return array (  '_controller' => 'EventBundle\\Controller\\EventAdminController::affichereventAction',  '_route' => 'afficherevent',);
                }

            }

            // update_events
            if (0 === strpos($pathinfo, '/event/updateEvents') && preg_match('#^/event/updateEvents/(?P<idev>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'update_events']), array (  '_controller' => 'EventBundle\\Controller\\EventAdminController::updateEventsAction',));
            }

            // updatecertif
            if (0 === strpos($pathinfo, '/event/updatecertif') && preg_match('#^/event/updatecertif/(?P<idc>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'updatecertif']), array (  '_controller' => 'EventBundle\\Controller\\CertifController::updatecertifAction',));
            }

            // deleteevents
            if (0 === strpos($pathinfo, '/event/deleteevents') && preg_match('#^/event/deleteevents/(?P<idev>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteevents']), array (  '_controller' => 'EventBundle\\Controller\\EventAdminController::deleteeventsAction',));
            }

            // deletecertif
            if (0 === strpos($pathinfo, '/event/deletecertif') && preg_match('#^/event/deletecertif/(?P<idc>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'deletecertif']), array (  '_controller' => 'EventBundle\\Controller\\CertifController::deletecertifAction',));
            }

            // searchevents
            if ('/event/searchevents' === $pathinfo) {
                return array (  '_controller' => 'EventBundle\\Controller\\EventAdminController::searcheventsAction',  '_route' => 'searchevents',);
            }

            // statevent
            if ('/event/statevent' === $pathinfo) {
                return array (  '_controller' => 'EventBundle\\Controller\\EventAdminController::stateventAction',  '_route' => 'statevent',);
            }

            // readcertif
            if ('/event/readcertif' === $pathinfo) {
                return array (  '_controller' => 'EventBundle\\Controller\\CertifController::readcertifAction',  '_route' => 'readcertif',);
            }

        }

        elseif (0 === strpos($pathinfo, '/sprint')) {
            // sprint_homepage
            if ('/sprint' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'sprintBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sprint_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_sprint_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'sprint_homepage'));
                }

                return $ret;
            }
            not_sprint_homepage:

            // createsprint
            if (0 === strpos($pathinfo, '/sprint/createsprint') && preg_match('#^/sprint/createsprint/(?P<id_projet>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'createsprint']), array (  '_controller' => 'sprintBundle\\Controller\\sprintController::createsprintAction',));
            }

            // affichersprint
            if (0 === strpos($pathinfo, '/sprint/affichersprint') && preg_match('#^/sprint/affichersprint/(?P<id_projet>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'affichersprint']), array (  '_controller' => 'sprintBundle\\Controller\\sprintController::affichersprintAction',));
            }

            // updatesprint
            if (0 === strpos($pathinfo, '/sprint/updatesprint') && preg_match('#^/sprint/updatesprint/(?P<idU>[^/]++)/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'updatesprint']), array (  '_controller' => 'sprintBundle\\Controller\\sprintController::updatesprintAction',));
            }

            // deletesprint
            if (0 === strpos($pathinfo, '/sprint/deletesprint') && preg_match('#^/sprint/deletesprint/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'deletesprint']), array (  '_controller' => 'sprintBundle\\Controller\\sprintController::deletesprintAction',));
            }

            // DRAG_DROP
            if (0 === strpos($pathinfo, '/sprint/DRAG_DROP') && preg_match('#^/sprint/DRAG_DROP/(?P<idd>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'DRAG_DROP']), array (  '_controller' => 'sprintBundle\\Controller\\sprintController::DRAG_DROPAction',));
            }

            // stat_sprint
            if (0 === strpos($pathinfo, '/sprint/stat_sprint') && preg_match('#^/sprint/stat_sprint/(?P<idS>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'stat_sprint']), array (  '_controller' => 'sprintBundle\\Controller\\sprintController::statsprintAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/subscription')) {
            // subscription_homepage
            if ('/subscription' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'SubscriptionBundle\\Controller\\DefaultController::indexAction',  '_route' => 'subscription_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_subscription_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'subscription_homepage'));
                }

                return $ret;
            }
            not_subscription_homepage:

            // readtarif
            if ('/subscription/readtarif' === $pathinfo) {
                return array (  '_controller' => 'SubscriptionBundle\\Controller\\TarifController::readtarifAction',  '_route' => 'readtarif',);
            }

            // readsub
            if ('/subscription/readsub' === $pathinfo) {
                return array (  '_controller' => 'SubscriptionBundle\\Controller\\SubscriptionController::readsubAction',  '_route' => 'readsub',);
            }

            // createtarif
            if ('/subscription/createtarif' === $pathinfo) {
                return array (  '_controller' => 'SubscriptionBundle\\Controller\\TarifController::createtarifAction',  '_route' => 'createtarif',);
            }

            // createsub
            if ('/subscription/createsub' === $pathinfo) {
                return array (  '_controller' => 'SubscriptionBundle\\Controller\\SubscriptionController::createsubAction',  '_route' => 'createsub',);
            }

            // deletetarif
            if (0 === strpos($pathinfo, '/subscription/deletetarif') && preg_match('#^/subscription/deletetarif/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'deletetarif']), array (  '_controller' => 'SubscriptionBundle\\Controller\\TarifController::deletetarifAction',));
            }

            // deletesub
            if (0 === strpos($pathinfo, '/subscription/deletesub') && preg_match('#^/subscription/deletesub/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'deletesub']), array (  '_controller' => 'SubscriptionBundle\\Controller\\SubscriptionController::deletesubAction',));
            }

            // updatetarif
            if (0 === strpos($pathinfo, '/subscription/updatetarif') && preg_match('#^/subscription/updatetarif/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'updatetarif']), array (  '_controller' => 'SubscriptionBundle\\Controller\\TarifController::updatetarifAction',));
            }

            // updatesub
            if (0 === strpos($pathinfo, '/subscription/upadatesub') && preg_match('#^/subscription/upadatesub/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'updatesub']), array (  '_controller' => 'SubscriptionBundle\\Controller\\SubscriptionController::upadatesubAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/projets')) {
            // projets_homepage
            if ('/projets' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'projetsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'projets_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_projets_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'projets_homepage'));
                }

                return $ret;
            }
            not_projets_homepage:

            // createprojet
            if ('/projets/createprojet' === $pathinfo) {
                return array (  '_controller' => 'projetsBundle\\Controller\\projetsController::createprojetAction',  '_route' => 'createprojet',);
            }

            // deleteprojet
            if (0 === strpos($pathinfo, '/projets/deleteprojet') && preg_match('#^/projets/deleteprojet/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteprojet']), array (  '_controller' => 'projetsBundle\\Controller\\projetsController::deleteprojetAction',));
            }

            // Rdeleteprojet
            if (0 === strpos($pathinfo, '/projets/Rdeleteprojet') && preg_match('#^/projets/Rdeleteprojet/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'Rdeleteprojet']), array (  '_controller' => 'projetsBundle\\Controller\\projetsController::RdeleteprojetAction',));
            }

            // updateprojet
            if (0 === strpos($pathinfo, '/projets/updateprojet') && preg_match('#^/projets/updateprojet/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'updateprojet']), array (  '_controller' => 'projetsBundle\\Controller\\projetsController::updateprojetAction',));
            }

            // afficherprojet
            if ('/projets/afficherprojet' === $pathinfo) {
                return array (  '_controller' => 'projetsBundle\\Controller\\projetsController::afficherprojetAction',  '_route' => 'afficherprojet',);
            }

            // Historyprojet
            if ('/projets/Historyprojet' === $pathinfo) {
                return array (  '_controller' => 'projetsBundle\\Controller\\projetsController::HistoryprojetsAction',  '_route' => 'Historyprojet',);
            }

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/user')) {
            // user_homepage
            if ('/user' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_user_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'user_homepage'));
                }

                return $ret;
            }
            not_user_homepage:

            // register
            if ('/user/Register' === $pathinfo) {
                return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::registerAction',  '_route' => 'register',);
            }

            // home
            if ('/user/home' === $pathinfo) {
                return array (  '_controller' => 'UserBundle\\Controller\\SecurityController::redirectAction',  '_route' => 'home',);
            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        elseif (0 === strpos($pathinfo, '/backlog')) {
            // backlog_sprint_homepage
            if ('/backlog' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::backlog_sprint_indexAction',  '_route' => 'backlog_sprint_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backlog_sprint_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backlog_sprint_homepage'));
                }

                return $ret;
            }
            not_backlog_sprint_homepage:

            // backlog_nav_homepage
            if ('/backlog/backlog_nav' === $pathinfo) {
                return array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::backlog_navAction',  '_route' => 'backlog_nav_homepage',);
            }

            if (0 === strpos($pathinfo, '/backlog/ProjectBacklog')) {
                // create_ProjectBacklog
                if ('/backlog/ProjectBacklog/new' === $pathinfo) {
                    return array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::create_ProjectBacklogAction',  '_route' => 'create_ProjectBacklog',);
                }

                if (0 === strpos($pathinfo, '/backlog/ProjectBacklog/view')) {
                    // view_ProjectBacklog
                    if (preg_match('#^/backlog/ProjectBacklog/view/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'view_ProjectBacklog']), array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::view_ProjectBacklogAction',));
                    }

                    // add_BacklogTask
                    if (preg_match('#^/backlog/ProjectBacklog/view/(?P<id>[^/]++)/task/add$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'add_BacklogTask']), array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::AddBacklogTaskAction',));
                    }

                    // delete_BacklogTask
                    if (preg_match('#^/backlog/ProjectBacklog/view/(?P<id_b>[^/]++)/task/remove/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_BacklogTask']), array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::RemoveBacklogTaskAction',));
                    }

                    // user_BacklogTask
                    if (preg_match('#^/backlog/ProjectBacklog/view/(?P<id>[^/]++)/user/(?P<id_u>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'user_BacklogTask']), array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::MesTachesAction',));
                    }

                    // update_BacklogTask
                    if (preg_match('#^/backlog/ProjectBacklog/view/(?P<id_b>[^/]++)/task/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'update_BacklogTask']), array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::UpdateBacklogTaskAction',));
                    }

                    // view_BacklogTask
                    if (preg_match('#^/backlog/ProjectBacklog/view/(?P<id_b>[^/]++)/task/view/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'view_BacklogTask']), array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::ViewBacklogTaskAction',));
                    }

                    // TransitNotification
                    if (preg_match('#^/backlog/ProjectBacklog/view/(?P<id_b>[^/]++)/task/view/(?P<id>[^/]++)/transit/(?P<notifiable>[^/]++)/(?P<notification>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'TransitNotification']), array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::TransitNotificationAction',));
                    }

                    // archiver_BacklogTask
                    if (preg_match('#^/backlog/ProjectBacklog/view/(?P<id_b>[^/]++)/(?P<id>[^/]++)/(?P<archive>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'archiver_BacklogTask']), array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::ArchiverBacklogTaskAction',));
                    }

                    // create_commentaire
                    if (preg_match('#^/backlog/ProjectBacklog/view/(?P<id_b>[^/]++)/task/view/(?P<id>[^/]++)/commentaire/add$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'create_commentaire']), array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::CreateTaskCommentaireAction',));
                    }

                    // update_commentaire
                    if (preg_match('#^/backlog/ProjectBacklog/view/(?P<id_b>[^/]++)/task/view/(?P<id>[^/]++)/commentaire/update/(?P<id_c>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'update_commentaire']), array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::UpdateTaskCommentaireAction',));
                    }

                    // delete_commentaire
                    if (preg_match('#^/backlog/ProjectBacklog/view/(?P<id_b>[^/]++)/task/view/(?P<id>[^/]++)/commentaire/delete/(?P<id_c>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_commentaire']), array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::DeleteTaskCommentaireAction',));
                    }

                }

                // delete_ProjectBacklog
                if (0 === strpos($pathinfo, '/backlog/ProjectBacklog/remove') && preg_match('#^/backlog/ProjectBacklog/remove/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_ProjectBacklog']), array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::DeleteProjectBacklogAction',));
                }

                // update_ProjectBacklog
                if (0 === strpos($pathinfo, '/backlog/ProjectBacklog/update') && preg_match('#^/backlog/ProjectBacklog/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'update_ProjectBacklog']), array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::UpdateProjectBacklogAction',));
                }

                // index_ProjectBacklog
                if ('/backlog/ProjectBacklog/index' === $pathinfo) {
                    return array (  '_controller' => 'BacklogBundle\\Controller\\DefaultController::IndexProjectBacklogAction',  '_route' => 'index_ProjectBacklog',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/meeting')) {
            // meeting_homepage
            if ('/meeting' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'MeetingBundle\\Controller\\DefaultController::indexAction',  '_route' => 'meeting_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_meeting_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'meeting_homepage'));
                }

                return $ret;
            }
            not_meeting_homepage:

            // create_meeting
            if ('/meeting/createMeeting' === $pathinfo) {
                return array (  '_controller' => 'MeetingBundle\\Controller\\MeetingController::createMeetingAction',  '_route' => 'create_meeting',);
            }

            // read_meeting
            if ('/meeting/readMeeting' === $pathinfo) {
                return array (  '_controller' => 'MeetingBundle\\Controller\\MeetingController::readMeetingAction',  '_route' => 'read_meeting',);
            }

            // update_meeting
            if (0 === strpos($pathinfo, '/meeting/updateMeeting') && preg_match('#^/meeting/updateMeeting/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'update_meeting']), array (  '_controller' => 'MeetingBundle\\Controller\\MeetingController::updateMeetingAction',));
            }

            // delete_meeting
            if (0 === strpos($pathinfo, '/meeting/deleteMeeting') && preg_match('#^/meeting/deleteMeeting/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_meeting']), array (  '_controller' => 'MeetingBundle\\Controller\\MeetingController::deleteMeetingAction',));
            }

            // pdf
            if (0 === strpos($pathinfo, '/meeting/pdf') && preg_match('#^/meeting/pdf/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'pdf']), array (  '_controller' => 'MeetingBundle\\Controller\\MeetingController::pdfAction',));
            }

            // stat_metting
            if ('/meeting/stat_metting' === $pathinfo) {
                return array (  '_controller' => 'MeetingBundle\\Controller\\MeetingController::statmeetingAction',  '_route' => 'stat_metting',);
            }

        }

        elseif (0 === strpos($pathinfo, '/team')) {
            // team_homepage
            if ('/team' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'TeamBundle\\Controller\\DefaultController::indexAction',  '_route' => 'team_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_team_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'team_homepage'));
                }

                return $ret;
            }
            not_team_homepage:

            // createteam
            if ('/team/createteam' === $pathinfo) {
                return array (  '_controller' => 'TeamBundle\\Controller\\teamController::createteamAction',  '_route' => 'createteam',);
            }

            // readteam
            if ('/team/readteam' === $pathinfo) {
                return array (  '_controller' => 'TeamBundle\\Controller\\teamController::readteamAction',  '_route' => 'readteam',);
            }

            // updateteam
            if (0 === strpos($pathinfo, '/team/updateteam') && preg_match('#^/team/updateteam/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'updateteam']), array (  '_controller' => 'TeamBundle\\Controller\\teamController::updateteamAction',));
            }

            // deleteteam
            if (0 === strpos($pathinfo, '/team/deleteteam') && preg_match('#^/team/deleteteam/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteteam']), array (  '_controller' => 'TeamBundle\\Controller\\teamController::deleteteamAction',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/notifications')) {
            // notification_list
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_list']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::listAction',));
            }

            // notification_mark_as_seen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/mark_as_seen/(?P<notification>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_mark_as_seen']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsSeenAction',));
            }

            // notification_mark_as_unseen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/mark_as_unseen/(?P<notification>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_mark_as_unseen']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsUnSeenAction',));
            }

            // notification_mark_all_as_seen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/markAllAsSeen$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_mark_all_as_seen']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAllAsSeenAction',));
            }

        }

        // fullcalendar_loader
        if ('/fc-load-events' === $pathinfo) {
            return array (  '_controller' => 'ADesigns\\CalendarBundle\\Controller\\CalendarController::loadCalendarAction',  '_route' => 'fullcalendar_loader',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_js_routing_js']), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_fos_js_routing_js;
            }

            return $ret;
        }
        not_fos_js_routing_js:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
