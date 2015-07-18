<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.cache' => 'getAssetic_CacheService',
            'assetic.controller' => 'getAssetic_ControllerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter.jpegoptim' => 'getAssetic_Filter_JpegoptimService',
            'assetic.filter.jpegtran' => 'getAssetic_Filter_JpegtranService',
            'assetic.filter.optipng' => 'getAssetic_Filter_OptipngService',
            'assetic.filter.scss' => 'getAssetic_Filter_ScssService',
            'assetic.filter.uglifycss' => 'getAssetic_Filter_UglifycssService',
            'assetic.filter.uglifyjs2' => 'getAssetic_Filter_Uglifyjs2Service',
            'assetic.filter.yui_js' => 'getAssetic_Filter_YuiJsService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'assetic.request_listener' => 'getAssetic_RequestListenerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'cmf_routing.route_type_form_type' => 'getCmfRouting_RouteTypeFormTypeService',
            'cmf_routing.router' => 'getCmfRouting_RouterService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'controller_resolver' => 'getControllerResolverService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.dump_listener' => 'getDebug_DumpListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'debug.templating.engine.php' => 'getDebug_Templating_Engine_PhpService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'ekino.new_relic' => 'getEkino_NewRelicService',
            'ekino.new_relic.command_listener' => 'getEkino_NewRelic_CommandListenerService',
            'ekino.new_relic.exception_listener' => 'getEkino_NewRelic_ExceptionListenerService',
            'ekino.new_relic.interactor' => 'getEkino_NewRelic_InteractorService',
            'ekino.new_relic.request_listener' => 'getEkino_NewRelic_RequestListenerService',
            'ekino.new_relic.response_listener' => 'getEkino_NewRelic_ResponseListenerService',
            'ekino.new_relic.twig.new_relic_extension' => 'getEkino_NewRelic_Twig_NewRelicExtensionService',
            'esi' => 'getEsiService',
            'esi_listener' => 'getEsiListenerService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.iconfont' => 'getForm_Type_IconfontService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.media' => 'getForm_Type_MediaService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_http_cache.event_listener.cache_control' => 'getFosHttpCache_EventListener_CacheControlService',
            'fos_user.change_password.form.factory' => 'getFosUser_ChangePassword_Form_FactoryService',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService',
            'fos_user.entity_manager' => 'getFosUser_EntityManagerService',
            'fos_user.group.form.factory' => 'getFosUser_Group_Form_FactoryService',
            'fos_user.group.form.type' => 'getFosUser_Group_Form_TypeService',
            'fos_user.group_manager' => 'getFosUser_GroupManagerService',
            'fos_user.listener.authentication' => 'getFosUser_Listener_AuthenticationService',
            'fos_user.listener.flash' => 'getFosUser_Listener_FlashService',
            'fos_user.listener.resetting' => 'getFosUser_Listener_ResettingService',
            'fos_user.mailer' => 'getFosUser_MailerService',
            'fos_user.profile.form.factory' => 'getFosUser_Profile_Form_FactoryService',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService',
            'fos_user.registration.form.factory' => 'getFosUser_Registration_Form_FactoryService',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService',
            'fos_user.resetting.form.factory' => 'getFosUser_Resetting_Form_FactoryService',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService',
            'fos_user.user_manager' => 'getFosUser_UserManagerService',
            'fos_user.user_provider.username' => 'getFosUser_UserProvider_UsernameService',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'gedmo.listener.tree' => 'getGedmo_Listener_TreeService',
            'http_kernel' => 'getHttpKernelService',
            'jms_aop.interceptor_loader' => 'getJmsAop_InterceptorLoaderService',
            'jms_aop.pointcut_container' => 'getJmsAop_PointcutContainerService',
            'kernel' => 'getKernelService',
            'knp_gaufrette.filesystem_map' => 'getKnpGaufrette_FilesystemMapService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.listener.voters' => 'getKnpMenu_Listener_VotersService',
            'knp_menu.matcher' => 'getKnpMenu_MatcherService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'knp_menu.voter.router' => 'getKnpMenu_Voter_RouterService',
            'kunstmaan.data_collector.translator' => 'getKunstmaan_DataCollector_TranslatorService',
            'kunstmaan_admin.acl.helper' => 'getKunstmaanAdmin_Acl_HelperService',
            'kunstmaan_admin.acl.native.helper' => 'getKunstmaanAdmin_Acl_Native_HelperService',
            'kunstmaan_admin.admin_locale.listener' => 'getKunstmaanAdmin_AdminLocale_ListenerService',
            'kunstmaan_admin.cache' => 'getKunstmaanAdmin_CacheService',
            'kunstmaan_admin.clone.helper' => 'getKunstmaanAdmin_Clone_HelperService',
            'kunstmaan_admin.clone.listener' => 'getKunstmaanAdmin_Clone_ListenerService',
            'kunstmaan_admin.consolelogger.listener' => 'getKunstmaanAdmin_Consolelogger_ListenerService',
            'kunstmaan_admin.doctrine_mapping.listener' => 'getKunstmaanAdmin_DoctrineMapping_ListenerService',
            'kunstmaan_admin.form.helper' => 'getKunstmaanAdmin_Form_HelperService',
            'kunstmaan_admin.form.type.color' => 'getKunstmaanAdmin_Form_Type_ColorService',
            'kunstmaan_admin.form.type.range' => 'getKunstmaanAdmin_Form_Type_RangeService',
            'kunstmaan_admin.formtools.twig.extension' => 'getKunstmaanAdmin_Formtools_Twig_ExtensionService',
            'kunstmaan_admin.locale.twig.extension' => 'getKunstmaanAdmin_Locale_Twig_ExtensionService',
            'kunstmaan_admin.localeswitcher.twig.extension' => 'getKunstmaanAdmin_Localeswitcher_Twig_ExtensionService',
            'kunstmaan_admin.logger' => 'getKunstmaanAdmin_LoggerService',
            'kunstmaan_admin.logger.handler' => 'getKunstmaanAdmin_Logger_HandlerService',
            'kunstmaan_admin.logger.processor.user' => 'getKunstmaanAdmin_Logger_Processor_UserService',
            'kunstmaan_admin.login.listener' => 'getKunstmaanAdmin_Login_ListenerService',
            'kunstmaan_admin.menu.adaptor.modules' => 'getKunstmaanAdmin_Menu_Adaptor_ModulesService',
            'kunstmaan_admin.menu.adaptor.settings' => 'getKunstmaanAdmin_Menu_Adaptor_SettingsService',
            'kunstmaan_admin.menu.twig.extension' => 'getKunstmaanAdmin_Menu_Twig_ExtensionService',
            'kunstmaan_admin.menubuilder' => 'getKunstmaanAdmin_MenubuilderService',
            'kunstmaan_admin.password_check.listener' => 'getKunstmaanAdmin_PasswordCheck_ListenerService',
            'kunstmaan_admin.password_resetting.listener' => 'getKunstmaanAdmin_PasswordResetting_ListenerService',
            'kunstmaan_admin.permission_creator' => 'getKunstmaanAdmin_PermissionCreatorService',
            'kunstmaan_admin.permissionadmin' => 'getKunstmaanAdmin_PermissionadminService',
            'kunstmaan_admin.permissions.twig.extension' => 'getKunstmaanAdmin_Permissions_Twig_ExtensionService',
            'kunstmaan_admin.session_security' => 'getKunstmaanAdmin_SessionSecurityService',
            'kunstmaan_admin.tabs.twig.extension' => 'getKunstmaanAdmin_Tabs_Twig_ExtensionService',
            'kunstmaan_admin.versionchecker' => 'getKunstmaanAdmin_VersioncheckerService',
            'kunstmaan_adminlist.factory' => 'getKunstmaanAdminlist_FactoryService',
            'kunstmaan_adminlist.service.export' => 'getKunstmaanAdminlist_Service_ExportService',
            'kunstmaan_adminlist.twig.extension' => 'getKunstmaanAdminlist_Twig_ExtensionService',
            'kunstmaan_dashboard.googleclient' => 'getKunstmaanDashboard_GoogleclientService',
            'kunstmaan_dashboard.helper.google.analytics.config' => 'getKunstmaanDashboard_Helper_Google_Analytics_ConfigService',
            'kunstmaan_dashboard.helper.google.analytics.query' => 'getKunstmaanDashboard_Helper_Google_Analytics_QueryService',
            'kunstmaan_dashboard.helper.google.analytics.service' => 'getKunstmaanDashboard_Helper_Google_Analytics_ServiceService',
            'kunstmaan_dashboard.helper.google.client' => 'getKunstmaanDashboard_Helper_Google_ClientService',
            'kunstmaan_dashboard.manager.widgets' => 'getKunstmaanDashboard_Manager_WidgetsService',
            'kunstmaan_dashboard.widget.googleanalytics' => 'getKunstmaanDashboard_Widget_GoogleanalyticsService',
            'kunstmaan_form.configure_sub_actions_menu_listener' => 'getKunstmaanForm_ConfigureSubActionsMenuListenerService',
            'kunstmaan_form.form_handler' => 'getKunstmaanForm_FormHandlerService',
            'kunstmaan_form.form_mailer' => 'getKunstmaanForm_FormMailerService',
            'kunstmaan_form.menu.adaptor.forms' => 'getKunstmaanForm_Menu_Adaptor_FormsService',
            'kunstmaan_form.type.wysiwyg' => 'getKunstmaanForm_Type_WysiwygService',
            'kunstmaan_live_reload.disable_cache' => 'getKunstmaanLiveReload_DisableCacheService',
            'kunstmaan_live_reload.script_injector' => 'getKunstmaanLiveReload_ScriptInjectorService',
            'kunstmaan_logging_formatter' => 'getKunstmaanLoggingFormatterService',
            'kunstmaan_logging_introspection' => 'getKunstmaanLoggingIntrospectionService',
            'kunstmaan_logging_web' => 'getKunstmaanLoggingWebService',
            'kunstmaan_media.command.migratename' => 'getKunstmaanMedia_Command_MigratenameService',
            'kunstmaan_media.command.rebuildfoldertree' => 'getKunstmaanMedia_Command_RebuildfoldertreeService',
            'kunstmaan_media.folder_manager' => 'getKunstmaanMedia_FolderManagerService',
            'kunstmaan_media.icon_font.default_loader' => 'getKunstmaanMedia_IconFont_DefaultLoaderService',
            'kunstmaan_media.icon_font_manager' => 'getKunstmaanMedia_IconFontManagerService',
            'kunstmaan_media.listener.doctrine' => 'getKunstmaanMedia_Listener_DoctrineService',
            'kunstmaan_media.media_creator_service' => 'getKunstmaanMedia_MediaCreatorServiceService',
            'kunstmaan_media.media_handlers.file' => 'getKunstmaanMedia_MediaHandlers_FileService',
            'kunstmaan_media.media_handlers.image' => 'getKunstmaanMedia_MediaHandlers_ImageService',
            'kunstmaan_media.media_handlers.remote_audio' => 'getKunstmaanMedia_MediaHandlers_RemoteAudioService',
            'kunstmaan_media.media_handlers.remote_slide' => 'getKunstmaanMedia_MediaHandlers_RemoteSlideService',
            'kunstmaan_media.media_handlers.remote_video' => 'getKunstmaanMedia_MediaHandlers_RemoteVideoService',
            'kunstmaan_media.media_manager' => 'getKunstmaanMedia_MediaManagerService',
            'kunstmaan_media.menu.adaptor' => 'getKunstmaanMedia_Menu_AdaptorService',
            'kunstmaan_media.mimetype_guesser.factory' => 'getKunstmaanMedia_MimetypeGuesser_FactoryService',
            'kunstmaan_media.repository.folder' => 'getKunstmaanMedia_Repository_FolderService',
            'kunstmaan_newrelic_naming_strategy' => 'getKunstmaanNewrelicNamingStrategyService',
            'kunstmaan_node.acl_permission_creator_service' => 'getKunstmaanNode_AclPermissionCreatorServiceService',
            'kunstmaan_node.actions_menu_builder' => 'getKunstmaanNode_ActionsMenuBuilderService',
            'kunstmaan_node.admin_node.publisher' => 'getKunstmaanNode_AdminNode_PublisherService',
            'kunstmaan_node.command.fixtimestamps' => 'getKunstmaanNode_Command_FixtimestampsService',
            'kunstmaan_node.doctrine_mapping.listener' => 'getKunstmaanNode_DoctrineMapping_ListenerService',
            'kunstmaan_node.edit_node.listener' => 'getKunstmaanNode_EditNode_ListenerService',
            'kunstmaan_node.fix_date.listener' => 'getKunstmaanNode_FixDate_ListenerService',
            'kunstmaan_node.form.type.slug' => 'getKunstmaanNode_Form_Type_SlugService',
            'kunstmaan_node.form.type.urlchooser' => 'getKunstmaanNode_Form_Type_UrlchooserService',
            'kunstmaan_node.log_page_events.subscriber' => 'getKunstmaanNode_LogPageEvents_SubscriberService',
            'kunstmaan_node.menu.actions' => 'getKunstmaanNode_Menu_ActionsService',
            'kunstmaan_node.menu.adaptor.pages' => 'getKunstmaanNode_Menu_Adaptor_PagesService',
            'kunstmaan_node.menu.sub_actions' => 'getKunstmaanNode_Menu_SubActionsService',
            'kunstmaan_node.menu.top_actions' => 'getKunstmaanNode_Menu_TopActionsService',
            'kunstmaan_node.node.twig.extension' => 'getKunstmaanNode_Node_Twig_ExtensionService',
            'kunstmaan_node.nodetranslation.listener' => 'getKunstmaanNode_Nodetranslation_ListenerService',
            'kunstmaan_node.page_creator_service' => 'getKunstmaanNode_PageCreatorServiceService',
            'kunstmaan_node.pages_configuration' => 'getKunstmaanNode_PagesConfigurationService',
            'kunstmaan_node.render.context.listener' => 'getKunstmaanNode_Render_Context_ListenerService',
            'kunstmaan_node.slug.listener' => 'getKunstmaanNode_Slug_ListenerService',
            'kunstmaan_node.slug.security.listener' => 'getKunstmaanNode_Slug_Security_ListenerService',
            'kunstmaan_node.slugrouter' => 'getKunstmaanNode_SlugrouterService',
            'kunstmaan_node_search.node_index_update.listener' => 'getKunstmaanNodeSearch_NodeIndexUpdate_ListenerService',
            'kunstmaan_node_search.search.node' => 'getKunstmaanNodeSearch_Search_NodeService',
            'kunstmaan_node_search.search.service' => 'getKunstmaanNodeSearch_Search_ServiceService',
            'kunstmaan_node_search.search_configuration.node' => 'getKunstmaanNodeSearch_SearchConfiguration_NodeService',
            'kunstmaan_node_search.service.indexable_pageparts' => 'getKunstmaanNodeSearch_Service_IndexablePagepartsService',
            'kunstmaan_node_search.twig.extension' => 'getKunstmaanNodeSearch_Twig_ExtensionService',
            'kunstmaan_pagepart.pageparts' => 'getKunstmaanPagepart_PagepartsService',
            'kunstmaan_pagepartadmin.factory' => 'getKunstmaanPagepartadmin_FactoryService',
            'kunstmaan_pagepartadmin.twig.extension' => 'getKunstmaanPagepartadmin_Twig_ExtensionService',
            'kunstmaan_pageparts.clone.listener' => 'getKunstmaanPageparts_Clone_ListenerService',
            'kunstmaan_pageparts.edit_node.listener' => 'getKunstmaanPageparts_EditNode_ListenerService',
            'kunstmaan_pageparts.pagepart_creator_service' => 'getKunstmaanPageparts_PagepartCreatorServiceService',
            'kunstmaan_pageparts.twig.extension' => 'getKunstmaanPageparts_Twig_ExtensionService',
            'kunstmaan_pagetemplate.twig.extension' => 'getKunstmaanPagetemplate_Twig_ExtensionService',
            'kunstmaan_redirect.menu.adaptor' => 'getKunstmaanRedirect_Menu_AdaptorService',
            'kunstmaan_redirect.redirectrouter' => 'getKunstmaanRedirect_RedirectrouterService',
            'kunstmaan_redirect.repositories.redirect' => 'getKunstmaanRedirect_Repositories_RedirectService',
            'kunstmaan_search.command.delete' => 'getKunstmaanSearch_Command_DeleteService',
            'kunstmaan_search.command.populate' => 'getKunstmaanSearch_Command_PopulateService',
            'kunstmaan_search.command.setup' => 'getKunstmaanSearch_Command_SetupService',
            'kunstmaan_search.search' => 'getKunstmaanSearch_SearchService',
            'kunstmaan_search.search.factory.analysis' => 'getKunstmaanSearch_Search_Factory_AnalysisService',
            'kunstmaan_search.search_configuration_chain' => 'getKunstmaanSearch_SearchConfigurationChainService',
            'kunstmaan_search.search_provider.elastica' => 'getKunstmaanSearch_SearchProvider_ElasticaService',
            'kunstmaan_search.search_provider_chain' => 'getKunstmaanSearch_SearchProviderChainService',
            'kunstmaan_seo.clone.listener' => 'getKunstmaanSeo_Clone_ListenerService',
            'kunstmaan_seo.google_analytics.order_converter' => 'getKunstmaanSeo_GoogleAnalytics_OrderConverterService',
            'kunstmaan_seo.google_analytics.order_preparer' => 'getKunstmaanSeo_GoogleAnalytics_OrderPreparerService',
            'kunstmaan_seo.google_analytics.twig.extension' => 'getKunstmaanSeo_GoogleAnalytics_Twig_ExtensionService',
            'kunstmaan_seo.node.listener' => 'getKunstmaanSeo_Node_ListenerService',
            'kunstmaan_seo.twig.extension' => 'getKunstmaanSeo_Twig_ExtensionService',
            'kunstmaan_sitemapbundle.sitemap.twig.extension' => 'getKunstmaanSitemapbundle_Sitemap_Twig_ExtensionService',
            'kunstmaan_translator.menu.adaptor' => 'getKunstmaanTranslator_Menu_AdaptorService',
            'kunstmaan_translator.repository.translation' => 'getKunstmaanTranslator_Repository_TranslationService',
            'kunstmaan_translator.service.command.diff' => 'getKunstmaanTranslator_Service_Command_DiffService',
            'kunstmaan_translator.service.exporter.command_handler' => 'getKunstmaanTranslator_Service_Exporter_CommandHandlerService',
            'kunstmaan_translator.service.exporter.exporter' => 'getKunstmaanTranslator_Service_Exporter_ExporterService',
            'kunstmaan_translator.service.exporter.yaml' => 'getKunstmaanTranslator_Service_Exporter_YamlService',
            'kunstmaan_translator.service.file_explorer' => 'getKunstmaanTranslator_Service_FileExplorerService',
            'kunstmaan_translator.service.group_manager' => 'getKunstmaanTranslator_Service_GroupManagerService',
            'kunstmaan_translator.service.importer.command_handler' => 'getKunstmaanTranslator_Service_Importer_CommandHandlerService',
            'kunstmaan_translator.service.importer.importer' => 'getKunstmaanTranslator_Service_Importer_ImporterService',
            'kunstmaan_translator.service.migrations.migrations' => 'getKunstmaanTranslator_Service_Migrations_MigrationsService',
            'kunstmaan_translator.service.translation' => 'getKunstmaanTranslator_Service_TranslationService',
            'kunstmaan_translator.service.translator.cache_validator' => 'getKunstmaanTranslator_Service_Translator_CacheValidatorService',
            'kunstmaan_translator.service.translator.loader' => 'getKunstmaanTranslator_Service_Translator_LoaderService',
            'kunstmaan_translator.service.translator.resource_cacher' => 'getKunstmaanTranslator_Service_Translator_ResourceCacherService',
            'kunstmaan_translator.service.translator.translator' => 'getKunstmaanTranslator_Service_Translator_TranslatorService',
            'kunstmaan_user_management.menu.adaptor' => 'getKunstmaanUserManagement_Menu_AdaptorService',
            'kunstmaan_utilities.cipher' => 'getKunstmaanUtilities_CipherService',
            'kunstmaan_utilities.shell' => 'getKunstmaanUtilities_ShellService',
            'kunstmaan_utilities.slugifier' => 'getKunstmaanUtilities_SlugifierService',
            'kunstmaan_utilities.twig.extension' => 'getKunstmaanUtilities_Twig_ExtensionService',
            'kunstmaanseobundle.seo_management_menu_adaptor' => 'getKunstmaanseobundle_SeoManagementMenuAdaptorService',
            'liip_imagine' => 'getLiipImagineService',
            'liip_imagine.cache.clearer' => 'getLiipImagine_Cache_ClearerService',
            'liip_imagine.cache.manager' => 'getLiipImagine_Cache_ManagerService',
            'liip_imagine.cache.resolver.no_cache' => 'getLiipImagine_Cache_Resolver_NoCacheService',
            'liip_imagine.cache.resolver.web_path' => 'getLiipImagine_Cache_Resolver_WebPathService',
            'liip_imagine.controller' => 'getLiipImagine_ControllerService',
            'liip_imagine.data.loader.filesystem' => 'getLiipImagine_Data_Loader_FilesystemService',
            'liip_imagine.data.loader.stream.profile_photos' => 'getLiipImagine_Data_Loader_Stream_ProfilePhotosService',
            'liip_imagine.data.manager' => 'getLiipImagine_Data_ManagerService',
            'liip_imagine.filter.configuration' => 'getLiipImagine_Filter_ConfigurationService',
            'liip_imagine.filter.loader.auto_rotate' => 'getLiipImagine_Filter_Loader_AutoRotateService',
            'liip_imagine.filter.loader.background' => 'getLiipImagine_Filter_Loader_BackgroundService',
            'liip_imagine.filter.loader.crop' => 'getLiipImagine_Filter_Loader_CropService',
            'liip_imagine.filter.loader.paste' => 'getLiipImagine_Filter_Loader_PasteService',
            'liip_imagine.filter.loader.relative_resize' => 'getLiipImagine_Filter_Loader_RelativeResizeService',
            'liip_imagine.filter.loader.resize' => 'getLiipImagine_Filter_Loader_ResizeService',
            'liip_imagine.filter.loader.strip' => 'getLiipImagine_Filter_Loader_StripService',
            'liip_imagine.filter.loader.thumbnail' => 'getLiipImagine_Filter_Loader_ThumbnailService',
            'liip_imagine.filter.loader.upscale' => 'getLiipImagine_Filter_Loader_UpscaleService',
            'liip_imagine.filter.loader.watermark' => 'getLiipImagine_Filter_Loader_WatermarkService',
            'liip_imagine.filter.manager' => 'getLiipImagine_Filter_ManagerService',
            'liip_imagine.form.type.image' => 'getLiipImagine_Form_Type_ImageService',
            'liip_imagine.routing.loader' => 'getLiipImagine_Routing_LoaderService',
            'liip_imagine.templating.helper' => 'getLiipImagine_Templating_HelperService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.debug' => 'getMonolog_Handler_DebugService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'pagerfanta.convert_not_valid_current_page_to_not_found_listener' => 'getPagerfanta_ConvertNotValidCurrentPageToNotFoundListenerService',
            'pagerfanta.convert_not_valid_max_per_page_to_not_found_listener' => 'getPagerfanta_ConvertNotValidMaxPerPageToNotFoundListenerService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router.default' => 'getRouter_DefaultService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.access.method_interceptor' => 'getSecurity_Access_MethodInterceptorService',
            'security.access.pointcut' => 'getSecurity_Access_PointcutService',
            'security.acl.dbal.schema' => 'getSecurity_Acl_Dbal_SchemaService',
            'security.acl.dbal.schema_listener' => 'getSecurity_Acl_Dbal_SchemaListenerService',
            'security.acl.object_identity_retrieval_strategy' => 'getSecurity_Acl_ObjectIdentityRetrievalStrategyService',
            'security.acl.permission.map' => 'getSecurity_Acl_Permission_MapService',
            'security.acl.permission_evaluator' => 'getSecurity_Acl_PermissionEvaluatorService',
            'security.acl.provider' => 'getSecurity_Acl_ProviderService',
            'security.acl.security_identity_retrieval_strategy' => 'getSecurity_Acl_SecurityIdentityRetrievalStrategyService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.context' => 'getSecurity_ContextService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.expressions.compiler' => 'getSecurity_Expressions_CompilerService',
            'security.expressions.handler' => 'getSecurity_Expressions_HandlerService',
            'security.expressions.reverse_interpreter' => 'getSecurity_Expressions_ReverseInterpreterService',
            'security.extra.metadata_driver' => 'getSecurity_Extra_MetadataDriverService',
            'security.extra.metadata_factory' => 'getSecurity_Extra_MetadataFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_checker' => 'getSecurity_UserCheckerService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService',
            'sensio_distribution.webconfigurator' => 'getSensioDistribution_WebconfiguratorService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'stof_doctrine_extensions.event_listener.locale' => 'getStofDoctrineExtensions_EventListener_LocaleService',
            'stof_doctrine_extensions.event_listener.logger' => 'getStofDoctrineExtensions_EventListener_LoggerService',
            'stof_doctrine_extensions.listener.loggable' => 'getStofDoctrineExtensions_Listener_LoggableService',
            'stof_doctrine_extensions.listener.translatable' => 'getStofDoctrineExtensions_Listener_TranslatableService',
            'stof_doctrine_extensions.uploadable.manager' => 'getStofDoctrineExtensions_Uploadable_ManagerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.asset.package_factory' => 'getTemplating_Asset_PackageFactoryService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.globals' => 'getTemplating_GlobalsService',
            'templating.helper.actions' => 'getTemplating_Helper_ActionsService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.code' => 'getTemplating_Helper_CodeService',
            'templating.helper.form' => 'getTemplating_Helper_FormService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.request' => 'getTemplating_Helper_RequestService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.helper.session' => 'getTemplating_Helper_SessionService',
            'templating.helper.slots' => 'getTemplating_Helper_SlotsService',
            'templating.helper.stopwatch' => 'getTemplating_Helper_StopwatchService',
            'templating.helper.translator' => 'getTemplating_Helper_TranslatorService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator' => 'getTranslatorService',
            'translator.selector' => 'getTranslator_SelectorService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.extension.intl' => 'getTwig_Extension_IntlService',
            'twig.extension.text' => 'getTwig_Extension_TextService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
            'white_october_pagerfanta.view_factory' => 'getWhiteOctoberPagerfanta_ViewFactoryService',
        );
        $this->aliases = array(
            'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
            'database_connection' => 'doctrine.dbal.default_connection',
            'debug.templating.engine.twig' => 'templating',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'mailer' => 'swiftmailer.mailer.default',
            'router' => 'cmf_routing.router',
            'security.acl.dbal.connection' => 'doctrine.dbal.default_connection',
            'sensio.distribution.webconfigurator' => 'sensio_distribution.webconfigurator',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
            'translator.default' => 'kunstmaan_translator.service.translator.translator',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Annotations\FileCacheReader A Doctrine\Common\Annotations\FileCacheReader instance.
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), (__DIR__.'/annotations'), true);
    }

    /**
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance.
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig'), $this->get('monolog.logger.assetic', ContainerInterface::NULL_ON_INVALID_REFERENCE)), new \Assetic\Cache\ConfigCache((__DIR__.'/assetic/config')), true)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', ($this->targetDirs[2].'/Resources/FrameworkBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', ($this->targetDirs[2].'/Resources/SecurityBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', ($this->targetDirs[2].'/Resources/TwigBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', ($this->targetDirs[2].'/Resources/MonologBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', ($this->targetDirs[3].'/vendor/symfony/monolog-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', ($this->targetDirs[2].'/Resources/SwiftmailerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', ($this->targetDirs[2].'/Resources/AsseticBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', ($this->targetDirs[3].'/vendor/symfony/assetic-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', ($this->targetDirs[2].'/Resources/DoctrineBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSHttpCacheBundle', ($this->targetDirs[2].'/Resources/FOSHttpCacheBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSHttpCacheBundle', ($this->targetDirs[3].'/vendor/friendsofsymfony/http-cache-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioFrameworkExtraBundle', ($this->targetDirs[2].'/Resources/SensioFrameworkExtraBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioFrameworkExtraBundle', ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSSecurityExtraBundle', ($this->targetDirs[2].'/Resources/JMSSecurityExtraBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSSecurityExtraBundle', ($this->targetDirs[3].'/vendor/jms/security-extra-bundle/JMS/SecurityExtraBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSAopBundle', ($this->targetDirs[2].'/Resources/JMSAopBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSAopBundle', ($this->targetDirs[3].'/vendor/jms/aop-bundle/JMS/AopBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanUtilitiesBundle', ($this->targetDirs[2].'/Resources/KunstmaanUtilitiesBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanUtilitiesBundle', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/UtilitiesBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanNodeBundle', ($this->targetDirs[2].'/Resources/KunstmaanNodeBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanNodeBundle', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanSeoBundle', ($this->targetDirs[2].'/Resources/KunstmaanSeoBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanSeoBundle', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/SeoBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'CmfRoutingBundle', ($this->targetDirs[2].'/Resources/CmfRoutingBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'CmfRoutingBundle', ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Symfony/Cmf/Bundle/RoutingBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'StofDoctrineExtensionsBundle', ($this->targetDirs[2].'/Resources/StofDoctrineExtensionsBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'StofDoctrineExtensionsBundle', ($this->targetDirs[3].'/vendor/stof/doctrine-extensions-bundle/Stof/DoctrineExtensionsBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'LiipImagineBundle', ($this->targetDirs[2].'/Resources/LiipImagineBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'LiipImagineBundle', ($this->targetDirs[3].'/vendor/liip/imagine-bundle/Liip/ImagineBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpGaufretteBundle', ($this->targetDirs[2].'/Resources/KnpGaufretteBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpGaufretteBundle', ($this->targetDirs[3].'/vendor/knplabs/knp-gaufrette-bundle/Knp/Bundle/GaufretteBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanMediaBundle', ($this->targetDirs[2].'/Resources/KunstmaanMediaBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanMediaBundle', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSUserBundle', ($this->targetDirs[2].'/Resources/FOSUserBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSUserBundle', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpMenuBundle', ($this->targetDirs[2].'/Resources/KnpMenuBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpMenuBundle', ($this->targetDirs[3].'/vendor/knplabs/knp-menu-bundle/Knp/Bundle/MenuBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineFixturesBundle', ($this->targetDirs[2].'/Resources/DoctrineFixturesBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineFixturesBundle', ($this->targetDirs[3].'/vendor/doctrine/doctrine-fixtures-bundle/Doctrine/Bundle/FixturesBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineMigrationsBundle', ($this->targetDirs[2].'/Resources/DoctrineMigrationsBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineMigrationsBundle', ($this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle/Doctrine/Bundle/MigrationsBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanAdminBundle', ($this->targetDirs[2].'/Resources/KunstmaanAdminBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanAdminBundle', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/AdminBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanPagePartBundle', ($this->targetDirs[2].'/Resources/KunstmaanPagePartBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanPagePartBundle', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/PagePartBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanMediaPagePartBundle', ($this->targetDirs[2].'/Resources/KunstmaanMediaPagePartBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanMediaPagePartBundle', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaPagePartBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanFormBundle', ($this->targetDirs[2].'/Resources/KunstmaanFormBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanFormBundle', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/FormBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanAdminListBundle', ($this->targetDirs[2].'/Resources/KunstmaanAdminListBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanAdminListBundle', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/AdminListBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WhiteOctoberPagerfantaBundle', ($this->targetDirs[2].'/Resources/WhiteOctoberPagerfantaBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WhiteOctoberPagerfantaBundle', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanSearchBundle', ($this->targetDirs[2].'/Resources/KunstmaanSearchBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanSearchBundle', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/SearchBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanNodeSearchBundle', ($this->targetDirs[2].'/Resources/KunstmaanNodeSearchBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanNodeSearchBundle', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeSearchBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanSitemapBundle', ($this->targetDirs[2].'/Resources/KunstmaanSitemapBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanSitemapBundle', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/SitemapBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanArticleBundle', ($this->targetDirs[2].'/Resources/KunstmaanArticleBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanArticleBundle', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/ArticleBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanTranslatorBundle', ($this->targetDirs[2].'/Resources/KunstmaanTranslatorBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanTranslatorBundle', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/TranslatorBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EkinoNewRelicBundle', ($this->targetDirs[2].'/Resources/EkinoNewRelicBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EkinoNewRelicBundle', ($this->targetDirs[3].'/vendor/ekino/newrelic-bundle/Ekino/Bundle/NewRelicBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanRedirectBundle', ($this->targetDirs[2].'/Resources/KunstmaanRedirectBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanRedirectBundle', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/RedirectBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanUserManagementBundle', ($this->targetDirs[2].'/Resources/KunstmaanUserManagementBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanUserManagementBundle', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/UserManagementBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanDashboardBundle', ($this->targetDirs[2].'/Resources/KunstmaanDashboardBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanDashboardBundle', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/DashboardBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanLiveReloadBundle', ($this->targetDirs[2].'/Resources/KunstmaanLiveReloadBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanLiveReloadBundle', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/LiveReloadBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanGeneratorBundle', ($this->targetDirs[2].'/Resources/KunstmaanGeneratorBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanGeneratorBundle', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/GeneratorBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DebugBundle', ($this->targetDirs[2].'/Resources/DebugBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DebugBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanBehatBundle', ($this->targetDirs[2].'/Resources/KunstmaanBehatBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KunstmaanBehatBundle', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/BehatBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WebProfilerBundle', ($this->targetDirs[2].'/Resources/WebProfilerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WebProfilerBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioDistributionBundle', ($this->targetDirs[2].'/Resources/SensioDistributionBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioDistributionBundle', ($this->targetDirs[3].'/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioGeneratorBundle', ($this->targetDirs[2].'/Resources/SensioGeneratorBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioGeneratorBundle', ($this->targetDirs[3].'/vendor/sensio/generator-bundle/Sensio/Bundle/GeneratorBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', ($this->targetDirs[2].'/Resources/views'), '/\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /**
     * Gets the 'assetic.controller' service.
     *
     * @return \Symfony\Bundle\AsseticBundle\Controller\AsseticController A Symfony\Bundle\AsseticBundle\Controller\AsseticController instance.
     */
    protected function getAssetic_ControllerService()
    {
        return new \Symfony\Bundle\AsseticBundle\Controller\AsseticController($this->get('request'), $this->get('assetic.asset_manager'), $this->get('assetic.cache'), false, $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'assetic.filter.cssrewrite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\CssRewriteFilter A Assetic\Filter\CssRewriteFilter instance.
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /**
     * Gets the 'assetic.filter.jpegoptim' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\JpegoptimFilter A Assetic\Filter\JpegoptimFilter instance.
     */
    protected function getAssetic_Filter_JpegoptimService()
    {
        $this->services['assetic.filter.jpegoptim'] = $instance = new \Assetic\Filter\JpegoptimFilter('jpegoptim');

        $instance->setTimeout(NULL);
        $instance->setStripAll(true);
        $instance->setMax(85);

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.jpegtran' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\JpegtranFilter A Assetic\Filter\JpegtranFilter instance.
     */
    protected function getAssetic_Filter_JpegtranService()
    {
        $this->services['assetic.filter.jpegtran'] = $instance = new \Assetic\Filter\JpegtranFilter('jpegtran');

        $instance->setTimeout(NULL);
        $instance->setCopy(NULL);
        $instance->setOptimize(false);
        $instance->setProgressive(true);
        $instance->setRestart(NULL);

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.optipng' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\OptiPngFilter A Assetic\Filter\OptiPngFilter instance.
     */
    protected function getAssetic_Filter_OptipngService()
    {
        $this->services['assetic.filter.optipng'] = $instance = new \Assetic\Filter\OptiPngFilter('optipng');

        $instance->setTimeout(NULL);
        $instance->setLevel(3);

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.scss' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\Sass\ScssFilter A Assetic\Filter\Sass\ScssFilter instance.
     */
    protected function getAssetic_Filter_ScssService()
    {
        $this->services['assetic.filter.scss'] = $instance = new \Assetic\Filter\Sass\ScssFilter('/usr/bin/sass', '/usr/local/rvm/rubies/ruby-1.9.3-p551/bin/ruby');

        $instance->setTimeout(NULL);
        $instance->setStyle(NULL);
        $instance->setCompass(NULL);
        $instance->setLoadPaths(array(0 => ($this->targetDirs[2].'/../web')));
        $instance->setCacheLocation(__DIR__);

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.uglifycss' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\UglifyCssFilter A Assetic\Filter\UglifyCssFilter instance.
     */
    protected function getAssetic_Filter_UglifycssService()
    {
        $this->services['assetic.filter.uglifycss'] = $instance = new \Assetic\Filter\UglifyCssFilter('/usr/local/bin/uglifycss', '/usr/local/bin/node');

        $instance->setTimeout(NULL);
        $instance->setNodePaths(array());
        $instance->setExpandVars(false);
        $instance->setUglyComments(false);
        $instance->setCuteComments(false);

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.uglifyjs2' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\UglifyJs2Filter A Assetic\Filter\UglifyJs2Filter instance.
     */
    protected function getAssetic_Filter_Uglifyjs2Service()
    {
        $this->services['assetic.filter.uglifyjs2'] = $instance = new \Assetic\Filter\UglifyJs2Filter('/usr/local/bin/uglifyjs', '/usr/local/bin/node');

        $instance->setTimeout(NULL);
        $instance->setNodePaths(array());
        $instance->setCompress(true);
        $instance->setBeautify(false);
        $instance->setMangle(false);
        $instance->setScrewIe8(false);
        $instance->setComments(false);
        $instance->setWrap(false);
        $instance->setDefines(array());

        return $instance;
    }

    /**
     * Gets the 'assetic.filter.yui_js' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Filter\Yui\JsCompressorFilter A Assetic\Filter\Yui\JsCompressorFilter instance.
     */
    protected function getAssetic_Filter_YuiJsService()
    {
        $this->services['assetic.filter.yui_js'] = $instance = new \Assetic\Filter\Yui\JsCompressorFilter(($this->targetDirs[2].'/Resources/tools/java/yuicompressor-2.4.8.jar'), '/usr/bin/java');

        $instance->setCharset('UTF-8');
        $instance->setTimeout(NULL);
        $instance->setStackSize(NULL);
        $instance->setNomunge(NULL);
        $instance->setPreserveSemi(NULL);
        $instance->setDisableOptimizations(NULL);
        $instance->setLineBreak(NULL);

        return $instance;
    }

    /**
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance.
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite', 'scss' => 'assetic.filter.scss', 'uglifyjs2' => 'assetic.filter.uglifyjs2', 'uglifycss' => 'assetic.filter.uglifycss', 'yui_js' => 'assetic.filter.yui_js', 'jpegoptim' => 'assetic.filter.jpegoptim', 'optipng' => 'assetic.filter.optipng', 'jpegtran' => 'assetic.filter.jpegtran'));
    }

    /**
     * Gets the 'assetic.request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\EventListener\RequestListener A Symfony\Bundle\AsseticBundle\EventListener\RequestListener instance.
     */
    protected function getAssetic_RequestListenerService()
    {
        return $this->services['assetic.request_listener'] = new \Symfony\Bundle\AsseticBundle\EventListener\RequestListener();
    }

    /**
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance.
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array(0 => $this->get('liip_imagine.cache.clearer')));
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance.
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[2].'/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('cmf_routing.router')), 3 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c), 4 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine'))));
    }

    /**
     * Gets the 'cmf_routing.route_type_form_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Form\Type\RouteTypeType A Symfony\Cmf\Bundle\RoutingBundle\Form\Type\RouteTypeType instance.
     */
    protected function getCmfRouting_RouteTypeFormTypeService()
    {
        return $this->services['cmf_routing.route_type_form_type'] = new \Symfony\Cmf\Bundle\RoutingBundle\Form\Type\RouteTypeType();
    }

    /**
     * Gets the 'cmf_routing.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\Routing\ChainRouter A Symfony\Cmf\Component\Routing\ChainRouter instance.
     */
    protected function getCmfRouting_RouterService()
    {
        $this->services['cmf_routing.router'] = $instance = new \Symfony\Cmf\Component\Routing\ChainRouter($this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setContext($this->get('router.request_context'));
        $instance->add($this->get('router.default'), '100');
        $instance->add($this->get('kunstmaan_node.slugrouter'), 0);
        $instance->add($this->get('kunstmaan_redirect.redirectrouter'), 1);

        return $instance;
    }

    /**
     * Gets the 'data_collector.dump' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector A Symfony\Component\HttpKernel\DataCollector\DumpDataCollector instance.
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL, 'UTF-8', $this->get('request_stack'), NULL);
    }

    /**
     * Gets the 'data_collector.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector A Symfony\Component\Form\Extension\DataCollector\FormDataCollector instance.
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector($this->get('data_collector.form.extractor'));
    }

    /**
     * Gets the 'data_collector.form.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor A Symfony\Component\Form\Extension\DataCollector\FormDataExtractor instance.
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector A Symfony\Component\HttpKernel\DataCollector\RequestDataCollector instance.
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'data_collector.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector instance.
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the 'debug.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver A Symfony\Component\HttpKernel\Controller\TraceableControllerResolver instance.
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver($this->get('controller_resolver'), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance.
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener('', $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL, NULL, true, NULL);
    }

    /**
     * Gets the 'debug.dump_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener A Symfony\Component\HttpKernel\EventListener\DumpListener instance.
     */
    protected function getDebug_DumpListenerService()
    {
        return $this->services['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener($this->get('var_dumper.cloner'), $this->get('data_collector.dump'));
    }

    /**
     * Gets the 'debug.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher A Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher instance.
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'assetic.request_listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'kunstmaan_node.fix_date.listener', 1 => 'onKernelResponse'), -100);
        $instance->addListenerService('kunstmaan_node.adaptForm', array(0 => 'kunstmaan_node.edit_node.listener', 1 => 'adaptForm'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'kunstmaan_node.slug.listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kunstmaan_node.slug.security', array(0 => 'kunstmaan_node.slug.security.listener', 1 => 'onSlugSecurityEvent'), 0);
        $instance->addListenerService('kernel.view', array(0 => 'kunstmaan_node.render.context.listener', 1 => 'onKernelView'), 0);
        $instance->addListenerService('kunstmaan_node.adaptForm', array(0 => 'kunstmaan_seo.node.listener', 1 => 'adaptForm'), 0);
        $instance->addListenerService('kunstmaan_admin.postDeepCloneAndSave', array(0 => 'kunstmaan_seo.clone.listener', 1 => 'postDeepCloneAndSave'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'knp_menu.listener.voters', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('security.interactive_login', array(0 => 'kunstmaan_admin.login.listener', 1 => 'onSecurityInteractivelogin'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'kunstmaan_admin.admin_locale.listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kunstmaan_admin.onDeepCloneAndSave', array(0 => 'kunstmaan_admin.clone.listener', 1 => 'onDeepCloneAndSave'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'kunstmaan_admin.session_security', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'kunstmaan_admin.session_security', 1 => 'onKernelResponse'), -1000);
        $instance->addListenerService('fos_user.change_password.edit.completed', array(0 => 'kunstmaan_admin.password_resetting.listener', 1 => 'onPasswordResettingSuccess'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'kunstmaan_admin.password_check.listener', 1 => 'onKernelRequest'), 1);
        $instance->addListenerService('console.exception', array(0 => 'kunstmaan_admin.consolelogger.listener', 1 => 'onConsoleException'), 0);
        $instance->addListenerService('kunstmaan_node.adaptForm', array(0 => 'kunstmaan_pageparts.edit_node.listener', 1 => 'adaptForm'), 0);
        $instance->addListenerService('kunstmaan_admin.postDeepCloneAndSave', array(0 => 'kunstmaan_pageparts.clone.listener', 1 => 'postDeepCloneAndSave'), 0);
        $instance->addListenerService('kunstmaan_node.configureSubActionMenu', array(0 => 'kunstmaan_form.configure_sub_actions_menu_listener', 1 => 'onSubActionMenuConfigure'), 0);
        $instance->addListenerService('kunstmaan_node.postPublish', array(0 => 'kunstmaan_node_search.node_index_update.listener', 1 => 'onPostPublish'), 0);
        $instance->addListenerService('kunstmaan_node.postPersist', array(0 => 'kunstmaan_node_search.node_index_update.listener', 1 => 'onPostPersist'), 0);
        $instance->addListenerService('kunstmaan_node.postDelete', array(0 => 'kunstmaan_node_search.node_index_update.listener', 1 => 'onPostDelete'), 0);
        $instance->addListenerService('kunstmaan_node.postUnPublish', array(0 => 'kunstmaan_node_search.node_index_update.listener', 1 => 'onPostUnPublish'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'ekino.new_relic.request_listener', 1 => 'onCoreRequest'), 1);
        $instance->addListenerService('kernel.exception', array(0 => 'ekino.new_relic.exception_listener', 1 => 'onKernelException'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'ekino.new_relic.response_listener', 1 => 'onCoreResponse'), -255);
        $instance->addListenerService('console.command', array(0 => 'ekino.new_relic.command_listener', 1 => 'onConsoleCommand'), 0);
        $instance->addListenerService('console.exception', array(0 => 'ekino.new_relic.command_listener', 1 => 'onConsoleException'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('esi_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\EsiListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('fos_http_cache.event_listener.cache_control', 'FOS\\HttpCacheBundle\\EventListener\\CacheControlSubscriber');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('kunstmaan_node.log_page_events.subscriber', 'Kunstmaan\\NodeBundle\\EventListener\\LogPageEventsSubscriber');
        $instance->addSubscriberService('stof_doctrine_extensions.event_listener.locale', 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener');
        $instance->addSubscriberService('stof_doctrine_extensions.event_listener.logger', 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener');
        $instance->addSubscriberService('fos_user.security.interactive_login_listener', 'FOS\\UserBundle\\EventListener\\LastLoginListener');
        $instance->addSubscriberService('fos_user.listener.authentication', 'FOS\\UserBundle\\EventListener\\AuthenticationListener');
        $instance->addSubscriberService('fos_user.listener.flash', 'FOS\\UserBundle\\EventListener\\FlashListener');
        $instance->addSubscriberService('fos_user.listener.resetting', 'FOS\\UserBundle\\EventListener\\ResettingListener');
        $instance->addSubscriberService('kunstmaan_live_reload.script_injector', 'Kunstmaan\\LiveReloadBundle\\EventListener\\ScriptInjectorListener');
        $instance->addSubscriberService('kunstmaan_live_reload.disable_cache', 'Kunstmaan\\LiveReloadBundle\\EventListener\\DisableCacheListener');
        $instance->addSubscriberService('debug.dump_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DumpListener');
        $instance->addSubscriberService('web_profiler.debug_toolbar', 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener');

        return $instance;
    }

    /**
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance.
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the 'debug.templating.engine.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine A Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine instance.
     */
    protected function getDebug_Templating_Engine_PhpService()
    {
        $this->services['debug.templating.engine.php'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('debug.stopwatch'), $this->get('templating.globals'));

        $instance->setCharset('UTF-8');
        $instance->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'stopwatch' => 'templating.helper.stopwatch', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security', 'assetic' => 'assetic.helper.dynamic', 'imagine' => 'liip_imagine.templating.helper'));

        return $instance;
    }

    /**
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance.
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance.
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance.
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $a->addLogger($this->get('doctrine.dbal.logger.profiling.default'));

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        $c = new \Gedmo\Sluggable\SluggableListener();
        $c->setAnnotationReader($this->get('annotation_reader'));

        $d = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $d->addEventSubscriber($this->get('gedmo.listener.tree'));
        $d->addEventSubscriber(new \FOS\UserBundle\Doctrine\Orm\UserListener($this));
        $d->addEventSubscriber($c);
        $d->addEventSubscriber($this->get('stof_doctrine_extensions.listener.loggable'));
        $d->addEventSubscriber($this->get('stof_doctrine_extensions.listener.translatable'));
        $d->addEventListener(array(0 => 'postGenerateSchema'), 'security.acl.dbal.schema_listener');
        $d->addEventListener(array(0 => 'prePersist', 1 => 'preUpdate', 2 => 'postPersist', 3 => 'postUpdate', 4 => 'preRemove'), $this->get('kunstmaan_media.listener.doctrine'));
        $d->addEventListener(array(0 => 'loadClassMetadata'), $this->get('doctrine.orm.default_listeners.attach_entity_listeners'));
        $d->addEventListener(array(0 => 'loadClassMetadata'), $this->get('kunstmaan_node.doctrine_mapping.listener'));
        $d->addEventListener(array(0 => 'onFlush', 1 => 'postFlush', 2 => 'prePersist', 3 => 'preUpdate'), $this->get('kunstmaan_node.nodetranslation.listener'));
        $d->addEventListener(array(0 => 'loadClassMetadata'), $this->get('kunstmaan_admin.doctrine_mapping.listener'));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'kunstmaanbundles', 'user' => 'mydbuser', 'password' => 'mydbpass', 'charset' => 'UTF8', 'driverOptions' => array(), 'serverVersion' => 5.5999999999999996), $b, $d, array());
    }

    /**
     * Gets the 'doctrine.orm.default_entity_listener_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Mapping\DefaultEntityListenerResolver A Doctrine\ORM\Mapping\DefaultEntityListenerResolver instance.
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\ORM\Mapping\DefaultEntityListenerResolver();
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance.
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        $a = $this->get('annotation_reader');

        $b = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => ($this->targetDirs[3].'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Translatable/Entity'), 1 => ($this->targetDirs[3].'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Translator/Entity'), 2 => ($this->targetDirs[3].'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Loggable/Entity'), 3 => ($this->targetDirs[3].'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Tree/Entity'), 4 => ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeBundle/Entity'), 5 => ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/SeoBundle/Entity'), 6 => ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaBundle/Entity'), 7 => ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/AdminBundle/Entity'), 8 => ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/PagePartBundle/Entity'), 9 => ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaPagePartBundle/Entity'), 10 => ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/FormBundle/Entity'), 11 => ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeSearchBundle/Entity'), 12 => ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/SitemapBundle/Entity'), 13 => ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/ArticleBundle/Entity'), 14 => ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/TranslatorBundle/Entity'), 15 => ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/RedirectBundle/Entity'), 16 => ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/DashboardBundle/Entity')));

        $c = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $c->addDriver($b, 'Gedmo\\Translatable\\Entity');
        $c->addDriver($b, 'Gedmo\\Translator\\Entity');
        $c->addDriver($b, 'Gedmo\\Loggable\\Entity');
        $c->addDriver($b, 'Gedmo\\Tree\\Entity');
        $c->addDriver($b, 'Kunstmaan\\NodeBundle\\Entity');
        $c->addDriver($b, 'Kunstmaan\\SeoBundle\\Entity');
        $c->addDriver($b, 'Kunstmaan\\MediaBundle\\Entity');
        $c->addDriver($b, 'Kunstmaan\\AdminBundle\\Entity');
        $c->addDriver($b, 'Kunstmaan\\PagePartBundle\\Entity');
        $c->addDriver($b, 'Kunstmaan\\MediaPagePartBundle\\Entity');
        $c->addDriver($b, 'Kunstmaan\\FormBundle\\Entity');
        $c->addDriver($b, 'Kunstmaan\\NodeSearchBundle\\Entity');
        $c->addDriver($b, 'Kunstmaan\\SitemapBundle\\Entity');
        $c->addDriver($b, 'Kunstmaan\\ArticleBundle\\Entity');
        $c->addDriver($b, 'Kunstmaan\\TranslatorBundle\\Entity');
        $c->addDriver($b, 'Kunstmaan\\RedirectBundle\\Entity');
        $c->addDriver($b, 'Kunstmaan\\DashboardBundle\\Entity');
        $c->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/doctrine-mapping') => 'FOS\\UserBundle\\Model'), '.orm.xml')), 'FOS\\UserBundle\\Model');

        $d = new \Doctrine\ORM\Configuration();
        $d->setEntityNamespaces(array('GedmoTranslatable' => 'Gedmo\\Translatable\\Entity', 'GedmoTranslator' => 'Gedmo\\Translator\\Entity', 'GedmoLoggable' => 'Gedmo\\Loggable\\Entity', 'GedmoTree' => 'Gedmo\\Tree\\Entity', 'KunstmaanNodeBundle' => 'Kunstmaan\\NodeBundle\\Entity', 'KunstmaanSeoBundle' => 'Kunstmaan\\SeoBundle\\Entity', 'KunstmaanMediaBundle' => 'Kunstmaan\\MediaBundle\\Entity', 'KunstmaanAdminBundle' => 'Kunstmaan\\AdminBundle\\Entity', 'KunstmaanPagePartBundle' => 'Kunstmaan\\PagePartBundle\\Entity', 'KunstmaanMediaPagePartBundle' => 'Kunstmaan\\MediaPagePartBundle\\Entity', 'KunstmaanFormBundle' => 'Kunstmaan\\FormBundle\\Entity', 'KunstmaanNodeSearchBundle' => 'Kunstmaan\\NodeSearchBundle\\Entity', 'KunstmaanSitemapBundle' => 'Kunstmaan\\SitemapBundle\\Entity', 'KunstmaanArticleBundle' => 'Kunstmaan\\ArticleBundle\\Entity', 'KunstmaanTranslatorBundle' => 'Kunstmaan\\TranslatorBundle\\Entity', 'KunstmaanRedirectBundle' => 'Kunstmaan\\RedirectBundle\\Entity', 'KunstmaanDashboardBundle' => 'Kunstmaan\\DashboardBundle\\Entity'));
        $d->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $d->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $d->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $d->setMetadataDriverImpl($c);
        $d->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $d->setProxyNamespace('Proxies');
        $d->setAutoGenerateProxyClasses(true);
        $d->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $d->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $d->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());
        $d->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $d->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $d);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.default_listeners.attach_entity_listeners' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener A Doctrine\ORM\Tools\AttachEntityListenersListener instance.
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance.
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance.
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance.
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_39fe4e64bbcf7afae8ccb6f072939bed18ebc2b2e3f262bd9abc0268ef7b3b46');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_query_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_39fe4e64bbcf7afae8ccb6f072939bed18ebc2b2e3f262bd9abc0268ef7b3b46');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_result_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_39fe4e64bbcf7afae8ccb6f072939bed18ebc2b2e3f262bd9abc0268ef7b3b46');

        return $instance;
    }

    /**
     * Gets the 'ekino.new_relic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ekino\Bundle\NewRelicBundle\NewRelic\NewRelic A Ekino\Bundle\NewRelicBundle\NewRelic\NewRelic instance.
     */
    protected function getEkino_NewRelicService()
    {
        return $this->services['ekino.new_relic'] = new \Ekino\Bundle\NewRelicBundle\NewRelic\NewRelic(NULL, false, NULL, false);
    }

    /**
     * Gets the 'ekino.new_relic.command_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ekino\Bundle\NewRelicBundle\Listener\CommandListener A Ekino\Bundle\NewRelicBundle\Listener\CommandListener instance.
     */
    protected function getEkino_NewRelic_CommandListenerService()
    {
        return $this->services['ekino.new_relic.command_listener'] = new \Ekino\Bundle\NewRelicBundle\Listener\CommandListener($this->get('ekino.new_relic'), $this->get('ekino.new_relic.interactor'), array());
    }

    /**
     * Gets the 'ekino.new_relic.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ekino\Bundle\NewRelicBundle\Listener\ExceptionListener A Ekino\Bundle\NewRelicBundle\Listener\ExceptionListener instance.
     */
    protected function getEkino_NewRelic_ExceptionListenerService()
    {
        return $this->services['ekino.new_relic.exception_listener'] = new \Ekino\Bundle\NewRelicBundle\Listener\ExceptionListener($this->get('ekino.new_relic.interactor'));
    }

    /**
     * Gets the 'ekino.new_relic.interactor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ekino\Bundle\NewRelicBundle\NewRelic\BlackholeInteractor A Ekino\Bundle\NewRelicBundle\NewRelic\BlackholeInteractor instance.
     */
    protected function getEkino_NewRelic_InteractorService()
    {
        return $this->services['ekino.new_relic.interactor'] = new \Ekino\Bundle\NewRelicBundle\NewRelic\BlackholeInteractor();
    }

    /**
     * Gets the 'ekino.new_relic.request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ekino\Bundle\NewRelicBundle\Listener\RequestListener A Ekino\Bundle\NewRelicBundle\Listener\RequestListener instance.
     */
    protected function getEkino_NewRelic_RequestListenerService()
    {
        return $this->services['ekino.new_relic.request_listener'] = new \Ekino\Bundle\NewRelicBundle\Listener\RequestListener($this->get('ekino.new_relic'), $this->get('ekino.new_relic.interactor'), array(), array(), $this->get('kunstmaan_newrelic_naming_strategy'), false);
    }

    /**
     * Gets the 'ekino.new_relic.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ekino\Bundle\NewRelicBundle\Listener\ResponseListener A Ekino\Bundle\NewRelicBundle\Listener\ResponseListener instance.
     */
    protected function getEkino_NewRelic_ResponseListenerService()
    {
        return $this->services['ekino.new_relic.response_listener'] = new \Ekino\Bundle\NewRelicBundle\Listener\ResponseListener($this->get('ekino.new_relic'), $this->get('ekino.new_relic.interactor'), false, false, $this->get('ekino.new_relic.twig.new_relic_extension'));
    }

    /**
     * Gets the 'ekino.new_relic.twig.new_relic_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ekino\Bundle\NewRelicBundle\Twig\NewRelicExtension A Ekino\Bundle\NewRelicBundle\Twig\NewRelicExtension instance.
     */
    protected function getEkino_NewRelic_Twig_NewRelicExtensionService()
    {
        return $this->services['ekino.new_relic.twig.new_relic_extension'] = new \Ekino\Bundle\NewRelicBundle\Twig\NewRelicExtension($this->get('ekino.new_relic'), $this->get('ekino.new_relic.interactor'), false);
    }

    /**
     * Gets the 'esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\HttpCache\Esi A Symfony\Component\HttpKernel\HttpCache\Esi instance.
     */
    protected function getEsiService()
    {
        return $this->services['esi'] = new \Symfony\Component\HttpKernel\HttpCache\Esi();
    }

    /**
     * Gets the 'esi_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\EsiListener A Symfony\Component\HttpKernel\EventListener\EsiListener instance.
     */
    protected function getEsiListenerService()
    {
        return $this->services['esi_listener'] = new \Symfony\Component\HttpKernel\EventListener\EsiListener($this->get('esi', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance.
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[2].'/Resources'));
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance.
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'form.csrf_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter A Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter instance.
     */
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter($this->get('security.csrf.token_manager'));
    }

    /**
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance.
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance.
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'button' => 'form.type.button', 'submit' => 'form.type.submit', 'reset' => 'form.type.reset', 'currency' => 'form.type.currency', 'entity' => 'form.type.entity', 'urlchooser' => 'kunstmaan_node.form.type.urlchooser', 'slug' => 'kunstmaan_node.form.type.slug', 'cmf_routing_route_type' => 'cmf_routing.route_type_form_type', 'liip_imagine_image' => 'liip_imagine.form.type.image', 'media' => 'form.type.media', 'iconfont' => 'form.type.iconfont', 'fos_user_username' => 'fos_user.username_form_type', 'fos_user_profile' => 'fos_user.profile.form.type', 'fos_user_registration' => 'fos_user.registration.form.type', 'fos_user_change_password' => 'fos_user.change_password.form.type', 'fos_user_resetting' => 'fos_user.resetting.form.type', 'fos_user_group' => 'fos_user.group.form.type', 'color' => 'kunstmaan_admin.form.type.color', 'range' => 'kunstmaan_admin.form.type.range', 'wysiwyg' => 'kunstmaan_form.type.wysiwyg'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf', 3 => 'form.type_extension.form.data_collector'), 'repeated' => array(0 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy A Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy instance.
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), $this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance.
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance.
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance.
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance.
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }

    /**
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance.
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance.
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance.
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance.
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance.
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance.
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance.
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance.
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance.
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance.
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the 'form.type.iconfont' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\MediaBundle\Form\Type\IconFontType A Kunstmaan\MediaBundle\Form\Type\IconFontType instance.
     */
    protected function getForm_Type_IconfontService()
    {
        return $this->services['form.type.iconfont'] = new \Kunstmaan\MediaBundle\Form\Type\IconFontType($this->get('kunstmaan_media.icon_font_manager'));
    }

    /**
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance.
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance.
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance.
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the 'form.type.media' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\MediaBundle\Form\Type\MediaType A Kunstmaan\MediaBundle\Form\Type\MediaType instance.
     */
    protected function getForm_Type_MediaService()
    {
        return $this->services['form.type.media'] = new \Kunstmaan\MediaBundle\Form\Type\MediaType($this->get('kunstmaan_media.media_manager'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance.
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance.
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance.
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance.
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance.
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance.
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance.
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance.
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance.
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance.
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance.
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance.
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance.
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance.
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance.
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('form.csrf_provider'), true, '_token', $this->get('kunstmaan_translator.service.translator.translator'), 'validators');
    }

    /**
     * Gets the 'form.type_extension.form.data_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension A Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension instance.
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->services['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension($this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance.
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler());
    }

    /**
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance.
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance.
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /**
     * Gets the 'fos_http_cache.event_listener.cache_control' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\HttpCacheBundle\EventListener\CacheControlSubscriber A FOS\HttpCacheBundle\EventListener\CacheControlSubscriber instance.
     */
    protected function getFosHttpCache_EventListener_CacheControlService()
    {
        return $this->services['fos_http_cache.event_listener.cache_control'] = new \FOS\HttpCacheBundle\EventListener\CacheControlSubscriber('X-Cache-Debug');
    }

    /**
     * Gets the 'fos_user.change_password.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance.
     */
    protected function getFosUser_ChangePassword_Form_FactoryService()
    {
        return $this->services['fos_user.change_password.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_change_password_form', 'fos_user_change_password', array(0 => 'ChangePassword', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.change_password.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ChangePasswordFormType A FOS\UserBundle\Form\Type\ChangePasswordFormType instance.
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('Kunstmaan\\AdminBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.group.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance.
     */
    protected function getFosUser_Group_Form_FactoryService()
    {
        return $this->services['fos_user.group.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_group_form', 'fos_user_group', array(0 => 'Registration', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.group.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\GroupFormType A FOS\UserBundle\Form\Type\GroupFormType instance.
     */
    protected function getFosUser_Group_Form_TypeService()
    {
        return $this->services['fos_user.group.form.type'] = new \FOS\UserBundle\Form\Type\GroupFormType('Kunstmaan\\AdminBundle\\Entity\\Group');
    }

    /**
     * Gets the 'fos_user.group_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Doctrine\GroupManager A FOS\UserBundle\Doctrine\GroupManager instance.
     */
    protected function getFosUser_GroupManagerService()
    {
        return $this->services['fos_user.group_manager'] = new \FOS\UserBundle\Doctrine\GroupManager($this->get('fos_user.entity_manager'), 'Kunstmaan\\AdminBundle\\Entity\\Group');
    }

    /**
     * Gets the 'fos_user.listener.authentication' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\AuthenticationListener A FOS\UserBundle\EventListener\AuthenticationListener instance.
     */
    protected function getFosUser_Listener_AuthenticationService()
    {
        return $this->services['fos_user.listener.authentication'] = new \FOS\UserBundle\EventListener\AuthenticationListener($this->get('fos_user.security.login_manager'), 'main');
    }

    /**
     * Gets the 'fos_user.listener.flash' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\FlashListener A FOS\UserBundle\EventListener\FlashListener instance.
     */
    protected function getFosUser_Listener_FlashService()
    {
        return $this->services['fos_user.listener.flash'] = new \FOS\UserBundle\EventListener\FlashListener($this->get('session'), $this->get('translator'));
    }

    /**
     * Gets the 'fos_user.listener.resetting' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\ResettingListener A FOS\UserBundle\EventListener\ResettingListener instance.
     */
    protected function getFosUser_Listener_ResettingService()
    {
        return $this->services['fos_user.listener.resetting'] = new \FOS\UserBundle\EventListener\ResettingListener($this->get('cmf_routing.router'), 86400);
    }

    /**
     * Gets the 'fos_user.mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Mailer\Mailer A FOS\UserBundle\Mailer\Mailer instance.
     */
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\Mailer($this->get('swiftmailer.mailer.default'), $this->get('cmf_routing.router'), $this->get('templating'), array('confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig', 'resetting.template' => 'FOSUserBundle:Resetting:email.txt.twig', 'from_email' => array('confirmation' => array('webmaster@example.com' => 'webmaster'), 'resetting' => array('admin@kunstmaan.be' => 'admin'))));
    }

    /**
     * Gets the 'fos_user.profile.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance.
     */
    protected function getFosUser_Profile_Form_FactoryService()
    {
        return $this->services['fos_user.profile.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_profile_form', 'fos_user_profile', array(0 => 'Profile', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.profile.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ProfileFormType A FOS\UserBundle\Form\Type\ProfileFormType instance.
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('Kunstmaan\\AdminBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.registration.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance.
     */
    protected function getFosUser_Registration_Form_FactoryService()
    {
        return $this->services['fos_user.registration.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_registration_form', 'fos_user_registration', array(0 => 'Registration', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.registration.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\RegistrationFormType A FOS\UserBundle\Form\Type\RegistrationFormType instance.
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('Kunstmaan\\AdminBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.resetting.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance.
     */
    protected function getFosUser_Resetting_Form_FactoryService()
    {
        return $this->services['fos_user.resetting.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_resetting_form', 'fos_user_resetting', array(0 => 'ResetPassword'));
    }

    /**
     * Gets the 'fos_user.resetting.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ResettingFormType A FOS\UserBundle\Form\Type\ResettingFormType instance.
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('Kunstmaan\\AdminBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.security.interactive_login_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\LastLoginListener A FOS\UserBundle\EventListener\LastLoginListener instance.
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\EventListener\LastLoginListener($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.security.login_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Security\LoginManager A FOS\UserBundle\Security\LoginManager instance.
     */
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.token_storage'), $this->get('security.user_checker'), $this->get('security.authentication.session_strategy'), $this);
    }

    /**
     * Gets the 'fos_user.user_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Doctrine\UserManager A FOS\UserBundle\Doctrine\UserManager instance.
     */
    protected function getFosUser_UserManagerService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');

        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager($this->get('security.encoder_factory'), $a, $a, $this->get('fos_user.entity_manager'), 'Kunstmaan\\AdminBundle\\Entity\\User');
    }

    /**
     * Gets the 'fos_user.username_form_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\UsernameFormType A FOS\UserBundle\Form\Type\UsernameFormType instance.
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('fos_user.user_manager')));
    }

    /**
     * Gets the 'fos_user.util.email_canonicalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\Canonicalizer A FOS\UserBundle\Util\Canonicalizer instance.
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /**
     * Gets the 'fos_user.util.token_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\TokenGenerator A FOS\UserBundle\Util\TokenGenerator instance.
     */
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator($this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'fos_user.util.user_manipulator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\UserManipulator A FOS\UserBundle\Util\UserManipulator instance.
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\FragmentHandler A Symfony\Component\HttpKernel\Fragment\FragmentHandler instance.
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\Fragment\FragmentHandler(array(), true, $this->get('request_stack'));

        $instance->addRenderer($this->get('fragment.renderer.inline'));
        $instance->addRenderer($this->get('fragment.renderer.hinclude'));
        $instance->addRenderer($this->get('fragment.renderer.esi'));
        $instance->addRenderer($this->get('fragment.renderer.ssi'));

        return $instance;
    }

    /**
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance.
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /**
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance.
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer($this->get('esi', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer A Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer instance.
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer($this, $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance.
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('debug.event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.ssi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer instance.
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'gedmo.listener.tree' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Gedmo\Tree\TreeListener A Gedmo\Tree\TreeListener instance.
     */
    protected function getGedmo_Listener_TreeService()
    {
        $this->services['gedmo.listener.tree'] = $instance = new \Gedmo\Tree\TreeListener();

        $instance->setAnnotationReader($this->get('annotation_reader'));

        return $instance;
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel A Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('debug.event_dispatcher'), $this, $this->get('debug.controller_resolver'), $this->get('request_stack'));
    }

    /**
     * Gets the 'jms_aop.interceptor_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\AopBundle\Aop\InterceptorLoader A JMS\AopBundle\Aop\InterceptorLoader instance.
     */
    protected function getJmsAop_InterceptorLoaderService()
    {
        return $this->services['jms_aop.interceptor_loader'] = new \JMS\AopBundle\Aop\InterceptorLoader($this, array());
    }

    /**
     * Gets the 'jms_aop.pointcut_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\AopBundle\Aop\PointcutContainer A JMS\AopBundle\Aop\PointcutContainer instance.
     */
    protected function getJmsAop_PointcutContainerService()
    {
        return $this->services['jms_aop.pointcut_container'] = new \JMS\AopBundle\Aop\PointcutContainer(array('security.access.method_interceptor' => $this->get('security.access.pointcut')));
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'knp_gaufrette.filesystem_map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\GaufretteBundle\FilesystemMap A Knp\Bundle\GaufretteBundle\FilesystemMap instance.
     */
    protected function getKnpGaufrette_FilesystemMapService()
    {
        return $this->services['knp_gaufrette.filesystem_map'] = new \Knp\Bundle\GaufretteBundle\FilesystemMap(array());
    }

    /**
     * Gets the 'knp_menu.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\MenuFactory A Knp\Menu\MenuFactory instance.
     */
    protected function getKnpMenu_FactoryService()
    {
        $this->services['knp_menu.factory'] = $instance = new \Knp\Menu\MenuFactory();

        $instance->addExtension(new \Knp\Menu\Integration\Symfony\RoutingExtension($this->get('cmf_routing.router')), 0);

        return $instance;
    }

    /**
     * Gets the 'knp_menu.listener.voters' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener A Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener instance.
     */
    protected function getKnpMenu_Listener_VotersService()
    {
        $this->services['knp_menu.listener.voters'] = $instance = new \Knp\Bundle\MenuBundle\EventListener\VoterInitializerListener();

        $instance->addVoter($this->get('knp_menu.voter.router'));

        return $instance;
    }

    /**
     * Gets the 'knp_menu.matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Matcher\Matcher A Knp\Menu\Matcher\Matcher instance.
     */
    protected function getKnpMenu_MatcherService()
    {
        $this->services['knp_menu.matcher'] = $instance = new \Knp\Menu\Matcher\Matcher();

        $instance->addVoter($this->get('knp_menu.voter.router'));

        return $instance;
    }

    /**
     * Gets the 'knp_menu.menu_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Provider\ChainProvider A Knp\Menu\Provider\ChainProvider instance.
     */
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array('sub_actions' => 'kunstmaan_node.menu.sub_actions', 'actions' => 'kunstmaan_node.menu.actions', 'top_actions' => 'kunstmaan_node.menu.top_actions')), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider($this->get('kernel'), $this, $this->get('knp_menu.factory'))));
    }

    /**
     * Gets the 'knp_menu.renderer.list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Renderer\ListRenderer A Knp\Menu\Renderer\ListRenderer instance.
     */
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer($this->get('knp_menu.matcher'), array(), 'UTF-8');
    }

    /**
     * Gets the 'knp_menu.renderer.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Renderer\TwigRenderer A Knp\Menu\Renderer\TwigRenderer instance.
     */
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($this->get('twig'), 'knp_menu.html.twig', $this->get('knp_menu.matcher'), array());
    }

    /**
     * Gets the 'knp_menu.renderer_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider A Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider instance.
     */
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }

    /**
     * Gets the 'knp_menu.voter.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\Matcher\Voter\RouteVoter A Knp\Menu\Matcher\Voter\RouteVoter instance.
     */
    protected function getKnpMenu_Voter_RouterService()
    {
        return $this->services['knp_menu.voter.router'] = new \Knp\Menu\Matcher\Voter\RouteVoter();
    }

    /**
     * Gets the 'kunstmaan.data_collector.translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\TranslatorBundle\Component\HttpKernel\DataCollector\TranslatorDataCollector A Kunstmaan\TranslatorBundle\Component\HttpKernel\DataCollector\TranslatorDataCollector instance.
     */
    protected function getKunstmaan_DataCollector_TranslatorService()
    {
        $a = new \Kunstmaan\TranslatorBundle\Service\Translator\Translator($this, $this->get('translator.selector'), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json'), 'kunstmaan_translator.service.translator.loader' => array(0 => 'database')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => true), array(0 => $this->get('session')));
        $a->setTranslationRepository($this->get('kunstmaan_translator.repository.translation'));
        $a->setResourceCacher($this->get('kunstmaan_translator.service.translator.resource_cacher'));
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 'lt', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf'), 'af', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 'sr_Latn', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 'el', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 'tr', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 'sv', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 'mn', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 'bg', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 'de', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 'ar', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 'sl', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 'sr_Cyrl', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 'et', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 'sk', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 'cs', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf'), 'cy', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 'zh_CN', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 'fr', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 'es', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 'no', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 'en', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 'th', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf'), 'zh_TW', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 'he', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 'hy', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 'uk', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 'ru', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 'nl', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 'ja', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 'pt_BR', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 'pt', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 'vi', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 'lb', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 'it', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 'ro', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 'gl', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 'da', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 'az', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 'hu', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 'eu', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 'hr', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 'id', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 'ca', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf'), 'nb', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 'pl', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 'fi', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf'), 'sq', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 'fa', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 'lt', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 'sr_Latn', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 'lv', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 'el', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 'sv', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf'), 'mn', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 'bg', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 'de', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 'ar', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 'sl', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 'sr_Cyrl', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf'), 'et', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 'sk', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 'cs', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 'zh_CN', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 'fr', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 'es', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 'en', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 'he', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf'), 'hy', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 'uk', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 'ru', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 'nl', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 'ja', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 'pt_BR', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 'pt', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 'lb', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 'it', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 'ro', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 'gl', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 'da', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 'az', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 'hu', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf'), 'eu', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 'hr', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 'id', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 'ca', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf'), 'nb', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 'pl', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf'), 'fi', 'validators');
        $a->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 'fa', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeBundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeBundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeBundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/SeoBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Symfony/Cmf/Bundle/RoutingBundle/Resources/translations/CmfRoutingBundle.en.xliff'), 'en', 'CmfRoutingBundle');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Symfony/Cmf/Bundle/RoutingBundle/Resources/translations/CmfRoutingBundle.pl.xliff'), 'pl', 'CmfRoutingBundle');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Symfony/Cmf/Bundle/RoutingBundle/Resources/translations/CmfRoutingBundle.nl.xliff'), 'nl', 'CmfRoutingBundle');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Symfony/Cmf/Bundle/RoutingBundle/Resources/translations/CmfRoutingBundle.fr.xliff'), 'fr', 'CmfRoutingBundle');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Symfony/Cmf/Bundle/RoutingBundle/Resources/translations/CmfRoutingBundle.de.xliff'), 'de', 'CmfRoutingBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaBundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaBundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.tr.yml'), 'tr', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bg.yml'), 'bg', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt.yml'), 'pt', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.it.yml'), 'it', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eu.yml'), 'eu', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ru.yml'), 'ru', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nb.yml'), 'nb', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nb.yml'), 'nb', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sl.yml'), 'sl', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.uk.yml'), 'uk', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.cs.yml'), 'cs', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.th.yml'), 'th', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hu.yml'), 'hu', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ro.yml'), 'ro', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.he.yml'), 'he', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fi.yml'), 'fi', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pl.yml'), 'pl', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fr.yml'), 'fr', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.th.yml'), 'th', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.cs.yml'), 'cs', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fi.yml'), 'fi', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.de.yml'), 'de', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ru.yml'), 'ru', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt_BR.yml'), 'pt_BR', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ja.yml'), 'ja', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ca.yml'), 'ca', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sk.yml'), 'sk', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fa.yml'), 'fa', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ar.yml'), 'ar', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pl.yml'), 'pl', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.zh_CN.yml'), 'zh_CN', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sv.yml'), 'sv', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hr.yml'), 'hr', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt_BR.yml'), 'pt_BR', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt.yml'), 'pt', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fr.yml'), 'fr', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bg.yml'), 'bg', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.tr.yml'), 'tr', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sr_Latn.yml'), 'sr_Latn', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ca.yml'), 'ca', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.id.yml'), 'id', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lv.yml'), 'lv', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nl.yml'), 'nl', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ar.yml'), 'ar', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.da.yml'), 'da', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ja.yml'), 'ja', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fa.yml'), 'fa', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ro.yml'), 'ro', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lt.yml'), 'lt', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.es.yml'), 'es', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.uk.yml'), 'uk', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sr_Latn.yml'), 'sr_Latn', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lv.yml'), 'lv', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lt.yml'), 'lt', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.vi.yml'), 'vi', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.id.yml'), 'id', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.da.yml'), 'da', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.el.yml'), 'el', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sl.yml'), 'sl', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hr.yml'), 'hr', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nl.yml'), 'nl', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lb.yml'), 'lb', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.vi.yml'), 'vi', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sk.yml'), 'sk', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.el.yml'), 'el', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.en.yml'), 'en', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.et.yml'), 'et', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.en.yml'), 'en', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.de.yml'), 'de', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sv.yml'), 'sv', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.es.yml'), 'es', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.zh_CN.yml'), 'zh_CN', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hu.yml'), 'hu', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.it.yml'), 'it', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eu.yml'), 'eu', 'FOSUserBundle');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.he.yml'), 'he', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/AdminBundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/AdminBundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/AdminBundle/Resources/translations/validators.en.yml'), 'en', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/AdminBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/AdminBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/AdminBundle/Resources/translations/validators.it.yml'), 'it', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/AdminBundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/PagePartBundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/PagePartBundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/PagePartBundle/Resources/translations/validators.en.yml'), 'en', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/PagePartBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/PagePartBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/PagePartBundle/Resources/translations/validators.it.yml'), 'it', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/PagePartBundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaPagePartBundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaPagePartBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaPagePartBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaPagePartBundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/FormBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/FormBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.fr.xliff'), 'fr', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.pl.xliff'), 'pl', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.es.xliff'), 'es', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.ua.xliff'), 'ua', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.sr_Latn.xliff'), 'sr_Latn', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.it.xliff'), 'it', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.cs.xliff'), 'cs', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.sl.xliff'), 'sl', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.fa.xliff'), 'fa', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.ro.xliff'), 'ro', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.ar.xliff'), 'ar', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.ru.xliff'), 'ru', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.sk.xliff'), 'sk', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.de.xliff'), 'de', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.sr_Cyrl.xliff'), 'sr_Cyrl', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.tr.xliff'), 'tr', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.az.xliff'), 'az', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.zh_CN.xliff'), 'zh_CN', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.pt.xliff'), 'pt', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.da.xliff'), 'da', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.th.xliff'), 'th', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.nl.xliff'), 'nl', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.ca.xliff'), 'ca', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.en.xliff'), 'en', 'pagerfanta');
        $a->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.hr.xliff'), 'hr', 'pagerfanta');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeSearchBundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeSearchBundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeSearchBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeSearchBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/TranslatorBundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/TranslatorBundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/TranslatorBundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/TranslatorBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/TranslatorBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/TranslatorBundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/UserManagementBundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/UserManagementBundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/UserManagementBundle/Resources/translations/validators.en.yml'), 'en', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/UserManagementBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/UserManagementBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/UserManagementBundle/Resources/translations/validators.it.yml'), 'it', 'validators');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/UserManagementBundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/DashboardBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $a->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/DashboardBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $a->addDatabaseResources();
        $a->setFallbackLocales(array(0 => 'en'));
        $a->setFallbackLocales(array(0 => 'en'));

        return $this->services['kunstmaan.data_collector.translator'] = new \Kunstmaan\TranslatorBundle\Component\HttpKernel\DataCollector\TranslatorDataCollector($a);
    }

    /**
     * Gets the 'kunstmaan_admin.acl.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\Helper\Security\Acl\AclHelper A Kunstmaan\AdminBundle\Helper\Security\Acl\AclHelper instance.
     */
    protected function getKunstmaanAdmin_Acl_HelperService()
    {
        return $this->services['kunstmaan_admin.acl.helper'] = new \Kunstmaan\AdminBundle\Helper\Security\Acl\AclHelper($this->get('doctrine.orm.default_entity_manager'), $this->get('security.context'), $this->get('security.role_hierarchy'));
    }

    /**
     * Gets the 'kunstmaan_admin.acl.native.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\Helper\Security\Acl\AclNativeHelper A Kunstmaan\AdminBundle\Helper\Security\Acl\AclNativeHelper instance.
     */
    protected function getKunstmaanAdmin_Acl_Native_HelperService()
    {
        return $this->services['kunstmaan_admin.acl.native.helper'] = new \Kunstmaan\AdminBundle\Helper\Security\Acl\AclNativeHelper($this->get('doctrine.orm.default_entity_manager'), $this->get('security.context'), $this->get('security.role_hierarchy'));
    }

    /**
     * Gets the 'kunstmaan_admin.admin_locale.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\EventListener\AdminLocaleListener A Kunstmaan\AdminBundle\EventListener\AdminLocaleListener instance.
     */
    protected function getKunstmaanAdmin_AdminLocale_ListenerService()
    {
        return $this->services['kunstmaan_admin.admin_locale.listener'] = new \Kunstmaan\AdminBundle\EventListener\AdminLocaleListener($this->get('security.context'), $this->get('translator'), 'en', 'main');
    }

    /**
     * Gets the 'kunstmaan_admin.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\FilesystemCache A Doctrine\Common\Cache\FilesystemCache instance.
     */
    protected function getKunstmaanAdmin_CacheService()
    {
        return $this->services['kunstmaan_admin.cache'] = new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/fcache'));
    }

    /**
     * Gets the 'kunstmaan_admin.clone.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\Helper\CloneHelper A Kunstmaan\AdminBundle\Helper\CloneHelper instance.
     */
    protected function getKunstmaanAdmin_Clone_HelperService()
    {
        return $this->services['kunstmaan_admin.clone.helper'] = new \Kunstmaan\AdminBundle\Helper\CloneHelper($this->get('doctrine.orm.default_entity_manager'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'kunstmaan_admin.clone.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\EventListener\CloneListener A Kunstmaan\AdminBundle\EventListener\CloneListener instance.
     */
    protected function getKunstmaanAdmin_Clone_ListenerService()
    {
        return $this->services['kunstmaan_admin.clone.listener'] = new \Kunstmaan\AdminBundle\EventListener\CloneListener();
    }

    /**
     * Gets the 'kunstmaan_admin.consolelogger.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\EventListener\ConsoleExceptionListener A Kunstmaan\AdminBundle\EventListener\ConsoleExceptionListener instance.
     */
    protected function getKunstmaanAdmin_Consolelogger_ListenerService()
    {
        return $this->services['kunstmaan_admin.consolelogger.listener'] = new \Kunstmaan\AdminBundle\EventListener\ConsoleExceptionListener($this->get('logger'));
    }

    /**
     * Gets the 'kunstmaan_admin.doctrine_mapping.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\EventListener\MappingListener A Kunstmaan\AdminBundle\EventListener\MappingListener instance.
     */
    protected function getKunstmaanAdmin_DoctrineMapping_ListenerService()
    {
        return $this->services['kunstmaan_admin.doctrine_mapping.listener'] = new \Kunstmaan\AdminBundle\EventListener\MappingListener('Kunstmaan\\AdminBundle\\Entity\\User');
    }

    /**
     * Gets the 'kunstmaan_admin.form.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\Helper\FormHelper A Kunstmaan\AdminBundle\Helper\FormHelper instance.
     */
    protected function getKunstmaanAdmin_Form_HelperService()
    {
        return $this->services['kunstmaan_admin.form.helper'] = new \Kunstmaan\AdminBundle\Helper\FormHelper();
    }

    /**
     * Gets the 'kunstmaan_admin.form.type.color' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\Form\ColorType A Kunstmaan\AdminBundle\Form\ColorType instance.
     */
    protected function getKunstmaanAdmin_Form_Type_ColorService()
    {
        return $this->services['kunstmaan_admin.form.type.color'] = new \Kunstmaan\AdminBundle\Form\ColorType();
    }

    /**
     * Gets the 'kunstmaan_admin.form.type.range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\Form\RangeType A Kunstmaan\AdminBundle\Form\RangeType instance.
     */
    protected function getKunstmaanAdmin_Form_Type_RangeService()
    {
        return $this->services['kunstmaan_admin.form.type.range'] = new \Kunstmaan\AdminBundle\Form\RangeType();
    }

    /**
     * Gets the 'kunstmaan_admin.formtools.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\Twig\FormToolsExtension A Kunstmaan\AdminBundle\Twig\FormToolsExtension instance.
     */
    protected function getKunstmaanAdmin_Formtools_Twig_ExtensionService()
    {
        return $this->services['kunstmaan_admin.formtools.twig.extension'] = new \Kunstmaan\AdminBundle\Twig\FormToolsExtension($this->get('kunstmaan_admin.form.helper'));
    }

    /**
     * Gets the 'kunstmaan_admin.locale.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\Twig\DateByLocaleExtension A Kunstmaan\AdminBundle\Twig\DateByLocaleExtension instance.
     */
    protected function getKunstmaanAdmin_Locale_Twig_ExtensionService()
    {
        return $this->services['kunstmaan_admin.locale.twig.extension'] = new \Kunstmaan\AdminBundle\Twig\DateByLocaleExtension();
    }

    /**
     * Gets the 'kunstmaan_admin.localeswitcher.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\Twig\LocaleSwitcherTwigExtension A Kunstmaan\AdminBundle\Twig\LocaleSwitcherTwigExtension instance.
     */
    protected function getKunstmaanAdmin_Localeswitcher_Twig_ExtensionService()
    {
        return $this->services['kunstmaan_admin.localeswitcher.twig.extension'] = new \Kunstmaan\AdminBundle\Twig\LocaleSwitcherTwigExtension();
    }

    /**
     * Gets the 'kunstmaan_admin.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getKunstmaanAdmin_LoggerService()
    {
        $this->services['kunstmaan_admin.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('kunstmaan');

        $instance->pushHandler($this->get('kunstmaan_admin.logger.handler'));
        $instance->pushProcessor(array(0 => $this->get('kunstmaan_admin.logger.processor.user'), 1 => 'processRecord'));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_admin.logger.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\RotatingFileHandler A Monolog\Handler\RotatingFileHandler instance.
     */
    protected function getKunstmaanAdmin_Logger_HandlerService()
    {
        return $this->services['kunstmaan_admin.logger.handler'] = new \Monolog\Handler\RotatingFileHandler(($this->targetDirs[2].'/logs/kunstmaan_dev.log'), 10);
    }

    /**
     * Gets the 'kunstmaan_admin.logger.processor.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\Helper\UserProcessor A Kunstmaan\AdminBundle\Helper\UserProcessor instance.
     */
    protected function getKunstmaanAdmin_Logger_Processor_UserService()
    {
        return $this->services['kunstmaan_admin.logger.processor.user'] = new \Kunstmaan\AdminBundle\Helper\UserProcessor($this);
    }

    /**
     * Gets the 'kunstmaan_admin.login.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\EventListener\LoginListener A Kunstmaan\AdminBundle\EventListener\LoginListener instance.
     */
    protected function getKunstmaanAdmin_Login_ListenerService()
    {
        return $this->services['kunstmaan_admin.login.listener'] = new \Kunstmaan\AdminBundle\EventListener\LoginListener($this->get('kunstmaan_admin.logger'), $this->get('kunstmaan_admin.versionchecker'));
    }

    /**
     * Gets the 'kunstmaan_admin.menu.adaptor.modules' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\Helper\Menu\ModulesMenuAdaptor A Kunstmaan\AdminBundle\Helper\Menu\ModulesMenuAdaptor instance.
     */
    protected function getKunstmaanAdmin_Menu_Adaptor_ModulesService()
    {
        return $this->services['kunstmaan_admin.menu.adaptor.modules'] = new \Kunstmaan\AdminBundle\Helper\Menu\ModulesMenuAdaptor();
    }

    /**
     * Gets the 'kunstmaan_admin.menu.adaptor.settings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\Helper\Menu\SettingsMenuAdaptor A Kunstmaan\AdminBundle\Helper\Menu\SettingsMenuAdaptor instance.
     */
    protected function getKunstmaanAdmin_Menu_Adaptor_SettingsService()
    {
        return $this->services['kunstmaan_admin.menu.adaptor.settings'] = new \Kunstmaan\AdminBundle\Helper\Menu\SettingsMenuAdaptor($this);
    }

    /**
     * Gets the 'kunstmaan_admin.menu.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\Twig\MenuTwigExtension A Kunstmaan\AdminBundle\Twig\MenuTwigExtension instance.
     */
    protected function getKunstmaanAdmin_Menu_Twig_ExtensionService()
    {
        return $this->services['kunstmaan_admin.menu.twig.extension'] = new \Kunstmaan\AdminBundle\Twig\MenuTwigExtension($this->get('kunstmaan_admin.menubuilder'));
    }

    /**
     * Gets the 'kunstmaan_admin.menubuilder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\Helper\Menu\MenuBuilder A Kunstmaan\AdminBundle\Helper\Menu\MenuBuilder instance.
     */
    protected function getKunstmaanAdmin_MenubuilderService()
    {
        $this->services['kunstmaan_admin.menubuilder'] = $instance = new \Kunstmaan\AdminBundle\Helper\Menu\MenuBuilder($this->get('translator'), $this);

        $instance->addAdaptMenu($this->get('kunstmaan_node.menu.adaptor.pages'), 0);
        $instance->addAdaptMenu($this->get('kunstmaanseobundle.seo_management_menu_adaptor'), 0);
        $instance->addAdaptMenu($this->get('kunstmaan_media.menu.adaptor'), 0);
        $instance->addAdaptMenu($this->get('kunstmaan_admin.menu.adaptor.modules'), 0);
        $instance->addAdaptMenu($this->get('kunstmaan_admin.menu.adaptor.settings'), 0);
        $instance->addAdaptMenu($this->get('kunstmaan_form.menu.adaptor.forms'), 0);
        $instance->addAdaptMenu($this->get('kunstmaan_translator.menu.adaptor'), 0);
        $instance->addAdaptMenu($this->get('kunstmaan_redirect.menu.adaptor'), 0);
        $instance->addAdaptMenu($this->get('kunstmaan_user_management.menu.adaptor'), 100);

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_admin.password_check.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\EventListener\PasswordCheckListener A Kunstmaan\AdminBundle\EventListener\PasswordCheckListener instance.
     */
    protected function getKunstmaanAdmin_PasswordCheck_ListenerService()
    {
        return $this->services['kunstmaan_admin.password_check.listener'] = new \Kunstmaan\AdminBundle\EventListener\PasswordCheckListener($this->get('security.authorization_checker'), $this->get('security.token_storage'), $this->get('router.default'), $this->get('session'));
    }

    /**
     * Gets the 'kunstmaan_admin.password_resetting.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\EventListener\PasswordResettingListener A Kunstmaan\AdminBundle\EventListener\PasswordResettingListener instance.
     */
    protected function getKunstmaanAdmin_PasswordResetting_ListenerService()
    {
        return $this->services['kunstmaan_admin.password_resetting.listener'] = new \Kunstmaan\AdminBundle\EventListener\PasswordResettingListener($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'kunstmaan_admin.permission_creator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\Helper\Creators\ACLPermissionCreator A Kunstmaan\AdminBundle\Helper\Creators\ACLPermissionCreator instance.
     */
    protected function getKunstmaanAdmin_PermissionCreatorService()
    {
        return $this->services['kunstmaan_admin.permission_creator'] = new \Kunstmaan\AdminBundle\Helper\Creators\ACLPermissionCreator($this->get('security.acl.provider'), $this->get('security.acl.object_identity_retrieval_strategy'));
    }

    /**
     * Gets the 'kunstmaan_admin.permissionadmin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\Helper\Security\Acl\Permission\PermissionAdmin A Kunstmaan\AdminBundle\Helper\Security\Acl\Permission\PermissionAdmin instance.
     */
    protected function getKunstmaanAdmin_PermissionadminService()
    {
        return $this->services['kunstmaan_admin.permissionadmin'] = new \Kunstmaan\AdminBundle\Helper\Security\Acl\Permission\PermissionAdmin($this->get('doctrine.orm.default_entity_manager'), $this->get('security.context'), $this->get('security.acl.provider'), $this->get('security.acl.object_identity_retrieval_strategy'), $this->get('debug.event_dispatcher'), $this->get('kunstmaan_utilities.shell'), $this->get('kernel'));
    }

    /**
     * Gets the 'kunstmaan_admin.permissions.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\Twig\AdminPermissionsTwigExtension A Kunstmaan\AdminBundle\Twig\AdminPermissionsTwigExtension instance.
     */
    protected function getKunstmaanAdmin_Permissions_Twig_ExtensionService()
    {
        return $this->services['kunstmaan_admin.permissions.twig.extension'] = new \Kunstmaan\AdminBundle\Twig\AdminPermissionsTwigExtension();
    }

    /**
     * Gets the 'kunstmaan_admin.session_security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\EventListener\SessionSecurityListener A Kunstmaan\AdminBundle\EventListener\SessionSecurityListener instance.
     */
    protected function getKunstmaanAdmin_SessionSecurityService()
    {
        return $this->services['kunstmaan_admin.session_security'] = new \Kunstmaan\AdminBundle\EventListener\SessionSecurityListener(false, false, $this->get('logger'));
    }

    /**
     * Gets the 'kunstmaan_admin.tabs.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\Twig\TabsTwigExtension A Kunstmaan\AdminBundle\Twig\TabsTwigExtension instance.
     */
    protected function getKunstmaanAdmin_Tabs_Twig_ExtensionService()
    {
        return $this->services['kunstmaan_admin.tabs.twig.extension'] = new \Kunstmaan\AdminBundle\Twig\TabsTwigExtension();
    }

    /**
     * Gets the 'kunstmaan_admin.versionchecker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\Helper\VersionCheck\VersionChecker A Kunstmaan\AdminBundle\Helper\VersionCheck\VersionChecker instance.
     */
    protected function getKunstmaanAdmin_VersioncheckerService()
    {
        return $this->services['kunstmaan_admin.versionchecker'] = new \Kunstmaan\AdminBundle\Helper\VersionCheck\VersionChecker($this, $this->get('kunstmaan_admin.cache'));
    }

    /**
     * Gets the 'kunstmaan_adminlist.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminListBundle\AdminList\AdminListFactory A Kunstmaan\AdminListBundle\AdminList\AdminListFactory instance.
     */
    protected function getKunstmaanAdminlist_FactoryService()
    {
        return $this->services['kunstmaan_adminlist.factory'] = new \Kunstmaan\AdminListBundle\AdminList\AdminListFactory();
    }

    /**
     * Gets the 'kunstmaan_adminlist.service.export' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminListBundle\Service\ExportService A Kunstmaan\AdminListBundle\Service\ExportService instance.
     */
    protected function getKunstmaanAdminlist_Service_ExportService()
    {
        $this->services['kunstmaan_adminlist.service.export'] = $instance = new \Kunstmaan\AdminListBundle\Service\ExportService();

        $instance->setRenderer($this->get('templating'));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_adminlist.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminListBundle\Twig\AdminListTwigExtension A Kunstmaan\AdminListBundle\Twig\AdminListTwigExtension instance.
     */
    protected function getKunstmaanAdminlist_Twig_ExtensionService()
    {
        return $this->services['kunstmaan_adminlist.twig.extension'] = new \Kunstmaan\AdminListBundle\Twig\AdminListTwigExtension($this);
    }

    /**
     * Gets the 'kunstmaan_dashboard.googleclient' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Google_Client A Google_Client instance.
     */
    protected function getKunstmaanDashboard_GoogleclientService()
    {
        $this->services['kunstmaan_dashboard.googleclient'] = $instance = new \Google_Client();

        $instance->setApplicationName('Kuma Analytics Dashboard');
        $instance->setClientId('More info at http://bundles.kunstmaan.be/documentation/cookbook/google-analytics-dashboard');
        $instance->setClientSecret(NULL);
        $instance->setDeveloperKey(NULL);
        $instance->setScopes('https://www.googleapis.com/auth/analytics.readonly');
        $instance->setUseObjects(true);

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_dashboard.helper.google.analytics.config' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\DashboardBundle\Helper\Google\Analytics\ConfigHelper A Kunstmaan\DashboardBundle\Helper\Google\Analytics\ConfigHelper instance.
     */
    protected function getKunstmaanDashboard_Helper_Google_Analytics_ConfigService()
    {
        return $this->services['kunstmaan_dashboard.helper.google.analytics.config'] = new \Kunstmaan\DashboardBundle\Helper\Google\Analytics\ConfigHelper($this->get('kunstmaan_dashboard.helper.google.analytics.service'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'kunstmaan_dashboard.helper.google.analytics.query' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\DashboardBundle\Helper\Google\Analytics\QueryHelper A Kunstmaan\DashboardBundle\Helper\Google\Analytics\QueryHelper instance.
     */
    protected function getKunstmaanDashboard_Helper_Google_Analytics_QueryService()
    {
        return $this->services['kunstmaan_dashboard.helper.google.analytics.query'] = new \Kunstmaan\DashboardBundle\Helper\Google\Analytics\QueryHelper($this->get('kunstmaan_dashboard.helper.google.analytics.service'), $this->get('kunstmaan_dashboard.helper.google.analytics.config'));
    }

    /**
     * Gets the 'kunstmaan_dashboard.helper.google.analytics.service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\DashboardBundle\Helper\Google\Analytics\ServiceHelper A Kunstmaan\DashboardBundle\Helper\Google\Analytics\ServiceHelper instance.
     */
    protected function getKunstmaanDashboard_Helper_Google_Analytics_ServiceService()
    {
        return $this->services['kunstmaan_dashboard.helper.google.analytics.service'] = new \Kunstmaan\DashboardBundle\Helper\Google\Analytics\ServiceHelper($this->get('kunstmaan_dashboard.helper.google.client'));
    }

    /**
     * Gets the 'kunstmaan_dashboard.helper.google.client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\DashboardBundle\Helper\Google\ClientHelper A Kunstmaan\DashboardBundle\Helper\Google\ClientHelper instance.
     */
    protected function getKunstmaanDashboard_Helper_Google_ClientService()
    {
        return $this->services['kunstmaan_dashboard.helper.google.client'] = new \Kunstmaan\DashboardBundle\Helper\Google\ClientHelper($this->get('kunstmaan_dashboard.googleclient'), $this->get('cmf_routing.router'), 'KunstmaanDashboardBundle_setToken');
    }

    /**
     * Gets the 'kunstmaan_dashboard.manager.widgets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\DashboardBundle\Manager\WidgetManager A Kunstmaan\DashboardBundle\Manager\WidgetManager instance.
     */
    protected function getKunstmaanDashboard_Manager_WidgetsService()
    {
        $this->services['kunstmaan_dashboard.manager.widgets'] = $instance = new \Kunstmaan\DashboardBundle\Manager\WidgetManager();

        $instance->addWidget($this->get('kunstmaan_dashboard.widget.googleanalytics'));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_dashboard.widget.googleanalytics' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\DashboardBundle\Widget\DashboardWidget A Kunstmaan\DashboardBundle\Widget\DashboardWidget instance.
     */
    protected function getKunstmaanDashboard_Widget_GoogleanalyticsService()
    {
        return $this->services['kunstmaan_dashboard.widget.googleanalytics'] = new \Kunstmaan\DashboardBundle\Widget\DashboardWidget('Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsDataCollectCommand', 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsController', $this);
    }

    /**
     * Gets the 'kunstmaan_form.configure_sub_actions_menu_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\FormBundle\EventListener\ConfigureActionsMenuListener A Kunstmaan\FormBundle\EventListener\ConfigureActionsMenuListener instance.
     */
    protected function getKunstmaanForm_ConfigureSubActionsMenuListenerService()
    {
        return $this->services['kunstmaan_form.configure_sub_actions_menu_listener'] = new \Kunstmaan\FormBundle\EventListener\ConfigureActionsMenuListener($this->get('doctrine.orm.default_entity_manager'), $this->get('cmf_routing.router'));
    }

    /**
     * Gets the 'kunstmaan_form.form_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\FormBundle\Helper\FormHandler A Kunstmaan\FormBundle\Helper\FormHandler instance.
     */
    protected function getKunstmaanForm_FormHandlerService()
    {
        return $this->services['kunstmaan_form.form_handler'] = new \Kunstmaan\FormBundle\Helper\FormHandler($this);
    }

    /**
     * Gets the 'kunstmaan_form.form_mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\FormBundle\Helper\FormMailer A Kunstmaan\FormBundle\Helper\FormMailer instance.
     */
    protected function getKunstmaanForm_FormMailerService()
    {
        return $this->services['kunstmaan_form.form_mailer'] = new \Kunstmaan\FormBundle\Helper\FormMailer($this->get('swiftmailer.mailer.default'), $this->get('templating'), $this);
    }

    /**
     * Gets the 'kunstmaan_form.menu.adaptor.forms' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\FormBundle\Helper\Menu\FormSubmissionsMenuAdaptor A Kunstmaan\FormBundle\Helper\Menu\FormSubmissionsMenuAdaptor instance.
     */
    protected function getKunstmaanForm_Menu_Adaptor_FormsService()
    {
        return $this->services['kunstmaan_form.menu.adaptor.forms'] = new \Kunstmaan\FormBundle\Helper\Menu\FormSubmissionsMenuAdaptor();
    }

    /**
     * Gets the 'kunstmaan_form.type.wysiwyg' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\AdminBundle\Form\WysiwygType A Kunstmaan\AdminBundle\Form\WysiwygType instance.
     */
    protected function getKunstmaanForm_Type_WysiwygService()
    {
        return $this->services['kunstmaan_form.type.wysiwyg'] = new \Kunstmaan\AdminBundle\Form\WysiwygType();
    }

    /**
     * Gets the 'kunstmaan_live_reload.disable_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\LiveReloadBundle\EventListener\DisableCacheListener A Kunstmaan\LiveReloadBundle\EventListener\DisableCacheListener instance.
     */
    protected function getKunstmaanLiveReload_DisableCacheService()
    {
        return $this->services['kunstmaan_live_reload.disable_cache'] = new \Kunstmaan\LiveReloadBundle\EventListener\DisableCacheListener();
    }

    /**
     * Gets the 'kunstmaan_live_reload.script_injector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\LiveReloadBundle\EventListener\ScriptInjectorListener A Kunstmaan\LiveReloadBundle\EventListener\ScriptInjectorListener instance.
     */
    protected function getKunstmaanLiveReload_ScriptInjectorService()
    {
        return $this->services['kunstmaan_live_reload.script_injector'] = new \Kunstmaan\LiveReloadBundle\EventListener\ScriptInjectorListener(new \Guzzle\Http\Client('http://localhost:35729/'), true);
    }

    /**
     * Gets the 'kunstmaan_logging_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Formatter\LineFormatter A Monolog\Formatter\LineFormatter instance.
     */
    protected function getKunstmaanLoggingFormatterService()
    {
        return $this->services['kunstmaan_logging_formatter'] = new \Monolog\Formatter\LineFormatter();
    }

    /**
     * Gets the 'kunstmaan_logging_introspection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Processor\IntrospectionProcessor A Monolog\Processor\IntrospectionProcessor instance.
     */
    protected function getKunstmaanLoggingIntrospectionService()
    {
        return $this->services['kunstmaan_logging_introspection'] = new \Monolog\Processor\IntrospectionProcessor();
    }

    /**
     * Gets the 'kunstmaan_logging_web' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\WebProcessor A Symfony\Bridge\Monolog\Processor\WebProcessor instance.
     */
    protected function getKunstmaanLoggingWebService()
    {
        return $this->services['kunstmaan_logging_web'] = new \Symfony\Bridge\Monolog\Processor\WebProcessor();
    }

    /**
     * Gets the 'kunstmaan_media.command.migratename' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\MediaBundle\Command\MigrateNameCommand A Kunstmaan\MediaBundle\Command\MigrateNameCommand instance.
     */
    protected function getKunstmaanMedia_Command_MigratenameService()
    {
        $this->services['kunstmaan_media.command.migratename'] = $instance = new \Kunstmaan\MediaBundle\Command\MigrateNameCommand();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_media.command.rebuildfoldertree' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\MediaBundle\Command\RebuildFolderTreeCommand A Kunstmaan\MediaBundle\Command\RebuildFolderTreeCommand instance.
     */
    protected function getKunstmaanMedia_Command_RebuildfoldertreeService()
    {
        $this->services['kunstmaan_media.command.rebuildfoldertree'] = $instance = new \Kunstmaan\MediaBundle\Command\RebuildFolderTreeCommand();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_media.folder_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\MediaBundle\Helper\FolderManager A Kunstmaan\MediaBundle\Helper\FolderManager instance.
     */
    protected function getKunstmaanMedia_FolderManagerService()
    {
        return $this->services['kunstmaan_media.folder_manager'] = new \Kunstmaan\MediaBundle\Helper\FolderManager($this->get('kunstmaan_media.repository.folder'));
    }

    /**
     * Gets the 'kunstmaan_media.icon_font.default_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\MediaBundle\Helper\IconFont\DefaultIconFontLoader A Kunstmaan\MediaBundle\Helper\IconFont\DefaultIconFontLoader instance.
     */
    protected function getKunstmaanMedia_IconFont_DefaultLoaderService()
    {
        return $this->services['kunstmaan_media.icon_font.default_loader'] = new \Kunstmaan\MediaBundle\Helper\IconFont\DefaultIconFontLoader($this->get('kernel'));
    }

    /**
     * Gets the 'kunstmaan_media.icon_font_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\MediaBundle\Helper\IconFont\IconFontManager A Kunstmaan\MediaBundle\Helper\IconFont\IconFontManager instance.
     */
    protected function getKunstmaanMedia_IconFontManagerService()
    {
        $a = $this->get('kunstmaan_media.icon_font.default_loader');

        $this->services['kunstmaan_media.icon_font_manager'] = $instance = new \Kunstmaan\MediaBundle\Helper\IconFont\IconFontManager();

        $instance->setDefaultLoader($a);
        $instance->addLoader($a, 'kunstmaan_media.icon_font.default_loader');

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_media.listener.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\MediaBundle\EventListener\DoctrineMediaListener A Kunstmaan\MediaBundle\EventListener\DoctrineMediaListener instance.
     */
    protected function getKunstmaanMedia_Listener_DoctrineService()
    {
        return $this->services['kunstmaan_media.listener.doctrine'] = new \Kunstmaan\MediaBundle\EventListener\DoctrineMediaListener($this->get('kunstmaan_media.media_manager'));
    }

    /**
     * Gets the 'kunstmaan_media.media_creator_service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\MediaBundle\Helper\Services\MediaCreatorService A Kunstmaan\MediaBundle\Helper\Services\MediaCreatorService instance.
     */
    protected function getKunstmaanMedia_MediaCreatorServiceService()
    {
        return $this->services['kunstmaan_media.media_creator_service'] = new \Kunstmaan\MediaBundle\Helper\Services\MediaCreatorService($this);
    }

    /**
     * Gets the 'kunstmaan_media.media_handlers.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\MediaBundle\Helper\File\FileHandler A Kunstmaan\MediaBundle\Helper\File\FileHandler instance.
     */
    protected function getKunstmaanMedia_MediaHandlers_FileService()
    {
        $this->services['kunstmaan_media.media_handlers.file'] = $instance = new \Kunstmaan\MediaBundle\Helper\File\FileHandler(0, $this->get('kunstmaan_media.mimetype_guesser.factory'));

        $instance->setMediaPath($this->targetDirs[2]);
        $instance->setBlacklistedExtensions(array(0 => 'php', 1 => 'htaccess'));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_media.media_handlers.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\MediaBundle\Helper\Image\ImageHandler A Kunstmaan\MediaBundle\Helper\Image\ImageHandler instance.
     */
    protected function getKunstmaanMedia_MediaHandlers_ImageService()
    {
        $this->services['kunstmaan_media.media_handlers.image'] = $instance = new \Kunstmaan\MediaBundle\Helper\Image\ImageHandler(1, $this->get('kunstmaan_media.mimetype_guesser.factory'), 'Register on https://creativesdk.adobe.com/myapps.html');

        $instance->setMediaPath($this->targetDirs[2]);
        $instance->setBlacklistedExtensions(array(0 => 'php', 1 => 'htaccess'));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_media.media_handlers.remote_audio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\MediaBundle\Helper\RemoteAudio\RemoteAudioHandler A Kunstmaan\MediaBundle\Helper\RemoteAudio\RemoteAudioHandler instance.
     */
    protected function getKunstmaanMedia_MediaHandlers_RemoteAudioService()
    {
        return $this->services['kunstmaan_media.media_handlers.remote_audio'] = new \Kunstmaan\MediaBundle\Helper\RemoteAudio\RemoteAudioHandler(1, 'YOUR_CLIENT_ID');
    }

    /**
     * Gets the 'kunstmaan_media.media_handlers.remote_slide' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\MediaBundle\Helper\RemoteSlide\RemoteSlideHandler A Kunstmaan\MediaBundle\Helper\RemoteSlide\RemoteSlideHandler instance.
     */
    protected function getKunstmaanMedia_MediaHandlers_RemoteSlideService()
    {
        return $this->services['kunstmaan_media.media_handlers.remote_slide'] = new \Kunstmaan\MediaBundle\Helper\RemoteSlide\RemoteSlideHandler(1);
    }

    /**
     * Gets the 'kunstmaan_media.media_handlers.remote_video' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\MediaBundle\Helper\RemoteVideo\RemoteVideoHandler A Kunstmaan\MediaBundle\Helper\RemoteVideo\RemoteVideoHandler instance.
     */
    protected function getKunstmaanMedia_MediaHandlers_RemoteVideoService()
    {
        return $this->services['kunstmaan_media.media_handlers.remote_video'] = new \Kunstmaan\MediaBundle\Helper\RemoteVideo\RemoteVideoHandler(1, array('vimeo' => true, 'youtube' => true, 'dailymotion' => true));
    }

    /**
     * Gets the 'kunstmaan_media.media_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\MediaBundle\Helper\MediaManager A Kunstmaan\MediaBundle\Helper\MediaManager instance.
     */
    protected function getKunstmaanMedia_MediaManagerService()
    {
        $a = $this->get('kunstmaan_media.media_handlers.file');

        $this->services['kunstmaan_media.media_manager'] = $instance = new \Kunstmaan\MediaBundle\Helper\MediaManager();

        $instance->setDefaultHandler($a);
        $instance->addHandler($this->get('kunstmaan_media.media_handlers.remote_slide'));
        $instance->addHandler($this->get('kunstmaan_media.media_handlers.remote_video'));
        $instance->addHandler($this->get('kunstmaan_media.media_handlers.remote_audio'));
        $instance->addHandler($this->get('kunstmaan_media.media_handlers.image'));
        $instance->addHandler($a);

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_media.menu.adaptor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\MediaBundle\Helper\Menu\MediaMenuAdaptor A Kunstmaan\MediaBundle\Helper\Menu\MediaMenuAdaptor instance.
     */
    protected function getKunstmaanMedia_Menu_AdaptorService()
    {
        return $this->services['kunstmaan_media.menu.adaptor'] = new \Kunstmaan\MediaBundle\Helper\Menu\MediaMenuAdaptor($this->get('kunstmaan_media.repository.folder'));
    }

    /**
     * Gets the 'kunstmaan_media.mimetype_guesser.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\MediaBundle\Helper\MimeTypeGuesserFactory A Kunstmaan\MediaBundle\Helper\MimeTypeGuesserFactory instance.
     */
    protected function getKunstmaanMedia_MimetypeGuesser_FactoryService()
    {
        return $this->services['kunstmaan_media.mimetype_guesser.factory'] = new \Kunstmaan\MediaBundle\Helper\MimeTypeGuesserFactory();
    }

    /**
     * Gets the 'kunstmaan_media.repository.folder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\MediaBundle\Repository\FolderRepository A Kunstmaan\MediaBundle\Repository\FolderRepository instance.
     */
    protected function getKunstmaanMedia_Repository_FolderService()
    {
        return $this->services['kunstmaan_media.repository.folder'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('KunstmaanMediaBundle:Folder');
    }

    /**
     * Gets the 'kunstmaan_newrelic_naming_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\UtilitiesBundle\Helper\UrlTransactionNamingStrategy A Kunstmaan\UtilitiesBundle\Helper\UrlTransactionNamingStrategy instance.
     */
    protected function getKunstmaanNewrelicNamingStrategyService()
    {
        return $this->services['kunstmaan_newrelic_naming_strategy'] = new \Kunstmaan\UtilitiesBundle\Helper\UrlTransactionNamingStrategy();
    }

    /**
     * Gets the 'kunstmaan_node.acl_permission_creator_service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeBundle\Helper\Services\ACLPermissionCreatorService A Kunstmaan\NodeBundle\Helper\Services\ACLPermissionCreatorService instance.
     */
    protected function getKunstmaanNode_AclPermissionCreatorServiceService()
    {
        $this->services['kunstmaan_node.acl_permission_creator_service'] = $instance = new \Kunstmaan\NodeBundle\Helper\Services\ACLPermissionCreatorService();

        $instance->setAclProvider($this->get('security.acl.provider'));
        $instance->setObjectIdentityRetrievalStrategy($this->get('security.acl.object_identity_retrieval_strategy'));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_node.actions_menu_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeBundle\Helper\Menu\ActionsMenuBuilder A Kunstmaan\NodeBundle\Helper\Menu\ActionsMenuBuilder instance.
     */
    protected function getKunstmaanNode_ActionsMenuBuilderService()
    {
        return $this->services['kunstmaan_node.actions_menu_builder'] = new \Kunstmaan\NodeBundle\Helper\Menu\ActionsMenuBuilder($this->get('knp_menu.factory'), $this->get('doctrine.orm.default_entity_manager'), $this->get('cmf_routing.router'), $this->get('debug.event_dispatcher'), $this->get('security.context'), $this->get('kunstmaan_node.pages_configuration'));
    }

    /**
     * Gets the 'kunstmaan_node.admin_node.publisher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeBundle\Helper\NodeAdmin\NodeAdminPublisher A Kunstmaan\NodeBundle\Helper\NodeAdmin\NodeAdminPublisher instance.
     */
    protected function getKunstmaanNode_AdminNode_PublisherService()
    {
        return $this->services['kunstmaan_node.admin_node.publisher'] = new \Kunstmaan\NodeBundle\Helper\NodeAdmin\NodeAdminPublisher($this->get('doctrine.orm.default_entity_manager'), $this->get('security.context'), $this->get('debug.event_dispatcher'), $this->get('kunstmaan_admin.clone.helper'));
    }

    /**
     * Gets the 'kunstmaan_node.command.fixtimestamps' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeBundle\Command\FixTimestampsCommand A Kunstmaan\NodeBundle\Command\FixTimestampsCommand instance.
     */
    protected function getKunstmaanNode_Command_FixtimestampsService()
    {
        $this->services['kunstmaan_node.command.fixtimestamps'] = $instance = new \Kunstmaan\NodeBundle\Command\FixTimestampsCommand();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_node.doctrine_mapping.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeBundle\EventListener\MappingListener A Kunstmaan\NodeBundle\EventListener\MappingListener instance.
     */
    protected function getKunstmaanNode_DoctrineMapping_ListenerService()
    {
        return $this->services['kunstmaan_node.doctrine_mapping.listener'] = new \Kunstmaan\NodeBundle\EventListener\MappingListener('Kunstmaan\\AdminBundle\\Entity\\User');
    }

    /**
     * Gets the 'kunstmaan_node.edit_node.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeBundle\EventListener\NodeListener A Kunstmaan\NodeBundle\EventListener\NodeListener instance.
     */
    protected function getKunstmaanNode_EditNode_ListenerService()
    {
        return $this->services['kunstmaan_node.edit_node.listener'] = new \Kunstmaan\NodeBundle\EventListener\NodeListener($this->get('security.context'), $this->get('kunstmaan_admin.permissionadmin'), $this->get('security.acl.permission.map'));
    }

    /**
     * Gets the 'kunstmaan_node.fix_date.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeBundle\EventListener\FixDateListener A Kunstmaan\NodeBundle\EventListener\FixDateListener instance.
     */
    protected function getKunstmaanNode_FixDate_ListenerService()
    {
        return $this->services['kunstmaan_node.fix_date.listener'] = new \Kunstmaan\NodeBundle\EventListener\FixDateListener();
    }

    /**
     * Gets the 'kunstmaan_node.form.type.slug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeBundle\Form\Type\SlugType A Kunstmaan\NodeBundle\Form\Type\SlugType instance.
     */
    protected function getKunstmaanNode_Form_Type_SlugService()
    {
        return $this->services['kunstmaan_node.form.type.slug'] = new \Kunstmaan\NodeBundle\Form\Type\SlugType();
    }

    /**
     * Gets the 'kunstmaan_node.form.type.urlchooser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeBundle\Form\Type\URLChooserType A Kunstmaan\NodeBundle\Form\Type\URLChooserType instance.
     */
    protected function getKunstmaanNode_Form_Type_UrlchooserService()
    {
        return $this->services['kunstmaan_node.form.type.urlchooser'] = new \Kunstmaan\NodeBundle\Form\Type\URLChooserType();
    }

    /**
     * Gets the 'kunstmaan_node.log_page_events.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeBundle\EventListener\LogPageEventsSubscriber A Kunstmaan\NodeBundle\EventListener\LogPageEventsSubscriber instance.
     */
    protected function getKunstmaanNode_LogPageEvents_SubscriberService()
    {
        return $this->services['kunstmaan_node.log_page_events.subscriber'] = new \Kunstmaan\NodeBundle\EventListener\LogPageEventsSubscriber($this->get('kunstmaan_admin.logger'), $this->get('security.context'));
    }

    /**
     * Gets the 'kunstmaan_node.menu.actions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\MenuItem A Knp\Menu\MenuItem instance.
     * 
     * @throws InactiveScopeException when the 'kunstmaan_node.menu.actions' service is requested while the 'request' scope is not active
     */
    protected function getKunstmaanNode_Menu_ActionsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('kunstmaan_node.menu.actions', 'request');
        }

        return $this->services['kunstmaan_node.menu.actions'] = $this->scopedServices['request']['kunstmaan_node.menu.actions'] = $this->get('kunstmaan_node.actions_menu_builder')->createActionsMenu($this->get('request'));
    }

    /**
     * Gets the 'kunstmaan_node.menu.adaptor.pages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeBundle\Helper\Menu\PageMenuAdaptor A Kunstmaan\NodeBundle\Helper\Menu\PageMenuAdaptor instance.
     */
    protected function getKunstmaanNode_Menu_Adaptor_PagesService()
    {
        return $this->services['kunstmaan_node.menu.adaptor.pages'] = new \Kunstmaan\NodeBundle\Helper\Menu\PageMenuAdaptor($this->get('doctrine.orm.default_entity_manager'), $this->get('kunstmaan_admin.acl.native.helper'), $this->get('kunstmaan_node.pages_configuration'));
    }

    /**
     * Gets the 'kunstmaan_node.menu.sub_actions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\MenuItem A Knp\Menu\MenuItem instance.
     * 
     * @throws InactiveScopeException when the 'kunstmaan_node.menu.sub_actions' service is requested while the 'request' scope is not active
     */
    protected function getKunstmaanNode_Menu_SubActionsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('kunstmaan_node.menu.sub_actions', 'request');
        }

        return $this->services['kunstmaan_node.menu.sub_actions'] = $this->scopedServices['request']['kunstmaan_node.menu.sub_actions'] = $this->get('kunstmaan_node.actions_menu_builder')->createSubActionsMenu($this->get('request'));
    }

    /**
     * Gets the 'kunstmaan_node.menu.top_actions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Knp\Menu\MenuItem A Knp\Menu\MenuItem instance.
     * 
     * @throws InactiveScopeException when the 'kunstmaan_node.menu.top_actions' service is requested while the 'request' scope is not active
     */
    protected function getKunstmaanNode_Menu_TopActionsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('kunstmaan_node.menu.top_actions', 'request');
        }

        return $this->services['kunstmaan_node.menu.top_actions'] = $this->scopedServices['request']['kunstmaan_node.menu.top_actions'] = $this->get('kunstmaan_node.actions_menu_builder')->createTopActionsMenu($this->get('request'));
    }

    /**
     * Gets the 'kunstmaan_node.node.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeBundle\Twig\NodeTwigExtension A Kunstmaan\NodeBundle\Twig\NodeTwigExtension instance.
     */
    protected function getKunstmaanNode_Node_Twig_ExtensionService()
    {
        return $this->services['kunstmaan_node.node.twig.extension'] = new \Kunstmaan\NodeBundle\Twig\NodeTwigExtension($this->get('doctrine.orm.default_entity_manager'), $this->get('cmf_routing.router'), $this->get('security.context'), $this->get('kunstmaan_admin.acl.helper'));
    }

    /**
     * Gets the 'kunstmaan_node.nodetranslation.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeBundle\EventListener\NodeTranslationListener A Kunstmaan\NodeBundle\EventListener\NodeTranslationListener instance.
     */
    protected function getKunstmaanNode_Nodetranslation_ListenerService()
    {
        return $this->services['kunstmaan_node.nodetranslation.listener'] = new \Kunstmaan\NodeBundle\EventListener\NodeTranslationListener($this->get('session'), $this->get('kunstmaan_admin.logger'), $this->get('kunstmaan_utilities.slugifier'));
    }

    /**
     * Gets the 'kunstmaan_node.page_creator_service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeBundle\Helper\Services\PageCreatorService A Kunstmaan\NodeBundle\Helper\Services\PageCreatorService instance.
     */
    protected function getKunstmaanNode_PageCreatorServiceService()
    {
        $this->services['kunstmaan_node.page_creator_service'] = $instance = new \Kunstmaan\NodeBundle\Helper\Services\PageCreatorService();

        $instance->setEntityManager($this->get('doctrine.orm.default_entity_manager'));
        $instance->setACLPermissionCreatorService($this->get('kunstmaan_node.acl_permission_creator_service'));
        $instance->setUserEntityClass('Kunstmaan\\AdminBundle\\Entity\\User');

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_node.pages_configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeBundle\Helper\PagesConfiguration A Kunstmaan\NodeBundle\Helper\PagesConfiguration instance.
     */
    protected function getKunstmaanNode_PagesConfigurationService()
    {
        return $this->services['kunstmaan_node.pages_configuration'] = new \Kunstmaan\NodeBundle\Helper\PagesConfiguration(array());
    }

    /**
     * Gets the 'kunstmaan_node.render.context.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeBundle\EventListener\RenderContextListener A Kunstmaan\NodeBundle\EventListener\RenderContextListener instance.
     */
    protected function getKunstmaanNode_Render_Context_ListenerService()
    {
        return $this->services['kunstmaan_node.render.context.listener'] = new \Kunstmaan\NodeBundle\EventListener\RenderContextListener($this->get('templating'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'kunstmaan_node.slug.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeBundle\EventListener\SlugListener A Kunstmaan\NodeBundle\EventListener\SlugListener instance.
     */
    protected function getKunstmaanNode_Slug_ListenerService()
    {
        return $this->services['kunstmaan_node.slug.listener'] = new \Kunstmaan\NodeBundle\EventListener\SlugListener($this->get('doctrine.orm.default_entity_manager'), $this->get('controller_resolver'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'kunstmaan_node.slug.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeBundle\EventListener\SlugSecurityListener A Kunstmaan\NodeBundle\EventListener\SlugSecurityListener instance.
     */
    protected function getKunstmaanNode_Slug_Security_ListenerService()
    {
        return $this->services['kunstmaan_node.slug.security.listener'] = new \Kunstmaan\NodeBundle\EventListener\SlugSecurityListener($this->get('doctrine.orm.default_entity_manager'), $this->get('security.context'), $this->get('kunstmaan_admin.acl.helper'));
    }

    /**
     * Gets the 'kunstmaan_node.slugrouter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeBundle\Router\SlugRouter A Kunstmaan\NodeBundle\Router\SlugRouter instance.
     */
    protected function getKunstmaanNode_SlugrouterService()
    {
        return $this->services['kunstmaan_node.slugrouter'] = new \Kunstmaan\NodeBundle\Router\SlugRouter($this);
    }

    /**
     * Gets the 'kunstmaan_node_search.node_index_update.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeSearchBundle\EventListener\NodeIndexUpdateEventListener A Kunstmaan\NodeSearchBundle\EventListener\NodeIndexUpdateEventListener instance.
     */
    protected function getKunstmaanNodeSearch_NodeIndexUpdate_ListenerService()
    {
        return $this->services['kunstmaan_node_search.node_index_update.listener'] = new \Kunstmaan\NodeSearchBundle\EventListener\NodeIndexUpdateEventListener($this);
    }

    /**
     * Gets the 'kunstmaan_node_search.search.node' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeSearchBundle\Search\NodeSearcher A Kunstmaan\NodeSearchBundle\Search\NodeSearcher instance.
     */
    protected function getKunstmaanNodeSearch_Search_NodeService()
    {
        $this->services['kunstmaan_node_search.search.node'] = $instance = new \Kunstmaan\NodeSearchBundle\Search\NodeSearcher();

        $instance->setSearch($this->get('kunstmaan_search.search'));
        $instance->setIndexName('nodeindex');
        $instance->setIndexType('page');
        $instance->setSecurityContext($this->get('security.context'));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_node_search.search.service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeSearchBundle\Services\SearchService A Kunstmaan\NodeSearchBundle\Services\SearchService instance.
     * 
     * @throws InactiveScopeException when the 'kunstmaan_node_search.search.service' service is requested while the 'request' scope is not active
     */
    protected function getKunstmaanNodeSearch_Search_ServiceService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('kunstmaan_node_search.search.service', 'request');
        }

        return $this->services['kunstmaan_node_search.search.service'] = $this->scopedServices['request']['kunstmaan_node_search.search.service'] = new \Kunstmaan\NodeSearchBundle\Services\SearchService($this, $this->get('request'));
    }

    /**
     * Gets the 'kunstmaan_node_search.search_configuration.node' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeSearchBundle\Configuration\NodePagesConfiguration A Kunstmaan\NodeSearchBundle\Configuration\NodePagesConfiguration instance.
     */
    protected function getKunstmaanNodeSearch_SearchConfiguration_NodeService()
    {
        $this->services['kunstmaan_node_search.search_configuration.node'] = $instance = new \Kunstmaan\NodeSearchBundle\Configuration\NodePagesConfiguration($this, $this->get('kunstmaan_search.search'), 'nodeindex', 'page');

        $instance->setAclProvider($this->get('security.acl.provider'));
        $instance->setIndexablePagePartsService($this->get('kunstmaan_node_search.service.indexable_pageparts'));
        $instance->setDefaultProperties(array('node_id' => array('type' => 'integer', 'include_in_all' => false, 'index' => 'not_analyzed'), 'nodetranslation_id' => array('type' => 'integer', 'include_in_all' => false, 'index' => 'not_analyzed'), 'nodeversion_id' => array('type' => 'integer', 'include_in_all' => false, 'index' => 'not_analyzed'), 'title' => array('type' => 'string', 'include_in_all' => true), 'lang' => array('type' => 'string', 'include_in_all' => true, 'index' => 'not_analyzed'), 'slug' => array('type' => 'string', 'include_in_all' => false, 'index' => 'not_analyzed'), 'type' => array('type' => 'string', 'include_in_all' => false, 'index' => 'not_analyzed'), 'page_class' => array('type' => 'string', 'include_in_all' => false, 'index' => 'not_analyzed'), 'contentanalyzer' => array('type' => 'string', 'include_in_all' => true, 'index' => 'not_analyzed'), 'content' => array('type' => 'string', 'include_in_all' => true), 'created' => array('type' => 'date', 'include_in_all' => false, 'index' => 'not_analyzed'), 'updated' => array('type' => 'date', 'include_in_all' => false, 'index' => 'not_analyzed'), 'view_roles' => array('type' => 'string', 'include_in_all' => true, 'index' => 'not_analyzed', 'index_name' => 'view_role'), '_boost' => array('type' => 'float', 'include_in_all' => false)));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_node_search.service.indexable_pageparts' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeSearchBundle\Helper\IndexablePagePartsService A Kunstmaan\NodeSearchBundle\Helper\IndexablePagePartsService instance.
     */
    protected function getKunstmaanNodeSearch_Service_IndexablePagepartsService()
    {
        return $this->services['kunstmaan_node_search.service.indexable_pageparts'] = new \Kunstmaan\NodeSearchBundle\Helper\IndexablePagePartsService($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'kunstmaan_node_search.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\NodeSearchBundle\Twig\KunstmaanNodeSearchTwigExtension A Kunstmaan\NodeSearchBundle\Twig\KunstmaanNodeSearchTwigExtension instance.
     */
    protected function getKunstmaanNodeSearch_Twig_ExtensionService()
    {
        return $this->services['kunstmaan_node_search.twig.extension'] = new \Kunstmaan\NodeSearchBundle\Twig\KunstmaanNodeSearchTwigExtension($this->get('doctrine.orm.default_entity_manager'), $this->get('kunstmaan_node_search.service.indexable_pageparts'));
    }

    /**
     * Gets the 'kunstmaan_pagepart.pageparts' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\PagePartBundle\PagePartAdmin\Builder A Kunstmaan\PagePartBundle\PagePartAdmin\Builder instance.
     */
    protected function getKunstmaanPagepart_PagepartsService()
    {
        return $this->services['kunstmaan_pagepart.pageparts'] = new \Kunstmaan\PagePartBundle\PagePartAdmin\Builder();
    }

    /**
     * Gets the 'kunstmaan_pagepartadmin.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\PagePartBundle\PagePartAdmin\PagePartAdminFactory A Kunstmaan\PagePartBundle\PagePartAdmin\PagePartAdminFactory instance.
     */
    protected function getKunstmaanPagepartadmin_FactoryService()
    {
        return $this->services['kunstmaan_pagepartadmin.factory'] = new \Kunstmaan\PagePartBundle\PagePartAdmin\PagePartAdminFactory($this);
    }

    /**
     * Gets the 'kunstmaan_pagepartadmin.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\PagePartBundle\Twig\Extension\PagePartAdminTwigExtension A Kunstmaan\PagePartBundle\Twig\Extension\PagePartAdminTwigExtension instance.
     */
    protected function getKunstmaanPagepartadmin_Twig_ExtensionService()
    {
        return $this->services['kunstmaan_pagepartadmin.twig.extension'] = new \Kunstmaan\PagePartBundle\Twig\Extension\PagePartAdminTwigExtension();
    }

    /**
     * Gets the 'kunstmaan_pageparts.clone.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\PagePartBundle\EventListener\CloneListener A Kunstmaan\PagePartBundle\EventListener\CloneListener instance.
     */
    protected function getKunstmaanPageparts_Clone_ListenerService()
    {
        return $this->services['kunstmaan_pageparts.clone.listener'] = new \Kunstmaan\PagePartBundle\EventListener\CloneListener($this->get('doctrine.orm.default_entity_manager'), $this->get('kernel'));
    }

    /**
     * Gets the 'kunstmaan_pageparts.edit_node.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\PagePartBundle\EventListener\NodeListener A Kunstmaan\PagePartBundle\EventListener\NodeListener instance.
     */
    protected function getKunstmaanPageparts_EditNode_ListenerService()
    {
        return $this->services['kunstmaan_pageparts.edit_node.listener'] = new \Kunstmaan\PagePartBundle\EventListener\NodeListener($this->get('doctrine.orm.default_entity_manager'), $this->get('kernel'), $this->get('form.factory'), $this->get('kunstmaan_pagepartadmin.factory'));
    }

    /**
     * Gets the 'kunstmaan_pageparts.pagepart_creator_service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\PagePartBundle\Helper\Services\PagePartCreatorService A Kunstmaan\PagePartBundle\Helper\Services\PagePartCreatorService instance.
     */
    protected function getKunstmaanPageparts_PagepartCreatorServiceService()
    {
        $this->services['kunstmaan_pageparts.pagepart_creator_service'] = $instance = new \Kunstmaan\PagePartBundle\Helper\Services\PagePartCreatorService();

        $instance->setEntityManager($this->get('doctrine.orm.default_entity_manager'));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_pageparts.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\PagePartBundle\Twig\Extension\PagePartTwigExtension A Kunstmaan\PagePartBundle\Twig\Extension\PagePartTwigExtension instance.
     */
    protected function getKunstmaanPageparts_Twig_ExtensionService()
    {
        return $this->services['kunstmaan_pageparts.twig.extension'] = new \Kunstmaan\PagePartBundle\Twig\Extension\PagePartTwigExtension($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'kunstmaan_pagetemplate.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\PagePartBundle\Twig\Extension\PageTemplateTwigExtension A Kunstmaan\PagePartBundle\Twig\Extension\PageTemplateTwigExtension instance.
     */
    protected function getKunstmaanPagetemplate_Twig_ExtensionService()
    {
        return $this->services['kunstmaan_pagetemplate.twig.extension'] = new \Kunstmaan\PagePartBundle\Twig\Extension\PageTemplateTwigExtension($this->get('doctrine.orm.default_entity_manager'), $this->get('kernel'));
    }

    /**
     * Gets the 'kunstmaan_redirect.menu.adaptor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\RedirectBundle\Helper\Menu\RedirectMenuAdaptor A Kunstmaan\RedirectBundle\Helper\Menu\RedirectMenuAdaptor instance.
     */
    protected function getKunstmaanRedirect_Menu_AdaptorService()
    {
        return $this->services['kunstmaan_redirect.menu.adaptor'] = new \Kunstmaan\RedirectBundle\Helper\Menu\RedirectMenuAdaptor();
    }

    /**
     * Gets the 'kunstmaan_redirect.redirectrouter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\RedirectBundle\Router\RedirectRouter A Kunstmaan\RedirectBundle\Router\RedirectRouter instance.
     */
    protected function getKunstmaanRedirect_RedirectrouterService()
    {
        return $this->services['kunstmaan_redirect.redirectrouter'] = new \Kunstmaan\RedirectBundle\Router\RedirectRouter($this->get('kunstmaan_redirect.repositories.redirect'));
    }

    /**
     * Gets the 'kunstmaan_redirect.repositories.redirect' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\RedirectBundle\Repository\RedirectRepository A Kunstmaan\RedirectBundle\Repository\RedirectRepository instance.
     */
    protected function getKunstmaanRedirect_Repositories_RedirectService()
    {
        return $this->services['kunstmaan_redirect.repositories.redirect'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('Kunstmaan\\RedirectBundle\\Entity\\Redirect');
    }

    /**
     * Gets the 'kunstmaan_search.command.delete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\SearchBundle\Command\DeleteIndexCommand A Kunstmaan\SearchBundle\Command\DeleteIndexCommand instance.
     */
    protected function getKunstmaanSearch_Command_DeleteService()
    {
        $this->services['kunstmaan_search.command.delete'] = $instance = new \Kunstmaan\SearchBundle\Command\DeleteIndexCommand();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_search.command.populate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\SearchBundle\Command\PopulateIndexCommand A Kunstmaan\SearchBundle\Command\PopulateIndexCommand instance.
     */
    protected function getKunstmaanSearch_Command_PopulateService()
    {
        $this->services['kunstmaan_search.command.populate'] = $instance = new \Kunstmaan\SearchBundle\Command\PopulateIndexCommand();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_search.command.setup' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\SearchBundle\Command\SetupIndexCommand A Kunstmaan\SearchBundle\Command\SetupIndexCommand instance.
     */
    protected function getKunstmaanSearch_Command_SetupService()
    {
        $this->services['kunstmaan_search.command.setup'] = $instance = new \Kunstmaan\SearchBundle\Command\SetupIndexCommand();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_search.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\SearchBundle\Search\Search A Kunstmaan\SearchBundle\Search\Search instance.
     */
    protected function getKunstmaanSearch_SearchService()
    {
        return $this->services['kunstmaan_search.search'] = new \Kunstmaan\SearchBundle\Search\Search($this->get('kunstmaan_search.search_provider_chain'), 'cpanet', 'Elastica');
    }

    /**
     * Gets the 'kunstmaan_search.search.factory.analysis' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\SearchBundle\Search\AnalysisFactory A Kunstmaan\SearchBundle\Search\AnalysisFactory instance.
     */
    protected function getKunstmaanSearch_Search_Factory_AnalysisService()
    {
        return $this->services['kunstmaan_search.search.factory.analysis'] = new \Kunstmaan\SearchBundle\Search\AnalysisFactory();
    }

    /**
     * Gets the 'kunstmaan_search.search_configuration_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\SearchBundle\Configuration\SearchConfigurationChain A Kunstmaan\SearchBundle\Configuration\SearchConfigurationChain instance.
     */
    protected function getKunstmaanSearch_SearchConfigurationChainService()
    {
        $this->services['kunstmaan_search.search_configuration_chain'] = $instance = new \Kunstmaan\SearchBundle\Configuration\SearchConfigurationChain();

        $instance->addConfiguration($this->get('kunstmaan_node_search.search_configuration.node'), 'Node');

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_search.search_provider.elastica' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\SearchBundle\Provider\ElasticaProvider A Kunstmaan\SearchBundle\Provider\ElasticaProvider instance.
     */
    protected function getKunstmaanSearch_SearchProvider_ElasticaService()
    {
        $this->services['kunstmaan_search.search_provider.elastica'] = $instance = new \Kunstmaan\SearchBundle\Provider\ElasticaProvider();

        $instance->addNode('localhost', 9200);

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_search.search_provider_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\SearchBundle\Provider\SearchProviderChain A Kunstmaan\SearchBundle\Provider\SearchProviderChain instance.
     */
    protected function getKunstmaanSearch_SearchProviderChainService()
    {
        $this->services['kunstmaan_search.search_provider_chain'] = $instance = new \Kunstmaan\SearchBundle\Provider\SearchProviderChain();

        $instance->addProvider($this->get('kunstmaan_search.search_provider.elastica'), 'Elastica');

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_seo.clone.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\SeoBundle\EventListener\CloneListener A Kunstmaan\SeoBundle\EventListener\CloneListener instance.
     */
    protected function getKunstmaanSeo_Clone_ListenerService()
    {
        return $this->services['kunstmaan_seo.clone.listener'] = new \Kunstmaan\SeoBundle\EventListener\CloneListener($this->get('doctrine.orm.default_entity_manager'), $this->get('kunstmaan_admin.clone.helper'));
    }

    /**
     * Gets the 'kunstmaan_seo.google_analytics.order_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\SeoBundle\Helper\OrderConverter A Kunstmaan\SeoBundle\Helper\OrderConverter instance.
     */
    protected function getKunstmaanSeo_GoogleAnalytics_OrderConverterService()
    {
        return $this->services['kunstmaan_seo.google_analytics.order_converter'] = new \Kunstmaan\SeoBundle\Helper\OrderConverter();
    }

    /**
     * Gets the 'kunstmaan_seo.google_analytics.order_preparer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\SeoBundle\Helper\OrderPreparer A Kunstmaan\SeoBundle\Helper\OrderPreparer instance.
     */
    protected function getKunstmaanSeo_GoogleAnalytics_OrderPreparerService()
    {
        return $this->services['kunstmaan_seo.google_analytics.order_preparer'] = new \Kunstmaan\SeoBundle\Helper\OrderPreparer();
    }

    /**
     * Gets the 'kunstmaan_seo.google_analytics.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\SeoBundle\Twig\GoogleAnalyticsTwigExtension A Kunstmaan\SeoBundle\Twig\GoogleAnalyticsTwigExtension instance.
     */
    protected function getKunstmaanSeo_GoogleAnalytics_Twig_ExtensionService()
    {
        $this->services['kunstmaan_seo.google_analytics.twig.extension'] = $instance = new \Kunstmaan\SeoBundle\Twig\GoogleAnalyticsTwigExtension();

        $instance->setAccountID('');
        $instance->setOrderPreparer($this->get('kunstmaan_seo.google_analytics.order_preparer'));
        $instance->setOrderConverter($this->get('kunstmaan_seo.google_analytics.order_converter'));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_seo.node.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\SeoBundle\EventListener\NodeListener A Kunstmaan\SeoBundle\EventListener\NodeListener instance.
     */
    protected function getKunstmaanSeo_Node_ListenerService()
    {
        return $this->services['kunstmaan_seo.node.listener'] = new \Kunstmaan\SeoBundle\EventListener\NodeListener($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the 'kunstmaan_seo.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\SeoBundle\Twig\SeoTwigExtension A Kunstmaan\SeoBundle\Twig\SeoTwigExtension instance.
     */
    protected function getKunstmaanSeo_Twig_ExtensionService()
    {
        $this->services['kunstmaan_seo.twig.extension'] = $instance = new \Kunstmaan\SeoBundle\Twig\SeoTwigExtension($this->get('doctrine.orm.default_entity_manager'));

        $instance->setWebsiteTitle('Cpanet');

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_sitemapbundle.sitemap.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\SitemapBundle\Twig\SitemapTwigExtension A Kunstmaan\SitemapBundle\Twig\SitemapTwigExtension instance.
     */
    protected function getKunstmaanSitemapbundle_Sitemap_Twig_ExtensionService()
    {
        return $this->services['kunstmaan_sitemapbundle.sitemap.twig.extension'] = new \Kunstmaan\SitemapBundle\Twig\SitemapTwigExtension();
    }

    /**
     * Gets the 'kunstmaan_translator.menu.adaptor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\Menu\TranslatorMenuAdaptor A Kunstmaan\TranslatorBundle\Service\Menu\TranslatorMenuAdaptor instance.
     */
    protected function getKunstmaanTranslator_Menu_AdaptorService()
    {
        $this->services['kunstmaan_translator.menu.adaptor'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Menu\TranslatorMenuAdaptor();

        $instance->setTranslatorBundleEnabled(true);

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_translator.repository.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\TranslatorBundle\Repository\TranslationRepository A Kunstmaan\TranslatorBundle\Repository\TranslationRepository instance.
     */
    protected function getKunstmaanTranslator_Repository_TranslationService()
    {
        return $this->services['kunstmaan_translator.repository.translation'] = $this->get('doctrine.orm.default_entity_manager')->getRepository('Kunstmaan\\TranslatorBundle\\Entity\\Translation');
    }

    /**
     * Gets the 'kunstmaan_translator.service.command.diff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\Command\DiffCommand A Kunstmaan\TranslatorBundle\Service\Command\DiffCommand instance.
     */
    protected function getKunstmaanTranslator_Service_Command_DiffService()
    {
        $this->services['kunstmaan_translator.service.command.diff'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Command\DiffCommand();

        $instance->setMigrationsService($this->get('kunstmaan_translator.service.migrations.migrations'));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_translator.service.exporter.command_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\Command\Exporter\ExportCommandHandler A Kunstmaan\TranslatorBundle\Service\Command\Exporter\ExportCommandHandler instance.
     */
    protected function getKunstmaanTranslator_Service_Exporter_CommandHandlerService()
    {
        $this->services['kunstmaan_translator.service.exporter.command_handler'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Command\Exporter\ExportCommandHandler();

        $instance->setManagedLocales(array(0 => 'nl', 1 => 'en', 2 => 'de', 3 => 'fr'));
        $instance->setKernel($this->get('kernel'));
        $instance->setTranslationRepository($this->get('kunstmaan_translator.repository.translation'));
        $instance->setExporter($this->get('kunstmaan_translator.service.exporter.exporter'));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_translator.service.exporter.exporter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\Command\Exporter\Exporter A Kunstmaan\TranslatorBundle\Service\Command\Exporter\Exporter instance.
     */
    protected function getKunstmaanTranslator_Service_Exporter_ExporterService()
    {
        $this->services['kunstmaan_translator.service.exporter.exporter'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Command\Exporter\Exporter();

        $instance->setExporters(array('yml' => $this->get('kunstmaan_translator.service.exporter.yaml')));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_translator.service.exporter.yaml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\Command\Exporter\YamlFileExporter A Kunstmaan\TranslatorBundle\Service\Command\Exporter\YamlFileExporter instance.
     */
    protected function getKunstmaanTranslator_Service_Exporter_YamlService()
    {
        return $this->services['kunstmaan_translator.service.exporter.yaml'] = new \Kunstmaan\TranslatorBundle\Service\Command\Exporter\YamlFileExporter();
    }

    /**
     * Gets the 'kunstmaan_translator.service.file_explorer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\TranslationFileExplorer A Kunstmaan\TranslatorBundle\Service\TranslationFileExplorer instance.
     */
    protected function getKunstmaanTranslator_Service_FileExplorerService()
    {
        $this->services['kunstmaan_translator.service.file_explorer'] = $instance = new \Kunstmaan\TranslatorBundle\Service\TranslationFileExplorer();

        $instance->setFileFormats(array(0 => 'yml', 1 => 'xliff'));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_translator.service.group_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\TranslationGroupManager A Kunstmaan\TranslatorBundle\Service\TranslationGroupManager instance.
     */
    protected function getKunstmaanTranslator_Service_GroupManagerService()
    {
        $this->services['kunstmaan_translator.service.group_manager'] = $instance = new \Kunstmaan\TranslatorBundle\Service\TranslationGroupManager();

        $instance->setTranslationRepository($this->get('kunstmaan_translator.repository.translation'));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_translator.service.importer.command_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\Command\Importer\ImportCommandHandler A Kunstmaan\TranslatorBundle\Service\Command\Importer\ImportCommandHandler instance.
     */
    protected function getKunstmaanTranslator_Service_Importer_CommandHandlerService()
    {
        $this->services['kunstmaan_translator.service.importer.command_handler'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Command\Importer\ImportCommandHandler();

        $instance->setManagedLocales(array(0 => 'nl', 1 => 'en', 2 => 'de', 3 => 'fr'));
        $instance->setKernel($this->get('kernel'));
        $instance->setTranslationFileExplorer($this->get('kunstmaan_translator.service.file_explorer'));
        $instance->setImporter($this->get('kunstmaan_translator.service.importer.importer'));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_translator.service.importer.importer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\Command\Importer\Importer A Kunstmaan\TranslatorBundle\Service\Command\Importer\Importer instance.
     */
    protected function getKunstmaanTranslator_Service_Importer_ImporterService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['kunstmaan_translator.service.importer.importer'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Command\Importer\Importer();

        $instance->setTranslationGroupManager($this->get('kunstmaan_translator.service.group_manager'));
        $instance->setTranslationRepository($this->get('kunstmaan_translator.repository.translation'));
        $instance->setLoaders(array('php' => $this->get('translation.loader.php'), 'yml' => $this->get('translation.loader.yml'), 'xlf' => $a, 'xliff' => $a, 'po' => $this->get('translation.loader.po'), 'mo' => $this->get('translation.loader.mo'), 'ts' => $this->get('translation.loader.qt'), 'csv' => $this->get('translation.loader.csv'), 'res' => $this->get('translation.loader.res'), 'dat' => $this->get('translation.loader.dat'), 'ini' => $this->get('translation.loader.ini'), 'json' => $this->get('translation.loader.json'), 'database' => $this->get('kunstmaan_translator.service.translator.loader')));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_translator.service.migrations.migrations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\Migrations\MigrationsService A Kunstmaan\TranslatorBundle\Service\Migrations\MigrationsService instance.
     */
    protected function getKunstmaanTranslator_Service_Migrations_MigrationsService()
    {
        $this->services['kunstmaan_translator.service.migrations.migrations'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Migrations\MigrationsService();

        $instance->setTranslationRepository($this->get('kunstmaan_translator.repository.translation'));
        $instance->setEntityManager($this->get('doctrine.orm.default_entity_manager'));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_translator.service.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\TranslationService A Kunstmaan\TranslatorBundle\Service\TranslationService instance.
     */
    protected function getKunstmaanTranslator_Service_TranslationService()
    {
        $this->services['kunstmaan_translator.service.translation'] = $instance = new \Kunstmaan\TranslatorBundle\Service\TranslationService();

        $instance->setTranslationRepository($this->get('kunstmaan_translator.repository.translation'));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_translator.service.translator.cache_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\Translator\CacheValidator A Kunstmaan\TranslatorBundle\Service\Translator\CacheValidator instance.
     */
    protected function getKunstmaanTranslator_Service_Translator_CacheValidatorService()
    {
        $this->services['kunstmaan_translator.service.translator.cache_validator'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Translator\CacheValidator();

        $instance->setDebug(true);
        $instance->setCacheDir((__DIR__.'/translations'));
        $instance->setTranslationRepository($this->get('kunstmaan_translator.repository.translation'));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_translator.service.translator.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\Translator\Loader A Kunstmaan\TranslatorBundle\Service\Translator\Loader instance.
     */
    protected function getKunstmaanTranslator_Service_Translator_LoaderService()
    {
        $this->services['kunstmaan_translator.service.translator.loader'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Translator\Loader();

        $instance->setTranslationRepository($this->get('kunstmaan_translator.repository.translation'));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_translator.service.translator.resource_cacher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\Translator\ResourceCacher A Kunstmaan\TranslatorBundle\Service\Translator\ResourceCacher instance.
     */
    protected function getKunstmaanTranslator_Service_Translator_ResourceCacherService()
    {
        $this->services['kunstmaan_translator.service.translator.resource_cacher'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Translator\ResourceCacher();

        $instance->setDebug(true);
        $instance->setCacheDir((__DIR__.'/translations'));
        $instance->setLogger($this->get('logger'));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_translator.service.translator.translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\TranslatorBundle\Service\Translator\Translator A Kunstmaan\TranslatorBundle\Service\Translator\Translator instance.
     */
    protected function getKunstmaanTranslator_Service_Translator_TranslatorService()
    {
        $this->services['kunstmaan_translator.service.translator.translator'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Translator\Translator($this, $this->get('translator.selector'), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json'), 'kunstmaan_translator.service.translator.loader' => array(0 => 'database')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => true), array(0 => $this->get('session')));

        $instance->setTranslationRepository($this->get('kunstmaan_translator.repository.translation'));
        $instance->setResourceCacher($this->get('kunstmaan_translator.service.translator.resource_cacher'));
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 'lt', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf'), 'af', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 'sr_Latn', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 'el', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 'tr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 'sv', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 'mn', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 'bg', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 'de', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 'ar', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 'sl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 'et', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 'sk', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 'cs', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf'), 'cy', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 'zh_CN', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 'fr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 'es', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 'no', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 'en', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 'th', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf'), 'zh_TW', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 'he', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 'hy', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 'uk', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 'ru', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 'nl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 'ja', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 'pt_BR', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 'pt', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 'vi', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 'lb', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 'it', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 'ro', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 'gl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 'da', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 'az', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 'hu', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 'eu', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 'hr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 'id', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 'ca', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf'), 'nb', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 'pl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 'fi', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf'), 'sq', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 'fa', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 'lt', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 'sr_Latn', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 'lv', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 'el', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 'sv', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf'), 'mn', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 'bg', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 'de', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 'ar', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 'sl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf'), 'et', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 'sk', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 'cs', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 'zh_CN', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 'fr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 'es', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 'en', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 'he', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf'), 'hy', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 'uk', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 'ru', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 'nl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 'ja', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 'pt_BR', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 'pt', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 'lb', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 'it', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 'ro', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 'gl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 'da', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 'az', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 'hu', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf'), 'eu', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 'hr', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 'id', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 'ca', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf'), 'nb', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 'pl', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf'), 'fi', 'validators');
        $instance->addResource('xlf', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 'fa', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeBundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeBundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeBundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/SeoBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Symfony/Cmf/Bundle/RoutingBundle/Resources/translations/CmfRoutingBundle.en.xliff'), 'en', 'CmfRoutingBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Symfony/Cmf/Bundle/RoutingBundle/Resources/translations/CmfRoutingBundle.pl.xliff'), 'pl', 'CmfRoutingBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Symfony/Cmf/Bundle/RoutingBundle/Resources/translations/CmfRoutingBundle.nl.xliff'), 'nl', 'CmfRoutingBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Symfony/Cmf/Bundle/RoutingBundle/Resources/translations/CmfRoutingBundle.fr.xliff'), 'fr', 'CmfRoutingBundle');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Symfony/Cmf/Bundle/RoutingBundle/Resources/translations/CmfRoutingBundle.de.xliff'), 'de', 'CmfRoutingBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaBundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaBundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.tr.yml'), 'tr', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bg.yml'), 'bg', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt.yml'), 'pt', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.it.yml'), 'it', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eu.yml'), 'eu', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ru.yml'), 'ru', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nb.yml'), 'nb', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nb.yml'), 'nb', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sl.yml'), 'sl', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.uk.yml'), 'uk', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.cs.yml'), 'cs', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.th.yml'), 'th', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hu.yml'), 'hu', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ro.yml'), 'ro', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.he.yml'), 'he', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fi.yml'), 'fi', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pl.yml'), 'pl', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fr.yml'), 'fr', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.th.yml'), 'th', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.cs.yml'), 'cs', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fi.yml'), 'fi', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.de.yml'), 'de', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ru.yml'), 'ru', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt_BR.yml'), 'pt_BR', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ja.yml'), 'ja', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ca.yml'), 'ca', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sk.yml'), 'sk', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fa.yml'), 'fa', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ar.yml'), 'ar', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pl.yml'), 'pl', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.zh_CN.yml'), 'zh_CN', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sv.yml'), 'sv', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hr.yml'), 'hr', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt_BR.yml'), 'pt_BR', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt.yml'), 'pt', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fr.yml'), 'fr', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bg.yml'), 'bg', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.tr.yml'), 'tr', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sr_Latn.yml'), 'sr_Latn', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ca.yml'), 'ca', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.id.yml'), 'id', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lv.yml'), 'lv', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nl.yml'), 'nl', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ar.yml'), 'ar', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.da.yml'), 'da', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ja.yml'), 'ja', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fa.yml'), 'fa', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ro.yml'), 'ro', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lt.yml'), 'lt', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.es.yml'), 'es', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.uk.yml'), 'uk', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sr_Latn.yml'), 'sr_Latn', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lv.yml'), 'lv', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lt.yml'), 'lt', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.vi.yml'), 'vi', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.id.yml'), 'id', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.da.yml'), 'da', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.el.yml'), 'el', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sl.yml'), 'sl', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hr.yml'), 'hr', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nl.yml'), 'nl', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lb.yml'), 'lb', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.vi.yml'), 'vi', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sk.yml'), 'sk', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.el.yml'), 'el', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.en.yml'), 'en', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.et.yml'), 'et', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.en.yml'), 'en', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.de.yml'), 'de', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sv.yml'), 'sv', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.es.yml'), 'es', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.zh_CN.yml'), 'zh_CN', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hu.yml'), 'hu', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.it.yml'), 'it', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eu.yml'), 'eu', 'FOSUserBundle');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.he.yml'), 'he', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/AdminBundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/AdminBundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/AdminBundle/Resources/translations/validators.en.yml'), 'en', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/AdminBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/AdminBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/AdminBundle/Resources/translations/validators.it.yml'), 'it', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/AdminBundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/PagePartBundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/PagePartBundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/PagePartBundle/Resources/translations/validators.en.yml'), 'en', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/PagePartBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/PagePartBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/PagePartBundle/Resources/translations/validators.it.yml'), 'it', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/PagePartBundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaPagePartBundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaPagePartBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaPagePartBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaPagePartBundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/FormBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/FormBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.fr.xliff'), 'fr', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.pl.xliff'), 'pl', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.es.xliff'), 'es', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.ua.xliff'), 'ua', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.sr_Latn.xliff'), 'sr_Latn', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.it.xliff'), 'it', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.cs.xliff'), 'cs', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.sl.xliff'), 'sl', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.fa.xliff'), 'fa', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.ro.xliff'), 'ro', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.ar.xliff'), 'ar', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.ru.xliff'), 'ru', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.sk.xliff'), 'sk', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.de.xliff'), 'de', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.sr_Cyrl.xliff'), 'sr_Cyrl', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.tr.xliff'), 'tr', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.az.xliff'), 'az', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.zh_CN.xliff'), 'zh_CN', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.pt.xliff'), 'pt', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.da.xliff'), 'da', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.th.xliff'), 'th', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.nl.xliff'), 'nl', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.ca.xliff'), 'ca', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.en.xliff'), 'en', 'pagerfanta');
        $instance->addResource('xliff', ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/WhiteOctober/PagerfantaBundle/Resources/translations/pagerfanta.hr.xliff'), 'hr', 'pagerfanta');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeSearchBundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeSearchBundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeSearchBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeSearchBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/TranslatorBundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/TranslatorBundle/Resources/translations/messages.nl.yml'), 'nl', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/TranslatorBundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/TranslatorBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/TranslatorBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/TranslatorBundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/UserManagementBundle/Resources/translations/messages.es.yml'), 'es', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/UserManagementBundle/Resources/translations/messages.de.yml'), 'de', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/UserManagementBundle/Resources/translations/validators.en.yml'), 'en', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/UserManagementBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/UserManagementBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/UserManagementBundle/Resources/translations/validators.it.yml'), 'it', 'validators');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/UserManagementBundle/Resources/translations/messages.fr.yml'), 'fr', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/DashboardBundle/Resources/translations/messages.en.yml'), 'en', 'messages');
        $instance->addResource('yml', ($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/DashboardBundle/Resources/translations/messages.it.yml'), 'it', 'messages');
        $instance->addDatabaseResources();
        $instance->setFallbackLocales(array(0 => 'en'));
        $instance->setFallbackLocales(array(0 => 'en'));

        return $instance;
    }

    /**
     * Gets the 'kunstmaan_user_management.menu.adaptor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\UserManagementBundle\Helper\Menu\UserManagementMenuAdaptor A Kunstmaan\UserManagementBundle\Helper\Menu\UserManagementMenuAdaptor instance.
     */
    protected function getKunstmaanUserManagement_Menu_AdaptorService()
    {
        return $this->services['kunstmaan_user_management.menu.adaptor'] = new \Kunstmaan\UserManagementBundle\Helper\Menu\UserManagementMenuAdaptor($this->get('security.context'));
    }

    /**
     * Gets the 'kunstmaan_utilities.cipher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\UtilitiesBundle\Helper\Cipher\UrlSafeCipher A Kunstmaan\UtilitiesBundle\Helper\Cipher\UrlSafeCipher instance.
     */
    protected function getKunstmaanUtilities_CipherService()
    {
        return $this->services['kunstmaan_utilities.cipher'] = new \Kunstmaan\UtilitiesBundle\Helper\Cipher\UrlSafeCipher('');
    }

    /**
     * Gets the 'kunstmaan_utilities.shell' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\UtilitiesBundle\Helper\Shell\Shell A Kunstmaan\UtilitiesBundle\Helper\Shell\Shell instance.
     */
    protected function getKunstmaanUtilities_ShellService()
    {
        return $this->services['kunstmaan_utilities.shell'] = new \Kunstmaan\UtilitiesBundle\Helper\Shell\Shell();
    }

    /**
     * Gets the 'kunstmaan_utilities.slugifier' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\UtilitiesBundle\Helper\Slugifier A Kunstmaan\UtilitiesBundle\Helper\Slugifier instance.
     */
    protected function getKunstmaanUtilities_SlugifierService()
    {
        return $this->services['kunstmaan_utilities.slugifier'] = new \Kunstmaan\UtilitiesBundle\Helper\Slugifier();
    }

    /**
     * Gets the 'kunstmaan_utilities.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\UtilitiesBundle\Twig\UtilitiesTwigExtension A Kunstmaan\UtilitiesBundle\Twig\UtilitiesTwigExtension instance.
     */
    protected function getKunstmaanUtilities_Twig_ExtensionService()
    {
        return $this->services['kunstmaan_utilities.twig.extension'] = new \Kunstmaan\UtilitiesBundle\Twig\UtilitiesTwigExtension($this->get('kunstmaan_utilities.slugifier'));
    }

    /**
     * Gets the 'kunstmaanseobundle.seo_management_menu_adaptor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Kunstmaan\SeoBundle\Helper\Menu\SeoManagementMenuAdaptor A Kunstmaan\SeoBundle\Helper\Menu\SeoManagementMenuAdaptor instance.
     */
    protected function getKunstmaanseobundle_SeoManagementMenuAdaptorService()
    {
        return $this->services['kunstmaanseobundle.seo_management_menu_adaptor'] = new \Kunstmaan\SeoBundle\Helper\Menu\SeoManagementMenuAdaptor($this->get('security.context'));
    }

    /**
     * Gets the 'liip_imagine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Imagine\Imagick\Imagine A Imagine\Imagick\Imagine instance.
     */
    protected function getLiipImagineService()
    {
        return $this->services['liip_imagine'] = new \Imagine\Imagick\Imagine();
    }

    /**
     * Gets the 'liip_imagine.cache.clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\CacheClearer A Liip\ImagineBundle\Imagine\Cache\CacheClearer instance.
     */
    protected function getLiipImagine_Cache_ClearerService()
    {
        return $this->services['liip_imagine.cache.clearer'] = new \Liip\ImagineBundle\Imagine\Cache\CacheClearer($this->get('liip_imagine.cache.manager'), '/uploads/cache');
    }

    /**
     * Gets the 'liip_imagine.cache.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\CacheManager A Liip\ImagineBundle\Imagine\Cache\CacheManager instance.
     */
    protected function getLiipImagine_Cache_ManagerService()
    {
        $this->services['liip_imagine.cache.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\CacheManager($this->get('liip_imagine.filter.configuration'), $this->get('cmf_routing.router'), ($this->targetDirs[2].'/../web'), 'web_path');

        $instance->addResolver('web_path', $this->get('liip_imagine.cache.resolver.web_path'));
        $instance->addResolver('no_cache', $this->get('liip_imagine.cache.resolver.no_cache'));

        return $instance;
    }

    /**
     * Gets the 'liip_imagine.cache.resolver.no_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheResolver A Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheResolver instance.
     */
    protected function getLiipImagine_Cache_Resolver_NoCacheService()
    {
        return $this->services['liip_imagine.cache.resolver.no_cache'] = new \Liip\ImagineBundle\Imagine\Cache\Resolver\NoCacheResolver($this->get('filesystem'));
    }

    /**
     * Gets the 'liip_imagine.cache.resolver.web_path' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver A Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver instance.
     */
    protected function getLiipImagine_Cache_Resolver_WebPathService()
    {
        $this->services['liip_imagine.cache.resolver.web_path'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\Resolver\WebPathResolver($this->get('filesystem'));

        $instance->setBasePath('');
        $instance->setFolderPermissions(511);

        return $instance;
    }

    /**
     * Gets the 'liip_imagine.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Controller\ImagineController A Liip\ImagineBundle\Controller\ImagineController instance.
     */
    protected function getLiipImagine_ControllerService()
    {
        return $this->services['liip_imagine.controller'] = new \Liip\ImagineBundle\Controller\ImagineController($this->get('liip_imagine.data.manager'), $this->get('liip_imagine.filter.manager'), $this->get('liip_imagine.cache.manager'));
    }

    /**
     * Gets the 'liip_imagine.data.loader.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Data\Loader\FileSystemLoader A Liip\ImagineBundle\Imagine\Data\Loader\FileSystemLoader instance.
     */
    protected function getLiipImagine_Data_Loader_FilesystemService()
    {
        return $this->services['liip_imagine.data.loader.filesystem'] = new \Liip\ImagineBundle\Imagine\Data\Loader\FileSystemLoader($this->get('liip_imagine'), array(0 => 'jpg', 1 => 'jpeg', 2 => 'png', 3 => 'gif', 4 => 'bmp'), ($this->targetDirs[2].'/../web'));
    }

    /**
     * Gets the 'liip_imagine.data.loader.stream.profile_photos' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Data\Loader\StreamLoader A Liip\ImagineBundle\Imagine\Data\Loader\StreamLoader instance.
     */
    protected function getLiipImagine_Data_Loader_Stream_ProfilePhotosService()
    {
        return $this->services['liip_imagine.data.loader.stream.profile_photos'] = new \Liip\ImagineBundle\Imagine\Data\Loader\StreamLoader($this->get('liip_imagine'), '');
    }

    /**
     * Gets the 'liip_imagine.data.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Data\DataManager A Liip\ImagineBundle\Imagine\Data\DataManager instance.
     */
    protected function getLiipImagine_Data_ManagerService()
    {
        $this->services['liip_imagine.data.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Data\DataManager($this->get('liip_imagine.filter.configuration'), 'filesystem');

        $instance->addLoader('filesystem', $this->get('liip_imagine.data.loader.filesystem'));
        $instance->addLoader('kunstmaan_media_thumbloader', $this->get('liip_imagine.data.loader.stream.profile_photos'));

        return $instance;
    }

    /**
     * Gets the 'liip_imagine.filter.configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration A Liip\ImagineBundle\Imagine\Filter\FilterConfiguration instance.
     */
    protected function getLiipImagine_Filter_ConfigurationService()
    {
        return $this->services['liip_imagine.filter.configuration'] = new \Liip\ImagineBundle\Imagine\Filter\FilterConfiguration(array('media_list_thumbnail' => array('quality' => 75, 'filters' => array('thumbnail' => array('size' => array(0 => 210, 1 => 150), 'mode' => 'inset')), 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'media_detail_thumbnail' => array('quality' => 75, 'filters' => array('thumbnail' => array('size' => array(0 => 700, 1 => 500), 'mode' => 'inset')), 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'optim' => array('quality' => 85, 'format' => 'jpg', 'filters' => array('strip' => array()), 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'optimjpg' => array('quality' => 85, 'format' => 'jpg', 'filters' => array('strip' => array()), 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'optimpng' => array('quality' => 85, 'format' => 'png', 'filters' => array('strip' => array()), 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array())));
    }

    /**
     * Gets the 'liip_imagine.filter.loader.auto_rotate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader instance.
     */
    protected function getLiipImagine_Filter_Loader_AutoRotateService()
    {
        return $this->services['liip_imagine.filter.loader.auto_rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.background' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader instance.
     */
    protected function getLiipImagine_Filter_Loader_BackgroundService()
    {
        return $this->services['liip_imagine.filter.loader.background'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\BackgroundFilterLoader($this->get('liip_imagine'));
    }

    /**
     * Gets the 'liip_imagine.filter.loader.crop' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader instance.
     */
    protected function getLiipImagine_Filter_Loader_CropService()
    {
        return $this->services['liip_imagine.filter.loader.crop'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.paste' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader instance.
     */
    protected function getLiipImagine_Filter_Loader_PasteService()
    {
        return $this->services['liip_imagine.filter.loader.paste'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\PasteFilterLoader($this->get('liip_imagine'), $this->targetDirs[2]);
    }

    /**
     * Gets the 'liip_imagine.filter.loader.relative_resize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader instance.
     */
    protected function getLiipImagine_Filter_Loader_RelativeResizeService()
    {
        return $this->services['liip_imagine.filter.loader.relative_resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.resize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader instance.
     */
    protected function getLiipImagine_Filter_Loader_ResizeService()
    {
        return $this->services['liip_imagine.filter.loader.resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.strip' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader instance.
     */
    protected function getLiipImagine_Filter_Loader_StripService()
    {
        return $this->services['liip_imagine.filter.loader.strip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.thumbnail' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader instance.
     */
    protected function getLiipImagine_Filter_Loader_ThumbnailService()
    {
        return $this->services['liip_imagine.filter.loader.thumbnail'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.upscale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader instance.
     */
    protected function getLiipImagine_Filter_Loader_UpscaleService()
    {
        return $this->services['liip_imagine.filter.loader.upscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader();
    }

    /**
     * Gets the 'liip_imagine.filter.loader.watermark' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader A Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader instance.
     */
    protected function getLiipImagine_Filter_Loader_WatermarkService()
    {
        return $this->services['liip_imagine.filter.loader.watermark'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\WatermarkFilterLoader($this->get('liip_imagine'), $this->targetDirs[2]);
    }

    /**
     * Gets the 'liip_imagine.filter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\FilterManager A Liip\ImagineBundle\Imagine\Filter\FilterManager instance.
     */
    protected function getLiipImagine_Filter_ManagerService()
    {
        $this->services['liip_imagine.filter.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Filter\FilterManager($this->get('liip_imagine.filter.configuration'));

        $instance->addLoader('relative_resize', $this->get('liip_imagine.filter.loader.relative_resize'));
        $instance->addLoader('resize', $this->get('liip_imagine.filter.loader.resize'));
        $instance->addLoader('thumbnail', $this->get('liip_imagine.filter.loader.thumbnail'));
        $instance->addLoader('crop', $this->get('liip_imagine.filter.loader.crop'));
        $instance->addLoader('paste', $this->get('liip_imagine.filter.loader.paste'));
        $instance->addLoader('watermark', $this->get('liip_imagine.filter.loader.watermark'));
        $instance->addLoader('background', $this->get('liip_imagine.filter.loader.background'));
        $instance->addLoader('strip', $this->get('liip_imagine.filter.loader.strip'));
        $instance->addLoader('upscale', $this->get('liip_imagine.filter.loader.upscale'));
        $instance->addLoader('auto_rotate', $this->get('liip_imagine.filter.loader.auto_rotate'));

        return $instance;
    }

    /**
     * Gets the 'liip_imagine.form.type.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Form\Type\ImageType A Liip\ImagineBundle\Form\Type\ImageType instance.
     */
    protected function getLiipImagine_Form_Type_ImageService()
    {
        return $this->services['liip_imagine.form.type.image'] = new \Liip\ImagineBundle\Form\Type\ImageType();
    }

    /**
     * Gets the 'liip_imagine.routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Routing\ImagineLoader A Liip\ImagineBundle\Routing\ImagineLoader instance.
     */
    protected function getLiipImagine_Routing_LoaderService()
    {
        return $this->services['liip_imagine.routing.loader'] = new \Liip\ImagineBundle\Routing\ImagineLoader('liip_imagine.controller:filterAction', '/uploads/cache', array('media_list_thumbnail' => array('quality' => 75, 'filters' => array('thumbnail' => array('size' => array(0 => 210, 1 => 150), 'mode' => 'inset')), 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'media_detail_thumbnail' => array('quality' => 75, 'filters' => array('thumbnail' => array('size' => array(0 => 700, 1 => 500), 'mode' => 'inset')), 'format' => NULL, 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'optim' => array('quality' => 85, 'format' => 'jpg', 'filters' => array('strip' => array()), 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'optimjpg' => array('quality' => 85, 'format' => 'jpg', 'filters' => array('strip' => array()), 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array()), 'optimpng' => array('quality' => 85, 'format' => 'png', 'filters' => array('strip' => array()), 'cache' => NULL, 'data_loader' => NULL, 'controller_action' => NULL, 'route' => array())));
    }

    /**
     * Gets the 'liip_imagine.templating.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Liip\ImagineBundle\Templating\Helper\ImagineHelper A Liip\ImagineBundle\Templating\Helper\ImagineHelper instance.
     */
    protected function getLiipImagine_Templating_HelperService()
    {
        return $this->services['liip_imagine.templating.helper'] = new \Liip\ImagineBundle\Templating\Helper\ImagineHelper($this->get('liip_imagine.cache.manager'));
    }

    /**
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance.
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('en', $this->get('cmf_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor($this->get('kunstmaan_logging_introspection'));
        $instance->pushProcessor($this->get('kunstmaan_logging_web'));
        $instance->pushProcessor(array(0 => $this->get('kunstmaan_admin.logger.processor.user'), 1 => 'processRecord'));
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance.
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, false, array());
    }

    /**
     * Gets the 'monolog.handler.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\DebugHandler A Symfony\Bridge\Monolog\Handler\DebugHandler instance.
     */
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bridge\Monolog\Handler\DebugHandler(100, true);
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance.
     */
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/dev.log'), 100, true, NULL);
    }

    /**
     * Gets the 'monolog.logger.assetic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_AsseticService()
    {
        $this->services['monolog.logger.assetic'] = $instance = new \Symfony\Bridge\Monolog\Logger('assetic');

        $instance->pushProcessor($this->get('kunstmaan_logging_introspection'));
        $instance->pushProcessor($this->get('kunstmaan_logging_web'));
        $instance->pushProcessor(array(0 => $this->get('kunstmaan_admin.logger.processor.user'), 1 => 'processRecord'));
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushProcessor($this->get('kunstmaan_logging_introspection'));
        $instance->pushProcessor($this->get('kunstmaan_logging_web'));
        $instance->pushProcessor(array(0 => $this->get('kunstmaan_admin.logger.processor.user'), 1 => 'processRecord'));
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushProcessor($this->get('kunstmaan_logging_introspection'));
        $instance->pushProcessor($this->get('kunstmaan_logging_web'));
        $instance->pushProcessor(array(0 => $this->get('kunstmaan_admin.logger.processor.user'), 1 => 'processRecord'));
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushProcessor($this->get('kunstmaan_logging_introspection'));
        $instance->pushProcessor($this->get('kunstmaan_logging_web'));
        $instance->pushProcessor(array(0 => $this->get('kunstmaan_admin.logger.processor.user'), 1 => 'processRecord'));
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushProcessor($this->get('kunstmaan_logging_introspection'));
        $instance->pushProcessor($this->get('kunstmaan_logging_web'));
        $instance->pushProcessor(array(0 => $this->get('kunstmaan_admin.logger.processor.user'), 1 => 'processRecord'));
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor($this->get('kunstmaan_logging_introspection'));
        $instance->pushProcessor($this->get('kunstmaan_logging_web'));
        $instance->pushProcessor(array(0 => $this->get('kunstmaan_admin.logger.processor.user'), 1 => 'processRecord'));
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushProcessor($this->get('kunstmaan_logging_introspection'));
        $instance->pushProcessor($this->get('kunstmaan_logging_web'));
        $instance->pushProcessor(array(0 => $this->get('kunstmaan_admin.logger.processor.user'), 1 => 'processRecord'));
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushProcessor($this->get('kunstmaan_logging_introspection'));
        $instance->pushProcessor($this->get('kunstmaan_logging_web'));
        $instance->pushProcessor(array(0 => $this->get('kunstmaan_admin.logger.processor.user'), 1 => 'processRecord'));
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushProcessor($this->get('kunstmaan_logging_introspection'));
        $instance->pushProcessor($this->get('kunstmaan_logging_web'));
        $instance->pushProcessor(array(0 => $this->get('kunstmaan_admin.logger.processor.user'), 1 => 'processRecord'));
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance.
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushProcessor($this->get('kunstmaan_logging_introspection'));
        $instance->pushProcessor($this->get('kunstmaan_logging_web'));
        $instance->pushProcessor(array(0 => $this->get('kunstmaan_admin.logger.processor.user'), 1 => 'processRecord'));
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'pagerfanta.convert_not_valid_current_page_to_not_found_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener A WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener instance.
     */
    protected function getPagerfanta_ConvertNotValidCurrentPageToNotFoundListenerService()
    {
        return $this->services['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener();
    }

    /**
     * Gets the 'pagerfanta.convert_not_valid_max_per_page_to_not_found_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener A WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener instance.
     */
    protected function getPagerfanta_ConvertNotValidMaxPerPageToNotFoundListenerService()
    {
        return $this->services['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener();
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance.
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $c = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $c->setKernel($b);
        }

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine'));
        $d->addLogger('default', $this->get('doctrine.dbal.logger.profiling.default'));

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.__DIR__.'/profiler'), '', '', 86400), $a);

        $instance->add($c);
        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Bundle\FrameworkBundle\DataCollector\AjaxDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector($this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add($this->get('data_collector.router'));
        $instance->add($this->get('data_collector.form'));
        $instance->add($this->get('kunstmaan.data_collector.translator'));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add($d);
        $instance->add($this->get('data_collector.dump'));

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener A Symfony\Component\HttpKernel\EventListener\ProfilerListener instance.
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), NULL, false, false, $this->get('request_stack'));
    }

    /**
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance.
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false);
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     * @throws InactiveScopeException when the 'request' service is requested while the 'request' scope is not active
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance.
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance.
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance.
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('cmf_routing.router'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'));
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance.
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Bundle\AsseticBundle\Routing\AsseticLoader($this->get('assetic.asset_manager'), array()));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader($this->get('liip_imagine.routing.loader'));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $d);
    }

    /**
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\SecurityExtraBundle\Security\Authorization\RememberingAccessDecisionManager A JMS\SecurityExtraBundle\Security\Authorization\RememberingAccessDecisionManager instance.
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.authentication.trust_resolver');
        $c = $this->get('security.role_hierarchy');

        $d = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\LazyLoadingExpressionVoter($this->get('security.expressions.handler'), $a);
        $d->setLazyCompiler($this, 'security.expressions.compiler');
        $d->setCacheDir((__DIR__.'/jms_security/expressions'));

        return $this->services['security.access.decision_manager'] = new \JMS\SecurityExtraBundle\Security\Authorization\RememberingAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => $d, 1 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $b, $c), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($c), 3 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($b), 4 => new \JMS\SecurityExtraBundle\Security\Acl\Voter\AclVoter($this->get('security.acl.provider'), $this->get('security.acl.object_identity_retrieval_strategy'), $this->get('security.acl.security_identity_retrieval_strategy'), $this->get('security.acl.permission.map'), $a, true)), 'affirmative', false, true));
    }

    /**
     * Gets the 'security.access.method_interceptor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor A JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor instance.
     */
    protected function getSecurity_Access_MethodInterceptorService()
    {
        return $this->services['security.access.method_interceptor'] = new \JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor($this->get('security.context'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), new \JMS\SecurityExtraBundle\Security\Authorization\AfterInvocation\AfterInvocationManager(array(0 => new \JMS\SecurityExtraBundle\Security\Authorization\AfterInvocation\AclAfterInvocationProvider($this->get('security.acl.provider'), $this->get('security.acl.object_identity_retrieval_strategy'), $this->get('security.acl.security_identity_retrieval_strategy'), $this->get('security.acl.permission.map')))), new \JMS\SecurityExtraBundle\Security\Authorization\RunAsManager('RunAsToken', 'ROLE_'), $this->get('security.extra.metadata_factory'), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.access.pointcut' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\SecurityExtraBundle\Security\Authorization\Interception\SecurityPointcut A JMS\SecurityExtraBundle\Security\Authorization\Interception\SecurityPointcut instance.
     */
    protected function getSecurity_Access_PointcutService()
    {
        $this->services['security.access.pointcut'] = $instance = new \JMS\SecurityExtraBundle\Security\Authorization\Interception\SecurityPointcut($this->get('security.extra.metadata_factory'), false, array());

        $instance->setSecuredClasses(array());

        return $instance;
    }

    /**
     * Gets the 'security.acl.dbal.schema' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Acl\Dbal\Schema A Symfony\Component\Security\Acl\Dbal\Schema instance.
     */
    protected function getSecurity_Acl_Dbal_SchemaService()
    {
        return $this->services['security.acl.dbal.schema'] = new \Symfony\Component\Security\Acl\Dbal\Schema(array('class_table_name' => 'acl_classes', 'entry_table_name' => 'acl_entries', 'oid_table_name' => 'acl_object_identities', 'oid_ancestors_table_name' => 'acl_object_identity_ancestors', 'sid_table_name' => 'acl_security_identities'), $this->get('doctrine.dbal.default_connection'));
    }

    /**
     * Gets the 'security.acl.dbal.schema_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\AclSchemaListener A Symfony\Bundle\SecurityBundle\EventListener\AclSchemaListener instance.
     */
    protected function getSecurity_Acl_Dbal_SchemaListenerService()
    {
        return $this->services['security.acl.dbal.schema_listener'] = new \Symfony\Bundle\SecurityBundle\EventListener\AclSchemaListener($this->get('security.acl.dbal.schema'));
    }

    /**
     * Gets the 'security.acl.permission_evaluator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\SecurityExtraBundle\Security\Acl\Expression\PermissionEvaluator A JMS\SecurityExtraBundle\Security\Acl\Expression\PermissionEvaluator instance.
     */
    protected function getSecurity_Acl_PermissionEvaluatorService()
    {
        return $this->services['security.acl.permission_evaluator'] = new \JMS\SecurityExtraBundle\Security\Acl\Expression\PermissionEvaluator($this->get('security.acl.provider'), $this->get('security.acl.object_identity_retrieval_strategy'), $this->get('security.acl.security_identity_retrieval_strategy'), $this->get('security.acl.permission.map'), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.acl.provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Acl\Dbal\MutableAclProvider A Symfony\Component\Security\Acl\Dbal\MutableAclProvider instance.
     */
    protected function getSecurity_Acl_ProviderService()
    {
        return $this->services['security.acl.provider'] = new \Symfony\Component\Security\Acl\Dbal\MutableAclProvider($this->get('doctrine.dbal.default_connection'), new \Symfony\Component\Security\Acl\Domain\PermissionGrantingStrategy(), array('class_table_name' => 'acl_classes', 'entry_table_name' => 'acl_entries', 'oid_table_name' => 'acl_object_identities', 'oid_ancestors_table_name' => 'acl_object_identity_ancestors', 'sid_table_name' => 'acl_security_identities'), NULL);
    }

    /**
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance.
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the 'security.authentication_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils A Symfony\Component\Security\Http\Authentication\AuthenticationUtils instance.
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /**
     * Gets the 'security.authorization_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker A Symfony\Component\Security\Core\Authorization\AuthorizationChecker instance.
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /**
     * Gets the 'security.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\SecurityContext A Symfony\Component\Security\Core\SecurityContext instance.
     */
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /**
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance.
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator($this->get('security.secure_random')), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }

    /**
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance.
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOS\\UserBundle\\Model\\UserInterface' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder', 'arguments' => array(0 => 'sha512', 1 => true, 2 => 5000))));
    }

    /**
     * Gets the 'security.expressions.compiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\SecurityExtraBundle\Security\Authorization\Expression\ExpressionCompiler A JMS\SecurityExtraBundle\Security\Authorization\Expression\ExpressionCompiler instance.
     */
    protected function getSecurity_Expressions_CompilerService()
    {
        $a = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\Compiler\ContainerAwareVariableCompiler();
        $a->setMaps(array('trust_resolver' => 'security.authentication.trust_resolver', 'role_hierarchy' => 'security.role_hierarchy', 'permission_evaluator' => 'security.acl.permission_evaluator'), array());

        $this->services['security.expressions.compiler'] = $instance = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\ExpressionCompiler();

        $instance->addFunctionCompiler(new \JMS\SecurityExtraBundle\Security\Acl\Expression\HasPermissionFunctionCompiler());
        $instance->addTypeCompiler(new \JMS\SecurityExtraBundle\Security\Authorization\Expression\Compiler\ParameterExpressionCompiler());
        $instance->addTypeCompiler($a);

        return $instance;
    }

    /**
     * Gets the 'security.expressions.reverse_interpreter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \JMS\SecurityExtraBundle\Security\Authorization\Expression\ReverseInterpreter A JMS\SecurityExtraBundle\Security\Authorization\Expression\ReverseInterpreter instance.
     */
    protected function getSecurity_Expressions_ReverseInterpreterService()
    {
        return $this->services['security.expressions.reverse_interpreter'] = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\ReverseInterpreter($this->get('security.expressions.compiler'), $this->get('security.expressions.handler'));
    }

    /**
     * Gets the 'security.extra.metadata_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Metadata\Driver\DriverChain A Metadata\Driver\DriverChain instance.
     */
    protected function getSecurity_Extra_MetadataDriverService()
    {
        return $this->services['security.extra.metadata_driver'] = new \Metadata\Driver\DriverChain(array(0 => new \JMS\SecurityExtraBundle\Metadata\Driver\AnnotationDriver($this->get('annotation_reader'))));
    }

    /**
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance.
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('.*'), 'security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'))), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'security.firewall.map.context.dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /**
     * Gets the 'security.firewall.map.context.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance.
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.context');
        $c = $this->get('fos_user.user_provider.username');
        $d = $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('cmf_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $f = $this->get('http_kernel');
        $g = $this->get('security.authentication.manager');

        $h = new \Symfony\Component\HttpFoundation\RequestMatcher('^/([^/]*)/admin/login$');

        $i = new \Symfony\Component\HttpFoundation\RequestMatcher('^/([^/]*)/admin/resetting');

        $j = new \Symfony\Component\HttpFoundation\RequestMatcher('^/([^/]*)/admin');

        $k = new \Symfony\Component\Security\Http\AccessMap();
        $k->add($h, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $k->add($i, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $k->add($j, array(0 => 'ROLE_ADMIN'), NULL);

        $l = new \Symfony\Component\Security\Http\HttpUtils($e, $e);

        $m = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices(array(0 => $c), 'esteEsun Secreto', 'main', array('lifetime' => 604800, 'path' => '/', 'domain' => NULL, 'name' => 'REMEMBERME', 'secure' => false, 'httponly' => true, 'always_remember_me' => false, 'remember_me_parameter' => '_remember_me'), $a);

        $n = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $l, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($l, 'KunstmaanAdminBundle_homepage'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => 'fos_user_security_logout'));
        $n->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());
        $n->addHandler($m);

        $o = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($l, array());
        $o->setOptions(array('login_path' => 'fos_user_security_login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $o->setProviderKey('main');

        $p = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($f, $l, array(), $a);
        $p->setOptions(array('login_path' => 'fos_user_security_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        $q = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $g, $this->get('security.authentication.session_strategy'), $l, 'main', $o, $p, array('check_path' => 'fos_user_security_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $a, $d, NULL);
        $q->setRememberMeServices($m);

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($k, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => $c), 'main', $a, $d), 2 => $n, 3 => $q, 4 => new \Symfony\Component\Security\Http\Firewall\RememberMeListener($b, $m, $g, $a, $d, true), 5 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '55aab55e0c6941.33819536', $a, $g), 6 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, $this->get('security.access.decision_manager'), $k, $g)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), $l, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($f, $l, 'fos_user_security_login', false), NULL, NULL, $a));
    }

    /**
     * Gets the 'security.password_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder A Symfony\Component\Security\Core\Encoder\UserPasswordEncoder instance.
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance.
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance.
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_USER'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_ADMIN', 2 => 'ROLE_ALLOWED_TO_SWITCH'), 'ROLE_NEWS' => array(0 => 'ROLE_USER')));
    }

    /**
     * Gets the 'security.secure_random' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Util\SecureRandom A Symfony\Component\Security\Core\Util\SecureRandom instance.
     */
    protected function getSecurity_SecureRandomService()
    {
        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom((__DIR__.'/secure_random.seed'), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.token_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage A Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage instance.
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance.
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.context'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'sensio_distribution.security_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\SecurityChecker A SensioLabs\Security\SecurityChecker instance.
     */
    protected function getSensioDistribution_SecurityCheckerService()
    {
        return $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker();
    }

    /**
     * Gets the 'sensio_distribution.security_checker.command' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand A SensioLabs\Security\Command\SecurityCheckerCommand instance.
     */
    protected function getSensioDistribution_SecurityChecker_CommandService()
    {
        return $this->services['sensio_distribution.security_checker.command'] = new \SensioLabs\Security\Command\SecurityCheckerCommand($this->get('sensio_distribution.security_checker'));
    }

    /**
     * Gets the 'sensio_distribution.webconfigurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\DistributionBundle\Configurator\Configurator A Sensio\Bundle\DistributionBundle\Configurator\Configurator instance.
     */
    protected function getSensioDistribution_WebconfiguratorService()
    {
        $this->services['sensio_distribution.webconfigurator'] = $instance = new \Sensio\Bundle\DistributionBundle\Configurator\Configurator($this->targetDirs[2]);

        $instance->addStep(new \Sensio\Bundle\DistributionBundle\Configurator\Step\DoctrineStep(), 10);
        $instance->addStep(new \Sensio\Bundle\DistributionBundle\Configurator\Step\SecretStep(), 0);

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance.
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance.
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance.
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance.
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /**
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance.
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance.
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance.
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /**
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance.
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance.
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the 'session.save_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener A Symfony\Component\HttpKernel\EventListener\SaveSessionListener instance.
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance.
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance.
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('name' => 'cpanet', 'gc_probability' => 1), NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance.
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance.
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the 'stof_doctrine_extensions.event_listener.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Stof\DoctrineExtensionsBundle\EventListener\LocaleListener A Stof\DoctrineExtensionsBundle\EventListener\LocaleListener instance.
     */
    protected function getStofDoctrineExtensions_EventListener_LocaleService()
    {
        return $this->services['stof_doctrine_extensions.event_listener.locale'] = new \Stof\DoctrineExtensionsBundle\EventListener\LocaleListener($this->get('stof_doctrine_extensions.listener.translatable'));
    }

    /**
     * Gets the 'stof_doctrine_extensions.event_listener.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Stof\DoctrineExtensionsBundle\EventListener\LoggerListener A Stof\DoctrineExtensionsBundle\EventListener\LoggerListener instance.
     */
    protected function getStofDoctrineExtensions_EventListener_LoggerService()
    {
        return $this->services['stof_doctrine_extensions.event_listener.logger'] = new \Stof\DoctrineExtensionsBundle\EventListener\LoggerListener($this->get('stof_doctrine_extensions.listener.loggable'), $this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'stof_doctrine_extensions.uploadable.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager A Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager instance.
     */
    protected function getStofDoctrineExtensions_Uploadable_ManagerService()
    {
        $a = new \Gedmo\Uploadable\UploadableListener(new \Stof\DoctrineExtensionsBundle\Uploadable\MimeTypeGuesserAdapter());
        $a->setAnnotationReader($this->get('annotation_reader'));
        $a->setDefaultFileInfoClass('Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');

        return $this->services['stof_doctrine_extensions.uploadable.manager'] = new \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager($a, 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
    }

    /**
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance.
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance.
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Mailer A Swift_Mailer instance.
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the 'swiftmailer.mailer.default.plugin.messagelogger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Plugins_MessageLogger A Swift_Plugins_MessageLogger instance.
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.spool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_MemorySpool A Swift_MemorySpool instance.
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_SpoolTransport A Swift_Transport_SpoolTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));

        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance.
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);

        return $instance;
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine A Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine instance.
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\Debug\TimedTwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'templating.asset.package_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory A Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory instance.
     */
    protected function getTemplating_Asset_PackageFactoryService()
    {
        return $this->services['templating.asset.package_factory'] = new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory($this);
    }

    /**
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance.
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the 'templating.globals' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables A Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables instance.
     */
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }

    /**
     * Gets the 'templating.helper.actions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper instance.
     */
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('fragment.handler'));
    }

    /**
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Templating\Helper\CoreAssetsHelper A Symfony\Component\Templating\Helper\CoreAssetsHelper instance.
     * 
     * @throws InactiveScopeException when the 'templating.helper.assets' service is requested while the 'request' scope is not active
     */
    protected function getTemplating_Helper_AssetsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('templating.helper.assets', 'request');
        }

        return $this->services['templating.helper.assets'] = $this->scopedServices['request']['templating.helper.assets'] = new \Symfony\Component\Templating\Helper\CoreAssetsHelper(new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage($this->get('request'), 'v1', '%s?%s'), array());
    }

    /**
     * Gets the 'templating.helper.code' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper instance.
     */
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, $this->targetDirs[2], 'UTF-8');
    }

    /**
     * Gets the 'templating.helper.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper instance.
     */
    protected function getTemplating_Helper_FormService()
    {
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper(new \Symfony\Component\Form\FormRenderer(new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine($this->get('debug.templating.engine.php'), array(0 => 'FrameworkBundle:Form')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
    }

    /**
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance.
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        $this->services['templating.helper.logout_url'] = $instance = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this, $this->get('cmf_routing.router'));

        $instance->registerListener('main', 'fos_user_security_logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /**
     * Gets the 'templating.helper.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper instance.
     */
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request_stack'));
    }

    /**
     * Gets the 'templating.helper.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper instance.
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('cmf_routing.router'));
    }

    /**
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance.
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.helper.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper instance.
     */
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request_stack'));
    }

    /**
     * Gets the 'templating.helper.slots' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Templating\Helper\SlotsHelper A Symfony\Component\Templating\Helper\SlotsHelper instance.
     */
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }

    /**
     * Gets the 'templating.helper.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper instance.
     */
    protected function getTemplating_Helper_StopwatchService()
    {
        return $this->services['templating.helper.stopwatch'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.helper.translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper instance.
     */
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator'));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance.
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance.
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance.
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance.
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance.
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance.
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance.
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance.
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance.
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance.
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance.
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance.
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance.
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance.
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance.
     */
    protected function getTranslation_LoaderService()
    {
        return $this->services['translation.loader'] = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();
    }

    /**
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance.
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance.
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance.
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance.
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance.
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance.
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance.
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance.
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance.
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance.
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance.
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance.
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the 'translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\LoggingTranslator A Symfony\Component\Translation\LoggingTranslator instance.
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\LoggingTranslator($this->get('kunstmaan_translator.service.translator.translator'), $this->get('monolog.logger.translation'));
    }

    /**
     * Gets the 'translator_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener A Symfony\Component\HttpKernel\EventListener\TranslatorListener instance.
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator'), $this->get('request_stack'));
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Environment A Twig_Environment instance.
     */
    protected function getTwigService()
    {
        $a = $this->get('security.context');

        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig'), 'autoescape' => array(0 => 'Symfony\\Bundle\\TwigBundle\\TwigDefaultEscapingStrategy', 1 => 'guess'), 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array()));

        $instance->addExtension($this->get('twig.extension.text'));
        $instance->addExtension($this->get('twig.extension.intl'));
        $instance->addExtension(new \Symfony\Bundle\SecurityBundle\Twig\Extension\LogoutUrlExtension($this->get('templating.helper.logout_url')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\AssetsExtension($this, $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, $this->targetDirs[2], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('cmf_routing.router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($this->get('fragment.handler')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig', 1 => 'KunstmaanNodeBundle:Form:formWidgets.html.twig', 2 => 'LiipImagineBundle:Form:form_div_layout.html.twig', 3 => 'KunstmaanMediaBundle:Form:formWidgets.html.twig')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Twig_Extension_Debug());
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), true, array(), array(0 => 'FrameworkBundle', 1 => 'SecurityBundle', 2 => 'TwigBundle', 3 => 'MonologBundle', 4 => 'SwiftmailerBundle', 5 => 'AsseticBundle', 6 => 'DoctrineBundle', 7 => 'FOSHttpCacheBundle', 8 => 'SensioFrameworkExtraBundle', 9 => 'JMSSecurityExtraBundle', 10 => 'JMSAopBundle', 11 => 'KunstmaanUtilitiesBundle', 12 => 'KunstmaanNodeBundle', 13 => 'KunstmaanSeoBundle', 14 => 'CmfRoutingBundle', 15 => 'StofDoctrineExtensionsBundle', 16 => 'LiipImagineBundle', 17 => 'KnpGaufretteBundle', 18 => 'KunstmaanMediaBundle', 19 => 'FOSUserBundle', 20 => 'KnpMenuBundle', 21 => 'DoctrineFixturesBundle', 22 => 'DoctrineMigrationsBundle', 23 => 'KunstmaanAdminBundle', 24 => 'KunstmaanPagePartBundle', 25 => 'KunstmaanMediaPagePartBundle', 26 => 'KunstmaanFormBundle', 27 => 'KunstmaanAdminListBundle', 28 => 'WhiteOctoberPagerfantaBundle', 29 => 'KunstmaanSearchBundle', 30 => 'KunstmaanNodeSearchBundle', 31 => 'KunstmaanSitemapBundle', 32 => 'KunstmaanArticleBundle', 33 => 'KunstmaanTranslatorBundle', 34 => 'EkinoNewRelicBundle', 35 => 'KunstmaanRedirectBundle', 36 => 'KunstmaanUserManagementBundle', 37 => 'KunstmaanDashboardBundle', 38 => 'KunstmaanLiveReloadBundle', 39 => 'KunstmaanGeneratorBundle', 40 => 'DebugBundle', 41 => 'KunstmaanBehatBundle', 42 => 'WebProfilerBundle', 43 => 'SensioDistributionBundle', 44 => 'SensioGeneratorBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \JMS\SecurityExtraBundle\Twig\SecurityExtension($a));
        $instance->addExtension($this->get('kunstmaan_utilities.twig.extension'));
        $instance->addExtension($this->get('kunstmaan_node.node.twig.extension'));
        $instance->addExtension(new \Kunstmaan\NodeBundle\Twig\PagesConfigurationTwigExtension($this->get('kunstmaan_node.pages_configuration')));
        $instance->addExtension($this->get('kunstmaan_seo.twig.extension'));
        $instance->addExtension($this->get('kunstmaan_seo.google_analytics.twig.extension'));
        $instance->addExtension(new \Liip\ImagineBundle\Templating\ImagineExtension($this->get('liip_imagine.cache.manager')));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper($this->get('knp_menu.renderer_provider'), $this->get('knp_menu.menu_provider'))));
        $instance->addExtension($this->get('kunstmaan_admin.menu.twig.extension'));
        $instance->addExtension($this->get('kunstmaan_admin.localeswitcher.twig.extension'));
        $instance->addExtension($this->get('kunstmaan_admin.locale.twig.extension'));
        $instance->addExtension($this->get('kunstmaan_admin.formtools.twig.extension'));
        $instance->addExtension($this->get('kunstmaan_admin.permissions.twig.extension'));
        $instance->addExtension($this->get('kunstmaan_admin.tabs.twig.extension'));
        $instance->addExtension($this->get('kunstmaan_pagepartadmin.twig.extension'));
        $instance->addExtension($this->get('kunstmaan_pageparts.twig.extension'));
        $instance->addExtension($this->get('kunstmaan_pagetemplate.twig.extension'));
        $instance->addExtension($this->get('kunstmaan_adminlist.twig.extension'));
        $instance->addExtension(new \WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension($this));
        $instance->addExtension($this->get('kunstmaan_node_search.twig.extension'));
        $instance->addExtension($this->get('kunstmaan_sitemapbundle.sitemap.twig.extension'));
        $instance->addExtension($this->get('ekino.new_relic.twig.new_relic_extension'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension($this->get('var_dumper.cloner')));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension());
        $instance->addGlobal('app', $this->get('templating.globals'));
        $instance->addGlobal('datePicker_startDate', '01/01/1970');
        $instance->addGlobal('form_submission_webdir', '/uploads/formsubmissions/');
        $instance->addGlobal('upload_dir', '/uploads/media/');
        $instance->addGlobal('mediabundleisactive', true);
        $instance->addGlobal('mediamanager', $this->get('kunstmaan_media.media_manager'));
        $instance->addGlobal('nodebundleisactive', true);
        $instance->addGlobal('websitetitle', 'Cpanet');
        $instance->addGlobal('defaultlocale', 'en');
        $instance->addGlobal('requiredlocales', 'nl|fr|de|en');
        $instance->addGlobal('gtm_code', 'GTM-XXXXXX');

        return $instance;
    }

    /**
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance.
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the 'twig.controller.preview_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController A Symfony\Bundle\TwigBundle\Controller\PreviewErrorController instance.
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance.
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'twig.extension.intl' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Extensions_Extension_Intl A Twig_Extensions_Extension_Intl instance.
     */
    protected function getTwig_Extension_IntlService()
    {
        return $this->services['twig.extension.intl'] = new \Twig_Extensions_Extension_Intl();
    }

    /**
     * Gets the 'twig.extension.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Extensions_Extension_Text A Twig_Extensions_Extension_Text instance.
     */
    protected function getTwig_Extension_TextService()
    {
        return $this->services['twig.extension.text'] = new \Twig_Extensions_Extension_Text();
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance.
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeBundle/Resources/views'), 'KunstmaanNode');
        $instance->addPath(($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/SeoBundle/Resources/views'), 'KunstmaanSeo');
        $instance->addPath(($this->targetDirs[3].'/vendor/liip/imagine-bundle/Liip/ImagineBundle/Resources/views'), 'LiipImagine');
        $instance->addPath(($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaBundle/Resources/views'), 'KunstmaanMedia');
        $instance->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/AdminBundle/Resources/views'), 'KunstmaanAdmin');
        $instance->addPath(($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/PagePartBundle/Resources/views'), 'KunstmaanPagePart');
        $instance->addPath(($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/MediaPagePartBundle/Resources/views'), 'KunstmaanMediaPagePart');
        $instance->addPath(($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/FormBundle/Resources/views'), 'KunstmaanForm');
        $instance->addPath(($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/AdminListBundle/Resources/views'), 'KunstmaanAdminList');
        $instance->addPath(($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/NodeSearchBundle/Resources/views'), 'KunstmaanNodeSearch');
        $instance->addPath(($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/SitemapBundle/Resources/views'), 'KunstmaanSitemap');
        $instance->addPath(($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/ArticleBundle/Resources/views'), 'KunstmaanArticle');
        $instance->addPath(($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/TranslatorBundle/Resources/views'), 'KunstmaanTranslator');
        $instance->addPath(($this->targetDirs[3].'/vendor/ekino/newrelic-bundle/Ekino/Bundle/NewRelicBundle/Resources/views'), 'EkinoNewRelic');
        $instance->addPath(($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/UserManagementBundle/Resources/views'), 'KunstmaanUserManagement');
        $instance->addPath(($this->targetDirs[3].'/vendor/kunstmaan/bundles-cms/src/Kunstmaan/DashboardBundle/Resources/views'), 'KunstmaanDashboard');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views'), 'SensioDistribution');
        $instance->addPath(($this->targetDirs[2].'/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));
        $instance->addPath(($this->targetDirs[3].'/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views'));

        return $instance;
    }

    /**
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance.
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance.
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('esteEsun Secreto');
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorInterface A Symfony\Component\Validator\ValidatorInterface instance.
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /**
     * Gets the 'validator.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface A Symfony\Component\Validator\ValidatorBuilderInterface instance.
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique')));
        $instance->setTranslator($this->get('translator'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/Symfony/Cmf/Bundle/RoutingBundle/Resources/config/validation.xml'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->setApiVersion(3);
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer($this->get('fos_user.user_manager'))));
        $instance->addXmlMapping(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/DependencyInjection/Compiler/../../Resources/config/storage-validation/orm.xml'));

        return $instance;
    }

    /**
     * Gets the 'validator.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator A Symfony\Component\Validator\Constraints\EmailValidator instance.
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(true);
    }

    /**
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance.
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }

    /**
     * Gets the 'var_dumper.cli_dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper A Symfony\Component\VarDumper\Dumper\CliDumper instance.
     */
    protected function getVarDumper_CliDumperService()
    {
        return $this->services['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8');
    }

    /**
     * Gets the 'var_dumper.cloner' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner A Symfony\Component\VarDumper\Cloner\VarCloner instance.
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the 'web_profiler.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController A Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController instance.
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), true);
    }

    /**
     * Gets the 'web_profiler.controller.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController A Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController instance.
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController($this->get('cmf_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), array('data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig'), 'data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.ajax' => array(0 => 'ajax', 1 => '@WebProfiler/Collector/ajax.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.form' => array(0 => 'form', 1 => '@WebProfiler/Collector/form.html.twig'), 'kunstmaan.data_collector.translator' => array(0 => 'translator', 1 => 'KunstmaanTranslatorBundle:DataCollector:translator'), 'data_collector.security' => array(0 => 'security', 1 => '@Security/Collector/security.html.twig'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'data_collector.dump' => array(0 => 'dump', 1 => '@Debug/Profiler/dump.html.twig')), 'bottom');
    }

    /**
     * Gets the 'web_profiler.controller.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController A Symfony\Bundle\WebProfilerBundle\Controller\RouterController instance.
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), $this->get('cmf_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'web_profiler.debug_toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener instance.
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('twig'), false, 2, 'bottom', $this->get('cmf_routing.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), '^/(app(_[\\w]+)?\\.php/)?_wdt');
    }

    /**
     * Gets the 'white_october_pagerfanta.view_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Pagerfanta\View\ViewFactory A Pagerfanta\View\ViewFactory instance.
     */
    protected function getWhiteOctoberPagerfanta_ViewFactoryService()
    {
        $a = $this->get('translator');

        $b = new \Pagerfanta\View\DefaultView();

        $c = new \Pagerfanta\View\TwitterBootstrapView();

        $d = new \Pagerfanta\View\TwitterBootstrap3View();

        $this->services['white_october_pagerfanta.view_factory'] = $instance = new \Pagerfanta\View\ViewFactory(array());

        $instance->add(array('default' => $b, 'default_translated' => new \WhiteOctober\PagerfantaBundle\View\DefaultTranslatedView($b, $a), 'twitter_bootstrap' => $c, 'twitter_bootstrap3' => $d, 'twitter_bootstrap3_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrap3TranslatedView($d, $a), 'twitter_bootstrap_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrapTranslatedView($c, $a)));

        return $instance;
    }

    /**
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance.
     */
    protected function getAssetic_AssetFactoryService()
    {
        $this->services['assetic.asset_factory'] = $instance = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), ($this->targetDirs[2].'/../web'), true);

        $instance->addWorker(new \Assetic\Factory\Worker\EnsureFilterWorker('/\\.jpe?g$/', $this->get('assetic.filter.jpegoptim')));
        $instance->addWorker(new \Assetic\Factory\Worker\EnsureFilterWorker('/\\.png$/', $this->get('assetic.filter.optipng')));
        $instance->addWorker(new \Assetic\Factory\Worker\EnsureFilterWorker('/\\.jpe?g$/', $this->get('assetic.filter.jpegtran')));
        $instance->addWorker(new \Symfony\Bundle\AsseticBundle\Factory\Worker\UseControllerWorker());

        return $instance;
    }

    /**
     * Gets the 'assetic.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Assetic\Cache\ArrayCache A Assetic\Cache\ArrayCache instance.
     */
    protected function getAssetic_CacheService()
    {
        return $this->services['assetic.cache'] = new \Assetic\Cache\ArrayCache((__DIR__.'/assetic/assets'));
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance.
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver A Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver instance.
     */
    protected function getControllerResolverService()
    {
        return $this->services['controller_resolver'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'doctrine.dbal.logger.profiling.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance.
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the 'fos_user.entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance.
     */
    protected function getFosUser_EntityManagerService()
    {
        return $this->services['fos_user.entity_manager'] = $this->get('doctrine')->getManager(NULL);
    }

    /**
     * Gets the 'fos_user.user_provider.username' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\UserBundle\Security\UserProvider A FOS\UserBundle\Security\UserProvider instance.
     */
    protected function getFosUser_UserProvider_UsernameService()
    {
        return $this->services['fos_user.user_provider.username'] = new \FOS\UserBundle\Security\UserProvider($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'router.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance.
     */
    protected function getRouter_DefaultService()
    {
        return $this->services['router.default'] = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, (__DIR__.'/assetic/routing.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'yaml'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance.
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the 'security.acl.object_identity_retrieval_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy A Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy instance.
     */
    protected function getSecurity_Acl_ObjectIdentityRetrievalStrategyService()
    {
        return $this->services['security.acl.object_identity_retrieval_strategy'] = new \Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy();
    }

    /**
     * Gets the 'security.acl.permission.map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Kunstmaan\AdminBundle\Helper\Security\Acl\Permission\PermissionMap A Kunstmaan\AdminBundle\Helper\Security\Acl\Permission\PermissionMap instance.
     */
    protected function getSecurity_Acl_Permission_MapService()
    {
        return $this->services['security.acl.permission.map'] = new \Kunstmaan\AdminBundle\Helper\Security\Acl\Permission\PermissionMap();
    }

    /**
     * Gets the 'security.acl.security_identity_retrieval_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Acl\Domain\SecurityIdentityRetrievalStrategy A Symfony\Component\Security\Acl\Domain\SecurityIdentityRetrievalStrategy instance.
     */
    protected function getSecurity_Acl_SecurityIdentityRetrievalStrategyService()
    {
        return $this->services['security.acl.security_identity_retrieval_strategy'] = new \Symfony\Component\Security\Acl\Domain\SecurityIdentityRetrievalStrategy($this->get('security.role_hierarchy'), $this->get('security.authentication.trust_resolver'));
    }

    /**
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance.
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $a = $this->get('security.user_checker');

        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('fos_user.user_provider.username'), $a, 'main', $this->get('security.encoder_factory'), true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider($a, 'esteEsun Secreto', 'main'), 2 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('55aab55e0c6941.33819536')), true);

        $instance->setEventDispatcher($this->get('debug.event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'security.authentication.session_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy A Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy instance.
     */
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }

    /**
     * Gets the 'security.expressions.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \JMS\SecurityExtraBundle\Security\Authorization\Expression\ContainerAwareExpressionHandler A JMS\SecurityExtraBundle\Security\Authorization\Expression\ContainerAwareExpressionHandler instance.
     */
    protected function getSecurity_Expressions_HandlerService()
    {
        return $this->services['security.expressions.handler'] = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\ContainerAwareExpressionHandler($this);
    }

    /**
     * Gets the 'security.extra.metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Metadata\MetadataFactory A Metadata\MetadataFactory instance.
     */
    protected function getSecurity_Extra_MetadataFactoryService()
    {
        $this->services['security.extra.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'security.extra.metadata_driver'), new \Metadata\Cache\FileCache((__DIR__.'/jms_security'), true));

        $instance->setIncludeInterfaces(true);

        return $instance;
    }

    /**
     * Gets the 'security.user_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker A Symfony\Component\Security\Core\User\UserChecker instance.
     */
    protected function getSecurity_UserCheckerService()
    {
        return $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance.
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the 'stof_doctrine_extensions.listener.loggable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Gedmo\Loggable\LoggableListener A Gedmo\Loggable\LoggableListener instance.
     */
    protected function getStofDoctrineExtensions_Listener_LoggableService()
    {
        $this->services['stof_doctrine_extensions.listener.loggable'] = $instance = new \Gedmo\Loggable\LoggableListener();

        $instance->setAnnotationReader($this->get('annotation_reader'));

        return $instance;
    }

    /**
     * Gets the 'stof_doctrine_extensions.listener.translatable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Gedmo\Translatable\TranslatableListener A Gedmo\Translatable\TranslatableListener instance.
     */
    protected function getStofDoctrineExtensions_Listener_TranslatableService()
    {
        $this->services['stof_doctrine_extensions.listener.translatable'] = $instance = new \Gedmo\Translatable\TranslatableListener();

        $instance->setAnnotationReader($this->get('annotation_reader'));
        $instance->setDefaultLocale('en');
        $instance->setTranslatableLocale('en');
        $instance->setTranslationFallback(true);
        $instance->setPersistDefaultLocaleTranslation(false);
        $instance->setSkipOnLoad(false);

        return $instance;
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport.eventdispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Swift_Events_SimpleEventDispatcher A Swift_Events_SimpleEventDispatcher instance.
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance.
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /**
     * Gets the 'translator.selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Translation\MessageSelector A Symfony\Component\Translation\MessageSelector instance.
     */
    protected function getTranslator_SelectorService()
    {
        return $this->services['translator.selector'] = new \Symfony\Component\Translation\MessageSelector();
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => $this->targetDirs[2],
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'/logs'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'FOSHttpCacheBundle' => 'FOS\\HttpCacheBundle\\FOSHttpCacheBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'JMSSecurityExtraBundle' => 'JMS\\SecurityExtraBundle\\JMSSecurityExtraBundle',
                'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle',
                'KunstmaanUtilitiesBundle' => 'Kunstmaan\\UtilitiesBundle\\KunstmaanUtilitiesBundle',
                'KunstmaanNodeBundle' => 'Kunstmaan\\NodeBundle\\KunstmaanNodeBundle',
                'KunstmaanSeoBundle' => 'Kunstmaan\\SeoBundle\\KunstmaanSeoBundle',
                'CmfRoutingBundle' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\CmfRoutingBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'LiipImagineBundle' => 'Liip\\ImagineBundle\\LiipImagineBundle',
                'KnpGaufretteBundle' => 'Knp\\Bundle\\GaufretteBundle\\KnpGaufretteBundle',
                'KunstmaanMediaBundle' => 'Kunstmaan\\MediaBundle\\KunstmaanMediaBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'KunstmaanAdminBundle' => 'Kunstmaan\\AdminBundle\\KunstmaanAdminBundle',
                'KunstmaanPagePartBundle' => 'Kunstmaan\\PagePartBundle\\KunstmaanPagePartBundle',
                'KunstmaanMediaPagePartBundle' => 'Kunstmaan\\MediaPagePartBundle\\KunstmaanMediaPagePartBundle',
                'KunstmaanFormBundle' => 'Kunstmaan\\FormBundle\\KunstmaanFormBundle',
                'KunstmaanAdminListBundle' => 'Kunstmaan\\AdminListBundle\\KunstmaanAdminListBundle',
                'WhiteOctoberPagerfantaBundle' => 'WhiteOctober\\PagerfantaBundle\\WhiteOctoberPagerfantaBundle',
                'KunstmaanSearchBundle' => 'Kunstmaan\\SearchBundle\\KunstmaanSearchBundle',
                'KunstmaanNodeSearchBundle' => 'Kunstmaan\\NodeSearchBundle\\KunstmaanNodeSearchBundle',
                'KunstmaanSitemapBundle' => 'Kunstmaan\\SitemapBundle\\KunstmaanSitemapBundle',
                'KunstmaanArticleBundle' => 'Kunstmaan\\ArticleBundle\\KunstmaanArticleBundle',
                'KunstmaanTranslatorBundle' => 'Kunstmaan\\TranslatorBundle\\KunstmaanTranslatorBundle',
                'EkinoNewRelicBundle' => 'Ekino\\Bundle\\NewRelicBundle\\EkinoNewRelicBundle',
                'KunstmaanRedirectBundle' => 'Kunstmaan\\RedirectBundle\\KunstmaanRedirectBundle',
                'KunstmaanUserManagementBundle' => 'Kunstmaan\\UserManagementBundle\\KunstmaanUserManagementBundle',
                'KunstmaanDashboardBundle' => 'Kunstmaan\\DashboardBundle\\KunstmaanDashboardBundle',
                'KunstmaanLiveReloadBundle' => 'Kunstmaan\\LiveReloadBundle\\KunstmaanLiveReloadBundle',
                'KunstmaanGeneratorBundle' => 'Kunstmaan\\GeneratorBundle\\KunstmaanGeneratorBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'KunstmaanBehatBundle' => 'Kunstmaan\\BehatBundle\\KunstmaanBehatBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'database_driver' => 'pdo_mysql',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'kunstmaanbundles',
            'database_user' => 'mydbuser',
            'database_password' => 'mydbpass',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'locale' => 'en',
            'secret' => 'esteEsun Secreto',
            'debug_toolbar' => true,
            'debug_redirects' => false,
            'use_assetic_controller' => true,
            'requiredlocales' => 'nl|fr|de|en',
            'defaultlocale' => 'en',
            'multilanguage' => true,
            'sentry.dsn' => 'https://XXXXXXXX:XXXXXXXX@app.getsentry.com/XXXX',
            'cdnpath' => NULL,
            'websitetitle' => 'Cpanet',
            'session_prefix' => 'cpanet',
            'searchport' => 9200,
            'searchindexname' => 'cpanet',
            'searchindexprefix' => 'cpanet',
            'analytics.googletagmanager' => 'GTM-XXXXXX',
            'aviary_api_key' => 'Register on https://creativesdk.adobe.com/myapps.html',
            'google.api.client_id' => 'More info at http://bundles.kunstmaan.be/documentation/cookbook/google-analytics-dashboard',
            'google.api.client_secret' => NULL,
            'google.api.dev_key' => NULL,
            'doctrine.server_version' => 5.5999999999999996,
            'assetic.cache.class' => 'Assetic\\Cache\\ArrayCache',
            'kunstmaan_media.upload_dir' => '/uploads/media/',
            'form_submission_rootdir' => ($this->targetDirs[2].'/../web/uploads/formsubmissions'),
            'form_submission_webdir' => '/uploads/formsubmissions/',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'request_stack.class' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Bundle\\FrameworkBundle\\Fragment\\ContainerAwareHIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.loader.json.class' => 'Symfony\\Component\\Translation\\Loader\\JsonFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.json.class' => 'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'kernel.secret' => 'esteEsun Secreto',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'en',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.metadata_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session.handler.write_check.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
                'name' => 'cpanet',
                'gc_probability' => 1,
            ),
            'session.save_path' => (__DIR__.'/sessions'),
            'session.metadata.update_threshold' => '0',
            'security.secure_random.class' => 'Symfony\\Component\\Security\\Core\\Util\\SecureRandom',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.type_extension.form.request_handler.class' => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'security.csrf.token_generator.class' => 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator',
            'security.csrf.token_storage.class' => 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage',
            'security.csrf.token_manager.class' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManager',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Component\\Templating\\Helper\\CoreAssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.helper.stopwatch.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\StopwatchHelper',
            'templating.form.engine.class' => 'Symfony\\Component\\Form\\Extension\\Templating\\TemplatingRendererEngine',
            'templating.form.renderer.class' => 'Symfony\\Component\\Form\\FormRenderer',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset.path_package.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PathPackage',
            'templating.asset.url_package.class' => 'Symfony\\Component\\Templating\\Asset\\UrlPackage',
            'templating.asset.package_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PackageFactory',
            'templating.helper.code.file_link_format' => NULL,
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
            ),
            'debug.templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TimedPhpEngine',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\ValidatorInterface',
            'validator.builder.class' => 'Symfony\\Component\\Validator\\ValidatorBuilderInterface',
            'validator.builder.factory.class' => 'Symfony\\Component\\Validator\\Validation',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.expression.class' => 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator',
            'validator.email.class' => 'Symfony\\Component\\Validator\\Constraints\\EmailValidator',
            'validator.translation_domain' => 'validators',
            'validator.api' => 3,
            'esi.class' => 'Symfony\\Component\\HttpKernel\\HttpCache\\Esi',
            'esi_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\EsiListener',
            'fragment.listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener',
            'profiler.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\Profiler',
            'profiler_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener',
            'data_collector.config.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector',
            'data_collector.request.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector',
            'data_collector.exception.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector',
            'data_collector.events.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector',
            'data_collector.logger.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector',
            'data_collector.time.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector',
            'data_collector.memory.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector',
            'data_collector.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector',
            'form.resolved_type_factory.data_collector_proxy.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Proxy\\ResolvedTypeFactoryDataCollectorProxy',
            'form.type_extension.form.data_collector.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension',
            'data_collector.form.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataCollector',
            'data_collector.form.extractor.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataExtractor',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'),
            'profiler.storage.username' => '',
            'profiler.storage.password' => '',
            'profiler.storage.lifetime' => 86400,
            'translator.logging' => true,
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appDevUrlMatcher',
            'router.options.generator.cache_class' => 'appDevUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => (__DIR__.'/assetic/routing.yml'),
            'router.cache_class_prefix' => 'appDev',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'debug.debug_handlers_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.error_handler.throw_at' => -1,
            'debug.event_dispatcher.class' => 'Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher',
            'debug.container.dump' => (__DIR__.'/appDevDebugProjectContainer.xml'),
            'debug.controller_resolver.class' => 'Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.access.expression_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.expression_matcher.class' => 'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.expression_language.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.simple_form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener',
            'security.authentication.listener.simple_preauth.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.simple.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.simple_success_failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_USER',
                    1 => 'ROLE_ADMIN',
                    2 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
                'ROLE_NEWS' => array(
                    0 => 'ROLE_USER',
                ),
            ),
            'security.acl.permission_granting_strategy.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\PermissionGrantingStrategy',
            'security.acl.voter.class' => 'Symfony\\Component\\Security\\Acl\\Voter\\AclVoter',
            'security.acl.permission.map.class' => 'Kunstmaan\\AdminBundle\\Helper\\Security\\Acl\\Permission\\PermissionMap',
            'security.acl.object_identity_retrieval_strategy.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\ObjectIdentityRetrievalStrategy',
            'security.acl.security_identity_retrieval_strategy.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\SecurityIdentityRetrievalStrategy',
            'security.acl.collection_cache.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\AclCollectionCache',
            'security.acl.cache.doctrine.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\DoctrineAclCache',
            'security.acl.dbal.provider.class' => 'Symfony\\Component\\Security\\Acl\\Dbal\\MutableAclProvider',
            'security.acl.dbal.schema.class' => 'Symfony\\Component\\Security\\Acl\\Dbal\\Schema',
            'security.acl.dbal.schema_listener.class' => 'Symfony\\Bundle\\SecurityBundle\\EventListener\\AclSchemaListener',
            'security.acl.dbal.class_table_name' => 'acl_classes',
            'security.acl.dbal.entry_table_name' => 'acl_entries',
            'security.acl.dbal.oid_table_name' => 'acl_object_identities',
            'security.acl.dbal.oid_ancestors_table_name' => 'acl_object_identity_ancestors',
            'security.acl.dbal.sid_table_name' => 'acl_security_identities',
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.assets.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\AssetsExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.extension.debug.stopwatch.class' => 'Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension',
            'twig.extension.expression.class' => 'Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.controller.preview_error.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\PreviewErrorController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'KunstmaanNodeBundle:Form:formWidgets.html.twig',
                2 => 'LiipImagineBundle:Form:form_div_layout.html.twig',
                3 => 'KunstmaanMediaBundle:Form:formWidgets.html.twig',
            ),
            'debug.templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\Debug\\TimedTwigEngine',
            'twig.options' => array(
                'debug' => true,
                'strict_variables' => true,
                'exception_controller' => 'twig.controller.exception:showAction',
                'form_themes' => array(
                    0 => 'form_div_layout.html.twig',
                ),
                'autoescape' => array(
                    0 => 'Symfony\\Bundle\\TwigBundle\\TwigDefaultEscapingStrategy',
                    1 => 'guess',
                ),
                'cache' => (__DIR__.'/twig'),
                'charset' => 'UTF-8',
                'paths' => array(

                ),
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.gelfphp.publisher.class' => 'Gelf\\Publisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.syslogudp.class' => 'Monolog\\Handler\\SyslogUdpHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.rollbar.class' => 'Monolog\\Handler\\RollbarHandler',
            'monolog.handler.flowdock.class' => 'Monolog\\Handler\\FlowdockHandler',
            'monolog.handler.browser_console.class' => 'Monolog\\Handler\\BrowserConsoleHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.slack.class' => 'Monolog\\Handler\\SlackHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.handler.loggly.class' => 'Monolog\\Handler\\LogglyHandler',
            'monolog.handler.logentries.class' => 'Monolog\\Handler\\LogEntriesHandler',
            'monolog.handler.whatfailuregroup.class' => 'Monolog\\Handler\\WhatFailureGroupHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.filter.class' => 'Monolog\\Handler\\FilterHandler',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.handler.elasticsearch.class' => 'Monolog\\Handler\\ElasticSearchHandler',
            'monolog.elastica.client.class' => 'Elastica\\Client',
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => NULL,
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => (__DIR__.'/assetic'),
            'assetic.bundles' => array(
                0 => 'FrameworkBundle',
                1 => 'SecurityBundle',
                2 => 'TwigBundle',
                3 => 'MonologBundle',
                4 => 'SwiftmailerBundle',
                5 => 'AsseticBundle',
                6 => 'DoctrineBundle',
                7 => 'FOSHttpCacheBundle',
                8 => 'SensioFrameworkExtraBundle',
                9 => 'JMSSecurityExtraBundle',
                10 => 'JMSAopBundle',
                11 => 'KunstmaanUtilitiesBundle',
                12 => 'KunstmaanNodeBundle',
                13 => 'KunstmaanSeoBundle',
                14 => 'CmfRoutingBundle',
                15 => 'StofDoctrineExtensionsBundle',
                16 => 'LiipImagineBundle',
                17 => 'KnpGaufretteBundle',
                18 => 'KunstmaanMediaBundle',
                19 => 'FOSUserBundle',
                20 => 'KnpMenuBundle',
                21 => 'DoctrineFixturesBundle',
                22 => 'DoctrineMigrationsBundle',
                23 => 'KunstmaanAdminBundle',
                24 => 'KunstmaanPagePartBundle',
                25 => 'KunstmaanMediaPagePartBundle',
                26 => 'KunstmaanFormBundle',
                27 => 'KunstmaanAdminListBundle',
                28 => 'WhiteOctoberPagerfantaBundle',
                29 => 'KunstmaanSearchBundle',
                30 => 'KunstmaanNodeSearchBundle',
                31 => 'KunstmaanSitemapBundle',
                32 => 'KunstmaanArticleBundle',
                33 => 'KunstmaanTranslatorBundle',
                34 => 'EkinoNewRelicBundle',
                35 => 'KunstmaanRedirectBundle',
                36 => 'KunstmaanUserManagementBundle',
                37 => 'KunstmaanDashboardBundle',
                38 => 'KunstmaanLiveReloadBundle',
                39 => 'KunstmaanGeneratorBundle',
                40 => 'DebugBundle',
                41 => 'KunstmaanBehatBundle',
                42 => 'WebProfilerBundle',
                43 => 'SensioDistributionBundle',
                44 => 'SensioGeneratorBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => true,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => ($this->targetDirs[2].'/../web'),
            'assetic.write_to' => ($this->targetDirs[2].'/../web'),
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/local/bin/node',
            'assetic.ruby.bin' => '/usr/local/rvm/rubies/ruby-1.9.3-p551/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.filter.scss.class' => 'Assetic\\Filter\\Sass\\ScssFilter',
            'assetic.filter.scss.sass' => '/usr/bin/sass',
            'assetic.filter.scss.timeout' => NULL,
            'assetic.filter.scss.style' => NULL,
            'assetic.filter.scss.compass' => NULL,
            'assetic.filter.scss.load_paths' => array(
                0 => ($this->targetDirs[2].'/../web'),
            ),
            'assetic.filter.scss.cache_location' => __DIR__,
            'assetic.filter.uglifyjs2.class' => 'Assetic\\Filter\\UglifyJs2Filter',
            'assetic.filter.uglifyjs2.bin' => '/usr/local/bin/uglifyjs',
            'assetic.filter.uglifyjs2.node' => '/usr/local/bin/node',
            'assetic.filter.uglifyjs2.timeout' => NULL,
            'assetic.filter.uglifyjs2.node_paths' => array(

            ),
            'assetic.filter.uglifyjs2.compress' => true,
            'assetic.filter.uglifyjs2.beautify' => false,
            'assetic.filter.uglifyjs2.mangle' => false,
            'assetic.filter.uglifyjs2.screw_ie8' => false,
            'assetic.filter.uglifyjs2.comments' => false,
            'assetic.filter.uglifyjs2.wrap' => false,
            'assetic.filter.uglifyjs2.defines' => array(

            ),
            'assetic.filter.uglifycss.class' => 'Assetic\\Filter\\UglifyCssFilter',
            'assetic.filter.uglifycss.bin' => '/usr/local/bin/uglifycss',
            'assetic.filter.uglifycss.node' => '/usr/local/bin/node',
            'assetic.filter.uglifycss.timeout' => NULL,
            'assetic.filter.uglifycss.node_paths' => array(

            ),
            'assetic.filter.uglifycss.expand_vars' => false,
            'assetic.filter.uglifycss.ugly_comments' => false,
            'assetic.filter.uglifycss.cute_comments' => false,
            'assetic.filter.yui_js.class' => 'Assetic\\Filter\\Yui\\JsCompressorFilter',
            'assetic.filter.yui_js.java' => '/usr/bin/java',
            'assetic.filter.yui_js.jar' => ($this->targetDirs[2].'/Resources/tools/java/yuicompressor-2.4.8.jar'),
            'assetic.filter.yui_js.charset' => 'UTF-8',
            'assetic.filter.yui_js.stacksize' => NULL,
            'assetic.filter.yui_js.timeout' => NULL,
            'assetic.filter.yui_js.nomunge' => NULL,
            'assetic.filter.yui_js.preserve_semi' => NULL,
            'assetic.filter.yui_js.disable_optimizations' => NULL,
            'assetic.filter.yui_js.linebreak' => NULL,
            'assetic.filter.jpegoptim.class' => 'Assetic\\Filter\\JpegoptimFilter',
            'assetic.filter.jpegoptim.bin' => 'jpegoptim',
            'assetic.filter.jpegoptim.timeout' => NULL,
            'assetic.filter.jpegoptim.strip_all' => true,
            'assetic.filter.jpegoptim.max' => 85,
            'assetic.filter.optipng.class' => 'Assetic\\Filter\\OptiPngFilter',
            'assetic.filter.optipng.bin' => 'optipng',
            'assetic.filter.optipng.timeout' => NULL,
            'assetic.filter.optipng.level' => 3,
            'assetic.filter.jpegtran.class' => 'Assetic\\Filter\\JpegtranFilter',
            'assetic.filter.jpegtran.bin' => 'jpegtran',
            'assetic.filter.jpegtran.timeout' => NULL,
            'assetic.filter.jpegtran.copy' => NULL,
            'assetic.filter.jpegtran.optimize' => false,
            'assetic.filter.jpegtran.progressive' => true,
            'assetic.filter.jpegtran.restart' => NULL,
            'assetic.filter.jpegtran.optimisation' => true,
            'assetic.twig_extension.functions' => array(

            ),
            'assetic.controller.class' => 'Symfony\\Bundle\\AsseticBundle\\Controller\\AsseticController',
            'assetic.routing_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Routing\\AsseticLoader',
            'assetic.use_controller_worker.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Worker\\UseControllerWorker',
            'assetic.request_listener.class' => 'Symfony\\Bundle\\AsseticBundle\\EventListener\\RequestListener',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\ORM\\Mapping\\DefaultEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'fos_http_cache.request_matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'fos_http_cache.rule_matcher.class' => 'FOS\\HttpCacheBundle\\Http\\RuleMatcher',
            'fos_http_cache.debug_header' => 'X-Cache-Debug',
            'fos_http_cache.event_listener.cache_control.class' => 'FOS\\HttpCacheBundle\\EventListener\\CacheControlSubscriber',
            'fos_http_cache.compiler_pass.tag_annotations' => false,
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'security.secured_services' => array(

            ),
            'security.access.method_interceptor.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Interception\\MethodSecurityInterceptor',
            'security.access.method_access_control' => array(

            ),
            'security.access.remembering_access_decision_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\RememberingAccessDecisionManager',
            'security.access.run_as_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\RunAsManager',
            'security.authentication.provider.run_as.class' => 'JMS\\SecurityExtraBundle\\Security\\Authentication\\Provider\\RunAsAuthenticationProvider',
            'security.run_as.key' => 'RunAsToken',
            'security.run_as.role_prefix' => 'ROLE_',
            'security.access.after_invocation_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\AfterInvocation\\AfterInvocationManager',
            'security.access.after_invocation.acl_provider.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\AfterInvocation\\AclAfterInvocationProvider',
            'security.access.iddqd_voter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Voter\\IddqdVoter',
            'security.extra.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'security.extra.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'security.extra.driver_chain.class' => 'Metadata\\Driver\\DriverChain',
            'security.extra.annotation_driver.class' => 'JMS\\SecurityExtraBundle\\Metadata\\Driver\\AnnotationDriver',
            'security.extra.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'security.access.secure_all_services' => false,
            'security.extra.cache_dir' => (__DIR__.'/jms_security'),
            'security.acl.permission_evaluator.class' => 'JMS\\SecurityExtraBundle\\Security\\Acl\\Expression\\PermissionEvaluator',
            'security.acl.has_permission_compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Acl\\Expression\\HasPermissionFunctionCompiler',
            'security.expressions.voter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\LazyLoadingExpressionVoter',
            'security.expressions.handler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\ContainerAwareExpressionHandler',
            'security.expressions.compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\ExpressionCompiler',
            'security.expressions.expression.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\Expression',
            'security.expressions.variable_compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\Compiler\\ContainerAwareVariableCompiler',
            'security.expressions.parameter_compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\Compiler\\ParameterExpressionCompiler',
            'security.expressions.reverse_interpreter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\ReverseInterpreter',
            'security.extra.config_driver.class' => 'JMS\\SecurityExtraBundle\\Metadata\\Driver\\ConfigDriver',
            'security.extra.twig_extension.class' => 'JMS\\SecurityExtraBundle\\Twig\\SecurityExtension',
            'security.authenticated_voter.disabled' => false,
            'security.role_voter.disabled' => false,
            'security.acl_voter.disabled' => false,
            'security.extra.iddqd_ignore_roles' => array(
                0 => 'ROLE_PREVIOUS_ADMIN',
            ),
            'security.iddqd_aliases' => array(

            ),
            'jms_aop.cache_dir' => (__DIR__.'/jms_aop'),
            'jms_aop.interceptor_loader.class' => 'JMS\\AopBundle\\Aop\\InterceptorLoader',
            'kunstmaan_utilities.slugifier.class' => 'Kunstmaan\\UtilitiesBundle\\Helper\\Slugifier',
            'kunstmaan_utilities.shell.class' => 'Kunstmaan\\UtilitiesBundle\\Helper\\Shell\\Shell',
            'kunstmaan_utilities.cipher.class' => 'Kunstmaan\\UtilitiesBundle\\Helper\\Cipher\\UrlSafeCipher',
            'kunstmaan_utilities.cipher.secret' => '',
            'kunstmaan_node.version_timeout' => 3600,
            'kunstmaan_node.slugrouter.class' => 'Kunstmaan\\NodeBundle\\Router\\SlugRouter',
            'kunstmaan_node.sluglistener.class' => 'Kunstmaan\\NodeBundle\\EventListener\\SlugListener',
            'google.analytics.account_id' => '',
            'robots_default' => 'User-agent: *',
            'cmf_routing.chain_router.class' => 'Symfony\\Cmf\\Component\\Routing\\ChainRouter',
            'cmf_routing.replace_symfony_router' => true,
            'cmf_routing.route_type_type.class' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\Form\\Type\\RouteTypeType',
            'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.event_listener.blame.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener',
            'stof_doctrine_extensions.uploadable.manager.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadableManager',
            'stof_doctrine_extensions.uploadable.mime_type_guesser.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter',
            'stof_doctrine_extensions.uploadable.default_file_info.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo',
            'stof_doctrine_extensions.default_locale' => 'en',
            'stof_doctrine_extensions.default_file_path' => NULL,
            'stof_doctrine_extensions.translation_fallback' => true,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.uploadable.validate_writable_directory' => true,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'liip_imagine.filter.configuration.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterConfiguration',
            'liip_imagine.filter.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\FilterManager',
            'liip_imagine.data.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Data\\DataManager',
            'liip_imagine.cache.manager.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\CacheManager',
            'liip_imagine.controller.class' => 'Liip\\ImagineBundle\\Controller\\ImagineController',
            'liip_imagine.routing.loader.class' => 'Liip\\ImagineBundle\\Routing\\ImagineLoader',
            'liip_imagine.twig.extension.class' => 'Liip\\ImagineBundle\\Templating\\ImagineExtension',
            'liip_imagine.templating.helper.class' => 'Liip\\ImagineBundle\\Templating\\Helper\\ImagineHelper',
            'liip_imagine.gd.class' => 'Imagine\\Gd\\Imagine',
            'liip_imagine.imagick.class' => 'Imagine\\Imagick\\Imagine',
            'liip_imagine.gmagick.class' => 'Imagine\\Gmagick\\Imagine',
            'liip_imagine.filter.loader.relative_resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\RelativeResizeFilterLoader',
            'liip_imagine.filter.loader.resize.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ResizeFilterLoader',
            'liip_imagine.filter.loader.thumbnail.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\ThumbnailFilterLoader',
            'liip_imagine.filter.loader.crop.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\CropFilterLoader',
            'liip_imagine.filter.loader.paste.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\PasteFilterLoader',
            'liip_imagine.filter.loader.watermark.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\WatermarkFilterLoader',
            'liip_imagine.filter.loader.strip.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\StripFilterLoader',
            'liip_imagine.filter.loader.background.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\BackgroundFilterLoader',
            'liip_imagine.filter.loader.upscale.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\UpscaleFilterLoader',
            'liip_imagine.filter.loader.auto_rotate.class' => 'Liip\\ImagineBundle\\Imagine\\Filter\\Loader\\AutoRotateFilterLoader',
            'liip_imagine.data.loader.filesystem.class' => 'Liip\\ImagineBundle\\Imagine\\Data\\Loader\\FileSystemLoader',
            'liip_imagine.data.loader.stream.class' => 'Liip\\ImagineBundle\\Imagine\\Data\\Loader\\StreamLoader',
            'liip_imagine.cache.resolver.web_path.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\WebPathResolver',
            'liip_imagine.cache.resolver.no_cache.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\Resolver\\NoCacheResolver',
            'liip_imagine.form.type.image.class' => 'Liip\\ImagineBundle\\Form\\Type\\ImageType',
            'liip_imagine.cache.clearer.class' => 'Liip\\ImagineBundle\\Imagine\\Cache\\CacheClearer',
            'liip_imagine.cache_prefix' => '/uploads/cache',
            'liip_imagine.web_root' => ($this->targetDirs[2].'/../web'),
            'liip_imagine.data_root' => ($this->targetDirs[2].'/../web'),
            'liip_imagine.cache_mkdir_mode' => 511,
            'liip_imagine.formats' => array(
                0 => 'jpg',
                1 => 'jpeg',
                2 => 'png',
                3 => 'gif',
                4 => 'bmp',
            ),
            'liip_imagine.cache.resolver.default' => 'web_path',
            'liip_imagine.filter_sets' => array(
                'media_list_thumbnail' => array(
                    'quality' => 75,
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 210,
                                1 => 150,
                            ),
                            'mode' => 'inset',
                        ),
                    ),
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(

                    ),
                ),
                'media_detail_thumbnail' => array(
                    'quality' => 75,
                    'filters' => array(
                        'thumbnail' => array(
                            'size' => array(
                                0 => 700,
                                1 => 500,
                            ),
                            'mode' => 'inset',
                        ),
                    ),
                    'format' => NULL,
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(

                    ),
                ),
                'optim' => array(
                    'quality' => 85,
                    'format' => 'jpg',
                    'filters' => array(
                        'strip' => array(

                        ),
                    ),
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(

                    ),
                ),
                'optimjpg' => array(
                    'quality' => 85,
                    'format' => 'jpg',
                    'filters' => array(
                        'strip' => array(

                        ),
                    ),
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(

                    ),
                ),
                'optimpng' => array(
                    'quality' => 85,
                    'format' => 'png',
                    'filters' => array(
                        'strip' => array(

                        ),
                    ),
                    'cache' => NULL,
                    'data_loader' => NULL,
                    'controller_action' => NULL,
                    'route' => array(

                    ),
                ),
            ),
            'liip_imagine.data.loader.default' => 'filesystem',
            'liip_imagine.controller_action' => 'liip_imagine.controller:filterAction',
            'liip_imagine.cache.resolver.base_path' => '',
            'knp_gaufrette.filesystem_map.class' => 'Knp\\Bundle\\GaufretteBundle\\FilesystemMap',
            'kunstmaan_media.soundcloud_api_key' => 'YOUR_CLIENT_ID',
            'kunstmaan_media.remote_video' => array(
                'vimeo' => true,
                'youtube' => true,
                'dailymotion' => true,
            ),
            'kunstmaan_media.enable_pdf_preview' => false,
            'kunstmaan_media.blacklisted_extensions' => array(
                0 => 'php',
                1 => 'htaccess',
            ),
            'kunstmaan_media.media_manager.class' => 'Kunstmaan\\MediaBundle\\Helper\\MediaManager',
            'kunstmaan_media.folder_manager.class' => 'Kunstmaan\\MediaBundle\\Helper\\FolderManager',
            'kunstmaan_media.menu.adaptor.class' => 'Kunstmaan\\MediaBundle\\Helper\\Menu\\MediaMenuAdaptor',
            'kunstmaan_media.listener.doctrine.class' => 'Kunstmaan\\MediaBundle\\EventListener\\DoctrineMediaListener',
            'kunstmaan_media.form.type.media.class' => 'Kunstmaan\\MediaBundle\\Form\\Type\\MediaType',
            'kunstmaan_media.form.type.iconfont.class' => 'Kunstmaan\\MediaBundle\\Form\\Type\\IconFontType',
            'kunstmaan_media.icon_font_manager.class' => 'Kunstmaan\\MediaBundle\\Helper\\IconFont\\IconFontManager',
            'kunstmaan_media.icon_font.default_loader.class' => 'Kunstmaan\\MediaBundle\\Helper\\IconFont\\DefaultIconFontLoader',
            'kunstmaan_media.media_creator_service.class' => 'Kunstmaan\\MediaBundle\\Helper\\Services\\MediaCreatorService',
            'kunstmaan_media.mimetype_guesser.factory.class' => 'Kunstmaan\\MediaBundle\\Helper\\MimeTypeGuesserFactory',
            'kunstmaan_media.media_handler.remote_slide.class' => 'Kunstmaan\\MediaBundle\\Helper\\RemoteSlide\\RemoteSlideHandler',
            'kunstmaan_media.media_handler.remote_video.class' => 'Kunstmaan\\MediaBundle\\Helper\\RemoteVideo\\RemoteVideoHandler',
            'kunstmaan_media.media_handler.remote_audio.class' => 'Kunstmaan\\MediaBundle\\Helper\\RemoteAudio\\RemoteAudioHandler',
            'kunstmaan_media.media_handler.image.class' => 'Kunstmaan\\MediaBundle\\Helper\\Image\\ImageHandler',
            'kunstmaan_media.media_handler.file.class' => 'Kunstmaan\\MediaBundle\\Helper\\File\\FileHandler',
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => 'FOSUserBundle:Resetting:email.txt.twig',
            'fos_user.registration.confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'Kunstmaan\\AdminBundle\\Entity\\User',
            'fos_user.profile.form.type' => 'fos_user_profile',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'fos_user_registration',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'fos_user_change_password',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'admin@kunstmaan.be' => 'admin',
            ),
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'fos_user_resetting',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
            ),
            'fos_user.group_manager.class' => 'FOS\\UserBundle\\Doctrine\\GroupManager',
            'fos_user.model.group.class' => 'Kunstmaan\\AdminBundle\\Entity\\Group',
            'fos_user.group.form.type' => 'fos_user_group',
            'fos_user.group.form.name' => 'fos_user_group_form',
            'fos_user.group.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'knp_menu.factory.class' => 'Knp\\Menu\\MenuFactory',
            'knp_menu.factory_extension.routing.class' => 'Knp\\Menu\\Integration\\Symfony\\RoutingExtension',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.matcher.class' => 'Knp\\Menu\\Matcher\\Matcher',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(

            ),
            'knp_menu.listener.voters.class' => 'Knp\\Bundle\\MenuBundle\\EventListener\\VoterInitializerListener',
            'knp_menu.voter.router.class' => 'Knp\\Menu\\Matcher\\Voter\\RouteVoter',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(

            ),
            'knp_menu.renderer.twig.template' => 'knp_menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'doctrine_migrations.dir_name' => ($this->targetDirs[2].'/DoctrineMigrations'),
            'doctrine_migrations.namespace' => 'Application\\Migrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'version_checker.url' => 'http://bundles.kunstmaan.be/version-check',
            'version_checker.timeframe' => 86400,
            'version_checker.enabled' => true,
            'kunstmaan_admin.dashboard_route' => 'kunstmaan_dashboard',
            'kunstmaan_admin.admin_locales' => array(
                0 => 'en',
            ),
            'kunstmaan_admin.default_admin_locale' => 'en',
            'kunstmaan_admin.session_security.ip_check' => false,
            'kunstmaan_admin.session_security.user_agent_check' => false,
            'kunstmaan_admin.menubuilder.class' => 'Kunstmaan\\AdminBundle\\Helper\\Menu\\MenuBuilder',
            'kunstmaan_admin.apply_acl_changeset.listener.class' => 'Kunstmaan\\AdminBundle\\EventListener\\ApplyAclChangesetListener',
            'kunstmaan_admin.login.listener.class' => 'Kunstmaan\\AdminBundle\\EventListener\\LoginListener',
            'kunstmaan_admin.admin_locale.listener.class' => 'Kunstmaan\\AdminBundle\\EventListener\\AdminLocaleListener',
            'kunstmaan_admin.acl.helper.class' => 'Kunstmaan\\AdminBundle\\Helper\\Security\\Acl\\AclHelper',
            'kunstmaan_admin.acl.native.helper.class' => 'Kunstmaan\\AdminBundle\\Helper\\Security\\Acl\\AclNativeHelper',
            'kunstmaan_admin.clone.listener.class' => 'Kunstmaan\\AdminBundle\\EventListener\\CloneListener',
            'kunstmaan_admin.session_security.class' => 'Kunstmaan\\AdminBundle\\EventListener\\SessionSecurityListener',
            'kunstmaan_admin.password_resetting.listener.class' => 'Kunstmaan\\AdminBundle\\EventListener\\PasswordResettingListener',
            'kunstmaan_admin.password_check.listener.class' => 'Kunstmaan\\AdminBundle\\EventListener\\PasswordCheckListener',
            'kunstmaan_admin.firewall.provider_key' => 'main',
            'kunstmaan_admin.consoleexception.class' => 'Kunstmaan\\AdminBundle\\EventListener\\ConsoleExceptionListener',
            'kunstmaan_form.form_mailer.class' => 'Kunstmaan\\FormBundle\\Helper\\FormMailer',
            'kunstmaan_form.form_handler.class' => 'Kunstmaan\\FormBundle\\Helper\\FormHandler',
            'kunstmaan_adminlist.service.export.class' => 'Kunstmaan\\AdminListBundle\\Service\\ExportService',
            'white_october_pagerfanta.default_view' => 'twitter_bootstrap',
            'white_october_pagerfanta.view_factory.class' => 'Pagerfanta\\View\\ViewFactory',
            'analyzer_languages' => array(
                'ar' => array(
                    'analyzer' => 'arabic',
                ),
                'hy' => array(
                    'analyzer' => 'armenian',
                ),
                'eu' => array(
                    'analyzer' => 'basque',
                ),
                'bg' => array(
                    'analyzer' => 'bulgarian',
                ),
                'ca' => array(
                    'analyzer' => 'catalan',
                ),
                'zh' => array(
                    'analyzer' => 'chinese',
                ),
                'cs' => array(
                    'analyzer' => 'czech',
                ),
                'da' => array(
                    'analyzer' => 'danish',
                ),
                'nl' => array(
                    'analyzer' => 'dutch',
                ),
                'en' => array(
                    'analyzer' => 'english',
                ),
                'fi' => array(
                    'analyzer' => 'finnish',
                ),
                'fr' => array(
                    'analyzer' => 'french',
                ),
                'gl' => array(
                    'analyzer' => 'galician',
                ),
                'de' => array(
                    'analyzer' => 'german',
                ),
                'el' => array(
                    'analyzer' => 'greek',
                ),
                'hi' => array(
                    'analyzer' => 'hindi',
                ),
                'hu' => array(
                    'analyzer' => 'hungarian',
                ),
                'id' => array(
                    'analyzer' => 'indonesian',
                ),
                'it' => array(
                    'analyzer' => 'italian',
                ),
                'no' => array(
                    'analyzer' => 'norwegian',
                ),
                'fa' => array(
                    'analyzer' => 'persian',
                ),
                'pt' => array(
                    'analyzer' => 'portuguese',
                ),
                'ro' => array(
                    'analyzer' => 'romanian',
                ),
                'ru' => array(
                    'analyzer' => 'russian',
                ),
                'es' => array(
                    'analyzer' => 'spanish',
                ),
                'sv' => array(
                    'analyzer' => 'swedish',
                ),
                'se' => array(
                    'analyzer' => 'swedish',
                ),
                'ee' => array(
                    'analyzer' => 'estonian',
                ),
                'tr' => array(
                    'analyzer' => 'turkish',
                ),
                'th' => array(
                    'analyzer' => 'thai',
                ),
            ),
            'kunstmaan_search.hostname' => 'localhost',
            'kunstmaan_search.port' => 9200,
            'kunstmaan_search.search_provider' => 'Elastica',
            'kunstmaan_search.search_configuration_chain.class' => 'Kunstmaan\\SearchBundle\\Configuration\\SearchConfigurationChain',
            'kunstmaan_search.search_provider_chain.class' => 'Kunstmaan\\SearchBundle\\Provider\\SearchProviderChain',
            'kunstmaan_search.search.class' => 'Kunstmaan\\SearchBundle\\Search\\Search',
            'kunstmaan_search.search.factory.analysis.class' => 'Kunstmaan\\SearchBundle\\Search\\AnalysisFactory',
            'kunstmaan_search.search_provider.elastica.class' => 'Kunstmaan\\SearchBundle\\Provider\\ElasticaProvider',
            'kunstmaan_node_search.search_configuration.node.class' => 'Kunstmaan\\NodeSearchBundle\\Configuration\\NodePagesConfiguration',
            'kunstmaan_node_search.indexname' => 'nodeindex',
            'kunstmaan_node_search.indextype' => 'page',
            'kunstmaan_node_search.search.node.class' => 'Kunstmaan\\NodeSearchBundle\\Search\\NodeSearcher',
            'kunstmaan_node_search.search_service.class' => 'Kunstmaan\\NodeSearchBundle\\Services\\SearchService',
            'kunstmaan_node_search.node_index_update.listener.class' => 'Kunstmaan\\NodeSearchBundle\\EventListener\\NodeIndexUpdateEventListener',
            'kuma_translator.enabled' => true,
            'kuma_translator.default_bundle' => 'own',
            'kuma_translator.bundles' => array(

            ),
            'kuma_translator.cache_dir' => (__DIR__.'/translations'),
            'kuma_translator.managed_locales' => array(
                0 => 'nl',
                1 => 'en',
                2 => 'de',
                3 => 'fr',
            ),
            'kuma_translator.file_formats' => array(
                0 => 'yml',
                1 => 'xliff',
            ),
            'kuma_translator.storage_engine.type' => 'orm',
            'kuma_translator.profiler' => true,
            'kuma_translator.debug' => true,
            'kunstmaan_translator.menu.adaptor.class' => 'Kunstmaan\\TranslatorBundle\\Service\\Menu\\TranslatorMenuAdaptor',
            'ekino.new_relic.interactor.real.class' => 'Ekino\\Bundle\\NewRelicBundle\\NewRelic\\NewRelicInteractor',
            'ekino.new_relic.interactor.blackhole.class' => 'Ekino\\Bundle\\NewRelicBundle\\NewRelic\\BlackholeInteractor',
            'ekino.new_relic.request_listener.ignored_routes' => array(

            ),
            'ekino.new_relic.request_listener.ignored_paths' => array(

            ),
            'ekino.new_relic.request_listener.ignored_commands' => array(

            ),
            'kunstmaan_redirect.menu.adaptor.class' => 'Kunstmaan\\RedirectBundle\\Helper\\Menu\\RedirectMenuAdaptor',
            'kunstmaan_redirect.redirect_repository.class' => 'Kunstmaan\\RedirectBundle\\Repository\\RedirectRepository',
            'kunstmaan_redirect.redirect.class' => 'Kunstmaan\\RedirectBundle\\Entity\\Redirect',
            'kunstmaan_user_management.user_admin_list_configurator.class' => 'Kunstmaan\\UserManagementBundle\\AdminList\\UserAdminListConfigurator',
            'kunstmaan_user_management.menu.adaptor.class' => 'Kunstmaan\\UserManagementBundle\\Helper\\Menu\\UserManagementMenuAdaptor',
            'kunstmaan_dashboard.widget.googleanalytics.command' => 'Kunstmaan\\DashboardBundle\\Command\\GoogleAnalyticsDataCollectCommand',
            'kunstmaan_dashboard.widget.googleanalytics.controller' => 'Kunstmaan\\DashboardBundle\\Controller\\GoogleAnalyticsController',
            'kunstmaan_dashboard.googleclient.class' => 'Google_Client',
            'kunstmaan_dashboard.googleclienthelper.class' => 'Kunstmaan\\DashboardBundle\\Helper\\GoogleClientHelper',
            'google.api.app_name' => 'Kuma Analytics Dashboard',
            'kunstmaan_live_reload.enabled' => true,
            'kunstmaan_live_reload.host' => 'localhost',
            'kunstmaan_live_reload.port' => 35729,
            'kunstmaan_live_reload.check_server_presence' => true,
            'kunstmaan_live_reload.script_injector.class' => 'Kunstmaan\\LiveReloadBundle\\EventListener\\ScriptInjectorListener',
            'kunstmaan_live_reload.disable_cache.class' => 'Kunstmaan\\LiveReloadBundle\\EventListener\\DisableCacheListener',
            'kunstmaan_live_reload.http_client.class' => 'Guzzle\\Http\\Client',
            'web_profiler.controller.profiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController',
            'web_profiler.controller.router.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\RouterController',
            'web_profiler.controller.exception.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController',
            'twig.extension.webprofiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension',
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.class' => 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'sensio_distribution.webconfigurator.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Configurator',
            'sensio_distribution.webconfigurator.doctrine_step.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Step\\DoctrineStep',
            'sensio_distribution.webconfigurator.secret_step.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Step\\SecretStep',
            'sensio_distribution.security_checker.class' => 'SensioLabs\\Security\\SecurityChecker',
            'sensio_distribution.security_checker.command.class' => 'SensioLabs\\Security\\Command\\SecurityCheckerCommand',
            'data_collector.templates' => array(
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'kunstmaan.data_collector.translator' => array(
                    0 => 'translator',
                    1 => 'KunstmaanTranslatorBundle:DataCollector:translator',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
            ),
            'console.command.ids' => array(
                0 => 'sensio_distribution.security_checker.command',
            ),
        );
    }
}
