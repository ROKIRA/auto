<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_4eb01f2afb9cde121429af81604ccc84931f44ee9767b9ae6d7111c1bdbd8129 extends Twig_Template
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
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  792 => 488,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  694 => 470,  690 => 469,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  522 => 406,  517 => 404,  389 => 160,  386 => 159,  378 => 157,  367 => 155,  363 => 153,  343 => 146,  334 => 141,  326 => 138,  321 => 135,  417 => 143,  411 => 140,  405 => 137,  395 => 135,  388 => 134,  382 => 131,  377 => 129,  371 => 156,  359 => 123,  356 => 122,  350 => 120,  347 => 119,  324 => 112,  281 => 114,  152 => 46,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 492,  807 => 491,  800 => 523,  796 => 489,  790 => 519,  788 => 486,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  702 => 472,  698 => 471,  696 => 476,  692 => 474,  686 => 468,  682 => 467,  678 => 468,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 452,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 408,  514 => 415,  297 => 200,  276 => 111,  271 => 190,  249 => 92,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  329 => 131,  315 => 131,  303 => 122,  286 => 112,  267 => 101,  262 => 93,  233 => 87,  213 => 78,  200 => 72,  153 => 77,  20 => 1,  351 => 141,  339 => 146,  313 => 110,  300 => 121,  248 => 97,  216 => 79,  178 => 59,  148 => 50,  146 => 49,  126 => 41,  375 => 153,  364 => 149,  358 => 151,  349 => 146,  346 => 145,  340 => 145,  335 => 134,  332 => 140,  328 => 139,  325 => 129,  323 => 128,  317 => 133,  310 => 129,  306 => 128,  289 => 196,  282 => 124,  222 => 83,  174 => 74,  58 => 25,  301 => 93,  228 => 101,  205 => 64,  195 => 60,  175 => 58,  84 => 40,  53 => 12,  263 => 109,  357 => 147,  354 => 146,  342 => 137,  338 => 116,  331 => 140,  320 => 127,  304 => 120,  293 => 120,  291 => 115,  280 => 194,  274 => 110,  272 => 108,  266 => 109,  261 => 113,  255 => 101,  253 => 100,  242 => 83,  234 => 90,  180 => 70,  160 => 62,  34 => 5,  113 => 48,  90 => 42,  65 => 17,  353 => 149,  348 => 140,  345 => 147,  333 => 115,  327 => 130,  307 => 128,  302 => 125,  288 => 118,  275 => 105,  256 => 96,  251 => 182,  236 => 104,  225 => 76,  223 => 73,  197 => 69,  186 => 72,  184 => 63,  155 => 47,  129 => 46,  124 => 27,  118 => 49,  104 => 31,  127 => 35,  81 => 23,  215 => 72,  210 => 77,  202 => 94,  190 => 86,  185 => 75,  170 => 84,  165 => 83,  137 => 51,  97 => 41,  150 => 55,  77 => 20,  316 => 125,  311 => 135,  308 => 109,  296 => 121,  290 => 119,  279 => 88,  277 => 117,  270 => 102,  265 => 105,  259 => 103,  257 => 110,  245 => 84,  239 => 82,  237 => 91,  231 => 86,  212 => 71,  207 => 76,  192 => 77,  181 => 65,  172 => 57,  167 => 71,  161 => 58,  134 => 39,  100 => 15,  70 => 15,  23 => 3,  250 => 110,  232 => 88,  226 => 84,  211 => 77,  206 => 83,  198 => 62,  194 => 68,  191 => 67,  188 => 90,  114 => 36,  110 => 22,  76 => 34,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 138,  402 => 130,  398 => 136,  393 => 126,  387 => 164,  384 => 132,  381 => 120,  379 => 155,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 150,  341 => 117,  337 => 103,  322 => 140,  314 => 131,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 123,  285 => 100,  283 => 115,  278 => 106,  268 => 112,  264 => 78,  258 => 187,  252 => 80,  247 => 98,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 69,  169 => 65,  140 => 44,  132 => 56,  128 => 42,  107 => 26,  61 => 12,  273 => 119,  269 => 107,  254 => 92,  243 => 97,  240 => 85,  238 => 96,  235 => 89,  230 => 102,  227 => 86,  224 => 90,  221 => 80,  219 => 74,  217 => 79,  208 => 76,  204 => 75,  179 => 61,  159 => 57,  143 => 56,  135 => 46,  119 => 40,  102 => 24,  71 => 82,  67 => 14,  63 => 18,  59 => 16,  38 => 18,  94 => 21,  89 => 30,  85 => 23,  75 => 18,  68 => 30,  56 => 11,  87 => 41,  21 => 2,  26 => 9,  93 => 27,  88 => 24,  78 => 19,  46 => 12,  27 => 7,  44 => 20,  31 => 8,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 56,  142 => 63,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 25,  62 => 27,  49 => 14,  24 => 3,  25 => 35,  19 => 1,  79 => 18,  72 => 17,  69 => 16,  47 => 21,  40 => 6,  37 => 5,  22 => 2,  246 => 136,  157 => 46,  145 => 74,  139 => 63,  131 => 61,  123 => 61,  120 => 31,  115 => 43,  111 => 47,  108 => 33,  101 => 30,  98 => 45,  96 => 37,  83 => 33,  74 => 27,  66 => 16,  55 => 15,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 9,  32 => 6,  29 => 3,  209 => 76,  203 => 73,  199 => 93,  193 => 74,  189 => 66,  187 => 72,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 52,  149 => 59,  147 => 75,  144 => 42,  141 => 73,  133 => 45,  130 => 46,  125 => 41,  122 => 43,  116 => 57,  112 => 27,  109 => 52,  106 => 51,  103 => 24,  99 => 23,  95 => 27,  92 => 43,  86 => 34,  82 => 19,  80 => 27,  73 => 33,  64 => 13,  60 => 17,  57 => 12,  54 => 13,  51 => 13,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
