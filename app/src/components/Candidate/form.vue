<template>
    <div>
        <stage-one v-if="openStageOne"
            @nextStage="openStageOne = $event"
            @dados="dadosStageOne = $event"
        />

        <stage-two  v-if="openStageTwo"
            @nextStage="openStageTwo = $event"
             @dados="dadosStageTwo = $event"
        />

        <stage-three v-if="openStageThree"
            @backStage="openStageThree = $event"
            :dadosStageOne="dadosStageOne"
            :dadosStageTwo="dadosStageTwo"
        />
    </div>
</template>

<script>
import stageOne from './formStageOne.vue'
import stageTwo from './formStageTwo.vue'
import stageThree from './formStageThree.vue'

export default {
    name: 'form-candidate',
    props:['dadosEditCandidate'],
    components:{
        stageOne,
        stageTwo,
        stageThree
    },
    data(){
        return{
            openStageOne: true,
            openStageTwo: false,
            openStageThree: false,
            dadosStageOne: [],
            dadosStageTwo: [],
            dadosStageThree: [],
        }
    },
    methods:{

    },
    watch:{
        openStageOne:function(value){
           if(!value){
               this.openStageTwo = true;
           }
        },
        openStageTwo:function(value){
            if(!value){
                this.openStageThree = true
            }
        },
        openStageThree:function(value){
            if(!value){
                this.openStageTwo = true
            }
        }
    }

}
</script>