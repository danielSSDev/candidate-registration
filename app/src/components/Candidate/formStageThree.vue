<template>
    <div class="container com-md-12">
        <div class="row">
            <form class="col-12">
                <div class="col-12">
                    <label class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="user" v-model="data.user" placeholder="Seu usuario" required>
                </div>
                <div class="col-12">
                    <label class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" v-model="data.password" placeholder="Sua Senha">
                </div>
                <div class="col-12">
                    <label class="form-label">Confirmar Senha</label> 
                    <input type="password" class="form-control" id="confirm_password" v-model="data.confirm_password" placeholder="Confirmar Senha">
                </div>
            </form>
            <div class="col-12">
                <a class="btn btn-success btn-save" type="submit" @click="save()" >Salvar</a>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    name:'stageThree',
     props:['openStageThree', 'dadosStageOne', 'dadosStageTwo'],
    components:{

    },
    data(){
        return{
            data: {id: 0, user: '', password: '', confirm_password: ''},
            formDados: [],
        }
    },
    mounted(){
        let dados = this.$store.state.dataCandidate;
        this.mountedObjetCandidate(dados);
    },
     methods:{
        save(){
            this.mountedFormCandidate()

            if(this.data.id > 0){
                axios.post('http://127.0.0.1:8000/api/candidateupdate', this.formDados)
                .then( res =>{
                    alert(res.data.data);
                    window.location.replace('http://localhost:8081/')
                }).catch(function(error){
                    alert('Erro ao salvar candidato: '+error)
                })
            }else{
                axios.post('http://127.0.0.1:8000/api/candidate', this.formDados)
                .then( res =>{
                    alert(res.data.data);
                    window.location.replace('http://localhost:8081/')
                }).catch(function(error){
                    alert('Erro ao salvar candidato: '+error)
                })
            }

        },
        mountedFormCandidate(){
           let stageOne = this.dadosStageOne;
           let stageTwo = this.dadosStageTwo;

            this.formDados = {
                name: stageOne.name,
                email: stageOne.email,
                telephone: stageOne.telephone,
                professional_experience: stageTwo.professional_experience,
                academic_formation: stageTwo.academic_formation,
                user: this.data.user,
                password: this.data.password,
                id: (this.data.id > 0) ? this.data.id : ''
            }
        },
        mountedObjetCandidate(dados){
            this.data.id = dados.id;
            this.data.user = dados.user;
            this.data.password = dados.password;
            this.data.confirm_password = dados.password;
        }
     }
}
</script>