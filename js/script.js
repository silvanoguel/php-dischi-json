const { createApp } = Vue;

createApp({
  data() {
    return {
      discs: [],
    };
  },
  mounted() {
    axios
      .get("http://localhost:8888/BooleanEsercizi/php-dischi-json/server.php")
      .then((resp) => {
        this.discs = resp.data.results;
      });
  },
}).mount("#app");