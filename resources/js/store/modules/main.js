import * as types from '../mutation-types'


// state
export const state = {
    sidebarOpen: false
}

// getters
export const getters = {
    sidebarOpen: state => state.sidebarOpen
}

// actions
export const actions = {
    toggleSidebar ({ commit, state }) {
        commit(types.TOGGLE_SIDEBAR)
    }
}

// mutations
export const mutations = {
    [types.TOGGLE_SIDEBAR] (state) {
        state.sidebarOpen = !state.sidebarOpen
    }
}
