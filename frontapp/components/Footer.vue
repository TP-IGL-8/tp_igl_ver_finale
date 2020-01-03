<template>
  <v-footer
    dark
    padless
  >
    <v-card
      flat
      tile
      class="dark lighten-1 white--text text-center"
    >
      <v-card-text>
        <v-btn
          v-for="icon in icons"
          :key="icon"
          class="mx-4 white--text"
          icon
        >
          <v-icon size="24px">{{ icon }}</v-icon>
        </v-btn>
      </v-card-text>

      <v-card-text class="white--text pt-0">
        Notre plateform c'est une interface entre les etudiants de notre ecoles et les ensignants et aussi les employees de l'administration.
        Donc notre plateform facilite la communication interne de l'ecole Superieure D'Informatique (ESI).
         Les Etudiants peuvent faire des demandes ou visualiser leurs notes quotidianement dans cette plateforme ,ils peuvent aussi deposer leurs travaux.
      </v-card-text>

      <v-divider></v-divider>

      <img
                  align-center
                  width="50"
                  height="80"
              class="VuetifyLogo"
              alt="Vuetify Logo"
              src="esi.png"
            >
      <v-card-text class="white--text">
             {{ new Date().getFullYear() }} — <strong>ESI (Ecole Superieure D'Informatique)</strong>
      </v-card-text>
    </v-card>
  </v-footer>
</template>
<script>
  export default {
    data: () => ({
      icons: [
        'fab fa-facebook',
        'fab fa-twitter',
        'fab fa-google-plus',
        'fab fa-linkedin',
        'fab fa-instagram',
      ],
    }),
  }
</script>