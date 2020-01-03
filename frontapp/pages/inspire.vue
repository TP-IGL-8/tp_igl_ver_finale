<template>
    <v-flex class="text-center" color="primary">
      <img
        src="/scolarite.png"
        alt="Vuetify.js"
        class="mb-5"
      >  
    <v-card >
        <v-card-title>
          Liste Des Etudiants
          <v-spacer></v-spacer>
          <v-text-field
            v-model="search"
      
            label="Search"
        single-line
            hide-details
          ></v-text-field>
        </v-card-title>
        <v-data-table
          :headers="headers"
          :items="dataTable"
          :search="search"
        ></v-data-table>
  </v-card>
    

     <div class="affich"> 
       <v-btn color="primary" @click="fetchEtudiants" >Affichier Etudiants.</v-btn>
     </div>
      <blockquote class="blockquote">
          <Footer/>
      </blockquote>
    </v-flex>
</template>

<script>
import Footer from '~/components/Footer.vue'
  export default {
      components: {
      Footer
  },
     data () {
      return {
        search: '',
         headers: [
          { text: 'id', value: 'id' },
          { text: 'Nom', value: 'nom' },
          { text: 'Prenom', value: 'prenom' },
          { text: 'Annee', value: 'annee' },
          { text: 'Group', value: 'grp' },
          { text: 'Matricule', value: 'mat' },
          {text: 'Email',value: 'email'},
          {text: 'Password',value: 'password'}
          ,{text: 'Moyenne',value: 'moy'}
        ],
        dataTable:[{
          id: ''  
        }],
      }
    },    
    methods: {
      fetchEtudiants() {
        this.$axios
      .get('http://127.0.0.1:8000/api/etudiants')
      .then(response => (this.dataTable = response.data)).catch(error => {
      console.log(error)
    })
      }
    },

    
  }
</script>

<style lang="scss" scoped>
.affich{
  margin-top: 10%
}
</style>
