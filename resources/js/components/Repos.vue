<template>
    <div col-sm-4>
        <b-card v-bind:header="title" class="text-center mb-50">


        <b-card-text>{{description}}
            <span v-if="description == null">Este repositorio no tiene descripción</span>
            <b-badge variant="success">{{language}}</b-badge>
        </b-card-text>
         <div class="row">
             <div class="col-md-6 text-right">

           
                 <!-- <router-link :to="{ name: 'hello'+title, params: { id: title } }">Navigate to Page2</router-link> -->
                 
                 <router-link :to="{ name: 'contributors', params: { id: title }, query: { debug: true }}">
                      <b-button size="sm" variant="primary">Contributors</b-button>
                 </router-link>
                
             </div>
             <div class="col-md-6 text-left">
                 <b-button target="_blank" v-bind:href="html_url" size="sm" variant="primary">GitHub</b-button>
             </div>

         </div>

        <template v-slot:footer>

         <div class="row extra-data">
            <div class="col-sm-6 col-xs-6"><img :src="'/img/iconmonstr-bug-9.svg'"> {{open_issues_count}}</div>
            <div class="col-sm-6 col-xs-6"><img :src="'/img/iconmonstr-star-1.svg'"> {{stargazers_count}}</div>
        </div>
      </template>


        </b-card>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: 'home',
        data(){
            return{
                info:'null'
            }
        },

        props: {
            title: String,
            description: String,
            html_url: String,
            language: String,
            stargazers_count: Number,
            open_issues_count: Number,
            contributors_url: String
        }
    }
</script>

<style scoped>
    .card-text{
        font-size: 12px;
        min-height: 44px;
    }
    .card{
        margin-bottom: 15px;
    }
    .extra-data{
        font-size: 12px;
    }
</style>

