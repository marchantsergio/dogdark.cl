<template>
  <Menu/>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Bienvenido a Dogdark</h1>
      <h2>Sitio de Retroinformación Ochentera</h2>
      <router-link to="/blog" class="btn-get-started">BLOG</router-link>
    </div>
  </section><!-- End Hero -->

  <section>
    <div class="container p-4">
      <div class="row p-4">
        <div class="col-12 col-md-6" data-aos="flip-left" data-aos-duration="2000">
          <img src="../assets/img/fujinetdr.png" alt="fujinet" class="img-fluid">
        </div>
        <div class="col-12 col-md-6" data-aos="flip-left" data-aos-duration="2000">
          <div class="text-center"><h2>SERVIDOR FUJINET DOGDARK</h2></div>
          <div>
            <h3 class="text-justify">Contamos con un nuevo servidor para hardware Fujinet, con muchos archivos para que cargues en tu Atari.</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-primary">
    <div class="container">
      <div class="row p-4 text-light">
        <div class="col-12 col-md-3" data-aos="fade-right">
          <img src="../assets/img/logoregion.png" alt="region visual" class="img-fluid">
        </div>
        <div class="col-12 col-md-9" data-aos="fade-left">
          <h2 class="text-center">REGION VISUAL</h2>
          <h3 class="text-justify">
            Un excelente programa en youtube, del cual podrás reir y participar en el chat, donde se habla de temas de actualidad y farandula, Te invitamos que visites su canal, porque te aseguramos que te divertirás.
          </h3>
          <div class="text-center pt-4">
            <a href="https://www.youtube.com/c/regionvisual" target="_blank">
              <img src="../assets/img/youtube.png" alt="youtube" style="width:100px">
              </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import Menu from '../components/Menu.vue'

export default {
  name: 'Home',
  components:{
    Menu
  }
}
</script>
