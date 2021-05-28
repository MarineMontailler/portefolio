<template>
  <div id="layout">
    <div class="defileParent">
      <img src="images/line-thin.jpg" alt="flash" class="defile line-one" />
      <img src="images/line-thin2.jpg" alt="flash" class="defile2 line-four" />
      <img src="images/line-thin.jpg" alt="flash" class="defile line-two" />
      <img src="images/line-thin2.jpg" alt="flash" class="defile2 line-five" />
      <img src="images/line-thin.jpg" alt="flash" class="defile line-three" />
    </div>
    <div id="main-layout">
      <header-component></header-component>
      <main class="portefolio-container">
        <section id="about-container">
          <div>
            <p>
              Hi, I'm <strong>Marine Montailler</strong> &nbsp;👋&nbsp; <br />
              Web developer based in Lyon,
              <span class="underline">Open to work right now</span>
            </p>
            <br />
            <p>Having fun with JAVASCRIPT and PHP</p>
          </div>
          <div class="personal-link">
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
          </div>
        </section>
        <section id="skills-container">
          <h2>SKILLS</h2>
          <article>
            <h3>Languages</h3>
            <p>JAVASCRIPT • PHP • HTML • CSS</p>
          </article>
          <article>
            <h3>Frameworks - Librairies</h3>
            <p>
              VueJS • ReactJS • Laravel • nodeJS • Express • Strapi • Gatsby •
              GraphQL • Bootstrap • Material Design • Vuetify
            </p>
          </article>
          <article>
            <h3>Database Management System</h3>
            <p>MySQL</p>
          </article>
          <article>
            <h3>Styles</h3>
            <p>Styled Components • SASS • Responsive Design</p>
          </article>
        </section>
        <section id="demo-container">
          <h2>WORKS</h2>
          <article class="video-container">
            <div class="video-text-content">
              <div>
                <h3>Event International Theater Festival "Sens-Interdits"</h3>
                <p>
                  JAVASCRIPT • ReactJS • Gatsby • HeadLess CMS Strapi • GraphQL
                  • SCRUM Method
                </p>
                <p>
                  Gatsby plugins, Gatsby-Node, SEO, Hooks (deployment in
                  progress)
                </p>
              </div>
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
          </article>
          <article class="video-container">
            <div class="video-text-content">
              <div>
                <h3>AERIAL GROUP Society - intranet</h3>
                <p>
                  JAVASCRIPT • PHP • VueJS • Laravel • MySQL • Material Design
                </p>
                <p>
                  FullCalendar, Vue-Paginate, VueTooltip, Store, Vue-Filter,
                  Eloquent ORM, Migration Files (Private project)
                </p>
              </div>
            </div>
            <div class="video-content"></div>
          </article>
          <article class="video-container">
            <div class="video-text-content">
              <div>
                <a
                  href="https://laura-damien.netlify.app/"
                  title="wedding site"
                  target="_blanck"
                  ><h3>Event Wedding Website</h3></a
                >
                <p>JAVASCRIPT • ReactJS • NodeJS</p>
              </div>
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
          </article>
          <article class="video-container">
            <div class="video-text-content">
              <div>
                <a
                  href="https://shakeit.netlify.app/"
                  title="cocktail site"
                  target="_blanck"
                  ><h3>Website About Cocktail's Recipe</h3></a
                >
                <p>JAVASCRIPT • ReactJS</p>
                <p>Wild Code School Project, SCRUM Method</p>
              </div>
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
          </article>
          <article class="video-container">
            <div class="video-text-content">
              <div>
                <a
                  href="https://wildcodeschool.github.io/Lyon-js-202005-project-Trombino/"
                  title="trombinoscope site"
                  target="_blanck"
                  ><h3>School Trombinoscope Website</h3></a
                >

                <p>HTML • CSS</p>
                <p>Wild Code School Project</p>
              </div>
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
          </article>
          <article class="video-container">
            <div class="video-text-content">
              <div>
                <h3>This Website</h3>
                <p>JAVASCRIPT • VueJS • PHP • Laravel</p>
                <p>Personal portfolio</p>
              </div>
            </div>
            <div class="video-content">
              <!-- <img src="images/logoM2.png" alt="portfolio" /> -->
            </div>
          </article>
        </section>
        <section id="contact-container">
          <article class="contact-title">Let's get in touch.</article>
          <article class="contact-block">
            <div class="contact-block-mail">
              <a href="mailto:marinemontailler@gmail.com">
                <p>Contact me</p>
                <img src="images/Mail-Icon.svg" alt="mail-icon" width="45"
              /></a>
            </div>
          </article>
          <article class="contact-footer">
            <div class="personal-link">
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
            </div>
          </article>
        </section>
      </main>
    </div>
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