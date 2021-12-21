const app = new Vue({
  el: "#app",
  data: {
    albums: [],
  },
  created() {
    this.getAlbums();
  },
  methods: {
    getAlbums() {
      axios
        .get(
          "http://localhost:8888/php-ajax-dischi/php-ajax/scripts/api-album.php"
        )
        .then((response) => {
          console.log(response.data);
          this.albums = response.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
});
