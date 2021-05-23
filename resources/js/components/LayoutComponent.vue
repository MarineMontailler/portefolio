<template>
  <div>
    <header-component></header-component>

    <main class="portefolio-container">
      <div id="about-container">
        <section>
          <article>
            <p>
              Hi, I'm <strong>Marine Montailler</strong> &nbsp;👋&nbsp; <br />
              Web developer based in Lyon,
              <span class="underline">Open to work right now</span>
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
            <a download href="images/CV-marine-montailler.pdf">CV</a>
            •

            <a href="mailto:marinemontailler@gmail.com"
              ><span class="mail-text">marinemontailler@gmail.com</span></a
            >
          </article>
        </section>
      </div>
      <div id="info-container">
        <section>
          <h1>Front-End</h1>
          <p>Javascript • Html • CSS</p>
        </section>
        <section>
          <h1>Librairies - Framework</h1>
          <p>
            ReactJS • VueJS • Gatsby • Bootstrap • Material Design • Vuetify
          </p>
        </section>
        <section>
          <h1>Back-End</h1>
          <p>NodeJS • PHP(Laravel) • API REST • Strapi</p>
        </section>
        <section>
          <h1>Database Management System</h1>
          <p>MySQL • GraphQL langage</p>
        </section>
        <section>
          <h1>Styles</h1>
          <p>Styled Components • CSS Modules • SASS • Responsive Design</p>
        </section>
      </div>
      <div id="demo-container">
        <div class="video-container">
          <div class="video-text-content">
            <section>
              <h1>Event International Theater Festival "Sens-Interdits"</h1>
              <p>
                JAVASCRIPT • ReactJS • Gatsby • HeadLess CMS Strapi • GraphQL •
                SCRUM Method
              </p>
              <p>Gatsby plugins, Gatsby-Node, SEO, Hooks</p>
            </section>
          </div>
          <div class="video-content">
            <img
              src="https://media.giphy.com/media/q6mxEbfCFHCAqKS0vU/giphy.gif"
              alt="site festival"
            />
            <img
              src="images/mobile-festival.png"
              alt="site festival mobile"
              class="img-mobile-responsive"
            />
          </div>
        </div>
        <div class="video-container">
          <div class="video-text-content">
            <section>
              <h1>AERIAL GROUP Society - intranet</h1>
              <p>
                JAVASCRIPT • PHP • VueJS • Laravel • MySQL • Material Design
              </p>
              <p>
                FullCalendar, Vue-Paginate, VueTooltip, Store, Vue-Filter,
                Eloquent ORM, Migration Files
              </p>
            </section>
          </div>
          <div class="video-content"></div>
        </div>
        <div class="video-container">
          <div class="video-text-content">
            <section>
              <h1>Event Wedding Website</h1>
              <p>JAVASCRIPT • ReactJS • NodeJS</p>
            </section>
          </div>
          <div class="video-content">
            <img
              src="https://media.giphy.com/media/dRriRGmS6u0diBNHHg/giphy.gif"
              alt="site mariage"
            />
            <img
              src="images/mobile-mariage.png"
              alt="mariage mobile"
              class="img-mobile-responsive"
            />
          </div>
        </div>
        <div class="video-container">
          <div class="video-text-content">
            <section>
              <h1>Website About Cocktail's Recipe</h1>
              <p>JAVASCRIPT • ReactJS</p>
              <p>Wild Code School Project, SCRUM Method</p>
            </section>
          </div>
          <div class="video-content">
            <img
              src="https://media.giphy.com/media/GA4ijtakvEOwHRhWvG/giphy.gif"
              alt="site cocktail"
            />
            <img
              src="images/mobile-cocktail.png"
              alt="cocktail mobile"
              class="img-mobile-responsive"
            />
          </div>
        </div>
        <div class="video-container">
          <div class="video-text-content">
            <section>
              <h1>School Trombinoscope Website</h1>
              <p>HTML • CSS</p>
              <p>Wild Code School Project</p>
            </section>
          </div>
          <div class="video-content">
            <img
              src="https://media.giphy.com/media/EGVvFtzGjN5XtxHWjo/giphy.gif"
              alt="site trombinoscope"
            />
            <img
              src="images/mobile-trombi.png"
              alt="trombi mobile"
              class="img-mobile-responsive"
            />
          </div>
        </div>
        <div class="video-container">
          <div class="video-text-content">
            <section>
              <h1>This Website</h1>
              <p>JAVASCRIPT • VueJS • PHP • Laravel</p>
              <p>Personal portfolio</p>
            </section>
          </div>
          <div class="video-content">
            <!-- <img src="images/logoM2.png" alt="portfolio" /> -->
          </div>
        </div>
      </div>
      <div id="contact-container">
        <section class="contact-title">Let's get in touch.</section>
        <section class="contact-block">
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
          <div>Site by M.</div>
        </section>
      </div>
    </main>
  </div>
</template>

<script>
import HeaderComponent from "./portfolio/HeaderComponent.vue";

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