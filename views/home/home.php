
<div id="app">
  <v-app id="inspire">
      <v-content>
        <v-toolbar color="teal darken-4" dark>
            <v-toolbar-title>Gasolinera Puma El Triunfo
            </v-toolbar-title>
            <v-spacer></v-spacer>
              <img width="200" src="assets/multimedia/imagenes/pumalogo.png" alt="John">
          </v-toolbar>
        <v-container fluid fill-height>
          <v-layout align-center justify-center>
            <v-flex xs12 sm8 md4>
              <v-card class="elevation-12">
                <v-toolbar dark color="red darken-4">
                  <v-toolbar-title align-center justify-center>Bienvenido/a</v-toolbar-title>
                  <v-spacer></v-spacer>
                </v-toolbar>
                <v-card-text>
                  <v-form>
                    <v-text-field prepend-icon="person" name="login" label="Usuario" type="text"></v-text-field>
                    <v-text-field id="password" prepend-icon="lock" name="password" label="Contraseña" type="password"></v-text-field>
                  </v-form>
                </v-card-text>
                <v-card-actions>
                  <v-spacer></v-spacer>
                  <v-btn
                      :loading="loading4"
                      :disabled="loading4"
                      color="primary"
                      @click.native="loader = 'loading4'"
                    >
                      Iniciar sesion
                      <span slot="loader" class="custom-loader">
                        <v-icon light>cached</v-icon>
                      </span>
                    </v-btn>
                </v-card-actions>
              </v-card>
            </v-flex>
          </v-layout>
        </v-container>
      </v-content>
    </v-app>
</div>
