<template>
    <div id="header">
      <slot></slot>
    </div>
</template>

<script type="text/javascript">
  export default {
    name: 'navbar',
    props: ['open'],
    methods: {
      toggleMenu() {
        this.sidebar = !this.sidebar
      }
    }
  }
</script>
