import Vue from 'vue'
import Child from './Child'
import Button from './Button'
import Card from './Card'
import { HasError, AlertError, AlertSuccess } from 'vform/src/components/bootstrap5'

// Components that are registered globaly.
[
  Child,
  Button,
  Card,
  HasError,
  AlertError,
  AlertSuccess
].forEach(Component => {
  Vue.component(Component.name, Component)
})
