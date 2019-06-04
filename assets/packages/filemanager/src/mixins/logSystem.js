/* eslint-disable no-alert, no-console */

/**
 * Check the browsers console capabilities and bundle them into general functions
 * If the build environment was "production" only put out error messages.
 */
import ConsoleShim from '../lib/ConsoleShim.js';

const LOG = new ConsoleShim('FileManager');

const PluginLog = function (Vue) {
    if(window.debugState.backend) {
        Vue.prototype.$log = LOG;
    } else {
        Vue.prototype.$log = console.ls.silent;
    }
};

export {PluginLog, LOG};