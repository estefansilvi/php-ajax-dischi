new Vue({
  el: '#root',
  data: {
    albums: []
  },
  methods: {

  },
  mounted() {
    const self = this;
    axios
      .get('http://localhost/php-ajax-dischi/app/server.php')
      .then(function(the) {
        self.albums = the.data;
      })
  }
});

Vue.config.devtools = true;
