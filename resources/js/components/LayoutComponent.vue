<template>
  <div>
    <header-component></header-component>

    <main class="portefolio-container">
      <div id="about-container">
        <section>
          <article>
            <p>
              Hi, I'm <strong>Marine Montailler</strong> &nbsp;👋&nbsp; <br />
              Web developer based in Lyon, Open to work right now
            </p>
            <br />
            <p>Having fun with JAVASCRIPT and PHP</p>
          </article>
          <article class="personal-link">
            <a
              href="https://www.linkedin.com/in/marine-montailler-193298185/"
              target="_blank"
              >linkedin</a
            >
            •
            <a href="https://github.com/MarineMontailler" target="_blank"
              >github</a
            >
            •
            <a href="mailto:marinemontailler@gmail.com"
              >marinemontailler@gmail.com</a
            >
            •
            <a download href="images/CV-mai2021.pdf">CV</a>
          </article>
        </section>
      </div>
      <div id="info-container"></div>
      <div id="demo-container"></div>
      <div id="contact-container">
        <section class="contact-title">Let's keep in touch.</section>
        <section>
          <div class="contact-block-mail">
            <a href="mailto:marinemontailler@gmail.com">
              <p>Contact me</p>
              <img
                src="images/Mail-Icon.svg"
                style="filter: reverse"
                width="45"
            /></a>
          </div>
        </section>
        <section class="contact-footer">
          <div>Trained by the Wild Code School</div>
          <div>Site by Marine.</div>
        </section>
      </div>
    </main>
  </div>
</template>

<script>
import HeaderComponent from "./portefolio/HeaderComponent.vue";

export default {
  components: {
    "header-component": HeaderComponent,
  },
  data() {
    return {};
  },
  created() {},
  methods: {
    reload() {
      window.location.href = "./";
    },
  },
};
</script>