require('./bootstrap');

import Vue from 'vue'

import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Vuex from 'vuex'

Vue.use(Vuex)

const router = new VueRouter({

    mode: 'history',
    routes: require('./routes.js')
})

const store = new Vuex.Store({

    state: {
        product: [],
        cart: [],
        order: {}
    }
})


