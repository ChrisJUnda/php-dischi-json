const { createApp } = Vue;

createApp({
    data() {
        return {
            mainServerData: "http://localhost/EX-45-BOOLEAN-REAL/php-json/server.php",

            title: "BAD BUNNY'S ALBUMS",

            data: {},
        };
    },
    methods: {
        getServerInfo() {
            axios.get(this.mainServerData).then((response) => {
                this.data = response.data;
                console.log(this.data[0]);
            });
        },
    },
    created() {
        this.getServerInfo();
    },
}).mount("#app");