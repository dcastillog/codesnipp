<template>
  <div>
    <app-header />
    <slot>
      <transition name="fade">
        <router-view></router-view>
      </transition>
    </slot>
    <app-footer />
  </div>
</template>


<script>
import AppHeader from "./AppHeader";
import AppFooter from "./AppFooter";
export default {
  name: "app-layout",
  components: {
    AppHeader,
    AppFooter,
  },
};
</script>