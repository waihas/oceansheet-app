function page (path) {
    return () => import(/* webpackChunkName: '' */ `~/pages/${path}`).then(m => m.default || m)
  }
  
  export default [
    // { path: '/', name: 'welcome', component: page('welcome.vue') },
    // { path: '/about-us', name: 'about', component: page('about.vue') },
    // { path: '/pricing', name: 'pricing', component: page('pricing.vue') },
    // { path: '/product/for-google-sheets', name: 'products.for-gsheet', component: page('products/for-gsheet.vue') },
    // { path: '/product/for-microsoft-excel', name: 'products.for-microsoft', component: page('products/for-microsoft.vue') },
    // { path: '/our-workflows', name: 'workflows', component: page('workflows.vue') },
    // { path: '/workflows/excel-to-google-sheet', name: 'workflows.excel-to-gsheet', component: page('workflows/excel-to-gsheet.vue') },
    // { path: '/workflows/google-sheet-filter-data', name: 'workflows.filter-data', component: page('workflows/filter-data.vue') },
    // { path: '/workflows/many-google-sheets-to-one', name: 'workflows.many-to-one', component: page('workflows/many-to-one.vue') },
    // { path: '/workflows/one-google-sheets-to-many', name: 'workflows.one-to-many', component: page('workflows/one-to-many.vue') },
    // { path: '/work-with-us', name: 'careers', component: page('careers.vue') },
    // { path: '/blog', name: 'blog', component: page('blog.vue') },
    // { path: '/product-features', name: 'features', component: page('features.vue') },
    // { path: '/security', name: 'security', component: page('security.vue') },
    // { path: '/support', name: 'support', component: page('support.vue') },
    // { path: '/contact-us', name: 'contact', component: page('contact.vue') },
    
    // { path: '/newsletter', name: 'newsletter', component: page('newsletter.vue') },

    { path: '/login', name: 'login', component: page('auth/login.vue') },
    { path: '/register', name: 'register', component: page('auth/register.vue') },
    { path: '/password/reset', name: 'password.request', component: page('auth/password/email.vue') },
    { path: '/password/reset/:token', name: 'password.reset', component: page('auth/password/reset.vue') },
    { path: '/email/verify/:id', name: 'verification.verify', component: page('auth/verification/verify.vue') },
    { path: '/email/resend', name: 'verification.resend', component: page('auth/verification/resend.vue') },
    
    // { path: '/terms', name: 'terms', component: page('legal/terms.vue') },
    // { path: '/privacy-policy', name: 'privacy.policy', component: page('legal/privacy-policy.vue') },
    // { path: '/cookies', name: 'cookies.policy', component: page('legal/cookies-policy.vue') },
    // { path: '/privacy-and-data-protection-guide', name: 'privacy.guide', component: page('legal/privacy-guide.vue') },
  
    { path: '/dashboard', name: 'dashboard.home', component: page('dashboard/home.vue') },
    
    { path: '/connections', name: 'dashboard.connections', component: page('dashboard/connections.vue') },
    { path: '/connections/create', name: 'dashboard.connections.create', component: page('dashboard/connections/create.vue') },
    { path: '/connections/:token/edit', name: 'dashboard.connections.edit', component: page('dashboard/connections/edit.vue') },
    { path: '/connections/:token/view', name: 'dashboard.connections.view', component: page('dashboard/connections/show.vue') },
    
    { path: '/workflows', name: 'dashboard.workflows', component: page('dashboard/workflows.vue') },
    
    { path: '/workflows/excel-to-google-sheet', name: 'dashboard.workflows.excel-to-sheet', component: page('dashboard/workflows/excel-to-sheet/index.vue') },
    { path: '/workflows/excel-to-sheet/create', name: 'dashboard.workflows.excel-to-sheet.create', component: page('dashboard/workflows/excel-to-sheet/create.vue') },
    
    { path: '/workflows/one-google-sheet-to-many', name: 'dashboard.workflows.one-to-many', component: page('dashboard/workflows/one-to-many/index.vue') },
    { path: '/workflows/one-to-many/create', name: 'dashboard.workflows.one-to-many.create', component: page('dashboard/workflows/one-to-many/create.vue') },
    
    { path: '/workflows/many-to-one-google-sheet', name: 'dashboard.workflows.many-to-one', component: page('dashboard/workflows/many-to-one/index.vue') },
    { path: '/workflows/many-to-one/create', name: 'dashboard.workflows.many-to-one.create', component: page('dashboard/workflows/many-to-one/create.vue') },
    
    { path: '/workflows/filter-google-sheet-data', name: 'dashboard.workflows.filter-data', component: page('dashboard/workflows/filter-data/index.vue') },
    { path: '/workflows/filter-data/create', name: 'dashboard.workflows.filter-data.create', component: page('dashboard/workflows/filter-data/create.vue') },
    
    { path: '/workflows/google-sheet-to-google-sheet', name: 'dashboard.workflows.gsheet-to-gsheet', component: page('dashboard/workflows/gsheet-to-gsheet/index.vue') },
    { path: '/workflows/gsheet-to-gsheet/create', name: 'dashboard.workflows.gsheet-to-gsheet.create', component: page('dashboard/workflows/gsheet-to-gsheet/create.vue') },
    
    { path: '/team', name: 'dashboard.team', component: page('dashboard/team.vue') },
    
    { path: '/help/support', name: 'dashboard.support', component: page('dashboard/support.vue') },
    { path: '/help/support/feedback', name: 'dashboard.support.feedback', component: page('dashboard/support/feedback.vue') },
    { path: '/help/support/ticket', name: 'dashboard.support.ticket', component: page('dashboard/support/ticket.vue') },
    
    { path: '/profile', name: 'dashboard.profile', component: page('dashboard/profile.vue') },
  
    { path: '/settings',
      component: page('dashboard/settings/index.vue'),
      children: [
        { path: '', redirect: { name: 'settings.billing' } },
        { path: 'billing', name: 'settings.billing', component: page('dashboard/settings/billing.vue') },
        { path: 'notifications', name: 'settings.notifications', component: page('dashboard/settings/notifications.vue') },
        { path: 'storage', name: 'settings.storage', component: page('dashboard/settings/storage.vue') }
      ] },

    // admin
    { path: '/admin/backdoor/0623656897/oceansheet/dashboard', name: 'admin.home', component: page('admin/home.vue') },
  
    { path: '*', component: page('errors/404.vue') }
  ]
  