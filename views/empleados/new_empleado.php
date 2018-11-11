<div id="app">
  <v-app id="inspire">
      <v-content>
        <v-toolbar color="teal darken-4" dark>
            <v-toolbar-title>Gasolinera Puma El Triunfo
            </v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-title>
              <img width="800" src="assets/multimedia/imagenes/pumalogo.png" alt="John">
            </v-toolbar-title>

          </v-toolbar><br>
          <v-flex xs12 sm11 offset-sm2>
                  <v-card>
                    <v-toolbar color="red darken-3" dark>
                        <v-toolbar-title>Nuevo Empleado
                        </v-toolbar-title>
                        <v-spacer></v-spacer>
                      </v-toolbar><br>
                   <v-container fluid grid-list-sm>
                     <div>
                        <v-layout row wrap>
                            <v-flex xs8>
                             <form>
                               <v-layout row wrap>
                                 <v-flex xs5>
                                   <v-text-field
                                       :counter="100"
                                       label="Nombre"
                                       required
                                     ></v-text-field>
                                   </v-flex>
                                   <v-flex xs1></v-flex>
                                   <v-flex xs5>
                                     <v-text-field
                                         :counter="100"
                                         label="Apellido"
                                         required
                                       ></v-text-field>
                                    </v-flex>



                                    <v-flex xs5>
                                      <v-text-field
                                          :counter="100"
                                          label="Direccion"
                                          required
                                        ></v-text-field>
                                      </v-flex>
                                      <v-flex xs1></v-flex>
                                      <v-flex xs2>
                                        <v-text-field
                                            :counter="8"
                                            label="Telefono"
                                            type="phone"
                                            required
                                          ></v-text-field>
                                       </v-flex>
                                       <v-flex xs1></v-flex>
                                       <v-flex xs3>
                                         <v-text-field
                                             :counter="100"
                                             label="Cargo"
                                             type="text"
                                             required
                                           ></v-text-field>
                                        </v-flex>


                                        <v-flex xs5>
                                          <v-text-field
                                              :counter="10"
                                              label="DUI"
                                              required
                                            ></v-text-field>
                                          </v-flex>
                                          <v-flex xs1></v-flex>
                                          <v-flex xs5>
                                            <v-text-field
                                                :counter="15"
                                                label="NIT"
                                                required
                                              ></v-text-field>
                                           </v-flex>

                                           <v-flex xs5>
                                             <v-text-field
                                                 :counter="50"
                                                 label="Usuario"
                                                 required
                                               ></v-text-field>
                                             </v-flex>
                                             <v-flex xs1></v-flex>
                                             <v-flex xs5>
                                               <v-text-field
                                                   :counter="50"
                                                   label="Contraseña"
                                                   type="password"
                                                   required
                                                 ></v-text-field>
                                              </v-flex>
                                  </v-layout>

                                  </v-layout>
                                   <v-btn type="submit" color="primary">Guardar</v-btn>
                                   <v-btn type="reset" color="warning">Limpiar</v-btn>
                                </form>


                     </div>
                   </v-container>
                 </v-card>
           </v-flex>
        </v-content>
    </v-app>
</div>
