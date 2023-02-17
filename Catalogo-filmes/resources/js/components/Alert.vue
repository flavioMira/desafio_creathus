<template>
    <div :class="alertType" role="alert">
        <strong><slot name="destaque"></slot></strong> <slot name="msg"></slot>
    </div>
</template>

<script>
export default{
    props:[ 'role'],
    computed: {
        alertType(){
            return 'alert alert-'+this.role+' alert-dismissible fade show';
        }
    },
}
</script>