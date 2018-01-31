<template lang="html">
    <div class="card col mb-5 p-0 d-flex flex-column flex-md-column">
        <img :src="card.image" alt="" class="w-100 card__image" v-if="card.image">

        <div class="col-12 px-5 py-4" v-if="card.text">
            {{ card.text }}
        </div>

        <div class="card__tags d-flex flex-wrap flex-row px-5 pb-4 justify-content-end"  v-if="card.tags">
            <div class="tag position-relative bg-dark-blue color-white pr-3 pl-4 py-1 rounded" v-for="tag of card.tags">
                {{ tag.text }}
            </div>
        </div>

        <!-- For optional extra content -->
        <slot></slot>
    </div>
</template>

<script>
export default {
  props: ['card']
}
</script>

<style lang="css">
</style>
