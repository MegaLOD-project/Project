<?php
namespace Omeka;

return [
    'password' => [
        'min_length' => 6,
        'min_lowercase' => null,
        'min_uppercase' => null,
        'min_number' => null,
        'min_symbol' => null,
        'symbol_list' => '`~!@#$%^&*()-=_+[]\{}|;:",./<>?\'',
    ],
    'session' => [
        'config' => [],
        'save_handler' => null,
    ],
    'listeners' => [
        'ModuleRouteListener',
        'Omeka\MvcExceptionListener',
        'Omeka\MvcListeners',
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_path_stack' => [
            OMEKA_PATH . '/application/view',
        ],
        'strategies' => [
            'Omeka\ViewApiJsonStrategy',
        ],
    ],
    'assets' => [
        'use_externals' => true,
        'externals' => [
            'Omeka' => [
                'vendor/jquery/jquery.min.js' => 'https://code.jquery.com/jquery-3.6.2.min.js',
            ],
        ],
    ],
    'api_assets' => [
        'allowed_media_types' => [
            'image/jpeg',
            'image/png',
            'image/gif',
            'image/webp',
        ],
        'allowed_extensions' => [
            'jpeg',
            'jpg',
            'png',
            'gif',
            'webp',
        ],
    ],
    'permissions' => [
        'acl_resources' => [
            'Omeka\Module\Manager',
        ],
    ],
    'temp_dir' => sys_get_temp_dir(),
    'file_store' => [
        'local' => [
            'base_path' => null,
            'base_uri' => null,
        ],
    ],
    'entity_manager' => [
        'is_dev_mode' => false,
        'mapping_classes_paths' => [
            OMEKA_PATH . '/application/src/Entity',
        ],
        'resource_discriminator_map' => [
            'Omeka\Entity\Item' => Entity\Item::class,
            'Omeka\Entity\Media' => Entity\Media::class,
            'Omeka\Entity\ItemSet' => Entity\ItemSet::class,
            'Omeka\Entity\ValueAnnotation' => Entity\ValueAnnotation::class,
        ],
        'filters' => [
            'resource_visibility' => Db\Filter\ResourceVisibilityFilter::class,
            'site_page_visibility' => Db\Filter\SitePageVisibilityFilter::class,
            'value_visibility' => Db\Filter\ValueVisibilityFilter::class,
        ],
        'data_types' => [
            'ip_address' => Db\Type\IpAddress::class,
        ],
        'functions' => [
             'datetime' => [
                'convert_tz' => \DoctrineExtensions\Query\Mysql\ConvertTz::class,
                'date' => \DoctrineExtensions\Query\Mysql\Date::class,
                'date_format' => \DoctrineExtensions\Query\Mysql\DateFormat::class,
                'dateadd' => \DoctrineExtensions\Query\Mysql\DateAdd::class,
                'datesub' => \DoctrineExtensions\Query\Mysql\DateSub::class,
                'datediff' => \DoctrineExtensions\Query\Mysql\DateDiff::class,
                'day' => \DoctrineExtensions\Query\Mysql\Day::class,
                'dayname' => \DoctrineExtensions\Query\Mysql\DayName::class,
                'dayofweek' => \DoctrineExtensions\Query\Mysql\DayOfWeek::class,
                'dayofyear' => \DoctrineExtensions\Query\Mysql\DayOfYear::class,
                'div' => \DoctrineExtensions\Query\Mysql\Div::class,
                'from_unixtime' => \DoctrineExtensions\Query\Mysql\FromUnixtime::class,
                'hour' => \DoctrineExtensions\Query\Mysql\Hour::class,
                'last_day' => \DoctrineExtensions\Query\Mysql\LastDay::class,
                'minute' => \DoctrineExtensions\Query\Mysql\Minute::class,
                'now' => \DoctrineExtensions\Query\Mysql\Now::class,
                'month' => \DoctrineExtensions\Query\Mysql\Month::class,
                'monthname' => \DoctrineExtensions\Query\Mysql\MonthName::class,
                'second' => \DoctrineExtensions\Query\Mysql\Second::class,
                'strtodate' => \DoctrineExtensions\Query\Mysql\StrToDate::class,
                'time' => \DoctrineExtensions\Query\Mysql\Time::class,
                'timediff' => \DoctrineExtensions\Query\Mysql\TimeDiff::class,
                'timestampadd' => \DoctrineExtensions\Query\Mysql\TimestampAdd::class,
                'timestampdiff' => \DoctrineExtensions\Query\Mysql\TimestampDiff::class,
                'timetosec' => \DoctrineExtensions\Query\Mysql\TimeToSec::class,
                'week' => \DoctrineExtensions\Query\Mysql\Week::class,
                'weekday' => \DoctrineExtensions\Query\Mysql\WeekDay::class,
                'year' => \DoctrineExtensions\Query\Mysql\Year::class,
                'yearweek' => \DoctrineExtensions\Query\Mysql\YearWeek::class,
                'unix_timestamp' => \DoctrineExtensions\Query\Mysql\UnixTimestamp::class,
            ],
            'numeric' => [
                'acos' => \DoctrineExtensions\Query\Mysql\Acos::class,
                'asin' => \DoctrineExtensions\Query\Mysql\Asin::class,
                'atan2' => \DoctrineExtensions\Query\Mysql\Atan2::class,
                'atan' => \DoctrineExtensions\Query\Mysql\Atan::class,
                'bit_count' => \DoctrineExtensions\Query\Mysql\BitCount::class,
                'bit_xor' => \DoctrineExtensions\Query\Mysql\BitXor::class,
                'ceil' => \DoctrineExtensions\Query\Mysql\Ceil::class,
                'cos' => \DoctrineExtensions\Query\Mysql\Cos::class,
                'cot' => \DoctrineExtensions\Query\Mysql\Cot::class,
                'floor' => \DoctrineExtensions\Query\Mysql\Floor::class,
                'pi' => \DoctrineExtensions\Query\Mysql\Pi::class,
                'power' => \DoctrineExtensions\Query\Mysql\Power::class,
                'quarter' => \DoctrineExtensions\Query\Mysql\Quarter::class,
                'rand' => \DoctrineExtensions\Query\Mysql\Rand::class,
                'round' => \DoctrineExtensions\Query\Mysql\Round::class,
                'stddev' => \DoctrineExtensions\Query\Mysql\StdDev::class,
                'sin' => \DoctrineExtensions\Query\Mysql\Sin::class,
                'std' => \DoctrineExtensions\Query\Mysql\Std::class,
                'tan' => \DoctrineExtensions\Query\Mysql\Tan::class,
            ],
            'string' => [
                'ascii' => \DoctrineExtensions\Query\Mysql\Ascii::class,
                'binary' => \DoctrineExtensions\Query\Mysql\Binary::class,
                'char_length' => \DoctrineExtensions\Query\Mysql\CharLength::class,
                'concat_ws' => \DoctrineExtensions\Query\Mysql\ConcatWs::class,
                'countif' => \DoctrineExtensions\Query\Mysql\CountIf::class,
                'crc32' => \DoctrineExtensions\Query\Mysql\Crc32::class,
                'degrees' => \DoctrineExtensions\Query\Mysql\Degrees::class,
                'field' => \DoctrineExtensions\Query\Mysql\Field::class,
                'find_in_set' => \DoctrineExtensions\Query\Mysql\FindInSet::class,
                'greatest' => \DoctrineExtensions\Query\Mysql\Greatest::class,
                'group_concat' => \DoctrineExtensions\Query\Mysql\GroupConcat::class,
                'ifelse' => \DoctrineExtensions\Query\Mysql\IfElse::class,
                'ifnull' => \DoctrineExtensions\Query\Mysql\IfNull::class,
                'least' => \DoctrineExtensions\Query\Mysql\Least::class,
                'lpad' => \DoctrineExtensions\Query\Mysql\Lpad::class,
                'match' => \DoctrineExtensions\Query\Mysql\MatchAgainst::class,
                'md5' => \DoctrineExtensions\Query\Mysql\Md5::class,
                'nullif' => \DoctrineExtensions\Query\Mysql\NullIf::class,
                'radians' => \DoctrineExtensions\Query\Mysql\Radians::class,
                'regexp' => \DoctrineExtensions\Query\Mysql\Regexp::class,
                'replace' => \DoctrineExtensions\Query\Mysql\Replace::class,
                'rpad' => \DoctrineExtensions\Query\Mysql\Rpad::class,
                'sha1' => \DoctrineExtensions\Query\Mysql\Sha1::class,
                'sha2' => \DoctrineExtensions\Query\Mysql\Sha2::class,
                'soundex' => \DoctrineExtensions\Query\Mysql\Soundex::class,
                'substring_index' => \DoctrineExtensions\Query\Mysql\SubstringIndex::class,
                'uuid_short' => \DoctrineExtensions\Query\Mysql\UuidShort::class,
                'hex' => \DoctrineExtensions\Query\Mysql\Hex::class,
                'unhex' => \DoctrineExtensions\Query\Mysql\Unhex::class,
            ],
        ],
        'proxy_paths' => [
            OMEKA_PATH . '/application/data/doctrine-proxies',
        ],
    ],
    'installer' => [
        'pre_tasks' => [
            Installation\Task\CheckEnvironmentTask::class,
            Installation\Task\CheckDirPermissionsTask::class,
        ],
        'tasks' => [
            Installation\Task\DestroySessionTask::class,
            Installation\Task\ClearCacheTask::class,
            Installation\Task\InstallSchemaTask::class,
            Installation\Task\RecordMigrationsTask::class,
            Installation\Task\InstallDefaultVocabulariesTask::class,
            Installation\Task\InstallDefaultTemplatesTask::class,
            Installation\Task\CreateFirstUserTask::class,
            Installation\Task\AddDefaultSettingsTask::class,
        ],
    ],
    'translator' => [
        'locale' => 'en_US',
        'translation_file_patterns' => [
            [
                'type' => 'gettext',
                'base_dir' => OMEKA_PATH . '/application/language',
                'pattern' => '%s.mo',
                'text_domain' => null,
            ],
        ],
    ],
    'logger' => [
        'log' => false,
        'path' => OMEKA_PATH . '/logs/application.log',
        'priority' => \Laminas\Log\Logger::NOTICE,
    ],
    'http_client' => [
        'adapter' => \Laminas\Http\Client\Adapter\Socket::class,
        'sslcapath' => null,
        'sslcafile' => null,
    ],
    'cli' => [
        'execute_strategy' => 'auto',
        'phpcli_path' => null,
    ],
    'thumbnails' => [
        'types' => [
            'large' => [
                'strategy' => 'default',
                'constraint' => 800,
                'options' => [],
            ],
            'medium' => [
                'strategy' => 'default',
                'constraint' => 400,
                'options' => [],
            ],
            'square' => [
                'strategy' => 'square',
                'constraint' => 200,
                'options' => [
                    'gravity' => 'center',
                ],
            ],
        ],
        'fallbacks' => [
            'default' => ['thumbnails/default.png', 'Omeka'],
            'fallbacks' => [
                'image' => ['thumbnails/image.png', 'Omeka'],
                'video' => ['thumbnails/video.png', 'Omeka'],
                'audio' => ['thumbnails/audio.png', 'Omeka'],
            ],
        ],
        'thumbnailer_options' => [
            'imagemagick_dir' => null,
            'page' => 0,
        ],
    ],
    'service_manager' => [
        'abstract_factories' => [
            \Laminas\Navigation\Service\NavigationAbstractServiceFactory::class,
        ],
        'factories' => [
            'Omeka\Acl' => Service\AclFactory::class,
            'Omeka\ApiAdapterManager' => Service\ApiAdapterManagerFactory::class,
            'Omeka\ApiManager' => Service\ApiManagerFactory::class,
            'Omeka\AuthenticationService' => Service\AuthenticationServiceFactory::class,
            'Omeka\EntityManager' => Service\EntityManagerFactory::class,
            'Omeka\Installer' => Service\InstallerFactory::class,
            'Omeka\Logger' => Service\LoggerFactory::class,
            'Omeka\MigrationManager' => Service\MigrationManagerFactory::class,
            'Omeka\ViewApiJsonStrategy' => Service\ViewApiJsonStrategyFactory::class,
            'Omeka\ViewApiJsonRenderer' => Service\ViewApiJsonRendererFactory::class,
            'Omeka\HttpClient' => Service\HttpClientFactory::class,
            'Omeka\Mailer' => Service\MailerFactory::class,
            'Omeka\HtmlPurifier' => Service\HtmlPurifierFactory::class,
            'Omeka\BlockLayoutManager' => Service\BlockLayoutManagerFactory::class,
            'Omeka\ResourcePageBlockLayoutManager' => Service\ResourcePageBlockLayoutManagerFactory::class,
            'Omeka\DataTypeManager' => Service\DataTypeManagerFactory::class,
            'Omeka\Cli' => Service\CliFactory::class,
            'Omeka\Paginator' => Service\PaginatorFactory::class,
            'Omeka\RdfImporter' => Service\RdfImporterFactory::class,
            'Omeka\Site\ThemeManager' => Service\ThemeManagerFactory::class,
            'Omeka\Site\NavigationLinkManager' => Service\NavigationLinkManagerFactory::class,
            'Omeka\Site\NavigationTranslator' => Service\SiteNavigationTranslatorFactory::class,
            'Omeka\File\Thumbnailer\ImageMagick' => Service\File\Thumbnailer\ImageMagickFactory::class,
            'Omeka\File\Thumbnailer\Gd' => Service\File\Thumbnailer\GdFactory::class,
            'Omeka\File\Thumbnailer\Imagick' => Service\File\Thumbnailer\ImagickFactory::class,
            'Omeka\File\Thumbnailer\NoThumbnail' => Service\File\Thumbnailer\NoThumbnailFactory::class,
            'Omeka\File\Store\Local' => Service\File\Store\LocalFactory::class,
            'Omeka\File\MediaTypeMap' => Service\MediaTypeMapFactory::class,
            'Omeka\File\ThumbnailManager' => Service\File\ThumbnailManagerFactory::class,
            'Omeka\File\TempFileFactory' => Service\File\TempFileFactoryFactory::class,
            'Omeka\File\Downloader' => Service\File\DownloaderFactory::class,
            'Omeka\File\Uploader' => Service\File\UploaderFactory::class,
            'Omeka\File\Validator' => Service\File\ValidatorFactory::class,
            'Omeka\Settings' => Service\Settings\SettingsFactory::class,
            'Omeka\Settings\Site' => Service\Settings\SiteSettingsFactory::class,
            'Omeka\Settings\User' => Service\Settings\UserSettingsFactory::class,
            'Omeka\Settings\Fallback' => Service\Settings\FallbackSettingsFactory::class,
            'Omeka\Job\Dispatcher' => Service\Job\DispatcherFactory::class,
            'Omeka\Job\DispatchStrategy\PhpCli' => Service\Job\DispatchStrategy\PhpCliFactory::class,
            'Omeka\Job\DispatchStrategy\Synchronous' => Service\Job\DispatchStrategy\SynchronousFactory::class,
            'Omeka\Media\Ingester\Manager' => Service\Media\Ingester\ManagerFactory::class,
            'Omeka\Media\Renderer\Manager' => Service\Media\Renderer\ManagerFactory::class,
            'Omeka\Media\FileRenderer\Manager' => Service\Media\FileRenderer\ManagerFactory::class,
            'Omeka\FulltextSearch' => Service\FulltextSearchFactory::class,
            'Omeka\Environment' => Service\EnvironmentFactory::class,
            'Omeka\ColumnTypeManager' => Service\ColumnType\ManagerFactory::class,
            'Omeka\Browse' => Service\BrowseFactory::class,
            'Omeka\Oembed' => Service\OembedFactory::class,
        ],
        'invokables' => [
            'ModuleRouteListener' => \Laminas\Mvc\ModuleRouteListener::class,
            'Omeka\MvcExceptionListener' => Mvc\ExceptionListener::class,
            'Omeka\MvcListeners' => Mvc\MvcListeners::class,
        ],
        'delegators' => [
            'Laminas\I18n\Translator\TranslatorInterface' => [
                'Omeka\Service\Delegator\TranslatorDelegatorFactory',
            ],
        ],
        'aliases' => [
            'Omeka\File\Store' => 'Omeka\File\Store\Local',
            'Omeka\File\Thumbnailer' => 'Omeka\File\Thumbnailer\ImageMagick',
            'Omeka\Job\DispatchStrategy' => 'Omeka\Job\DispatchStrategy\PhpCli',
            'Omeka\JobDispatcher' => 'Omeka\Job\Dispatcher',
            'Laminas\Authentication\AuthenticationService' => 'Omeka\AuthenticationService',
        ],
        'shared' => [
            'Omeka\Paginator' => false,
            'Omeka\HttpClient' => false,
        ],
    ],
    'controllers' => [
        'invokables' => [
            'Omeka\Controller\Index' => Controller\IndexController::class,
            'Omeka\Controller\IiifViewer' => Controller\IiifViewerController::class,
            'Omeka\Controller\Search' => Controller\SearchController::class,
            'Omeka\Controller\Maintenance' => Controller\MaintenanceController::class,
            'Omeka\Controller\Site\Index' => Controller\Site\IndexController::class,
            'Omeka\Controller\Site\Item' => Controller\Site\ItemController::class,
            'Omeka\Controller\Site\ItemSet' => Controller\Site\ItemSetController::class,
            'Omeka\Controller\Site\Media' => Controller\Site\MediaController::class,
            'Omeka\Controller\Site\CrossSiteSearch' => Controller\Site\CrossSiteSearchController::class,
            'Omeka\Controller\Admin\Asset' => Controller\Admin\AssetController::class,
            'Omeka\Controller\Admin\Query' => Controller\Admin\QueryController::class,
            'Omeka\Controller\Admin\Columns' => Controller\Admin\ColumnsController::class,
            'Omeka\Controller\Admin\Index' => Controller\Admin\IndexController::class,
            'Omeka\Controller\Admin\ItemSet' => Controller\Admin\ItemSetController::class,
            'Omeka\Controller\Admin\Job' => Controller\Admin\JobController::class,
            'Omeka\Controller\Admin\Media' => Controller\Admin\MediaController::class,
            'Omeka\Controller\Admin\Property' => Controller\Admin\PropertyController::class,
            'Omeka\Controller\Admin\ResourceClass' => Controller\Admin\ResourceClassController::class,
            'Omeka\Controller\Admin\Setting' => Controller\Admin\SettingController::class,
            'Omeka\Controller\SiteAdmin\Page' => Controller\SiteAdmin\PageController::class,
        ],
        'factories' => [
            'Omeka\Controller\Login' => Service\Controller\LoginControllerFactory::class,
            'Omeka\Controller\Api' => Service\Controller\ApiControllerFactory::class,
            'Omeka\Controller\ApiLocal' => Service\Controller\ApiLocalControllerFactory::class,
            'Omeka\Controller\Install' => Service\Controller\InstallControllerFactory::class,
            'Omeka\Controller\Migrate' => Service\Controller\MigrateControllerFactory::class,
            'Omeka\Controller\Admin\Module' => Service\Controller\Admin\ModuleControllerFactory::class,
            'Omeka\Controller\Admin\User' => Service\Controller\Admin\UserControllerFactory::class,
            'Omeka\Controller\Admin\ResourceTemplate' => Service\Controller\Admin\ResourceTemplateControllerFactory::class,
            'Omeka\Controller\Admin\SystemInfo' => Service\Controller\Admin\SystemInfoControllerFactory::class,
            'Omeka\Controller\Admin\Vocabulary' => Service\Controller\Admin\VocabularyControllerFactory::class,
            'Omeka\Controller\Admin\Item' => Service\Controller\Admin\ItemControllerFactory::class,
            'Omeka\Controller\SiteAdmin\Index' => Service\Controller\SiteAdmin\IndexControllerFactory::class,
            'Omeka\Controller\Site\Page' => Service\Controller\Site\PageControllerFactory::class,
        ],
    ],
    'controller_plugins' => [
        'invokables' => [
            'messenger' => Mvc\Controller\Plugin\Messenger::class,
            'setBrowseDefaults' => Mvc\Controller\Plugin\SetBrowseDefaults::class,
            'currentSite' => Mvc\Controller\Plugin\CurrentSite::class,
            'mergeValuesJson' => Mvc\Controller\Plugin\MergeValuesJson::class,
        ],
        'factories' => [
            'api' => Service\ControllerPlugin\ApiFactory::class,
            'jobDispatcher' => Service\ControllerPlugin\JobDispatcherFactory::class,
            'logger' => Service\ControllerPlugin\LoggerFactory::class,
            'paginator' => Service\ControllerPlugin\PaginatorFactory::class,
            'translate' => Service\ControllerPlugin\TranslateFactory::class,
            'getForm' => Service\ControllerPlugin\GetFormFactory::class,
            'userIsAllowed' => Service\ControllerPlugin\UserIsAllowedFactory::class,
            'mailer' => Service\ControllerPlugin\MailerFactory::class,
            'settings' => Service\ControllerPlugin\SettingsFactory::class,
            'siteSettings' => Service\ControllerPlugin\SiteSettingsFactory::class,
            'userSettings' => Service\ControllerPlugin\UserSettingsFactory::class,
            'fallbackSettings' => Service\ControllerPlugin\FallbackSettingsFactory::class,
            'status' => Service\ControllerPlugin\StatusFactory::class,
            'viewHelpers' => Service\ControllerPlugin\ViewHelpersFactory::class,
            'browse' => Service\ControllerPlugin\BrowseFactory::class,
        ],
    ],
    'api_adapters' => [
        'invokables' => [
            'users' => Api\Adapter\UserAdapter::class,
            'vocabularies' => Api\Adapter\VocabularyAdapter::class,
            'resource_classes' => Api\Adapter\ResourceClassAdapter::class,
            'resource_templates' => Api\Adapter\ResourceTemplateAdapter::class,
            'properties' => Api\Adapter\PropertyAdapter::class,
            'items' => Api\Adapter\ItemAdapter::class,
            'media' => Api\Adapter\MediaAdapter::class,
            'item_sets' => Api\Adapter\ItemSetAdapter::class,
            'value_annotations' => Api\Adapter\ValueAnnotationAdapter::class,
            'modules' => Api\Adapter\ModuleAdapter::class,
            'sites' => Api\Adapter\SiteAdapter::class,
            'site_pages' => Api\Adapter\SitePageAdapter::class,
            'jobs' => Api\Adapter\JobAdapter::class,
            'resources' => Api\Adapter\ResourceAdapter::class,
            'assets' => Api\Adapter\AssetAdapter::class,
            'api_resources' => Api\Adapter\ApiResourceAdapter::class,
            'data_types' => Api\Adapter\DataTypeAdapter::class,
        ],
    ],
    'view_helpers' => [
        'invokables' => [
            'pageTitle' => View\Helper\PageTitle::class,
            'htmlElement' => View\Helper\HtmlElement::class,
            'hyperlink' => View\Helper\Hyperlink::class,
            'messages' => View\Helper\Messages::class,
            'sortLink' => View\Helper\SortLink::class,
            'sortSelector' => View\Helper\SortSelector::class,
            'filterSelector' => View\Helper\FilterSelector::class,
            'propertySelector' => View\Helper\PropertySelector::class,
            'itemSetSelector' => View\Helper\ItemSetSelector::class,
            'siteSelector' => View\Helper\SiteSelector::class,
            'userSelector' => View\Helper\UserSelector::class,
            'searchFilters' => View\Helper\SearchFilters::class,
            'blockAttachmentsForm' => View\Helper\BlockAttachmentsForm::class,
            'blockShowTitleSelect' => View\Helper\BlockShowTitleSelect::class,
            'ckEditor' => View\Helper\CkEditor::class,
            'sitePagePagination' => View\Helper\SitePagePagination::class,
            'sectionNav' => View\Helper\SectionNav::class,
            'uploadLimit' => View\Helper\UploadLimit::class,
            'formRecaptcha' => Form\View\Helper\FormRecaptcha::class,
            'formCkeditor' => Form\View\Helper\FormCkeditor::class,
            'formCkeditorInline' => Form\View\Helper\FormCkeditorInline::class,
            'formRestoreTextarea' => Form\View\Helper\FormRestoreTextarea::class,
            'formCollectionElementGroups' => Form\View\Helper\FormCollectionElementGroups::class,
            'formCollectionElementGroupsCollapsible' => Form\View\Helper\FormCollectionElementGroupsCollapsible::class,
            'queryToHiddenInputs' => View\Helper\QueryToHiddenInputs::class,
            'formAsset' => Form\View\Helper\FormAsset::class,
            'formQuery' => Form\View\Helper\FormQuery::class,
            'formColumns' => Form\View\Helper\FormColumns::class,
            'formBrowseDefaults' => Form\View\Helper\FormBrowseDefaults::class,
            'themeSettingAsset' => View\Helper\ThemeSettingAsset::class,
            'themeSettingAssetUrl' => View\Helper\ThemeSettingAssetUrl::class,
            'formColorPicker' => Form\View\Helper\FormColorPicker::class,
            'thumbnail' => View\Helper\Thumbnail::class,
            'userBar' => View\Helper\UserBar::class,
            'cancelButton' => View\Helper\CancelButton::class,
            'sortMedia' => View\Helper\SortMedia::class,
            'lightGalleryOutput' => View\Helper\LightGalleryOutput::class,
            'iiifViewer' => View\Helper\IiifViewer::class,
            'currentSite' => View\Helper\CurrentSite::class,
        ],
        'factories' => [
            'api' => Service\ViewHelper\ApiFactory::class,
            'assetUrl' => Service\ViewHelper\AssetUrlFactory::class,
            'pageLayout' => Service\ViewHelper\PageLayoutFactory::class,
            'blockLayout' => Service\ViewHelper\BlockLayoutFactory::class,
            'blockThumbnailTypeSelect' => Service\ViewHelper\BlockThumbnailTypeSelectFactory::class,
            'dataType' => Service\ViewHelper\DataTypeFactory::class,
            'i18n' => Service\ViewHelper\I18nFactory::class,
            'logger' => Service\ViewHelper\LoggerFactory::class,
            'media' => Service\ViewHelper\MediaFactory::class,
            'navigationLink' => Service\ViewHelper\NavigationLinkFactory::class,
            'pagination' => Service\ViewHelper\PaginationFactory::class,
            'params' => Service\ViewHelper\ParamsFactory::class,
            'setting' => Service\ViewHelper\SettingFactory::class,
            'userSetting' => Service\ViewHelper\UserSettingFactory::class,
            'siteSetting' => Service\ViewHelper\SiteSettingFactory::class,
            'fallbackSetting' => Service\ViewHelper\FallbackSettingFactory::class,
            'themeSetting' => Service\ViewHelper\ThemeSettingFactory::class,
            'trigger' => Service\ViewHelper\TriggerFactory::class,
            'userIsAllowed' => Service\ViewHelper\UserIsAllowedFactory::class,
            'deleteConfirm' => Service\ViewHelper\DeleteConfirmFactory::class,
            'resourceClassSelect' => Service\ViewHelper\ResourceClassSelectFactory::class,
            'resourceTemplateSelect' => Service\ViewHelper\ResourceTemplateSelectFactory::class,
            'propertySelect' => Service\ViewHelper\PropertySelectFactory::class,
            'itemSetSelect' => Service\ViewHelper\ItemSetSelectFactory::class,
            'roleSelect' => Service\ViewHelper\RoleSelectFactory::class,
            'userSelect' => Service\ViewHelper\UserSelectFactory::class,
            'searchUserFilters' => Service\ViewHelper\SearchUserFiltersFactory::class,
            'siteSelect' => Service\ViewHelper\SiteSelectFactory::class,
            'resourceSelect' => Service\ViewHelper\ResourceSelectFactory::class,
            'jsTranslate' => Service\ViewHelper\JsTranslateFactory::class,
            'lang' => Service\ViewHelper\LangFactory::class,
            'status' => Service\ViewHelper\StatusFactory::class,
            'passwordRequirements' => Service\ViewHelper\PasswordRequirementsFactory::class,
            'resourcePageBlocks' => Service\ViewHelper\ResourcePageBlocksFactory::class,
            'browse' => Service\ViewHelper\BrowseFactory::class,
        ],
        'shared' => [
            'resourcePageBlocks' => false,
        ],
        'delegators' => [
            'Laminas\Form\View\Helper\FormElement' => [
                Service\Delegator\FormElementDelegatorFactory::class,
            ],
            'Laminas\Form\View\Helper\FormSelect' => [
                Service\Delegator\FormSelectDelegatorFactory::class,
            ],
            'Laminas\Form\View\Helper\FormRow' => [
                Service\Delegator\FormRowDelegatorFactory::class,
            ],
            'Laminas\View\Helper\Navigation' => [
                Service\Delegator\NavigationDelegatorFactory::class,
            ],
            'Laminas\View\Helper\HeadTitle' => [
                Service\Delegator\HeadTitleDelegatorFactory::class,
            ],
            'Laminas\View\Helper\Url' => [
                Service\Delegator\UrlDelegatorFactory::class,
            ],
        ],
    ],
    'form_elements' => [
        'initializers' => [
            Form\Initializer\Csrf::class,
            Form\Initializer\EventManager::class,
        ],
        'factories' => [
            'Omeka\Form\ResourceForm' => Service\Form\ResourceFormFactory::class,
            'Omeka\Form\VocabularyForm' => Service\Form\VocabularyFormFactory::class,
            'Omeka\Form\ResourceBatchUpdateForm' => Service\Form\ResourceBatchUpdateFormFactory::class,
            'Omeka\Form\UserForm' => Service\Form\UserFormFactory::class,
            'Omeka\Form\SettingForm' => Service\Form\SettingFormFactory::class,
            'Omeka\Form\ModuleStateChangeForm' => Service\Form\ModuleStateChangeFormFactory::class,
            'Omeka\Form\SiteSettingsForm' => Service\Form\SiteSettingsFormFactory::class,
            'Omeka\Form\PageLayoutDataForm' => Service\Form\PageLayoutDataFormFactory::class,
            'Omeka\Form\BlockLayoutDataForm' => Service\Form\BlockLayoutDataFormFactory::class,
            'Omeka\Form\SitePageForm' => Service\Form\SitePageFormFactory::class,
            'Omeka\Form\Element\ResourceSelect' => Service\Form\Element\ResourceSelectFactory::class,
            'Omeka\Form\Element\ResourceClassSelect' => Service\Form\Element\ResourceClassSelectFactory::class,
            'Omeka\Form\Element\ResourceTemplateSelect' => Service\Form\Element\ResourceTemplateSelectFactory::class,
            'Omeka\Form\Element\PropertySelect' => Service\Form\Element\PropertySelectFactory::class,
            'Omeka\Form\Element\ItemSetSelect' => Service\Form\Element\ItemSetSelectFactory::class,
            'Omeka\Form\Element\SiteSelect' => Service\Form\Element\SiteSelectFactory::class,
            'Omeka\Form\Element\LocaleSelect' => Service\Form\Element\LocaleSelectFactory::class,
            'Omeka\Form\Element\RoleSelect' => Service\Form\Element\RoleSelectFactory::class,
            'Omeka\Form\Element\UserSelect' => Service\Form\Element\UserSelectFactory::class,
            'Omeka\Form\Element\Recaptcha' => Service\Form\Element\RecaptchaFactory::class,
            'Omeka\Form\Element\HtmlTextarea' => Service\Form\Element\HtmlTextareaFactory::class,
            'Omeka\Form\Element\Ckeditor' => Service\Form\Element\CkeditorFactory::class,
            'Omeka\Form\Element\CkeditorInline' => Service\Form\Element\CkeditorInlineFactory::class,
            'Omeka\Form\Element\PasswordConfirm' => Service\Form\Element\PasswordConfirmFactory::class,
            'Omeka\Form\Element\SitePageSelect' => Service\Form\Element\SitePageSelectFactory::class,
        ],
    ],
    'data_types' => [
        'invokables' => [
            'literal' => DataType\Literal::class,
            'uri' => DataType\Uri::class,
            'resource' => DataType\Resource\All::class,
            'resource:item' => DataType\Resource\Item::class,
            'resource:itemset' => DataType\Resource\ItemSet::class,
            'resource:media' => DataType\Resource\Media::class,
        ],
        'value_annotating' => [
            'literal',
            'uri',
            'resource:item',
            'resource:itemset',
            'resource:media',
        ]
    ],
    'column_types' => [
        'invokables' => [
            'created' => ColumnType\Created::class,
            'id' => ColumnType\Id::class,
            'is_open' => ColumnType\IsOpen::class,
            'is_public' => ColumnType\IsPublic::class,
            'media_type' => ColumnType\MediaType::class,
            'modified' => ColumnType\Modified::class,
            'owner' => ColumnType\Owner::class,
            'resource_class' => ColumnType\ResourceClass::class,
            'resource_template' => ColumnType\ResourceTemplate::class,
            'size' => ColumnType\Size::class,
            'slug' => ColumnType\Slug::class,
        ],
        'factories' => [
            'theme' => Service\ColumnType\ThemeFactory::class,
            'value' => Service\ColumnType\ValueFactory::class,
        ],
    ],
    'column_defaults' => [
        'admin' => [
            'items' => [
                ['type' => 'resource_class'],
                ['type' => 'owner'],
                ['type' => 'created'],
            ],
            'item_sets' => [
                ['type' => 'resource_class'],
                ['type' => 'owner'],
                ['type' => 'created'],
            ],
            'media' => [
                ['type' => 'resource_class'],
                ['type' => 'owner'],
                ['type' => 'created'],
            ],
            'sites' => [
                ['type' => 'slug'],
                ['type' => 'owner'],
                ['type' => 'created'],
            ],
        ],
        'public' => [],
    ],
    'browse_defaults' => [
        'admin' => [
            'items' => [
                'sort_by' => 'created',
                'sort_order' => 'desc',
            ],
            'item_sets' => [
                'sort_by' => 'created',
                'sort_order' => 'desc',
            ],
            'media' => [
                'sort_by' => 'created',
                'sort_order' => 'desc',
            ],
            'sites' => [
                'sort_by' => 'title',
                'sort_order' => 'asc',
            ],
            'assets' => [
                'sort_by' => 'id',
                'sort_order' => 'desc',
            ],
            'jobs' => [
                'sort_by' => 'id',
                'sort_order' => 'desc',
            ],
            'resource_templates' => [
                'sort_by' => 'label',
                'sort_order' => 'asc',
            ],
            'users' => [
                'sort_by' => 'email',
                'sort_order' => 'asc',
            ],
            'vocabularies' => [
                'sort_by' => 'label',
                'sort_order' => 'asc',
            ],
            'resource_classes' => [
                'sort_by' => 'label',
                'sort_order' => 'asc',
            ],
            'properties' => [
                'sort_by' => 'label',
                'sort_order' => 'asc',
            ],
            'site_pages' => [
                'sort_by' => 'nav',
                'sort_order' => 'asc',
            ],
        ],
        'public' => [
            'items' => [
                'sort_by' => 'created',
                'sort_order' => 'desc',
            ],
        ],
    ],
    'sort_defaults' => [
        'admin' => [
            'items' => [
                'title' => 'Title', // @translate
                'resource_class_label' => 'Resource class', // @translate
                'owner_name' => 'Owner', // @translate
                'created' => 'Created', // @translate
            ],
            'item_sets' => [
                'title' => 'Title', // @translate
                'resource_class_label' => 'Resource class', // @translate
                'owner_name' => 'Owner', // @translate
                'created' => 'Created', // @translate
            ],
            'media' => [
                'title' => 'Title', // @translate
                'resource_class_label' => 'Resource class', // @translate
                'owner_name' => 'Owner', // @translate
                'created' => 'Created', // @translate
            ],
            'sites' => [
                'title' => 'Title', // @translate
                'slug' => 'URL slug', // @translate
                'owner_name' => 'Owner', // @translate
                'created' => 'Created', // @translate
            ],
            'assets' => [
                'name' => 'Name', // @translate
                'id' => 'ID', // @translate
            ],
            'jobs' => [
                'id' => 'ID', // @translate
                'class' => 'Class', // @translate
                'status' => 'Status', // @translate
                'owner_email' => 'Owner email', // @translate
            ],
            'resource_templates' => [
                'label' => 'Label', // @translate
                'resource_class_label' => 'Resource class', // @translate
                'owner_name' => 'Owner', // @translate
                'item_count' => 'Item count', // @translate
            ],
            'users' => [
                'email' => 'Email', // @translate
                'role' => 'Role', // @translate
                'created' => 'Created', // @translate
            ],
            'vocabularies' => [
                'label' => 'Label', // @translate
                'prefix' => 'Prefix', // @translate
                'resource_class_count' => 'Resource class count', // @translate
                'property_count' => 'Property count', // @translate
            ],
            'resource_classes' => [
                'label' => 'Label', // @translate
                'local_name' => 'Term', // @translate
                'item_count' => 'Item count', // @translate
            ],
            'properties' => [
                'label' => 'Label', // @translate
                'local_name' => 'Term', // @translate
                'item_count' => 'Item count', // @translate
            ],
            'site_pages' => [
                'title' => 'Title', // @translate
                'slug' => 'URL slug', // @translate
                'created' => 'Created', // @translate
                'modified' => 'Modified', // @translate
                'nav' => 'Navigation', // @translate
            ],
        ],
        'public' => [
            'items' => [
                'title' => 'Title', // @translate
                'resource_class_label' => 'Resource class', // @translate
                'created' => 'Created', // @translate
            ],
        ],
    ],
    'page_templates' => [],
    'block_templates' => [],
    'block_layouts' => [
        'invokables' => [
            'pageTitle' => Site\BlockLayout\PageTitle::class,
            'media' => Site\BlockLayout\Media::class,
            'browsePreview' => Site\BlockLayout\BrowsePreview::class,
            'listOfSites' => Site\BlockLayout\ListOfSites::class,
            'tableOfContents' => Site\BlockLayout\TableOfContents::class,
            'lineBreak' => Site\BlockLayout\LineBreak::class,
            'itemWithMetadata' => Site\BlockLayout\ItemWithMetadata::class,
            'pageDateTime' => Site\BlockLayout\PageDateTime::class,
            'blockGroup' => Site\BlockLayout\BlockGroup::class,
        ],
        'factories' => [
            'asset' => Service\BlockLayout\AssetFactory::class,
            'html' => Service\BlockLayout\HtmlFactory::class,
            'listOfPages' => Service\BlockLayout\PageListFactory::class,
            'oembed' => Service\BlockLayout\OembedFactory::class,
        ],
    ],
    'resource_page_block_layouts' => [
        'invokables' => [
            'itemSets' => Site\ResourcePageBlockLayout\ItemSets::class,
            'lightboxGallery' => Site\ResourcePageBlockLayout\LightboxGallery::class,
            'linkedResources' => Site\ResourcePageBlockLayout\LinkedResources::class,
            'mediaEmbeds' => Site\ResourcePageBlockLayout\MediaEmbeds::class,
            'mediaList' => Site\ResourcePageBlockLayout\MediaList::class,
            'mediaRender' => Site\ResourcePageBlockLayout\MediaRender::class,
            'resourceClass' => Site\ResourcePageBlockLayout\ResourceClass::class,
            'sitePages' => Site\ResourcePageBlockLayout\SitePages::class,
            'values' => Site\ResourcePageBlockLayout\Values::class,
        ],
    ],
    'resource_page_blocks_default' => [
        'items' => [
            'main' => [],
        ],
        'item_sets' => [
            'main' => [],
        ],
        'media' => [
            'main' => [],
        ],
    ],
    'navigation_links' => [
        'invokables' => [
            'page' => Site\Navigation\Link\Page::class,
            'url' => Site\Navigation\Link\Url::class,
        ],
        'factories' => [
            'browse' => Service\Site\Navigation\Link\BrowseFactory::class,
            'browseItemSets' => Service\Site\Navigation\Link\BrowseItemSetsFactory::class,
        ],
    ],
    'media_ingesters' => [
        'factories' => [
            'upload' => Service\Media\Ingester\UploadFactory::class,
            'url' => Service\Media\Ingester\UrlFactory::class,
            'html' => Service\Media\Ingester\HtmlFactory::class,
            'iiif' => Service\Media\Ingester\IIIFFactory::class,
            'iiif_presentation' => Service\Media\Ingester\IiifPresentationFactory::class,
            'oembed' => Service\Media\Ingester\OEmbedFactory::class,
            'youtube' => Service\Media\Ingester\YoutubeFactory::class,
        ],
    ],
    'media_renderers' => [
        'invokables' => [
            'youtube' => Media\Renderer\Youtube::class,
            'html' => Media\Renderer\Html::class,
            'iiif' => Media\Renderer\IIIF::class,
            'iiif_presentation' => Media\Renderer\IiifPresentation::class,
        ],
        'factories' => [
            'file' => Service\Media\Renderer\FileFactory::class,
            'oembed' => Service\Media\Renderer\OEmbedFactory::class,
        ],
    ],
    'file_renderers' => [
        'invokables' => [
            'fallback' => Media\FileRenderer\FallbackRenderer::class,
            'thumbnail' => Media\FileRenderer\ThumbnailRenderer::class,
            'audio' => Media\FileRenderer\AudioRenderer::class,
            'video' => Media\FileRenderer\VideoRenderer::class,
        ],
        'aliases' => [
            'audio/ogg' => 'audio',
            'audio/x-aac' => 'audio',
            'audio/mpeg' => 'audio',
            'audio/mp4' => 'audio',
            'audio/x-wav' => 'audio',
            'audio/x-aiff' => 'audio',
            'application/ogg' => 'video',
            'video/mp4' => 'video',
            'video/quicktime' => 'video',
            'video/x-msvideo' => 'video',
            'video/ogg' => 'video',
            'video/webm' => 'video',
            'mp3' => 'audio',
        ],
    ],
    'oembed' => [
        'whitelist' => [
            '#^https?://(www\.)?youtube\.com/watch.*$#i',
            '#^https?://(www\.)?youtube\.com/playlist.*$#i',
            '#^https?://youtu\.be/.*$#i',
            '#^http://blip.tv/*$#',
            '#^https?://(.+\.)?vimeo\.com/.*$#i',
            '#^https?://(www\.)?dailymotion\.com/.*$#i',
            '#^http://dai.ly/*$#',
            '#^https?://(www\.)?flickr\.com/.*$#i',
            '#^https?://flic\.kr/.*$#i',
            '#^https?://(.+\.)?smugmug\.com/.*$#i',
            '#^https?://(www\.)?hulu\.com/watch/.*$#i',
            '#^http://revision3.com/*$#',
            '#^http://i*.photobucket.com/albums/*$#',
            '#^http://gi*.photobucket.com/groups/*$#',
            '#^https?://(www\.)?scribd\.com/doc/.*$#i',
            '#^https?://wordpress.tv/.*$#i',
            '#^https?://(.+\.)?polldaddy\.com/.*$#i',
            '#^https?://poll\.fm/.*$#i',
            '#^https?://(www\.)?funnyordie\.com/videos/.*$#i',
            '#^https?://(www\.)?twitter\.com/.+?/status(es)?/.*$#i',
            '#^https?://(www\.)?soundcloud\.com/.*$#i',
            '#^https?://(www\.)?slideshare\.net/.*$#i',
            '#^https?://(www\.)?rdio\.com/.*$#i',
            '#^https?://rd\.io/x/.*$#i',
            '#^https?://(open|play)\.spotify\.com/.*$#i',
            '#^https?://(.+\.)?imgur\.com/.*$#i',
            '#^https?://(www\.)?meetu(\.ps|p\.com)/.*$#i',
            '#^https?://(www\.)?issuu\.com/.+/docs/.+$#i',
            '#^https?://(www\.)?collegehumor\.com/video/.*$#i',
            '#^https?://(www\.)?mixcloud\.com/.*$#i',
            '#^https?://(www\.|embed\.)?ted\.com/talks/.*$#i',
            '#^https?://(www\.)?(animoto|video214)\.com/play/.*$#i',
        ],
    ],
    'mail' => [
        'transport' => [
            'type' => 'sendmail',
            'options' => [],
        ],
        'default_message_options' => [
            'encoding' => 'UTF-8',
        ],
    ],
    'js_translate_strings' => [
        'Something went wrong', // @translate
        'Make private', // @translate
        'Make public', // @translate
        'Expand', // @translate
        'Collapse', // @translate
        'You have unsaved changes.', // @translate
        'Restore item set', // @translate
        'Close icon set', // @translate
        'Open icon set', // @translate
        '[Untitled]', // @translate
        'Failed loading resource template from API', // @translate
        'Restore property', // @translate
        'There are no available pages.', // @translate
        'Please enter a valid language tag', // @translate
        'Title', // @translate
        'Description', // @translate
        'Unknown block layout', // @translate
        'Required field must be completed', // @translate
    ],
];
