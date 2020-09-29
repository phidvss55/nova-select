Nova.booting((Vue, router, store) => {
  Vue.component('index-category-picker', require('./components/IndexField'))
  Vue.component('detail-category-picker', require('./components/DetailField'))
  Vue.component('form-category-picker', require('./components/FormField'))
})
