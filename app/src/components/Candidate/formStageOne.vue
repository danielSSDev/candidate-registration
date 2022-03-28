<template>
    <div class="container com-md-12">
        <div class="row">
            <form class="col-12">
                <div class="col-12">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" v-model="data.name" placeholder="Seu nome">
                </div>
                <div class="col-12">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" v-model="data.email" placeholder="Seu Email">
                </div>
                <div class="col-12">
                    <label class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telephone" v-model="data.telephone" placeholder="Seu Telefone">
                </div>
            </form>

            <div class="col-12">
                <button class="btn btn-primary btn-prox-one" type="submit" @click="nextStage()" >Proximo</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:'stageOne',
    props:['openStageOne', 'dadosEditCandidate'],
    components:{

    },
    data(){
        return{
            dados: null,
            data: {name: '', email: '', telephone: ''}
        }
    },
    mounted(){
        let dados = this.$store.state.dataCandidate;
        this.mountedObjetCandidate(dados);
    },
    methods:{
        nextStage(){

            this.dadosStage();
            this.$emit('nextStage', false);
    
        },

        dadosStage(){
            this.$emit('dados', this.data)
        },

        mountedObjetCandidate(dados){
            this.data.name = dados.name;
            this.data.email = dados.email;
            this.data.telephone = dados.telephone;
        },

    }
}
</script>