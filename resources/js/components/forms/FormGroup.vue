<template>
  <div v-if="inline">
    <b-row align-v="center" class="pt-3">
      <b-col lg="2">
        <label for="name">
          <slot name="form-label"></slot>
        </label>
      </b-col>

      <b-col>
        <slot name="form-input"></slot>
      </b-col>
    </b-row>
  </div>
  <div v-else>
    <b-row align-v="center" class="p-3">
      <label for="name">
        <slot name="form-label"></slot>
      </label>

      <slot name="form-input"></slot>
    </b-row>
  </div>
</template>

<script>
export default {
  props: {
    inline: {
      type: Boolean,
      default: false,
    },
  },
};
</script>