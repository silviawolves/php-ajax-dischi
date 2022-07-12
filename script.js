new Vue({
    el: '#app',
    data: {
        listaDischi: []
    },
    mounted() {
        axios.get('api/api-dischi.php')
        .then(response => {
            this.listaDischi = response.data
        })
    },
})