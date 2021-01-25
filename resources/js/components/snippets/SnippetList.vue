<template>
  <div class="snippet-list">
    <snippet-card
      class="snippet-card"
      v-for="snippet in snippets.data"
      :key="snippet.id"
      :snippet="snippet"
    ></snippet-card>
  </div>
</template>

<script>
import { mapGetters } from "vuex";
import SnippetCard from "./SnippetCard";

export default {
  components: {
    SnippetCard,
  },
  mounted() {
    this.$store.dispatch("fetchSnippetsByUser", this.currentUser);
  },
  computed: {
    ...mapGetters(["snippets"]),
  },
};
</script>

<style lang="scss">
.snippet-card {
  cursor: pointer;
  &:hover {
    border: 2px solid #ff6550;
  }
}
</style>