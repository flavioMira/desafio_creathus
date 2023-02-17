<template>
    <div class="modal fade" :id="id" tabindex="-1" :aria-labelledby="aria" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl ">
            <div class="modal-content dark:bg-gray-800">
                <div class="modal-header border-secondary border-opacity-10">
                    <h1 class="modal-title fs-5 text-orange" id="exampleModalLabel">{{ titulo }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <slot name="conteudo"></slot>
                </div>
                <div class="modal-footer  border-secondary border-opacity-10">
                    <slot name="rodape"></slot>
                </div>
            </div>
        </div>
    </div>
</template>
    
<script>
export default {
    props: ['id', 'aria', 'titulo'],
    data() {
        return {

        }
    },
    methods: {

    },
}
</script>