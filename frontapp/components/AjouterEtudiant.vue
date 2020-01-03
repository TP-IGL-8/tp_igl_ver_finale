<template>
  <v-row align="center">
    <v-form
      ref="form"
      v-model="valid"
      class="ajouform"
    >
    <v-text-field v-model="formdata.matricule" name="mat"
        :rules="nameRules"
         outlined
            shaped
        label="Matricule"
        required
      ></v-text-field>
      <v-text-field
        v-model="formdata.name"
        name="nom"
        :counter="10"
         outlined
            shaped
        :rules="nameRules"
        label="Nom"
        required
      ></v-text-field>
        <v-text-field
          v-model="formdata.prenom"
          name="prenom"
         outlined
            shaped
        :rules="nameRules"
        label="Prenom"
        required
      ></v-text-field>
      <v-text-field
        v-model="formdata.email"
         outlined
            shaped
        :rules="emailRules"
        label="E-mail"
        required
      ></v-text-field>
        <v-text-field
            v-model="formdata.password"
             outlined
            shaped
            :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
            :rules="[rules.required, rules.min]"
            :type="show1 ? 'text' : 'password'"
            name="input-10-1"
            label="Password"
            hint="At least 8 characters"
            counter
            @click:append="show1 = !show1"
          ></v-text-field>
      <v-text-field v-model="formdata.groupe"
      name="grp"
       outlined
            shaped
        :rules="nameRules"
        label="Groupe"
        required
      ></v-text-field>
      <v-select
        v-model="select"
        :items="items"
        @change="recuperer"
        :rules="[v => !!v || 'Item is required']"
        label="Anneé"
        required
      ></v-select>

      <v-checkbox
        v-model="checkbox"
        :rules="[v => !!v || 'You must agree to continue!']"
        label="Do you agree?"
        required
      ></v-checkbox>
  
  <div class="container">
      <v-btn
          color="success"
          class="mr-4"
          @click="validate"
        >
          Validate
        </v-btn>
      <v-btn
          color="error"
          class="mr-4"
          @click="reset"
        >
          Reset Form
        </v-btn>

      <v-btn
        color="warning"
        @click="resetValidation"
      >
        Reset Validation
      </v-btn>
  </div>
    </v-form>
  </v-row>
</template>
<script>
  export default {
    data: () => ({
      formdata: {
      matricule:'', 
      name: '',
      prenom: '',
      email: '',
      password: '',
      groupe: '',

    },
      valid: true,
      name: '',
      nameRules: [
        v => !!v || 'Name is required',
        v => (v && v.length <= 10) || 'Name must be less than 10 characters',
      ],
     show1: false,
     password: '',
      rules: {
          required: value => !!value || 'Required.',
          min: v => v.length >= 8 || 'Min 8 characters',
          emailMatch: () => ('The email and password you entered don\'t match'),
        },
      email: '',
      emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
      ],
      select: null,
      items: [
        '1CP',
        '2CP',
        '1CS',
        '2CS',
        '3CS'
      ],
      checkbox: false,
      lazy: false,
    }),

    methods: {
      recuperer(){

      },
      validate () {
       this.$axios.get('http://127.0.0.1:8000/api/cr',this.formdata)
      .then(function (response) {
       console.log(response);
    })
    .catch(function (error) {
       console.log(error);
    });
        if (this.$refs.form.validate()) {
          this.snackbar = true
        }
      },
      reset () {
        this.$refs.form.reset()
      },
      resetValidation () {
        this.$refs.form.resetValidation()
      },
    },
  }
</script>
<style scoped>
.ajouform{
    margin-left: 10%;
    width:600
}
</style>