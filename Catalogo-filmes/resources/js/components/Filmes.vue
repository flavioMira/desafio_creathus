<template>
    <div>
        <div class="row container-fluid">
            <nav class="navbar">
                <div class="container-fluid">
                    <a class="navbar-brand fs-5 text-orange">Próximos Filmes</a>
                    
                    <button class="btn btn-orange" @click="carregarLista()"><i class="bi bi-arrow-clockwise"></i>&nbsp;Atualizar lista</button>
                    <div class="ms-auto">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item" v-for="l, key in filmesLinks" :key="key" @click="paginacao(l)">
                                    <a class="page-link  text-orange" href="#" v-html="l.label"></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row p-2">
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-4 p-2" v-for="f in filmes" :key="f.id">
                <div class="card dark:bg-gray-800 h-100">
                    <img :src="'/storage/' + f.thumbnail" class="card-img-top img-fluid h-75" alt="">
                    <div class="card-body">
                        <p class="card-title"> {{ f.title }} ({{ f.year }})</p>
                        <a href="#" class="btn btn-orange justify-end stretched-link" data-bs-toggle="modal"
                            data-bs-target="#modalShowFilme" @click="setStore(f)">ver mais</a>
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal Adicionar Filme-->
        <modal-component id="modalAddFilme" aria="modalAddFilme" titulo="Adicionar Filme">
            <template v-slot:conteudo>
                <alert-component role="success" v-if="responseStatus == 'sucesso'">
                    <template v-slot:destaque>{{ AlertMSG }}</template>
                </alert-component>

                <alert-component role="danger" v-if="responseStatus == 'erro'">
                    <template v-slot:destaque>Erro ao tentar cadastrar o Filme
                        <hr>
                    </template>
                    <template v-slot:msg>
                        <ul v-if="AlertMSG">
                            <li v-for="e, key in AlertMSG" :key="key">{{ key }} - {{ e[0] }}</li>
                        </ul>
                    </template>
                </alert-component>
                <div class="row">
                    <div class="form-group col-sm-12 col-md-6 mb-3">
                        <input-component titulo="Título do Filme" id="title" id-help="titleHelp"
                            texto-ajuda="Titulo do Filme">
                            <input type="text" class="form-control" id="title" aria-describedby="titleHelp"
                                placeholder="titulo do filme" v-model="titleFilme" />
                        </input-component>
                    </div>

                    <div class="form-group col-sm-12 col-md-6 mb-3">
                        <input-component titulo="Diretor" id="author" id-help="authorHelp" texto-ajuda="Diretor do Filme">
                            <input type="text" class="form-control" id="author" aria-describedby="authorHelp"
                                placeholder="Diretor do filme" v-model="authorFilme" />
                        </input-component>
                    </div>

                    <div class="form-group col-sm-12 col-md-4 mb-3">
                        <input-component titulo="Ano de Lançamento" id="year" id-help="yearHelp" texto-ajuda="ex: 2023">
                            <input type="number" class="form-control" id="year" aria-describedby="yearHelp"
                                placeholder="Ano do filme" v-model="yearFilme" />
                        </input-component>
                    </div>

                    <div class="form-group col-sm-12 col-md-4 mb-3">
                        <input-component titulo="Duração" id="duration" id-help="durationHelp"
                            texto-ajuda="Duração em minutos">
                            <input type="number" class="form-control" id="duration" aria-describedby="durationHelp"
                                placeholder="ex: 120" v-model="durationFilme" />
                        </input-component>
                    </div>

                    <div class="form-group col-sm-12 col-md-4 mb-3">
                        <input-component titulo="Categoria Principal" id="category" id-help="categoryHelp"
                            texto-ajuda="ex: Ação, terror, comédia">
                            <input type="text" class="form-control" id="category" aria-describedby="categorynHelp"
                                placeholder="categoria principal" v-model="categoryFilme" />
                        </input-component>
                    </div>

                    <div class="form-group  col-sm-12 col-md-6 mb-3">
                        <input-component titulo="Poster" id="thumbnail" id-help="thumbnailHelp"
                            texto-ajuda="Poster do Filme">
                            <input type="file" class="form-control" id="thumbnail" aria-describedby="thumbnailHelp"
                                placeholder="Poster do filme" @change="carregarThumb($event)" />
                        </input-component>
                    </div>

                    <div class="form-group col-sm-12 col-md-6 mb-3">
                        <input-component titulo="Imagem de fundo" id="background" id-help="backgroundHelp"
                            texto-ajuda="Imagem de fundo do Filme">
                            <input type="file" class="form-control" id="background" aria-describedby="backgroundHelp"
                                @change="carregarBack($event)" />
                        </input-component>
                    </div>
                    <div class="form-group col-12 mb-3">
                        <input-component titulo="Resumo" id="description" id-help="descriptionyHelp"
                            texto-ajuda="Sinopse do Filme">
                            <textarea class="form-control" id="description" aria-describedby="descriptionnHelp"
                                placeholder="Resumo dos acontecimentos do filme" v-model="descriptionFilme"></textarea>
                        </input-component>
                    </div>
                </div>
            </template>

            <template v-slot:rodape>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" @click="salvarFilme()">Salvar</button>
            </template>
        </modal-component>

        <!-- Modal Visualizar Filme-->
        <modal-component id="modalShowFilme" aria="modalShowFilme" titulo="Informaçõe do Filme">
            <template v-slot:conteudo>
                <div class="row p-0"
                    :style="'height:60vh;overflow: hidden;-webkit-mask-image: linear-gradient(to top, transparent 10%, black 100%);background-image: url(/storage/' + $store.state.item.background + ');background-position: center top;background-size: 100% auto;'">
                </div>
                <div class="row container-fluid mt-6">
                    <div class="col-12">
                        <h1>{{ $store.state.item.title }} ({{ $store.state.item.year }}) - {{ $store.state.item.author }}
                        </h1>
                    </div>
                </div>
                <div class="row container-fluid mt-6">
                    <div class="col-12">
                        <p class="fs-4">{{ $store.state.item.description }}</p>
                    </div>
                </div>

            </template>

            <template v-slot:rodape>
                
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
            </template>
        </modal-component>
    </div>
</template>
    
<script>
import axios from 'axios'

export default {
    props: [],
    data() {
        return {
            AlertMSG: '',
            responseStatus: '',
            componentKey: 0,
            urlBase: 'http://localhost:8000/api/filme',
            filmes: [],
            filmesLinks: [],
            titleFilme: '',
            authorFilme: '',
            yearFilme: '',
            durationFilme: '',
            categoryFilme: '',
            descriptionFilme: '',
            thumbnailFilme: [],
            backgroundFilme: [],
        }
    },
    methods: {
        paginacao(l){
            this.urlBase = l.url
            this.carregarLista()
        },
        setStore(f) {
            this.$store.state.item = f
        },
        salvarFilme() {

            let formData = new FormData();
            formData.append('title', this.titleFilme)
            formData.append('author', this.authorFilme)
            formData.append('year', this.yearFilme)
            formData.append('duration', this.durationFilme)
            formData.append('category', this.categoryFilme)
            formData.append('description', this.descriptionFilme)
            formData.append('thumbnail', this.thumbnailFilme[0])
            formData.append('background', this.backgroundFilme[0])

            let config = {
                headers: {
                    'Content-Type': 'multipart/form-data',
                    'Accept': 'application/json'
                }
            }

            axios.post(this.urlBase, formData, config)
                .then(response => {
                    this.responseStatus = "sucesso";
                    this.AlertMSG = "Filme Cadastrado com sucesso";
                })
                .catch(errors => {
                    this.responseStatus = "erro";
                    this.AlertMSG = errors.response.data.errors
                })
        },
        carregarLista() {
            axios.get(this.urlBase)
                .then(response => {
                    this.filmes = response.data.data
                    this.filmesLinks = response.data.links
                })
                .catch(errors => {
                    console.log(errors)
                })
        },
        carregarBack(e) {
            this.backgroundFilme = e.target.files
        },
        carregarThumb(e) {
            this.thumbnailFilme = e.target.files
        }
    },
    mounted() {
        this.carregarLista();
    }
}
</script>