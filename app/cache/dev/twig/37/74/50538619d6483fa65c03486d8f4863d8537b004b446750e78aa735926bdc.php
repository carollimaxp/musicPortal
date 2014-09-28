<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_377450538619d6483fa65c03486d8f4863d8537b004b446750e78aa735926bdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                if (el.className) {
                    el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
                }
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) {
                    el.className += \" \" + klass;
                }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  70 => 26,  26 => 3,  31 => 5,  25 => 3,  21 => 2,  92 => 21,  85 => 19,  79 => 29,  75 => 28,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 15,  41 => 9,  24 => 2,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  166 => 71,  156 => 66,  151 => 63,  138 => 57,  136 => 56,  133 => 55,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  91 => 35,  86 => 28,  69 => 25,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  78 => 40,  36 => 7,  27 => 4,  22 => 2,  54 => 21,  40 => 8,  33 => 6,  30 => 5,  176 => 55,  171 => 73,  168 => 72,  163 => 70,  158 => 67,  150 => 37,  142 => 59,  131 => 26,  127 => 25,  123 => 47,  120 => 22,  114 => 13,  110 => 11,  107 => 10,  101 => 24,  96 => 56,  94 => 22,  89 => 20,  87 => 20,  82 => 46,  74 => 42,  66 => 25,  62 => 24,  57 => 16,  55 => 13,  42 => 12,  28 => 1,  46 => 14,  43 => 8,  37 => 5,  32 => 6,  93 => 9,  88 => 6,  84 => 24,  80 => 19,  76 => 43,  71 => 20,  65 => 19,  60 => 16,  51 => 15,  48 => 12,  44 => 10,  38 => 13,  35 => 7,  29 => 4,);
    }
}
