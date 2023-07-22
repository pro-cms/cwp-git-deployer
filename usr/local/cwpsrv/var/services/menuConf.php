<?php
$menu = [
    'settings'=>[
        'url'=>'?',
        'label'=>'CWP Settings',
        'order'=>0,
        'icon'=>'fa fa-bar-chart-o',
        'modules'=>[
            'crontab'=>[
                'url'=>'crontab',
                'label'=>'Crontab',
                'type' =>'url',
                'order'=>0,
                'icon'=>'fab fa-linode fa-3x',
            ],
            'processlist'=>[
                'url'=>'processlist',
                'label'=>'Process List',
                'type' =>'modal',
                'order'=>1,
                'icon'=>'fab fa-free-code-camp fa-3x',
            ],
            'phpini_editor'=>[
                'url'=>'phpini_editor',
                'label'=>'Php.ini Editor',
                'type' =>'url',
                'order'=>2,
                'icon'=>'fa fa-edit fa-3x',
            ],
            'phpselector'=>[
                'url'=>'phpselector',
                'label'=>'PHP Selector',
                'type' =>'url',
                'order'=>3,
                'icon'=>'fab fa-php fa-3x',
            ],
            'notification_center'=>[
                'url'=>'notification_center',
                'label'=>'Notification Center',
                'type' =>'url',
                'order'=>4,
                'icon'=>'fa fa-bell fa-3x',
            ],
            'mod_security'=>[
                'url'=>'mod_security',
                'label'=>'Mod Security Configuration',
                'type' =>'url',
                'order'=>5,
                'icon'=>'fa fa-lock fa-3x',
            ],
            'statistics'=>[
                'url'=>'statistics',
                'label'=>'Statistics',
                'type' =>'url',
                'order'=>6,
                'icon'=>'fab fa-stack-overflow fa-3x',
            ],
            'fix_acc_perm'=>[
                'url'=>'fix_acc_perm',
                'label'=>'Fix Account Issues',
                'type' =>'url',
                'order'=>7,
                'icon'=>'fab fa-stack-overflow fa-3x',
            ],

        ]
    ],
    'file_management'=>[
        'url'=>'?',
        'label'=>'File Management',
        'order'=>1,
        'icon'=>'fa fa-edit',
        'modules'=>[
            'file_system_lock'=>[
                'url'=>'files_system_lock',
                'label'=>'Files System Lock',
                'type' =>'modal',
                'order'=>0,
                'icon'=>'fa fa-lock fa-3x',
            ],
            'clam'=>[
                'url'=>'clam',
                'label'=>'Antivirus Scan',
                'type' =>'url',
                'order'=>1,
                'icon'=>'',
                'tabs'=>[
                    'scan_home'=>[
                        'label'=>'Home Scan'
                    ],
                    'scan_web'=>[
                        'label'=>'Web Scan'
                    ],
                    'scan_email'=>[
                        'label'=>'Email Scan'
                    ],
                    'scan_custom'=>[
                        'label'=>'Custom Scan'
                    ],
                ],
            ],
            'fileManager'=>[
                'url'=>'filemanager',
                'label'=>'File Manager',
                'type' =>'page',
                'order'=>2,
                'icon'=>'fa fa-file-archive-o fa-3x',
            ],
            'ftp_accounts'=>[
                'url'=>'ftp_accounts',
                'label'=>'FTP Accounts',
                'type' =>'url',
                'order'=>3,
                'icon'=>'fa fa-file-code-o fa-3x',
            ],
            'backups'=>[
                'url'=>'backups',
                'label'=>'Account backups',
                'type' =>'url',
                'order'=>4,
                'icon'=>'fa fa-cloud fa-3x',
                'tabs'=>[
                    'backup_manager'=>[
                        'label'=>'Backup Manager'
                    ],
                    'automatic_backup'=>[
                        'label'=>'Automatic Backup'
                    ],
                    'restore_backup'=>[
                        'label'=>'Restore Backup'
                    ],
                ],
            ],
            'disk_usage'=>[
                'url'=>'disk_usage',
                'label'=>'Disk Usage',
                'type' =>'url',
                'order'=>5,
                'icon'=>'fa fa-hdd-o fa-3x',
            ],
            'protected_directory'=>[
                'url'=>'protected_directory',
                'label'=>'Protected Directory (Only Apache)',
                'type' =>'url',
                'order'=>6,
                'icon'=>'fa fa-unlock-alt fa-3x',
            ],
            'error_log'=>[
                'url'=>'error_log',
                'label'=>'Error Log Viewer',
                'type' =>'url',
                'order'=>7,
                'icon'=>'fa fa-search fa-3x',
            ],
            'fix_acc_perm'=>[
                'url'=>'fix_acc_perm',
                'label'=>'Fix Account Issues & Permissions',
                'type' =>'url',
                'order'=>8,
                'icon'=>'fa fa-ambulance fa-3x',
            ],
          'deploymodule'=>[
                'url'=>'deploymodule',
                'label'=>'Deploy from github',
                'type' =>'url',
                'order'=>9,
                'icon'=>'fa fa-github fa-3x',
            ],
        ]
    ],
    'domain'=>[
        'url'=>'?',
        'label'=>'Domains',
        'order'=>1,
        'icon'=>'fa fa-globe',
        'modules'=>[
            'domains'=>[
                'url'=>'domains',
                'label'=>'Domains',
                'type' =>'url',
                'order'=>0,
                'icon'=>'fa fa-globe fa-3x',
            ],
            'subdomains'=>[
                'url'=>'subdomains',
                'label'=>'Sub Domains',
                'type' =>'url',
                'order'=>1,
                'icon'=>'fa fa-umbrella fa-3x',
            ],
            'autossl'=>[
                'url'=>'letsencrypt',
                'label'=>'AutoSSL',
                'type' =>'url',
                'order'=>2,
                'icon'=>'fa fa-dollar fa-3x',
            ],
           'force_ssl'=>[
                'url'=>'force_ssl',
                'label'=>'Force Https',
                'type' =>'url',
                'order'=>2,
                'icon'=>'fa fa-lock fa-3x',
            ],
            'sslwizard'=>[
                'url'=>'sslwizard',
                'label'=>'Custom SSl',
                'type' =>'url',
                'order'=>3,
                'icon'=>'fa fa-dollar fa-3x',
            ],
            'nodejs_manager'=>[
                'url'=>'nodejs_manager',
                'label'=>'Node.JS Apps',
                'type' =>'url',
                'order'=>4,
                'icon'=>'',
            ],'redirect'=>[
                'url'=>'redirect',
                'label'=>'Redirects',
                'type' =>'url',
                'order'=>5,
                'icon'=>'',
                'cond'=>'onlyapache'
            ],'vdomaincache'=>[
                'url'=>'vdomaincache',
                'label'=>'Clear Cache',
                'type' =>'url',
                'order'=>6,
                'icon'=>'fa fa-space-shuttle fa-3x',
                'show'=>'true',
            ],'tomcat_manager'=>[
                'url'=>'tomcat_manager',
                'label'=>'Tomcat Manager',
                'type' =>'url',
                'order'=>7,
                'icon'=>'fa fa-space-shuttle fa-3x',
                'show'=>'true',
            ],
        ],
    ],
    'databases'=>[
        'url'=>'?',
        'label'=>'Databases',
        'order'=>3,
        'icon'=>'fa fa-database',
        'modules'=>[
            'phpmyadmin'=>[
                'url'=>'pma',
                'label'=>'phpMyAdmin',
                'type' =>'page',
                'order'=>0,
                'icon'=>'fa fa-database fa-3x',
            ],
            'mysql_manager'=>[
                'url'=>'mysql_manager',
                'label'=>'Mysql Manager',
                'type' =>'url',
                'order'=>1,
                'icon'=>'fa fa-graduation-cap fa-3x',
            ],
            'process_list'=>[
                'url'=>'process_list',
                'label'=>'Process List',
                'type' =>'modal',
                'order'=>2,
                'icon'=>'fa fa-database fa-3x',
            ],
            'postgresql_manager'=>[
                'url'=>'postgresql_manager',
                'label'=>'Postgres Manager',
                'type' =>'url',
                'order'=>3,
                'icon'=>'fa fa-database fa-3x',
            ],
            'mongodb_manager'=>[
                'url'=>'mongodb_manager',
                'label'=>'Mongo DataBase',
                'type' =>'url',
                'order'=>4,
                'icon'=>'fa fa-database fa-3x',
            ],
        ],
    ],
    'emails_accounts'=>[
        'url'=>'?',
        'label'=>'Email Accounts',
        'order'=>4,
        'icon'=>'fa fa-envelope',
        'modules'=>[
            'email_accounts'=>[
                'url'=>'email_accounts',
                'label'=>'Mail Box accounts list',
                'type' =>'url',
                'order'=>0,
                'icon'=>'fa fa-at fa-3x',
            ],
            'forwarders_email'=>[
                'url'=>'forwarders_email',
                'label'=>'Mail Forwarders list',
                'type' =>'url',
                'order'=>1,
                'icon'=>'fa fa-share fa-3x',
                'tabs'=>[
                    'mail_forwarders'=>[
                        'label'=>'Mail Forwarders (Alias)'
                    ],
                    'mail_forwarders_pipe'=>[
                        'label'=>'Mail Forwarders (Alias - Pipe)'
                    ]
                ]
            ],
            'mail_autoreply'=>[
                'url'=>'mail_autoreply',
                'label'=>'List of Email Auto Responders',
                'type' =>'url',
                'order'=>2,
                'icon'=>'fa fa-envelope fa-3x',
            ],
            'email_filters'=>[
                'url'=>'email_filters',
                'label'=>'Email filters',
                'type' =>'url',
                'order'=>3,
                'icon'=>'fa fa-filter fa-3x',
                'tabs'=>[
                    'email_filters_tab'=>[
                        'label'=>'Email Filters'
                    ],
                    'filters_templates'=>[
                        'label'=>'Filter Templates'
                    ],
                ]
            ],
            'roundcube'=>[
                'url'=>'roundcube',
                'label'=>'Roundcube Webmail',
                'type' =>'page',
                'order'=>4,
                'icon'=>'fa fa-compass fa-3x',
            ],
            'mail_routing'=>[
                'url'=>'mail_routing',
                'label'=>'Email Routing (remote/local)',
                'type' =>'url',
                'order'=>5,
                'icon'=>'fa fa-envelope fa-3x',
            ],
            'email_importer'=>[
                'url'=>'email_importer',
                'label'=>'Email accounts/forwarders importer',
                'type' =>'url',
                'order'=>6,
                'icon'=>'fa fa-download fa-3x',
            ],
        ],
    ],
    'dns_functions'=>[
        'url'=>'?',
        'label'=>'DNS Fuctions',
        'order'=>6,
        'icon'=>'fa fa-envelope',
        'modules'=>[
            'dns_zone_editor'=>[
                'url'=>'dns_zone_editor',
                'label'=>'DNS Zone Editor',
                'type' =>'url',
                'order'=>0,
                'icon'=>'fa fa-cogs fa-3x',
            ],
        ],
    ],
    'addons'=>[
        'url'=>'?',
        'label'=>'Addons',
        'order'=>6,
        'icon'=>'fa fa-download',
        'modules'=>[
            'scripts'=>[
                'url'=>'scripts',
                'label'=>'Module Addons',
                'type' =>'url',
                'order'=>0,
                'icon'=>'',
            ],
            'softaculous'=>[
                'url'=>'softaculous',
                'label'=>'Softaculous',
                'type' =>'url',
                'order'=>1,
                'icon'=>'',
            ],
            'sitepad'=>[
                'url'=>'sitepad',
                'label'=>'Sitepad',
                'type' =>'url',
                'order'=>2,
                'icon'=>'',
            ],
            'fant3menu'=>[
                'url'=>'fantastico_f3',
                'label'=>'Fantastico',
                'type' =>'url',
                'order'=>3,
                'icon'=>'',
            ],
            'siteprobuilder'=>[
                'url'=>'siteprobuilder',
                'label'=>'Site.pro Website Buider',
                'type' =>'url',
                'order'=>4,
                'icon'=>'',
            ],
        ],
    ],
    'reseller'=>[
        'url'=>'?',
        'label'=>'Reseller',
        'order'=>6,
        'icon'=>'fa fa-recycle',
        'modules'=>[
            'manager'=>[
                'url'=>'reseller',
                'label'=>'Manager',
                'type' =>'url',
                'order'=>0,
                'icon'=>'fa fa-user fa-3x',
                'tabs'=>[
                    'res_feactures'=>[
                        'label'=>'Feactures'
                    ],
                    'res_nameserver'=>[
                        'label'=>'NameServers'
                    ],
                    'res_branding'=>[
                        'label'=>'Branding'
                    ],
                    'res_api'=>[
                        'label'=>'Api'
                    ],
                    'res_modsecurity'=>[
                        'label'=>'ModSecurity'
                    ],
                    'res_firewall'=>[
                        'label'=>'Firewall'
                    ],
                ],
            ],
        ],
    ],
    'servercast'=>[
        'url'=>'?',
        'label'=>'Streaming',
        'order'=>6,
        'icon'=>'fa fa-recycle',
        'modules'=>[
            'manager'=>[
                'url'=>'servercast',
                'label'=>'Manager',
                'type' =>'url',
                'order'=>0,
                'icon'=>'fa fa-microphone fa-3x',
            ],
        ],
    ],
];
