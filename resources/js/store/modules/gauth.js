import * as types from '../mutation-types'
import Swal from 'sweetalert2'
import axios from 'axios'

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

                if(google.api.auth2.getAuthInstance().isSignedIn.get()) {
                    context.dispatch('isSignedId')
                }
                else {
                    context.commit(
                        'setSignedIn', 
                        google.api.auth2.getAuthInstance().isSignedIn.get()
                    )
                }

                context.commit(
                    'setUser', 
                    google.api.auth2.getAuthInstance().currentUser.get()
                )

                google.api.auth2.getAuthInstance().currentUser.listen(function (user) {
                    context.commit('setUser', user)
                })

                clearInterval(load)

                // context.commit('setStatus', types.STATUS_READY)
                // context.commit(
                //     'setSignedIn', 
                //     google.api.auth2.getAuthInstance().isSignedIn.get()
                // )
                // google.api.auth2.getAuthInstance().isSignedIn.listen(function (signedId) {
                //     context.commit('setSignedIn', signedId)
                // })
                // context.commit(
                //     'setUser', 
                //     google.api.auth2.getAuthInstance().currentUser.get()
                // )
                // google.api.auth2.getAuthInstance().currentUser.listen(function (user) {
                //     context.commit('setUser', user)
                // })
                // clearInterval(load)
            }        
        })
    },
    async isSignedId(context) {
        try {
            const { data } = await axios.get('/api/user/drive/get/Ba')
            // console.log(data)
            // console.log('im here async isSignedId')
            if(data == this._vm.$google.api.auth2.getAuthInstance().currentUser.get().Ba) {
                context.commit(
                    'setSignedIn', 
                    this._vm.$google.api.auth2.getAuthInstance().isSignedIn.get()
                )
                this._vm.$google.api.auth2.getAuthInstance().isSignedIn.listen(function (signedId) {
                    context.commit('setSignedIn', signedId)
                })
            }
            else {
                context.commit(
                    'setSignedIn', 
                    false
                )
            }
        } catch (e) {
            if(e.response.status == 404) {
                context.commit(
                    'setSignedIn', 
                    false
                )
            } else {
                console.error(e)
            }
            // console.log(e.error)
        }
    },
    async signIn (context) {
        try{
            await this._vm.$google.api.auth2.getAuthInstance().signIn()
            // console.log('im here async signIn')

            try {
                await axios.post('/api/user/drive/Ba', {baID: this._vm.$google.api.auth2.getAuthInstance().currentUser.get().Ba})
                context.commit(
                    'setSignedIn', 
                    this._vm.$google.api.auth2.getAuthInstance().isSignedIn.get()
                )
                this._vm.$google.api.auth2.getAuthInstance().isSignedIn.listen(function (signedId) {
                    context.commit('setSignedIn', signedId)
                })
            } catch (e) {
                console.error(e)
                console.log(e.error)
            }

            // console.log('Ba' + this._vm.$google.api.auth2.getAuthInstance().currentUser.get().Ba)
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
    },
}

