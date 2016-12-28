/**
 * Created with JetBrains PhpStorm.
 * User: lesha
 * Date: 03.10.13
 * Time: 12:58
 */
var app_version = app_version || '.v0';
(function () {
    'use strict';
    require.config({
        baseUrl: '/js',
        paths: {
            'jquery':                       'include/jquery-1.11.3.min',
            'bootstrap':                    '../assets/plugins/bootstrap/js/bootstrap.min',
            'underscore':                   'include/underscore-min',
            'text':                         'include/text',
            'marionette':                   'include/backbone.marionette/backbone.marionette.min',
            'json2':                        'include/backbone.marionette/json2',
            'backbone':                     'include/backbone.marionette/backbone',
            'jqueryUI':                     '../assets/plugins/jquery-ui/ui/minified/jquery-ui.min',
            'apps': '../assets/js/apps.min'
        },
        shim: {
            jquery: {
                exports: '$'
            },
            underscore : {
                exports : '_'
            },
            jqueryUI : {
                deps : ['jquery']
            },
            apps : {
                deps : ['jquery', 'jqueryUI']
            },
            bootstrap: {
                deps: ['jquery']
            },
            marionette : {
                deps : ['json2', 'backbone', 'underscore', 'jquery'],
                exports : 'Marionette'
            }
        },
        waitSeconds: 30
    });

    requirejs(['underscore', 'jquery', 'bootstrap', 'jqueryUI', 'apps'],
        function (_, $) {
            App.init();
            $.fn.serializeObject = function () {
                var o = {};
                var a = this.serializeArray();
                $.each(a, function () {
                    if (o[this.name] !== undefined) {
                        if (!o[this.name].push) {
                            o[this.name] = [o[this.name]];
                        }
                        o[this.name].push(this.value || '');
                    } else {
                        o[this.name] = this.value || '';
                    }
                });
                return o;
            };
            $.htmlEscape = function (str) {
                return String(str)
                    .replace(/&/g, '&amp;')
                    .replace(/"/g, '&quot;')
                    .replace(/`/g, '&apos;')
                    .replace(/'/g, '&#39;')
                    .replace(/</g, '&lt;')
                    .replace(/>/g, '&gt;');
            };
        });
})();