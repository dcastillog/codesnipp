<template>
  <svg
    fill="none"
    :width="width"
    :height="height"
    :stroke="iconColor"
    viewBox="0 0 24 24"
    :icon-name="iconName"
    xmlns="http://www.w3.org/2000/svg"
  >
    <slot />
  </svg>
</template>

<script>
export default {
  props: {
    iconName: {
      type: String,
    },
    width: {
      type: [Number, String],
      default: 20,
    },
    height: {
      type: [Number, String],
    },
    iconColor: {
      type: String,
      default: "currentColor",
    },
  },
};
</script>