import Vue from 'vue'
import Child from './Child'
import Button from './Button'
import Logo from './Logo'
import Card from './Card'
import { runConnection }  from '~/components/connection/Run'
import { HasError, AlertError, AlertSuccess } from 'vform/src/components/bootstrap5'

// Components that are registered globaly.
[
  Child,
  Button,
  Card,
  HasError,
  AlertError,
  AlertSuccess,
  Logo,
  runConnection
].forEach(Component => {
  Vue.component(Component.name, Component)
})
