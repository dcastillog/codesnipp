<template>
  <button @click="click" class="icon-button">
    <icon-base
      :width="width"
      :height="height"
      :icon-name="iconName"
      :icon-color="iconColor"
      ><slot></slot
    ></icon-base>
  </button>
</template>

<style lang="scss">
.icon-button {
  padding: 5px;

  border: none;
  border-radius: 45rem;
  &:focus {
    outline: none;
  }
}
</style>

<script>
import IconBase from "../icons/IconBase";
export default {
  components: {
    IconBase,
  },
  props: {
    iconName: {
      type: String,
    },
    iconColor: {
      type: String,
      default: "currentColor",
    },
    width: {
      type: [Number, String],
      default: 20,
    },
    height: {
      type: [Number, String],
    },
  },
  methods: {
    click: function (e) {
      this.$emit("click", e);
    },
  },
};
</script>