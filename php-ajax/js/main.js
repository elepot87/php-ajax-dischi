const app = new Vue({
  el: "#app",
  data: {
    album: [],
  },
  created() {
    this.getAlbum();
  },
  methods: {
    getAlbum() {
      console.log("dati presi");
    },
  },
});
