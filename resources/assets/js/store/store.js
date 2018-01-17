import Vue from 'vue';
import Vuex from 'vuex';

import recipes from './modules/recipes';
import portfolio from './modules/portfolio';

import * as actions from './actions';

Vue.use(Vuex);

export default new Vuex.Store({
    actions,
   modules:{
       recipes,
       portfolio
   }
});