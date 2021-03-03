<?php

//ini_set('log_errors', 1);
//ini_set('error_log', _BASEDIR . '/log/php.log');
//ini_set('error_reporting', E_ALL ^ (E_NOTICE | E_WARNING | E_STRICT | E_DEPRECATED));
//ini_set('date.timezone', 'UTC');

use Destiny\Common\Authentication\AuthProvider;
use Monolog\Logger;

return [
    'cacheNamespace' => '_web18',
    'crypto' => [                   // the key and seed should be a minimum of 32 random generated bytes
        'key' => '***REPLACE***',   // used as the key for encryption
        'seed' => '***REPLACE***',  // used as the seed for hashing like hmac
    ],

    'deleted_user_hash' => '***REPLACE****',
    'allowImpersonation' => false,  // MUST BE OFF ON LIVE AT ALL TIMES. usage: /impersonate?user=Cene or /impersonate?userId=12

    'embed' => [
        'displayName' => 'destiny',
        'twitchParents' => ['localhost'], // Domains that will embed Twitch streams, e.g., 'www.example.com'. See https://discuss.dev.twitch.tv/t/twitch-embedded-player-updates-in-2020/23956 for more details.
        'stream' => [
            [
                'platform' => '',
                'name' => '',
            ]
        ],
        'chat' => '/embed/chat'
    ],

    'logLevel' => Logger::WARNING,
    'chatWebSocketUrl' => 'ws://localhost/ws',
    'cdn' => ['domain' => '','protocol' => 'https://'],
    'blog' => ['feed' => ''],
    'reddit' => ['threads' => ''],
    'android' => ['app' => ''],
    'meta' => [],
    'links' => [],
    'banAppealUrl' => '',
    'support_email' => '',
    'google-verification' => '',
    'calendar' => '',
    'merch' => [],

    'privateKeys' => [
        'reddit' => '',
        'minecraft' => '',
        'chat' => '',
        'api' => '',
    ],

    'images' => [
        'path' => _BASEDIR . '/static/cache/',
        'uri' => '/cache',
    ],

    'redis' => [
        'host' => 'localhost',
        'port' => 6379,
        'database' => 0,
        'scriptdir' => _BASEDIR . '/scripts/redis/',
    ],

    'authProfiles' => [
        AuthProvider::TWITCH,
        AuthProvider::GOOGLE,
        AuthProvider::TWITTER,
        AuthProvider::REDDIT,
        AuthProvider::DISCORD,
    ],

    'oauth_providers' => [
        'google' => [
            'client_id' => '',
            'client_secret' => '',
            'redirect_uri' => 'https://localhost/auth/google'
        ],
        'youtube' => [
            'client_id' => '',
            'client_secret' => '',
            'redirect_uri' => 'https://localhost/admin/youtube/auth'
        ],
        'twitch' => [
            'client_id' => '',
            'client_secret' => '',
            'redirect_uri' => 'https://localhost/auth/twitch'
        ],
        'twitter' => [
            'client_id' => '',
            'client_secret' => '',
            'redirect_uri' => 'https://localhost/auth/twitter'
        ],
        'reddit' => [
            'client_id' => '',
            'client_secret' => '',
            'redirect_uri' => 'https://localhost/auth/reddit'
        ],
        'discord' => [
            'client_id' => '',
            'client_secret' => '',
            'redirect_uri' => 'https://localhost/auth/discord'
        ],
        'streamlabs' => [
            'client_id' => '',
            'client_secret' => '',
            'redirect_uri' => 'https://localhost/auth/streamlabs'
        ],
        'twitchbroadcaster' => [
            'client_id' => '',
            'client_secret' => '',
            'redirect_uri' => 'https://localhost/admin/twitch/auth'
        ],
        'streamelements' => [
            'client_id' => '',
            'client_secret' => '',
            'redirect_uri' => 'https://localhost/admin/streamelements/auth'
        ]
    ],

    'cookie' => [
        'domain' => '',
        'path' => '/',
        'secure' => false,
        'httponly' => true,
        'samesite' => 'lax'
    ],

    'db' => [
        'driver'        => 'pdo_mysql',
        'host'          => 'localhost',
        'user'          => '',
        'dbname'        => '',
        'password'      => '',
        'charset'       => 'UTF8',
        'driverOptions' => [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8,time_zone = \'+0:00\'']
    ],

    'curl' => ['timeout' => 15, 'connect_timeout' => 7, 'http_errors' => false],

    'paypal' => [
        'endpoint_checkout' => 'https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&token=',
        'endpoint_ipn' => 'http://localhost/ipn/',
        'sdk' => [
            'mode'                      => 'sandbox',
            'acct1.ClientId'            => '',
            'acct1.ClientSecret'        => '',
            'acct1.UserName'            => '',
            'acct1.Password'            => '',
            'acct1.Signature'           => '',
            'acct1.CertPath'            => '',
            'service.Endpoint.IPN'      => 'http://localhost/ipn/',
            'log.LogEnabled'            => true,
            'log.FileName'              => _BASEDIR . 'log/paypal.log',
            'log.LogLevel'              => 'ERROR',
            'http.ConnectionTimeOut'    => 10,
            'http.Retry'                => 1,
        ]
    ],

    'youtube' => [
        'apikey' => '',
        'playlistId' => '',
        'user' => '',
        'dgg_user' => -1
    ],

    'analytics' => [
        'account' => '',
        'domainName' => ''
    ],

    'g-recaptcha' => [
        'key' => '',
        'secret' => '',
    ],

    'lastfm' => [
        'apikey' => '',
        'user' => ''
    ],

    'libsyn' => [
        'user' => 'destiny',
    ],

    'twitch' => [
        'id' => -1,
        'user' => '',
        'webhooks_callback' => '',
    ],

    'discord' => [
        'webhook' => ''
    ],

    'streamelements' => [
        'alert_donations' => true,
        'alert_subscriptions' => true,
        'send_donations' => true,
        'dgg_user' => -1,
    ],

    'streamlabs' => [
        'alert_donations' => true,
        'alert_subscriptions' => true,
        'send_donations' => true,
        'dgg_user' => -1,
    ],

    'twitchbroadcaster' => [
        'alert_donations' => true,
        'alert_subscriptions' => true,
        'send_donations' => true,
        'dgg_user' => -1,
    ],

    'subscriptionType' => 'destiny.gg',

    'commerce' => [
        'receiver_email' => '',
        'currency' => 'USD',
        'minimum_donation' => 5,
        'minimum_donation_for_unban' => 5,
        'tiers' => [
            ['tier' => 1, 'tierLabel' => 'Tier I'],
            ['tier' => 2, 'tierLabel' => 'Tier II'],
            ['tier' => 3, 'tierLabel' => 'Tier III'],
            ['tier' => 4, 'tierLabel' => 'Tier IV'],
        ],
        'subscriptions' => [
            '1-MONTH-SUB' => [
                'id'                => '1-MONTH-SUB',
                'tier'              => 1,
                'tierLabel'         => 'Tier I',
                'itemLabel'         => 'Tier 1 (1 month)',
                'agreement'         => '$5.00 (per month) recurring subscription',
                'amount'            => '5.00',
                'billingFrequency'  => 1,
                'billingPeriod'     => 'Month'
            ],
            '3-MONTH-SUB' => [
                'id'                => '3-MONTH-SUB',
                'tier'              => 1,
                'tierLabel'         => 'Tier I',
                'itemLabel'         => 'Tier 1 (3 month)',
                'agreement'         => '$12.00 (per 3 months) recurring subscription',
                'amount'            => '12.00',
                'billingFrequency'  => 3,
                'billingPeriod'     => 'Month'
            ],
            '1-MONTH-SUB2' => [
                'id'                => '1-MONTH-SUB2',
                'tier'              => 2,
                'tierLabel'         => 'Tier II',
                'itemLabel'         => 'Tier 2 (1 month)',
                'agreement'         => '$10.00 (per month) recurring subscription',
                'amount'            => '10.00',
                'billingFrequency'  => 1,
                'billingPeriod'     => 'Month'
            ],
            '3-MONTH-SUB2' => [
                'id'                => '3-MONTH-SUB2',
                'tier'              => 2,
                'tierLabel'         => 'Tier II',
                'itemLabel'         => 'Tier 2 (3 month)',
                'agreement'         => '$24.00 (per 3 months) recurring subscription',
                'amount'            => '24.00',
                'billingFrequency'  => 3,
                'billingPeriod'     => 'Month'
            ],
            '1-MONTH-SUB3' => [
                'id'                => '1-MONTH-SUB3',
                'tier'              => 3,
                'tierLabel'         => 'Tier III',
                'itemLabel'         => 'Tier 3 (1 month)',
                'agreement'         => '$20.00 (per month) recurring subscription',
                'amount'            => '20.00',
                'billingFrequency'  => 1,
                'billingPeriod'     => 'Month'
            ],
            '3-MONTH-SUB3' => [
                'id'                => '3-MONTH-SUB3',
                'tier'              => 3,
                'tierLabel'         => 'Tier III',
                'itemLabel'         => 'Tier 3 (3 month)',
                'agreement'         => '$48.00 (per 3 months) recurring subscription',
                'amount'            => '48.00',
                'billingFrequency'  => 3,
                'billingPeriod'     => 'Month'
            ],
            '1-MONTH-SUB4' => [
                'id'                => '1-MONTH-SUB4',
                'tier'              => 4,
                'tierLabel'         => 'Tier IV',
                'itemLabel'         => 'Tier 4 (1 month)',
                'agreement'         => '$40.00 (per month) recurring subscription',
                'amount'            => '40.00',
                'billingFrequency'  => 1,
                'billingPeriod'     => 'Month'
            ],
            '3-MONTH-SUB4' => [
                'id'                => '3-MONTH-SUB4',
                'tier'              => 4,
                'tierLabel'         => 'Tier IV',
                'itemLabel'         => 'Tier 4 (3 month)',
                'agreement'         => '$96.00 (per 3 months) recurring subscription',
                'amount'            => '96.00',
                'billingFrequency'  => 3,
                'billingPeriod'     => 'Month'
            ]
        ]
    ],

    'iplookupservices' => [
        ['label' => 'iplocation.net', 'url' => 'https://www.iplocation.net/?query={IP_ADDRESS}'],
        ['label' => 'greynoise.io','url' => 'https://viz.greynoise.io/ip/{IP_ADDRESS}'],
        ['label' => 'shodan.io','url' => 'https://www.shodan.io/host/{IP_ADDRESS}'],
    ]
];
