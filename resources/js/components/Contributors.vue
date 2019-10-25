<template>
    <div class="container">
        <div class="row">
            <h4>{{ msg }} for {{id}}</h4>
        
  
            <a style="cursor: pointer; text-decoration: underline" v-on:click="navigate()"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
              
        </div>
        <div class="row">

            <!-- {{contrib}} -->
                
            
           <div class="col-md-4" v-for="(item, index) in contrib.data">

               <div col-sm-4>
        <b-card header="title" class="text-center mb-50">


        <b-card-text>
            {{index}} ===== {{item.avatar_url}}
            <!-- <span v-if="description == null">Este repositorio no tiene descripción</span> -->
            <b-badge variant="success">language</b-badge>
        </b-card-text>
         <div class="row">
             <div class="col-md-6 text-right">

           
                 <!-- <router-link :to="{ name: 'hello'+title, params: { id: title } }">Navigate to Page2</router-link> -->
                 
                 
                
             </div>
             <div class="col-md-6 text-left">
                 <b-button target="_blank" href="html_url" size="sm" variant="primary">GitHub</b-button>
             </div>

         </div>

        <template v-slot:footer>

        
      </template>


        </b-card>
    </div>
    </div>

               <!-- end row -->
           </div>
          
        </div>
        
    
    </div>
</template>


<script>
    import axios from 'axios';
    import router from '../router'

    export default {
        name: 'contributors',
        data () {
            return {
    
                debug: false,
                contrib: 'null',
                id: null,
                msg: 'Contributors'
            }
        },
        created() {
            this.id = this.$route.params.id;
            if(this.$route.query.debug) {
                this.debug = this.$route.query.debug;
            }
        },
        mounted(){
            let id = this.id
            let url = 'https://api.github.com/repos/chavewain/'+id;
            axios.get(url)
                .then(response => (this.contrib = response))
        },
        methods: {
            navigate() {
                router.go(-1);
            }
        }

    }
</script>

<style scoped>
    h4{
        display: block;
        width:100%
    }
</style>
