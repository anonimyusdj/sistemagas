<div id="app">
  <v-app id="inspire">
      <v-content>
        <v-toolbar color="teal darken-4" dark>
            <v-toolbar-title>Gasolinera Puma El Triunfo
            </v-toolbar-title>
            <v-spacer></v-spacer>
              <img width="200" src="assets/multimedia/imagenes/pumalogo.png" alt="Puma">
          </v-toolbar><br>
          <v-flex xs12 sm11 offset-sm1>
                  <v-card>
                    <v-toolbar color="red darken-3" dark>
                        <v-toolbar-title>Nuevo Empleado
                        </v-toolbar-title>
                        <v-spacer></v-spacer>
                      </v-toolbar><br>
                   <v-container fluid grid-list-sm>
                     <div>

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
                          </form>
                     </div>
                   </v-container>

                   <v-card-actions>
                     <v-btn color="primary">Guardar</v-btn>
                     <v-btn  color="warning">Limpiar</v-btn>
                   </v-card-actions>
                 </v-card>
           </v-flex>
        </v-content>
    </v-app>
</div>
