<template>
  <div>
    <header>
      <div class="left-head">
        <a href="/" title="logo"><img src="images/logoM2.png" alt="LogoM" /></a>
      </div>

      <nav id="menuToggle">
        <input type="checkbox" v-model="toggleStatus" />
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu">
          <li><a href="#" @click="checkToggle">About</a></li>
          <li><a href="#info-container" @click="checkToggle">Skills</a></li>
          <li><a href="#demo-container" @click="checkToggle">Works</a></li>
          <li>
            <a href="#contact-container" @click="checkToggle">Contact</a>
          </li>
        </ul>
      </nav>
    </header>
  </div>
</template>

<script>
export default {
  components: {},
  data() {
    return {
      toggleStatus: false,
    };
  },
  created() {},
  methods: {
    checkToggle() {
      this.toggleStatus = false;
    },
  },
};
</script>