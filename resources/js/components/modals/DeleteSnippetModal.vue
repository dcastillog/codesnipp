<template>
  <b-modal :id="`delete-snippet-modal-${snippet.id}`">
    <template #modal-header> Delete </template>
    <div class="d-block">
      <b-form> </b-form>
    </div>

    <template #modal-ok>
      <button>Save</button>
    </template>

    <button @click="deleteSnippet(snippet)">Delete</button>
  </b-modal>
</template>

<script>
export default {
  props: {
    snippet: Object,
  },
  methods: {
    deleteSnippet: function (snippet) {
      this.$store.dispatch("deleteSnippet", snippet).then((_) => {
        this.$bvModal.hide(`delete-snippet-modal-${snippet.id}`);
      });
    },
  },
};
</script>