<template>
    <div id="sidebar" :class="{ 'open': open }">
        <slot></slot>
    </div>
</template>

<script type="text/javascript">
  export default {
    name: 'sidebar',
    props: ['open']
  }
</script>

<style media="screen" lang="scss">
  #sidebar {
    height: calc(100% - 64px);
    width: 90%;
    max-width: 300px;
    position: fixed;
    top: 64px;
    right: -90%;
    transition: .3s;

    &.open {
      right: 0;
    }
  }
</style>
