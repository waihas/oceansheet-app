import * as types from '../mutation-types'
import Swal from 'sweetalert2'

export const state = {
    status: types.STATUS_LOADING,
    signedId: null,
    user: null,
    error: null,
}

export const mutations = {
    setStatus(state, status) {
        state.status = status
    },
    setSignedIn(state, signedId) {
        state.signedId = signedId
    },
    setError(state, error) {
        state.error = error
    },
    setUser(state, user) {
        state.user = user
    },
}

export const actions = {
    init (context) {
        let google = this._vm.$google
        let load = setInterval(function () {
            if (google.isInit) {
                context.commit('setStatus', types.STATUS_READY)
                context.commit(
                    'setSignedIn', 
                    google.api.auth2.getAuthInstance().isSignedIn.get()
                )
                google.api.auth2.getAuthInstance().isSignedIn.listen(function (signedId) {
                    console.log('im here 1')
                    console.log('setSignedIn' + signedId)
                    context.commit('setSignedIn', signedId)
                })
                google.api.auth2.getAuthInstance().currentUser.listen(function (user) {
                    console.log('im here 2')
                    console.log('setUser' + user)
                    context.commit('setUser', user)
                })
                clearInterval(load)
            }        
        })
    },
    // loadUser(context) {
        isSignedId () {
            let google = this._vm.$google
            google.api.auth2.getAuthInstance().currentUser.listen(function (user) {
                return user
            })
          },
    // } ,
    async signIn (context) {
        try{
            await this._vm.$google.api.auth2.getAuthInstance().signIn()
            
        } catch (e) {
            console.error(e)
            context.commit('setError', e.error)
            //show alert error
            // e.error == 'popup_closed_by_user'
            // also if he didnt gave me the scope for drive
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong while signing in, please try again!',
                confirmButtonColor: "#10b981",
            }).then(() => {
               // refresh the page
            })
        }      
    },
    async signOut (context) {
        try{
            await this._vm.$google.api.auth2.getAuthInstance().signOut()
        } catch (e) {
            console.error(e)
            context.commit('setError', e.error)
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong while signing out!',
                confirmButtonColor: "#10b981",
            }).then(() => {
               // refresh the page
            })
        }
    },
    async disconnect (context) {
        try{
            await this._vm.$google.api.auth2.getAuthInstance().disconnect()
        } catch (e) {
            console.error(e)
            context.commit('setError', e.error)
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong while disconnecting!',
                confirmButtonColor: "#10b981",
            })
        }
    },
}

export const getters = {
    isReady(state) {
        return state.status === types.STATUS_READY
    },
    isSignedIn(state) {
        return state.signedId === true
    },
    getUser(state) {
        return state.user
    },
    getSignedId(state) {
        return state.signedId
    }
}

