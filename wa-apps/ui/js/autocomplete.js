( function($) { "use strict";

    var plugin_name = "autocomplete";

    $.fn.waAutocomplete = function(plugin_options) {
        var return_instance = ( typeof plugin_options === "string" && plugin_options === plugin_name),
            $items = this,
            result = this,
            is_loaded = false;

        plugin_options = ( typeof plugin_options === "object" ? plugin_options : {});

        if (return_instance) { result = getInstance(); } else { init(); }

        return result;

        function init() {
            $items.each( function(index, item) {
                var $wrapper = $(item);

                if (!$wrapper.data(plugin_name)) {
                    load().then( function() {
                        var instance = $wrapper.autocomplete(plugin_options).autocomplete("instance");
                        $wrapper.data(plugin_name, instance);
                    });
                }
            });
        }

        function getInstance() {
            return $items.first().data(plugin_name);
        }

        /**
         * @return Promise
         * */
        function load() {
            var deferred = $.Deferred();
            var local_js = "\/wa-content\/js\/jquery-ui\/jquery-ui.custom.min.js";
            var local_css = "\/wa-content\/css\/jquery-ui\/ui-lightness\/jquery-ui-1.8.2.custom.css";
            var cdn_js = "https://code.jquery.com/ui/1.12.1/jquery-ui.js";
            var cdn_css = "//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css";

            var ensureStylesheet = function(url) {
                if (!$('link[href="' + url + '"]').length) {
                    $('<link/>', { href: url, rel: 'stylesheet' }).appendTo('head');
                }
            };

            if (is_loaded) {
                deferred.resolve();
            } else {
                $.getScript(local_js)
                    .done(function () {
                        ensureStylesheet(local_css);
                        is_loaded = true;
                        deferred.resolve();
                    })
                    .fail(function () {
                        $.getScript(cdn_js)
                            .done(function () {
                                ensureStylesheet(cdn_css);
                                is_loaded = true;
                            })
                            .always(function () {
                                deferred.resolve();
                            });
                    });
            }

            return deferred.promise();
        }
    };

})(jQuery);