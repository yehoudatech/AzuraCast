<?php
return [
    'method' => 'post',
    'enctype' => 'multipart/form-data',

    'groups' => [

        'basic_info' => [
            'elements' => [

                'name' => [
                    'text',
                    [
                        'label' => _('Mount Point Name/URL'),
                        'description' => _('This name should always begin with a slash (/), and must be a valid URL, such as /autodj.mp3'),
                        'required' => true,
                    ]
                ],

                'is_default' => [
                    'radio',
                    [
                        'label' => _('Is Default Mount'),
                        'description' => _('If this mount is the default, it will be played on the radio preview and the public radio page in this system.'),
                        'options' => [0 => _('No'), 1 => _('Yes')],
                        'default' => 0,
                    ]
                ],

                'fallback_mount' => [
                    'text',
                    [
                        'label' => _('Fallback Mount'),
                        'description' => _('If this mount point is not playing audio, listeners will automatically be redirected to this mount point. The default is /error.mp3, a repeating error message.'),
                        'default' => '/error.mp3',
                    ]
                ],

                'enable_streamers' => [
                    'radio',
                    [
                        'label' => _('Enable Streamers'),
                        'description' => _('If set to "Yes", streamers will be able to broadcast to this mount point.'),
                        'options' => [0 => _('No'), 1 => _('Yes')],
                        'default' => 0,
                    ]
                ],

                'enable_autodj' => [
                    'radio',
                    [
                        'label' => _('Enable AutoDJ'),
                        'description' => _('If set to "Yes", the AutoDJ will automatically play music to this mount point.'),
                        'options' => [0 => _('No'), 1 => _('Yes')],
                        'default' => 1,
                    ]
                ],

                'autodj_format' => [
                    'radio',
                    [
                        'label' => _('AutoDJ Format'),
                        'options' => [
                            'mp3' => 'MP3',
                            'ogg' => 'OGG Vorbis',
                        ],
                        'default' => 'mp3',
                    ]
                ],

                'autodj_bitrate' => [
                    'radio',
                    [
                        'label' => _('AutoDJ Bitrate (kbps)'),
                        'options' => [
                            64 => '64',
                            96 => '96',
                            128 => '128',
                            192 => '192',
                            256 => '256',
                        ],
                        'default' => 128,
                    ]
                ],

                'frontend_config' => [
                    'textarea',
                    [
                        'label' => _('Advanced Frontend Configuration'),
                        'description' => _('You can include any special mount point settings here, in either JSON { key: \'value\' } format or XML &lt;key&gt;value&lt;/key&gt;'),
                    ]
                ],

            ],
        ],

        'grp_submit' => [
            'elements' => [

                'submit' => [
                    'submit',
                    [
                        'type' => 'submit',
                        'label' => _('Save Changes'),
                        'helper' => 'formButton',
                        'class' => 'ui-button btn-lg btn-primary',
                    ]
                ],

            ],
        ],
    ],
];