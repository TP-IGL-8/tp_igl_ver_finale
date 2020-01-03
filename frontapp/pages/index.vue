<template>
  <v-layout
    column
    justify-center
    align-center
  >
   <Logo/>
    <v-flex
      xs12
      sm8
      md6
    >
      <h1> Ajouter Etudiant</h1>
     
      <div class="container">
         <AjouterEtudiant/>
      </div>  
    </v-flex>
    <Footer/>
  </v-layout>
</template>

<script>
import Logo from '~/components/Logo.vue'
/*import VuetifyLogo from '~/components/VuetifyLogo.vue'*/
import AjouterEtudiant from '~/components/AjouterEtudiant.vue'
import Footer from '~/components/Footer.vue'
export default {
  components: {
    /*Logo,
    VuetifyLogo,*/
    Logo,
    AjouterEtudiant,Footer
  }
}
</script>
