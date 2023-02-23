import loadash from "resolve-url-loader";
window._ = loadash;

import * as Popper from "@popperjs/core";
window.Popper = Popper;

import "bootstrap";

/**
 * To issue requests to our Laravel back-end we will load axios HTTP library.
 * It will send CSRF tokens
 * as a header based on the value of the "XSRF" token cookie.
 */

import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
