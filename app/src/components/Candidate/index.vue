<template>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <a href="/">Home</a>
                        <form-candidate/>
                    </div>
                </div>
            </div>
        </div>
     </div>
</template>

<script>

import formCandidate from './form.vue'

export default {
    name: 'candidate',
    components:{
        formCandidate,
    },
    data(){
        return{

        }
    }
}
</script>