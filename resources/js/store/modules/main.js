import * as types from '../mutation-types'
import Cookies from 'js-cookie'

// state
export const state = {
    sidebarOpen: false,
    acceptedCookies: Cookies.get('hasAcceptedCookies')
}

// getters
export const getters = {
    sidebarOpen: state => state.sidebarOpen,
    acceptedCookies: state => state.acceptedCookies
}

// actions
export const actions = {
    toggleSidebar ({ commit, state }) {
        commit(types.TOGGLE_SIDEBAR)
    },
    setCookiesAccepted ({ commit, state }) {
        commit(types.ACCEPTED_COOKIES)
    }
}

// mutations
export const mutations = {
    [types.TOGGLE_SIDEBAR] (state) {
        state.sidebarOpen = !state.sidebarOpen
    },
    [types.ACCEPTED_COOKIES] (state) {
        Cookies.set('hasAcceptedCookies', true)
        state.acceptedCookies = true
    }
}
