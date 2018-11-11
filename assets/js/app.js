new Vue({
  el: '#app',
  data () {
     return {
       loader: null,
       loading: false,
       loading2: false,
       loading3: false,
       loading4: false
     }
   },
   watch: {
     loader () {
       const l = this.loader
       this[l] = !this[l]

       setTimeout(() => (this[l] = false), 3000)

       this.loader = null
     }
   }
 })

new Vue({
  el: '#footer',
  data: () => ({
    icons: [
      'fab fa-facebook',
      'fab fa-twitter',
      'fab fa-google-plus',
      'fab fa-linkedin',
      'fab fa-instagram'
    ]
  })
})
