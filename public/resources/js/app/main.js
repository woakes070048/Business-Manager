
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Bootstrap and other libraries.
 */

require('./globals');
require('./libs/bootstrap');
require('./libs/datatables');
require('./general.js');
require('./libs/jquery-ui.js');
require('./libs/handlebars.js');
require('./libs/circle-progress.js');

// General libs available on page
window.c3 = require('c3');
window.selectize = require('selectize');
window.moment = require('moment-timezone');
window.datepicker = require('bootstrap-datepicker');
window.currency = require('currency.js');
import Swal from 'sweetalert2/dist/sweetalert2.js';
window.Swal = Swal;
import colorpicker from 'bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js';
window.colorpicker = colorpicker;