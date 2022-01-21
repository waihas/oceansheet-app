function page (path) {
    return () => import(/* webpackChunkName: '' */ `~/pages/${path}`).then(m => m.default || m)
  }
  
  export default [
    { path: '/', name: 'welcome', component: page('welcome.vue') },
  
    { path: '/login', name: 'login', component: page('auth/login.vue') },
    { path: '/register', name: 'register', component: page('auth/register.vue') },
    { path: '/terms', name: 'terms', component: page('legal/terms.vue') },
    { path: '/privacy-policy', name: 'privacy.policy', component: page('legal/privacy-policy.vue') },
    { path: '/password/reset', name: 'password.request', component: page('auth/password/email.vue') },
    { path: '/password/reset/:token', name: 'password.reset', component: page('auth/password/reset.vue') },
    { path: '/email/verify/:id', name: 'verification.verify', component: page('auth/verification/verify.vue') },
    { path: '/email/resend', name: 'verification.resend', component: page('auth/verification/resend.vue') },
  
    { path: '/dashboard', name: 'dashboard.home', component: page('dashboard/home.vue') },
    { path: '/dash/connections', name: 'dashboard.connections', component: page('dashboard/connections.vue') },
    { path: '/dash/workflows', name: 'dashboard.workflows', component: page('dashboard/workflows.vue') },
    { path: '/dash/team', name: 'dashboard.team', component: page('dashboard/team.vue') },
    { path: '/help/support', name: 'dashboard.support', component: page('dashboard/support.vue') },
    { path: '/dash/profile', name: 'dashboard.profile', component: page('dashboard/profile.vue') },
  
    { path: '/settings',
      component: page('dashboard/settings/index.vue'),
      children: [
        { path: '', redirect: { name: 'settings.billing' } },
        { path: 'billing', name: 'settings.billing', component: page('dashboard/settings/billing.vue') },
        { path: 'notifications', name: 'settings.notifications', component: page('dashboard/settings/notifications.vue') },
        { path: 'storage', name: 'settings.storage', component: page('dashboard/settings/storage.vue') }
      ] },
  
    { path: '*', component: page('errors/404.vue') }
  ]
  