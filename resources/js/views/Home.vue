<template>
    <div>
     <h1>{{ msg }}</h1>
       Hello {{ $route.params.name }}
     <div class="row">
      <div class="col-md-4" v-for="item in info.data">
       <repos
                    v-bind:title="item.name"
                    v-bind:description="item.description"
                    v-bind:html_url="item.html_url"
                    v-bind:language="item.language"
                    v-bind:stargazers_count="item.stargazers_count"
                    v-bind:open_issues_count="item.open_issues_count"
                    v-bind:contributors_url="item.contributors_url"


            ></repos>
      </div>
      </div>
   </div>

</template>
<script>
    import axios from 'axios';

  export default {
    name: "Home",
        data(){
            return{
                info:'null',
                msg: 'Homepage'
            }
        },


        mounted(){
            this.getData();
            axios.get('./api/repos')
                .then(response => (this.info = response))
            },
        methods: {
            getData(){
                console.log('este fue devuelto por el metodo getData - '+process.env.VUE_APP_URL)
            }
        }
}
</script>
