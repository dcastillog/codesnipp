<template>
  <b-modal id="settings-modal">
    <template #modal-header> Settings </template>
    <div class="d-block">
      <b-form>
        <form-group>
          <template #form-label>Github Enterprise Users Only</template>
          <template #form-input
            ><b-form-input
              id="name"
              type="text"
              required
              placeholder="https://github.host/api/v"
            ></b-form-input
          ></template>
        </form-group>
        <form-group>
          <template #form-label>Personal Access Token</template>
          <template #form-input
            ><b-form-input
              id="acesssToken"
              type="text"
              required
              placeholder="Enter Github personal access token"
            ></b-form-input
          ></template>
        </form-group>
      </b-form>
    </div>

    <template #modal-ok>
      <button>Save</button>
    </template>

    <template #modal-cancel>
      <button>Cancel</button>
    </template>
  </b-modal>
</template>

<script>
import FormGroup from "../forms/FormGroup";

export default {
  components: {
    FormGroup,
  },
};
</script>