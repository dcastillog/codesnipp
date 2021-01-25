<template>
  <b-form>
    <b-modal id="create-snippet-modal" size="lg" hide-footer>
      <template #modal-header> Create a snippet </template>

      <div class="d-block">
        <create-snippet-form></create-snippet-form>
      </div>

      <!-- <template #modal-ok>
        <button>OK</button>
      </template>

      <template #modal-cancel>
        <button>Cancel</button>
      </template> -->
    </b-modal>
  </b-form>
</template>

<script>
import CreateSnippetForm from "../forms/CreateSnippetForm";

export default {
  components: {
    CreateSnippetForm,
  },
};
</script>