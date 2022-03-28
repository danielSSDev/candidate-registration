<template>
    <div id="app">
        <div class="container" v-if="!candidateForm">
            <div class="row">
                <div class="col">
                     <div class="card">
                        <div class="card-body">
                            <h5>Candidatos</h5>
                            <a type="button" href="/createCandidate" class="btn btn-primary">Cadastrar</a>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Telefone</th>
                                        <th scope="col">Ações</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr  v-for="candidate in candidates" :key="candidate.index">
                                        <th scope="row">{{ candidate.id }}</th>
                                        <td>{{ candidate.name }}</td>
                                        <td>{{ candidate.email }}</td>
                                        <td>{{ candidate.telephone }}</td>
                                        <td>
                                            <a type="button" class="btn btn-primary btn-edit" @click="editCandidate(candidate.id)">Editar</a>
                                            <a type="button" class="btn btn-danger" @click="deleteCandidate(candidate.id)">Excluir</a>
                                        </td>
                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>

        <candidate v-if="candidateForm"/>
    </div>

</template>

<script>
import axios from "axios";
import candidate from '../components/Candidate/index.vue'

export default {
    name:'app-index',
    components:{
        candidate
    },
    data(){
        return{
            candidateForm: false,
            candidates: null,
            dadosEditCandidate: null,
        }
    },
    methods:{
        getCandidates(){
            axios.get('http://127.0.0.1:8000/api/getcandidate')
            .then( res =>{
               this.candidates = res.data.data
            }).catch(function(error){
                alert('Erro ao consultar candidatos: '+error)
            })
        },

        editCandidate(id){
             axios.post('http://127.0.0.1:8000/api/editcandidate/'+id)
            .then( res =>{
                this.$store.state.dataCandidate = res.data.data
                this.candidateForm = true;
            }).catch(function(error){
                alert('Erro ao editar candidato: '+error)
            })
        },
        deleteCandidate(id){
            axios.post('http://127.0.0.1:8000/api/deletecandidate/'+id)
            .then( res =>{
                alert(res.data.data)
                this.getCandidates();
            }).catch(function(error){
                alert('Erro ao excluir candidato: '+error)
            })
        }
    },
    
    mounted(){
        this.getCandidates()
    }
}
</script>