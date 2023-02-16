<template>
    <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-6 col-12 mb-4" v-for="f in filmes.reverse()" :key="f.id">
            <div class="card dark:bg-gray-800">
                <img :src="'/storage/'+f.thumbnail" class="card-img-top img-fluid" alt="">
                <div class="card-body">
                    <p class="card-title"> {{ f.title }} ({{ f.year }})</p>
                    <a href="#" class="btn btn-orange">ver mais</a>
                </div>
            </div>
        </div>
    </div>
</template>
    
<script>
export default {
    props: [],
    data() {
        return {
            filmes: [],
        }
    },
    methods: {
        carregarLista(){
            axios.get('http://localhost:8000/api/filme')
                .then(response => {
                    this.filmes = response.data
                    console.log(this.filmes)
                })
                .catch(errors => {
                    console.log(errors)
                })
        }
    },
    mounted() {
            this.carregarLista();
    }
}
</script>