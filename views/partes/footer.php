<div id="footer">
  <v-app id="inspire">
    <v-footer
      dark
      height="auto"
      color="teal darken-3"
    >
      <v-card
        flat
        tile
        class="teal darken-3 white--text text-xs-center"
      >
        <v-card-text>
          <v-btn
            v-for="icon in icons"
            :key="icon"
            class="mx-3 white--text"
            icon
          >
            <v-icon size="24px">{{ icon }}</v-icon>
          </v-btn>
        </v-card-text>

        <v-card-text class="white--text pt-0">
          Phasellus feugiat arcu sapien, et iaculis ipsum elementum sit amet. Mauris cursus commodo interdum. Praesent ut risus eget metus luctus accumsan id ultrices nunc. Sed at orci sed massa consectetur dignissim a sit amet dui. Duis commodo vitae velit et faucibus. Morbi vehicula lacinia malesuada. Nulla placerat augue vel ipsum ultrices, cursus iaculis dui sollicitudin. Vestibulum eu ipsum vel diam elementum tempor vel ut orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </v-card-text>

        <v-divider></v-divider>

        <v-card-text class="white--text">
          &copy;2018 — <strong>Gasolinera Puma El Triunfo</strong>
        </v-card-text>
      </v-card>
    </v-footer>
  </v-app>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/vue.js"></script>
<script src="assets/js/vuetify.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/vue-resource.min.js"></script>
</body>
</html>
