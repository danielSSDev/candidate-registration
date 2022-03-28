<template>
    <div class="container com-md-12">
        <div class="row">
            <form class="col-12">
                <div class="col-12">
                    <label class="form-label">Múltiplas Experiências Proficionais</label>
                    <input type="text" class="form-control" id="professional_experience" v-model="data.professional_experience" placeholder="Suas Experiências" required>
                </div>
                <div class="col-12">
                    <label class="form-label">Múltiplas Formações Acadêmicas</label>
                    <input type="text" class="form-control" id="academic_formation" v-model="data.academic_formation" placeholder="Suas Formações">
                </div>
            </form>
            <div class="row col-md-12">
                <div class="col-12">
                    <a class="btn btn-primary btn-prox-two" type="submit" @click="nextStage()">Proximo</a>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name:'stageTwo',
    props:['openStageTwo'],
    components:{

    },
    data(){
        return{
            data: {professional_experience: '', academic_formation: ''}
        }
    },
    mounted(){
        let dados = this.$store.state.dataCandidate;
        this.mountedObjetCandidate(dados);
    },
    methods:{
        nextStage(){
            this.dadosStage();
            this.$emit('nextStage', false)
        },

        dadosStage(){
            this.$emit('dados', this.data)
        },
        mountedObjetCandidate(dados){
           this.data.professional_experience = dados.professional_experience;
           this.data.academic_formation = dados.academic_formation;
        }
    }
}
</script>