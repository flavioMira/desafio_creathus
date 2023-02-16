<template>
     <div class="">
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                <form method="POST" :action="login">
                    <input type="hidden" name="_token" :value="csrf_token">
                    <div class=" form-floating mb-3">
                        <input id="email" type="email" class="form-control" placeholder="name@example.com" name="email" required autocomplete="email" v-model="email">
                        <label for="email">Email</label>

                    </div>

                    <div class="form-floating mb-3">
                        <input id="password" type="password" class="form-control" placeholder="******" name="password" required autocomplete="current-password" v-model="password">
                        <label for="password">Senha</label>

                        
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-check text-orange">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                <label class="form-check-label" for="remember">
                                    Mantenha-me conectado!
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col">
                            <button type="submit" class="btn btn-lg btn-orange">
                                Entrar
                            </button>

                            <a class="btn btn-link text-secondary" :href="forgot">
                                Esqueceu a sua senha?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr class="text-secondary">
        <div class="flex items-center">
            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Não tem conta? <a :href="register" class="underline text-orange">Registre-se</a></div>
        </div>
</template>

<script>
    export default {
        props:['csrf_token', 'register', 'forgot', 'login'],
        data(){
            return {
                email: '',
                password: '',
            }
        },
        methods:{
            
        },
    }
</script>
