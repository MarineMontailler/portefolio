<template>
  <div>
    <header>
      <div class="left-head">
        <a href="#" title="logo">M.</a>
      </div>

      <nav role="navigation" id="menuToggle">
        <input type="checkbox" v-model="toggleStatus" />
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu">
          <a href="#" @click="checkToggle"><li>About</li></a>
          <a href="#info-container" @click="checkToggle"><li>Info</li></a>
          <a href="#demo-container" @click="checkToggle"><li>Demo</li></a>
          <a href="#contact-container" @click="checkToggle"><li>Contact</li></a>
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