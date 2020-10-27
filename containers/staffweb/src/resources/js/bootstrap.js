window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery.easing';
import 'bootstrap';

require('startbootstrap-sb-admin-2/js/sb-admin-2.js');

import 'bootstrap-datepicker';
import 'select2';

import Vue from 'vue';
window.Vue = Vue;
import VueToast from 'vue-toast-notification';
import Paginate from 'vuejs-paginate';
import ApiLocation from './common/api-locations';

Vue.use(VueToast);
Vue.component('paginate', Paginate);
Vue.prototype.$apiLocation = ApiLocation;

// Common js Vue
Vue.mixin({
    mounted() {
        // Toggle the side navigation
        $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
            $("body").toggleClass("sidebar-toggled");
            $(".sidebar").toggleClass("toggled");
            if ($(".sidebar").hasClass("toggled")) {
            $('.sidebar .collapse').collapse('hide');
            };
        });
        // Date picker
        $('.datepicker-control').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true
        });
        // Select 2 input
        $('.select2-control').select2({
            theme: "bootstrap",
        });
    }
});
